<?php
  $open = "blog";
   require_once __DIR__. "/../../autoload/autoload.php";


   $id = intval(getInput('id'));



   $Editblog = $db->fetchID("blog",$id);
   if(empty($Editblog))
   {
    $_SESSION['error'] = "Dữ liệu không tồn tại";
    redirectAdmin("blog");
   }
   // kiểm tra xem danh mục có sản phẩm chưa

   $num = $db->delete("blog", $id);
   if($num>0)
   {
      $_SESSION['success'] = "Xóa thành công";
      redirectAdmin("blog");
   }

   else
   {
      $_SESSION['error'] = "Xóa thất bại";
      redirectAdmin("blog");
    
   }
   
?>