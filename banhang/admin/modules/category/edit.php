<?php
  $open = "category";
   require_once __DIR__. "/../../autoload/autoload.php";


   $id = intval(getInput('id'));

   $EditCategory = $db->fetchID("category",$id);
   if(empty($EditCategory))
   {
    $_SESSION['error'] = "Dữ liệu không tồn tại";
    redirectAdmin("category");
   }

      if ($_SERVER["REQUEST_METHOD"] == "POST") 
      {

       $data =
       [
         "name" => postInput('name'),
         "slug" => to_slug(postInput("name"))
       ];

       $error = [];
        if (postInput('name') == '' )
        {
          $error['name'] = "Mời bạn nhập đầy đủ tên danh mục";
        }

         //error trống có nghĩa ko có lỗi 
        if(empty($error))
        {
          //kiểm tra
          if ($EditCategory['name'] !=$data['name'])
          {
              $isset = $db->fetchOne("category","name ='".$data['name']."'");
              if (count($isset)>0) 
            {
              $_SESSION['error'] = "Tên danh mục đã tồn tại!";
            }
            else
            {
              $id_update = $db->update("category",$data,array("id"=>$id));
              if($id_update > 0)
              {
                  $_SESSION['success']= "Cập nhật thành công";
                  redirectAdmin("category");
              }
              else
              {
                  $_SESSION['error'] ="Dữ liệu không thay đổi";
                  redirectAdmin("category");
              }
          }      

        }
        else{
          $id_update = $db->update("category",$data,array("id"=>$id));
              if($id_update > 0)
              {
                  $_SESSION['success']= "Cập nhật thành công";
                  redirectAdmin("category");
              }
              else
              {
                  $_SESSION['error'] ="Dữ liệu không thay đổi";
                  redirectAdmin("category");
              }
        }
      }
      }
     
?>
<?php
   require_once __DIR__. "/../../layouts/header.php";
?>

            <!-- Page heading NOIDUNG -->
           <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
          <a href="">Danh mục</a>
        </li>        
      </ol>
      <div class="row">
        <div class="col-10">
          <h3>Thêm mới</h3>         
        </div>
      </div>
      <div class="clearfix"></div>
      <!-- thông báo lỗi -->
          <?php require_once __DIR__. "/../../../partials/notification.php";?>
      <form class="form-horizontal" action="" method="POST">
          <div class="form-group">           
            <label for="exampleInputEmail1">Tên danh mục</label>
            <input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" placeholder="Tên danh mục" name="name" value="<?php echo $EditCategory['name']?>">
            <?php if (isset($error['name'])): ?>
              <p class="text-danger"> <?php echo $error['name']?></p>
            <?php endif?>
          </div>
          <!-- <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input class="form-control" id="exampleInputPassword1" type="password" placeholder="Password">
          </div> -->
          
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-success">Lưu</button>
            </div>
          </div>
          
        </form>
    </div>

    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
         
  <?php
   require_once __DIR__. "/../../layouts/footer.php";
?>