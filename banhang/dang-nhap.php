<?php 
    require_once __DIR__. "/autoload/autoload.php";

    $data=
[    
    'email'     =>postInput("email"),
    'password'  =>(postInput("password"))    
];

$error=[];
    if($_SERVER["REQUEST_METHOD"]=="POST")
{
        if ($data['email']=='') 
    {
        $error['email']="Email không được để trống!";
    }
    
 
    if ($data['password']=='')
    {
        $error['password']="Mật khẩu không được để trống!";
    }
    if (empty($error)) 
    {
        $is_check=$db->fetchOne("users","email='".$data['email']."' AND password='".md5($data['password'])."'");
        if($is_check!=NULL)
        {
            $_SESSION['name_user']  =$is_check['name'];
            $_SESSION['name_id']    =$is_check['id'];
            echo "<script>location.href='index.php'</script>";
            // echo "<script>alert('Đăng nhập thành công');location.href='index.php'</script>";
        }
        else
        {
            $_SESSION['error']="Sai tên tài khoản hoặc mật khẩu mời bạn đăng nhập lại";
        }
    }
}
?>
<?php require_once __DIR__. "/layouts/header.php";?>

                    <div class="col-md-12 bor" text align="center">
                        <section class="box-main1">
                            <h3 class="title-main"><a href=""> Đăng nhập</a> </h3>
                            <?php if(isset($_SESSION['success'])):?>
                                <div class="alert alert-success">
                                    <strong style="color: #3c763d">Success!</strong><?php echo $_SESSION['success'];unset($_SESSION['success'])?>
                                </div>
                            <?php endif?>

                             <?php if(isset($_SESSION['error'])):?>
                                <div class="alert alert-danger">
                                    <strong style="color: #3c763d">Error!</strong><?php echo $_SESSION['error'];unset($_SESSION['error'])?>
                                </div>
                            <?php endif?>

						 <form action="" method="POST" class="form-horizontal formcustome" role="form" style="margin-top: 20px">
                            	

                                <div class="form-group">
                                    <label class="col-md-2 col-md-offset-2">Email</label>
                                    <div class="col-md-4">
                                        <input type="email" name="email" placeholder="" class="form-control">
                                         <?php if (isset($error['email'])): ?>
                                            <p class="alert alert-warning"><?php echo $error['email']?></p>
                                        <?php endif?>
                                    </div>
                                    </div>

                                <div class="form-group">
                                    <label class="col-md-2 col-md-offset-2">Mật khẩu</label>
                                    <div class="col-md-4">
                                        <input type="password" name="password" placeholder="" class="form-control">
                                        <?php if (isset($error['password'])): ?>
                                            <p class="alert alert-warning"><?php echo $error['password']?></p>
                                        <?php endif?>
                                    </div>
                                    </div>

                                <button type="submit" class="btn btn-primary col-md-2 col-md-offset-5" style="margin-bottom: 20px">ĐĂNG NHẬP </button>


                            </form>
                        </section>

                    </div>

<?php require_once __DIR__. "/layouts/footer.php";?>

           

              