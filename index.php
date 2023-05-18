
<!DOCTYPE html>
<html>
<head>
    <title>signinregister</title>
    <link rel="stylesheet" type="text/css" href="css/css.css"> 
</head>
<body class="wrapper">
    <header>
    hello
    </header>
    <nav>
    <a href="?option=signin">signin</a>
    <a href="?option=register">register</a>
    </nav>
    <?php
if(isset($_GET['option'])){
            switch($_GET['option']){
                case 'signin':
                    header("location: login.php");
                break;
                case 'register':
                    header("location: register.php");
            }
        }
?>

   
</body>
</html>