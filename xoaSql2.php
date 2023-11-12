<?php
    $maNhanvien = $_POST["maNhanvien"];
    $tenNhanvien = $_POST["tenNhanvien"];

    require "connec.php";

    $sql = "DELETE FROM nhanvien WHERE maNhanvien = '$maNhanvien'";
    if ($conn->query($sql) === TRUE)
    {
        echo "$tenNhanvien đã bị xa thải!!!.</br>";
        echo "Quay lại bảng để xem kết quả <a href = 'bangsql.php'>Quay lại</a>";
    }
    else
    {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close()
?>