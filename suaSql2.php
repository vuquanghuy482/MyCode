<?php
    $maNhanvien = $_POST["maNhanvien"];
    $tenNhanvien = $_POST["tenNhanvien"];
    $gioiTinh = $_POST["gioiTinh"];
    $diaChi = $_POST["diaChi"];
    $dienThoai = $_POST["dienThoai"];
    $ngaySinh = $_POST["ngaySinh"];
    require "connec.php";

    $sql = "UPDATE nhanvien SET tenNhanvien = '$tenNhanvien' , gioiTinh = '$gioiTinh', diaChi = '$diaChi', dienThoai = '$dienThoai', ngaySinh = '$ngaySinh' WHERE maNhanvien = '$maNhanvien'";
    if ($conn->query($sql) === TRUE)
    {
        echo "update thành công. Bạn " . $tenNhanvien . " đã được thay đổi thông tin.";
        echo "Quay lại trang chủ để xem kết quả <a href = 'bangsql.php'>Quay lại</a>";
    }
    else
    {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close()
?>