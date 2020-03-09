<?php
  $open = "category";
   require_once __DIR__. "/../../autoload/autoload.php";

      /**
      * danh sách danh mục sản phẩm
      */
      $category = $db->fetchAll("category");

      if ($_SERVER["REQUEST_METHOD"] == "POST") 
      {

         $data =
         [
           "name"         => postInput('name'),
           "slug"         => to_slug(postInput("name")),
           "category_id"  =>postInput("category_id"),
           "price"        =>postInput("price"),
           "number"       =>postInput("number"),
           "content"      =>postInput("content")
         ];

       $error = [];
        if (postInput('name') == '' )
        {
          $error['name'] = "Mời bạn nhập đầy đủ tên danh mục";
        }

        if (postInput('category_id') == '' )
        {
          $error['category_id'] = "Mời bạn chọn tên danh mục";
        }

        if (postInput('price') == '' )
        {
          $error['price'] = "Mời bạn nhập giá sản phẩm";
        }

        if (postInput('content') == '' )
        {
          $error['content'] = "Mời bạn nhập nội dung sản phẩm";
        }

        if (postInput('number') == '' )
        {
          $error['number'] = "Mời bạn nhập số lượng sản phẩm";
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
              $part =ROOT."product/";
              $data['thunbar'] = $file_name;
            }
          }

          $id_insert = $db->insert("product",$data);
          if($id_insert)
          {
            move_uploaded_file($file_tmp, $part.$file_name);
            $_SESSION['success'] = "Thêm mới thành công";
            redirectAdmin("product");
          }
         else
         {
          $_SESSION['error'] = "Thêm mới thất bại";
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
          <h7>Thêm mới sản phẩm</h7>         
        </div>        
      </ol>
      <div class="clearfix"></div>
       <!-- thông báo lỗi -->
          <?php require_once __DIR__. "/../../../partials/notification.php";?>
          

      <form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <label for="exampleInputEmail1">Danh mục sản phẩm</label>
            <select class="form-control col-sm-12" name="category_id">
              <option value="">Mời bạn chọn danh mục sản phẩm</option>
              <?php foreach ($category as $item): ?>
              <option value="<?php echo $item['id']?>"><?php echo $item['name']?></option>  
              <?php endforeach?>
            </select>
            <?php if (isset($error['category_id'])): ?>
              <p class="text-danger"> <?php echo $error['category_id']?></p>
            <?php endif?>
          </div>
          <div class="form-group">           
            <label for="exampleInputEmail1">Tên sản phẩm</label>
            <input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" placeholder="Tên danh mục" name="name">
            <?php if (isset($error['name'])): ?>
              <p class="text-danger"> <?php echo $error['name']?></p>
            <?php endif?>
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Giá sản phẩm</label>
            <input class="form-control" id="exampleInputEmail1" type="number" aria-describedby="emailHelp" placeholder="9.000.000" name="price">
            <?php if (isset($error['price'])): ?>
              <p class="text-danger"> <?php echo $error['price']?></p>
            <?php endif?>
          </div>

          <div class="form-group">           
            <label for="exampleInputEmail1">Số lượng</label>
            <input class="form-control" id="exampleInputEmail1" type="number" aria-describedby="emailHelp" placeholder="100" name="number">
            <?php if (isset($error['number'])): ?>
              <p class="text-danger"> <?php echo $error['number']?></p>
            <?php endif?>
          </div>

          <div class="form-group">           
            <label for="exampleInputEmail1">Giảm giá</label>
            <input class="form-control" id="exampleInputEmail1" type="number" aria-describedby="emailHelp" placeholder="10%" name="sale">  

            <label for="inputEmail3" class="col-sm-2 control-label">Hình ảnh</label>
            <div class="col-sm-5">
              <input type="file" class="form-control" id="inputEmail3" name="thunbar">
              <?php if (isset($error['thunbar'])): ?>
              <p class="text-danger"> <?php echo $error['thunbar']?></p>
            <?php endif?>
            </div>    

            <div class="form-group">           
            <label for="exampleInputEmail1" class="col-sm-2 control-label">Nội dung</label>
            <div class="col-sm-8">
              <textarea class="form-control" name="content" rows="4"></textarea>
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