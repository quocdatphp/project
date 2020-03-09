<?php
   $open="admin";
   require_once __DIR__. "/../../autoload/autoload.php";

   $id = intval(getInput('id'));

   $Editadmin = $db->fetchID("admin",$id);
   if(empty($Editadmin))
   {
    $_SESSION['error'] = "Dữ liệu không tồn tại";
    redirectAdmin("admin");
   }

      /**
      * danh sách danh mục sản phẩm
      */
      $category = $db->fetchAll("category");
     

      if ($_SERVER["REQUEST_METHOD"] == "POST") 
      {
         $data =
         [
           "name"         =>  postInput('name'),
           "email"        =>  postInput("email"),
           "phone"        =>  postInput("phone"),
           
           "address"      =>  postInput("address"),
           "level"        =>  postInput("level")
         ];
         

       $error = [];
        if (postInput('name') == '' )
        {
          $error['name'] = "Mời bạn nhập đầy đủ tên danh mục";
        }

        if (postInput('email') == '' )
        {
          $error['email'] = "Mời bạn nhập email";
        }
        else
        {
          if(postInput("email")!=$Editadmin['email'])
          {
          $is_check=$db->fetchOne("admin","email='".$data['email']."'");
          if($is_check!=NULL)
          {
            $error['email']="Email đã tồn tại";
          }
        }
        }

        if (postInput('phone') == '' )
        {
          $error['phone'] = "Mời bạn nhập số điện thoại";
        }

        

        if (postInput('address') == '' )
        {
          $error['address'] = "Mời bạn nhập địa chỉ";
        }


        if(postInput('password')!=NULL&&postInput("re_password")!=NULL)
        {
          if(postInput('password')!=postInput('re_password'))
          {
            $error['password']="Mật khẩu thay đổi không khớp";
          }
          else
          {
            $data['password']=MD5(postInput("password"));
          }
        }


        

        //error trống có nghĩa ko có lỗi
        if (empty($error)) 
        {
          
          $id_update = $db->update("admin",$data,array("id"=>$id));
          if($id_update>0)
          {
            
            $_SESSION['success'] = "Cập nhật thành công";
            redirectAdmin("admin");
          }
         else
         {
          $_SESSION['error'] = "Cập nhật thất bại";
          redirectAdmin("admin");
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
          <h7>Thêm mới admin</h7>         
        </div>        
      </ol>
      <div class="clearfix"></div>
       <!-- thông báo lỗi -->
          <?php require_once __DIR__. "/../../../partials/notification.php";?>
          
          <!-- <div class="col-md-10"> chỉnh độ dài --> 
      <form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
          
          <div class="form-group">           
            <label for="inputEmail3" class="col-sm-2 control-label">Họ và tên</label>
            <div class="col-sm-8">
            <input type="text" class="form-control" id="inputEmail3" placeholder="Tên admin" name="name" value="<?php echo $Editadmin['name']?>">
            <?php if (isset($error['name'])): ?>
              <p class="text-danger"> <?php echo $error['name']?></p>
            <?php endif?>
          </div>
          </div>

          <div class="form-group">           
            <label for="exampleInputEmail1">Email</label>
            <input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="quocdatit@gmail.com" name="email" value="<?php echo $Editadmin['email']?>">
            <?php if (isset($error['email'])): ?>
              <p class="text-danger"> <?php echo $error['email']?></p>
            <?php endif?>
          </div>

          <div class="form-group">           
            <label for="exampleInputEmail1">Phone</label>
            <input class="form-control" id="exampleInputEmail1" type="number" aria-describedby="emailHelp" placeholder="0354065353" name="phone" value="<?php echo $Editadmin['phone']?>">
            <?php if (isset($error['phone'])): ?>
              <p class="text-danger"> <?php echo $error['phone']?></p>
            <?php endif?>
          </div>


          <div class="form-group">           
            <label for="exampleInputEmail1">Password</label>
            <input class="form-control" id="exampleInputEmail1" type="password" aria-describedby="emailHelp" placeholder="******" name="password">
            <?php if (isset($error['password'])): ?>
              <p class="text-danger"> <?php echo $error['password']?></p>
            <?php endif?>
          </div>

          <div class="form-group">           
            <label for="exampleInputEmail1">ConfigPassword</label>
            <input class="form-control" id="exampleInputEmail1" type="password" aria-describedby="emailHelp" placeholder="******" name="re_password" >
            <?php if (isset($error['re_password'])): ?>
              <p class="text-danger"> <?php echo $error['re_password']?></p>
            <?php endif?>
          </div>

          <div class="form-group">           
            <label for="exampleInputEmail1">Address</label>
            <input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" placeholder="Barcelona" name="address" value="<?php echo $Editadmin['address']?>">
            <?php if (isset($error['address'])): ?>
              <p class="text-danger"> <?php echo $error['address']?></p>
            <?php endif?>
          </div>

          <div class="form-group">           
            <label for="exampleInputEmail1">Level</label>
            <select class="form-control" name="level">
              <option value="1" <?php echo isset($Editadmin['level']) && $Editadmin['level'] ==1 ?"selected = 'selected'":'' ?>>CTV</option>
              <option value="2" <?php echo isset($Editadmin['level']) && $Editadmin['level'] ==2 ?"selected = 'selected'":'' ?>>Admin</option>              
            </select>
            <?php if (isset($error['level'])): ?>
              <p class="text-danger"> <?php echo $error['level']?></p>
            <?php endif?>
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