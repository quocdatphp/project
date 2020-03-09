<?php

//echo 'session-id = '. $_SESSION['name_id']; exit;

//if (isset($_SESSION['name_id'])!='') 
//{
   require_once __DIR__. "/autoload/autoload.php";
   
   $category = $db->fetchAll("category");
   
?>
<?php
   require_once __DIR__. "/layouts/header.php";
?>

            <!-- Page heading NOIDUNG -->
           <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Blank Page</li>
      </ol>
      <div class="row">
        <div class="col-12">
          <h3>Xin chào các bạn đã đến với trang admin</h3>
          
        </div>
        <!-- <?php var_dump($category); ?> -->
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
         
  <?php
   require_once __DIR__. "/layouts/footer.php";

//} else {
//  header("location:../login/index.php");
//}
?>