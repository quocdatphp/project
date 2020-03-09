<?php
  $open = "blog";
   require_once __DIR__. "/../../autoload/autoload.php";

      /**
      * danh sách danh mục sản phẩm
      */
       $id = intval(getInput('id'));


       $Editblog = $db->fetchID("blog",$id);
       if(empty($Editblog))
       {
        $_SESSION['error'] = "Dữ liệu không tồn tại";
        redirectAdmin("blog");
       }


      $blog = $db->fetchAll("blog");
      if ($_SERVER["REQUEST_METHOD"] == "POST") 
      {

         $data =
         [
           "name"         => postInput('name'),
           "content"      =>postInput("content")
         ];

       $error = [];
        if (postInput('name') == '' )
        {
          $error['name'] = "Mời bạn nhập đầy đủ tên danh mục";
        }


        if (postInput('content') == '' )
        {
          $error['content'] = "Mời bạn nhập nội dung sản phẩm";
        }


        if(!isset($_FILES['thunbar']))
        {
          $error['thunbar'] = "Mời bạn chọn hình ảnh";
        }


        //error trống có nghĩa ko có lỗi
        if (empty($error)) 
        {
          if (isset($_FILES['thunbar'])) 
          {
            $file_name  = $_FILES['thunbar']['name'];
            $file_tmp   = $_FILES['thunbar']['tmp_name'];
            $file_type  = $_FILES['thunbar']['type'];
            $file_erro  = $_FILES['thunbar']['error'];

            if ($file_erro == 0) 
            {
              $part =ROOT."blog/";
              $data['thunbar'] = $file_name;
            }
          }

          $update = $db->update("blog",$data,array("id"=>$id));
          if($update>0)
          {
            move_uploaded_file($file_tmp, $part.$file_name);
            $_SESSION['success'] = "Cập nhật thành công";
            redirectAdmin("blog");
          }
         else
         {
          $_SESSION['error'] = "Cập nhật thất bại";
          redirectAdmin("blog");
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
        <div class="col-10">
          <h7>Sửa bài viết</h7>         
        </div>        
      </ol>
      <div class="clearfix"></div>
       <!-- thông báo lỗi -->
          <?php require_once __DIR__. "/../../../partials/notification.php";?>
          
          <!-- <div class="col-md-10"> chỉnh độ dài --> 
      <form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
          <div class="form-group">           
            <label for="exampleInputEmail1">Danh mục blog</label>
            
          </div>

          <div class="form-group">           
            <label for="exampleInputEmail1">Tên blog</label>
            <input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" placeholder="" name="name" value="<?php echo $Editblog['name']?>">
            <?php if (isset($error['name'])): ?>
              <p class="text-danger"> <?php echo $error['name']?></p>
            <?php endif?>
          </div>


           <div class="form-group">   
         <label for="inputEmail3" class="col-sm-2 control-label">Hình ảnh</label>
            <div class="col-sm-4">
              <input type="file" class="form-control" id="inputEmail3" name="thunbar">
              <?php if (isset($error['thunbar'])): ?>
              <p class="text-danger"> <?php echo $error['thunbar']?></p>
            <?php endif?>
            <img src="<?php echo uploads()?>blog/<?php echo $Editblog['thunbar']?>" width="50px" height="50px">
            </div>    


               <div class="form-group">           
            <label for="exampleInputEmail1" class="col-sm-2 control-label">Nội dung</label>
            <div class="col-sm-8">
              <textarea class="form-control" name="content" rows="4"><?php echo $Editblog['content']?></textarea>
            <?php if (isset($error['content'])): ?>
              <p class="text-danger"> <?php echo $error['content']?></p>
            <?php endif?>
          </div>
        </div>  
          </div>

          <!-- <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">giá sản phẩm</label>
            <div class="col-sm-3">
              <input type="number" class="form-control" id="inputEmail3" placeholder="10%" name="sale" value="0">
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