<?php session_start();?>
<?php $connect = new MySQLi('localhost:3306','root', 'root', 'dangkydangnhap');?>
<?php // Include qrcode.php file.
include "qrcode.php";
if(isset($_POST['username'])){
    $username=$_POST['username'];
    $query="select*from member where username=$username";
    $result=$connect->query($query);
    if(mysqli_num_rows($result)!=0){
        echo "ten dangw nhap khong co san, moi chon 1 ten dang nhap khac";

    }else{
        $password=md5($_POST['password']);
        $fullname=$_POST['fullname'];
        $mobile=$_POST['mobile'];
        $address=$_POST['address'];
        $email=$_POST['email'];
        $query="insert member(username, password, fullname, mobile, address, email, macode, mamay) values('$username', '$password', '$fullname', '$mobile', '$address', '$email', 'kkukuj', '$mamay')";
        $connect->query($query);
        
       

// Create object
$qc = new QRCODE();
// Create Text Code
$qc->TEXT("$username");
// Save QR Code
$qc->QRCODE(400,"$username.png");
$qr=$qc;
echo"<script>alert('ban da dang ky thanh cong tai khoan, chung toi se lien he som den ban'); location=' login.php';</script>";

    }
}?>
<h1>dang ky tai khoan</h1>
<section>
    <form method="post">
        <section>
            <label>username:</label><input type="text" name="username">
        </section>
        <section>
            <label>Password: </label><input type="password" name="password">
        </section>
        <section>
        <label>Re-Password</label><input type="password" name="repassword">
        </section>
        <section>
            <label>fullname:</label><input type="text" name="fullname">
        </section>
        <section>
            <labe>mobile:</label><input type="tel" name="mobile">
        </section>
        <section>
            <label>address:</label><input type="textarea" name="address">
        </section>
        <section>
            <label>email:</label><input type="email" name="email">
        </section>
        <section>
            <label>macode:
            
        </section>
        <section>
            <label>mamay: </label><input type="text" name="mamay">
        </section>
        
        <section>
            <input type="submit" name="dangky">
        </section>
    </form>
</section>