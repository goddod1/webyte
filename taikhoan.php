<?php session_start();?>
<?php $connect = new MySQLi('localhost:3306','root', 'root', 'dangkydangnhap');?>

<!DOCTYPE html>
<html>
<head>
    
    <title>taikhoan</title>
    
    <style>
		.popup-wrapper {
			display: none;
			position: fixed;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			background-color: rgba(0, 0, 0, 0.5);
			z-index: 999;
		}
		
		.popup {
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			width: 400px;
			height: 200px;
			background-color: #fff;
			border-radius: 10px;
			padding: 20px;
			box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
			z-index: 1000;
		}
		
		.close {
			position: absolute;
			top: 10px;
			right: 10px;
			cursor: pointer;
		}
	</style>
	<script>
		function openPopup() {
			document.getElementById("popup-wrapper").style.display = "block";
		}
		
		function closePopup() {
			document.getElementById("popup-wrapper").style.display = "none";
		}
	</script>
    

</head>
<body>
<section>Hello: <?=$_SESSION['username'];?> [<a href="logout.php">dangxuat</a>]</section>
<section>
    <form>
        <input type="hidden" name="option" value="showusernames">
        <input type="search" name="keyword"><input type="submit" value="search">
       <a href="#" onclick="openPopup()">CREATE</a>
    </form>
</section>
<div class="popup-wrapper" id="popup-wrapper">
		<div class="popup">
			<span class="close" onclick="closePopup()">&times;</span>
			<form method="post">
      <section>
            <label>name:</label><input type="text" name="username">
        </section>
        <section>
            <label>mamay </label><input type="text" name="mamay">
        </section>
        
        <section>
            <input type="submit" value="create" name="create">
        </section>
      </form>
		</div>
	</div>
    </form>
    
    <?php
if(isset($_POST['username'])){
    $username=$_POST['username'];
    $query="select*from member where username=$username";
    $result=$connect->query($query);
    if(mysqli_num_rows($result)!=0){
        echo "username da co";

    }else{
        $mamay=$_POST['mamay'];
        if(isset($_POST['create'])){
          function rand_string( $length ) {
            $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
            $size = strlen( $chars );
            for( $i = 0; $i < $length; $i++ ) {
            $str .= $chars[ rand( 0, $size - 1 ) ];
             }
            return $str;
            }
            $macode = rand_string( 5 );
            
        }
        

        $query="insert username(username, mamay, macode) values('$username', '$mamay', '$macode')";
        $connect->query($query);
        
        header("Location: ?option=home");
         

    }
}?>
<section>
<?php
$option= 'home';
$query="select*from username where status=1 ORDER BY id DESC ";
if(isset($_GET['keyword'])){
    $query.=" and username like '%".$_GET['keyword']."%' ";//name chua tu khoa day(like)
    $option= 'showusernames$keyword='.$_GET['keyword'];
}   


$page=1;
if(isset($_GET['page'])){
    $page=$_GET['page'];
}

$usernamesperpage=2;
$from=($page-1)*$usernamesperpage;
$totalUsernames=$connect->query($query);
$totalPages=ceil(mysqli_num_rows($totalUsernames)/$usernamesperpage);
$query.=" limit $from,$usernamesperpage";

$result=$connect->query($query);//truy van de thuc thi

?>
       <table>
  <tr>
    <th>name</th>
    <th>ma code</th>
    <th>ma may</th>
    <th>opition</th>
  </tr>
<section class="usernames">


    <?php foreach($result as $item):?>
    
        <section class="username">
  <tr>
    <td><?=$item['username'];?></td>
    <td><?=$item['macode']?></td>
    <td><?=$item['mamay'];?></td>
    <td><a href="?option=home&id=<?=$item['id']?>" class="btn btn-sm btn-danger" onclick="return confirm('are you sure?')"    >delete</a></td>
  </tr>
  <?php
   if(isset($_GET['id'])){
    $id=$_GET['id'];
    $connect->query("delete from username where id=$id");
    header("Location: taikhoan.php"); 
   }
   ?>
   

        </section>
    <?php endforeach;?>
    </table>
</section>
<section class="pages">
    <?php for($i=1; $i<=$totalPages; $i++):?>
        <a href="?option=<?=$option?>&page=<?=$i?>"><?=$i?></a>
    <?php endfor;?>
    <?php
if(empty($_SESSION['username'])){
  header("location:index.php");
}
?>
</section>


       
</body>
</html>