<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border: 2px solid blue;
            border-collapse: collapse;
        }
        th, td{
            border: 1px solid blue;
            padding: 5px;
            text-align: center;
        }
        th{
            background-color: #64ede4;
            color: while;
        }
        .odd{
            background-color: lightgreen;
        }
        .even{
            background-color: lightyellow;
        }
        tr:hover{
            background: red;
            color: while;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <td>Mã nhân viên</td>
            <td>Tên nhân viên</td>
            <td>Giới tính</td>
            <td>Địa chỉ</td>
            <td>Điện thoại</td>
            <td>Ngày sinh</td>
        </tr>
        <?php
        $maNhanvien = $_GET["maNhanvien"];
        $tenNhanvien = $_GET["tenNhanvien"];
    require "connec.php";
    mysqli_set_charset($conn, 'UTF8');
    $sql = "SELECT * FROM nhanvien WHERE maNhanvien = '$maNhanvien' and tenNhanvien = '$tenNhanvien'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0)
    {
        while($row = $result->fetch_assoc())
        {
            $maNhanvien = $row["maNhanvien"];
            $tenNhanvien = $row["tenNhanvien"];
            $gioiTinh = $row["gioiTinh"];
            $diaChi = $row["diaChi"];
            $dienThoai = $row["dienThoai"];
            $ngaySinh = $row["ngaySinh"];

            echo "<tr><td>$maNhanvien</td>";
            echo "<td>$tenNhanvien</td>";
            echo "<td>$gioiTinh</td>";
            echo "<td>$diaChi</td>";
            echo "<td>$dienThoai</td>";
            echo "<td>$ngaySinh</td></tr>";
        }
    }
    else{
        echo "No staff in database";
    }
    $conn->query($sql);
    $conn->close();
    echo "Quay lại trang chủ để xem kết quả <a href = 'bangsql.php'>Quay lại</a>";
?>
    </table>
</body>
</html>
