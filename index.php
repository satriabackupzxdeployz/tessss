<?php include "config.php"; ?>
<!DOCTYPE html>
<html>
<head><title>Login DEWA V9999</title></head>
<body>
<h2>LOGIN DEWA V9999</h2>
<form method="post">
<input name="user" placeholder="Username"><br>
<input name="pass" type="password" placeholder="Password"><br>
<button name="login">LOGIN</button>
</form>

<?php
if(isset($_POST['login'])){
    $u=$_POST['user'];
    $p=$_POST['pass'];

    $q=mysqli_query($conn,"SELECT * FROM users WHERE username='$u' AND password='$p'");
    if(mysqli_num_rows($q)>0){
        $_SESSION['user']=$u;
        header("Location: dashboard.php");
    } else {
        echo "LOGIN GAGAL";
    }
}
?>
</body>
</html>