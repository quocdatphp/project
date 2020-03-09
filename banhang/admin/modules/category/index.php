<?php
    $open = "category";
   require_once __DIR__. "/../../autoload/autoload.php";


   $category = $db->fetchAll("category");
        
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
                  <th>Slug</th>
                  <th>Home</th>
                  <th>Created</th>
                  <th>Action</th>                
                </tr>
              </thead>

              <tbody>
                <?php $stt =1; foreach ($category as $item): ?>                 
                <tr>
                  <td><?php echo $stt?></td>
                  <td><?php echo $item['name']?></td>
                  <td><?php echo $item['slug']?></td>
                  <td>
                    <a href="home.php?id=<?php echo $item['id']?>" class="btn btn-xs <?php echo $item['home']==1?'btn-info':'btn-default'?>">
                     <?php echo $item['home']==1?'Hiển thị':'Không'?>
                        
                      </a>
                  </td>
                  <td><?php echo $item['created_at']?></td>
                  <td>
                      <a class="btn btn-xs btn-info" href="edit.php?id=<?php echo $item['id']?>"><i class="fa fa-edit"></i> Sửa</a>
                      <a class="btn btn-xs btn-danger" href="delete.php?id=<?php echo $item['id']?>"><i class="fa fa-times"></i> Xóa</a>                      
                  </td>                  
                </tr>
                 <?php $stt++ ;endforeach?>
              </tbody>
            </table>

                <div class="pull-right">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
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