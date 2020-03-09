<?php
    $open = "transaction";
   require_once __DIR__. "/../../autoload/autoload.php";
   if (isset($_GET['page'])) 
   {
     $p = $_GET['page'];
   }
   else
   {
    $p=1;
   }


   $sql = "SELECT transaction.* , users.name as nameuser , users.phone as phoneuser FROM transaction LEFT JOIN users ON users.id = transaction.users_id ORDER BY ID DESC";
   $transaction=$db->fetchJone('transaction',$sql,$p,10,true);

   if (isset($transaction['page'])) 
   {
     $sotrang = $transaction['page'];
     unset($transaction['page']);
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
          <i class="fa fa-table"></i> Danh sách đơn hàng
          </div>
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
                  <th>Phone</th>
                  <td>Status</td>
                  <th>Action</th>
                </tr>
              </thead>

      
              <tbody>
                <?php $stt =1; foreach ($transaction as $item): ?>                 
                <tr>
                  <td><?php echo $stt?></td>
                  <td><?php echo $item['nameuser']?></td>
                  <td><?php echo $item['phoneuser']?></td>
                  <td>
                   <!--  <?php if ($item['status'] == 0): ?>
                      <a href="" class="btn btn-xs btn-danger">Chưa xử lí</a>
                    <?php else:?>
                      <a href="" class="btn btn-xs btn-info">Đã xử lí</a>
                    <?php endif?>   -->
                    <a href="status.php?id=<?php echo $item['id']?>" class="btn btn-xs <?php echo $item['status']==0 ? 'btn-danger':'btn-info'?>"><?php echo $item['status'] == 0 ? 'Chưa xử lí' : 'Đã xử lí' ?></a>

                  </td>
                  <td>
                      
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