<?php session_start();?>
<?php $connect = new MySQLi('localhost:3306','root', 'root', 'dangkydangnhap');?>
<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>
<body>
    <form action="login.php" method="post">
        <label>username: </label><input type="text" name="username">
        <label>Password: </label><input type="password" name="password">
        Ghi nhớ đăng nhập: <input type="checkbox" name="remember_me" id="remember_me" value="1" /><br />
        <input type="submit" name="btnLogin" value="dangnhap">
        <?php
if(isset($_POST['btnLogin'])){
    $username=$_POST['username'];
    $password=md5($_POST['password']);
    $query="select*from member where username='$username' and password='$password'";
    $result = $connect->query($query);
    $result=mysqli_fetch_array($result);
    if(is_array($result)){
        if($result['status']==0){
            echo "<br> tai khoan cua ban dang bi khoa";
        }else{
        $_SESSION['username']=$result['username'];
        $_SESSION['password']=$result['password'];
        $_SESSION['fullname']=$result['fullname'];
        $_SESSION['mobile']=$result['mobile'];
        $_SESSION['address']=$result['address'];
        $_SESSION['email']=$result['email'];
        $_SESSION['id']=$result['id'];
        $_SESSION['macode']=$result['macode'];
        $_SESSION['mamay']=$result['mamay'];
        
    }
    }else{
        echo"tai khoan khong dung";
    }
}
if(isset($_SESSION['username'])){
    header("location:taikhoan.php");
}
?>
 <?php
    
    if(isset($_POST['btnLogin'])) {
        
        
        $remember_me = isset($_POST['remember_me']) ? 1 : 0;
        if(isset($_POST['username'])){

            
            if($remember_me == 1) {
                
                setcookie('is_logged', true, time()+ 3600, '/');

                
                setcookie("username_logged", $_POST['username'], time()+3600, "/","", 0);
            }
        } 
    }
    ?>


   
    </form>
</body>
</html>