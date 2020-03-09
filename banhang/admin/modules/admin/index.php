<?php
    $open = "admin";
   require_once __DIR__. "/../../autoload/autoload.php";
   if (isset($_GET['page'])) 
   {
     $p = $_GET['page'];
   }
   else
   {
    $p=1;
   }
   $sql = "SELECT admin.* FROM admin ORDER BY ID DESC";
   $admin=$db->fetchJone('admin',$sql,$p,2,true);

   if (isset($admin['page'])) 
   {
     $sotrang = $admin['page'];
     unset($admin['page']);
   }

   // $product = $db->fetchAll("product");
        
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
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Danh sách </li>
      </ol>
      
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Danh sách danh mục
          <a href="add.php" class="btn btn-success">Thêm mới</a></div>
          <div class="clearfix"></div>
          
          <!-- thông báo lỗi -->
          <?php require_once __DIR__. "/../../../partials/notification.php";?>

        <div class="card-body">
          <div class="table-responsive">

            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>STT</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Action</th>                
                </tr>
              </thead>

      
              <tbody>
                <?php $stt =1; foreach ($admin as $item): ?>                 
                <tr>
                  <td><?php echo $stt?></td>
                  <td><?php echo $item['name']?></td>
                  <td><?php echo $item['email']?></td>
                  <td><?php echo $item['phone']?></td>
                 
                                
                  
                  <td>
                      <a class="btn btn-xs btn-info" href="edit.php?id=<?php echo $item['id']?>"><i class="fa fa-edit"></i> Sửa</a>
                      <a class="btn btn-xs btn-danger" href="delete.php?id=<?php echo $item['id']?>"><i class="fa fa-times"></i> Xóa</a>                      
                  </td>                  
                </tr>
                 <?php $stt++ ;endforeach?>
              </tbody>
            </table>

            <div class="pull-right">
             <nav aria-label="Page navigation">
            <ul class="pagination">
              <li>
                <a href="#" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                </a>
              </li>
              
              <?php for ($i=1; $i <= $sotrang ; $i++):?>
                <?php 
                if (isset($_GET['page'])) 
                {
                  $p =$_GET['page'];
                }
                else
              { 
                $p=1;
              }
              ?>
              <li class="<?php echo ($i==$p)? 'active':''?>">
                <a href="?page=<?php echo $i;?>"><?php echo $i;?>|</a>
              </li>
              <?php endfor; ?>
              <li>
                <a href="#" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span></a>
              </li>
            </ul>
            </nav>
          </div>
          </div>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
         
<?php
   require_once __DIR__. "/../../layouts/footer.php";
?>