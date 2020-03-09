<?php 

require_once __DIR__. "/autoload/autoload.php";
// if (isset($_SESSION['name_id'])) 
// {
//     echo "<script>alert('Bạn đã có tài khoản bạn không được vào đây');location.href='index.php'</script>";
// }
$data=
[
    'name'      =>postInput("name"),
    'email'     =>postInput("email"),
    'phone'     =>postInput("phone"),
    'content'   =>postInput("content")
];
$error=[];

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    
    if ($data['name']=='') 
    {
        $error['name']="Tên không được để trống!";
    }

    if ($data['email']=='') 
    {
        $error['email']="Email không được để trống!";
    }
    else
    {
        $is_check=$db->fetchOne("contact","email='".$data['email']."'");
        if($is_check!=NULL)
        {
            $error['email']="Email đã tồn tại mời bạn nhập địa chỉ email khác";
        }
    }
    

    if ($data['phone']=='') 
    {
        $error['phone']="Số điện thoại không được để trống!";
    }

    if ($data['content']=='') 
    {
        $error['content']="Mời bạn nhập nội dung";
    }

    // kiểm tra mảng error
    if (empty($error)) 
    {
      $idinsert=$db->insert("contact",$data);
      {
        // $_SESSION['success']="Cảm ơn đóng góp của bạn về chúng tôi";
        // header("location: index.php");
        echo "<script>alert('Cảm ơn đóng góp của bạn về chúng tôi');location:index.php'</script>";
      }
    }
}

?>

<?php require_once __DIR__. "/layouts/header.php";?>

                    <div class="col-md-12 bor" text align="center">
                        <section class="box-main1">
                            <h3 class="title-main"><a href=""> Liên hệ với chúng tôi</a> </h3>
                            <form action="" method="POST" class="form-horizontal formcustome" role="form" style="margin-top: 20px">
                                <div class="form-group">
                                    <label class="col-md-3 col-md-offset-1">Tên thành viên</label>
                                    <div class="col-md-5">
                                        <input type="text" name="name" placeholder="" class="form-control" value="<?php echo $data['name']?>">
                                        <?php if (isset($error['name'])): ?>
                                            <p class="alert alert-warning"><?php echo $error['name']?></p>
                                        <?php endif?>       
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 col-md-offset-1">Email</label>
                                    <div class="col-md-5">
                                        <input type="email" name="email" placeholder="" class="form-control" value="<?php echo $data['email']?>">
                                        <?php if (isset($error['email'])): ?>
                                            <p class="alert alert-warning"><?php echo $error['email']?></p>
                                        <?php endif?>
                                    </div>
                                    </div>


                                <div class="form-group">
                                    <label class="col-md-3 col-md-offset-1">Số điện thoại</label>
                                    <div class="col-md-5">
                                        <input type="number" name="phone" placeholder="" class="form-control" value="<?php echo $data['phone']?>">
                                        <?php if (isset($error['phone'])): ?>
                                            <p class="alert alert-warning"><?php echo $error['phone']?></p>
                                        <?php endif?>
                                    </div>
                                    </div>
                                
                                <div class="form-group">
                                    <label class="col-md-3 col-md-offset-1">Nội dung</label>
                                    <div class="col-md-5">
                                        <input type="text" name="content" placeholder="" class="form-control" value="<?php echo $data['content']?>">
                                        <?php if (isset($error['content'])): ?>
                                            <p class="alert alert-warning"><?php echo $error['content']?></p>
                                        <?php endif?>
                                    </div>
                                    </div>

                                <button type="submit" class="btn btn-primary col-md-2 col-md-offset-5" style="margin-bottom: 20px">Gửi liên hệ của bạn</button>
                            </form>

                        </section>

                    </div>

<?php require_once __DIR__. "/layouts/footer.php";?>
           

              