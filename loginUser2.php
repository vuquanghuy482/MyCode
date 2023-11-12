<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();
        // Đăng nhập
        if (isset($_POST["dangnhap"]))
        {
            require "connec.php";

            $userid = $_POST["username"];
            $password = $_POST["password"];

            $sql = "SELECT idDangnhap OR email,Passwords FROM useres WHERE idDangnhap = '$userid' OR email = '$userid' and Passwords = '$password'";
            $result = $conn->query($sql);
            if($result-> num_rows == 0)
            {
                echo "Tên đang nhập sai hoặc không tồn tại <br>";
                echo 'Quay về trang chủ <a href="home.php">Quay lại</a>';
                exit;
            }
        }
        $_SESSION['username'] = $userid;
        echo "Xin chào " . $userid . " bạn đã đăng nhập thành công <br>";
        echo "Xem bảng thông tin nhân viên <a href = 'bangsql.php'><button>Xem bảng</button></a> </br>";
        echo 'Quay về trang chủ <a href="logoutUser.php">Quay lại</a>';
        die();
    ?>
</body>
</html>