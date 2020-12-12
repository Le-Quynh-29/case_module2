<!DOCTYPE html>
<html lang="en">

<head>
    <title>Trang đăng nhập</title>
    <meta charset="utf-8">
    <style>
        form{
            background-image: url("https://i.pinimg.com/originals/26/74/54/2674543853349438355331adb6e89eb5.jpg");
        }
    </style>
</head>
<body>
<header style="background: black;height: 75px">
    <div>
        <img class="mb-4" src="https://chiasetainguyen.com/upload-file/logo-lop-phong-cach-galaxy5b766c6caf390.jpg" alt="" width="150" height="75" style="position:absolute">
        <h1 style="color: white;position: absolute;left: 35%">Xin chao cac ban den voi 12A6</h1>
    </div>
</header>
<form method="POST" action="login.php" style="position: absolute;left: 10%;top:100px;display: block;width: 400px;height: 300px;background: white">
        <h2 style="position: absolute;left: 25%; top:50px; color: deeppink">Log in</h2>
        <table style="position: absolute;top: 100px">
            <tr>
                <td>Username</td>
                <td><input type="text" name="username" size="30"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" size="30"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Log in" style="position: absolute; left: 35%"></td>
            </tr>
        </table>
</form>
<?php
$arr = array(["admin","admin"],["quynh",'123456'],["root",'1@QuynhLe1']);
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (!empty($_POST['username']) && (!empty($_POST['password']))) {
        $user = $_POST["username"];
        $pass = $_POST["password"];
        $login = false;
        foreach ($arr as $value) {
            if ($user == $value[0] && $pass == $value[1]) {
                header("location: index.php");
                $login = true;
                break;
            }

        }
        if ($login) {
            echo "dang nhap thanh cong";
        } else {
            echo "dang nhap sai";
        }
    }
    else{
        echo " ban chua nhap gi";
    }
}
?>
<form style="position: absolute;left: 45%;display: block;width: 500px;height: 400px;top: 100px">

</form>
</body>
</html>
