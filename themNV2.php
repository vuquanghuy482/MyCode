<?php
    $tenNhanvien = $_POST["tenNhanvien"];
    $gioiTinh = $_POST["gioiTinh"];
    $diaChi = $_POST["diaChi"];
    $dienThoai = $_POST["dienThoai"];
    $ngaySinh = $_POST["ngaySinh"];

    require "connec.php";

    $sql = "INSERT INTO nhanvien (tenNhanvien, gioiTinh, diaChi, dienThoai, ngaySinh) VALUES ('$tenNhanvien', '$gioiTinh', '$diaChi', '$dienThoai', '$ngaySinh')";
    if ($conn->query($sql) === TRUE)
    {
        echo $tenNhanvien . " được thêm thành công.";
        echo "Quay lại trang chủ để xem kết quả <a href = 'bangsql.php'>Quay lại</a>";
    }
    else
    {
        echo "Error" . $sql . "</br>" . $conn->error;
    }
    $conn->close();
?>