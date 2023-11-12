<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1{
            text-align: center;
            color: blue;
        }
        h1:hover{
            color: yellow;
        }
        table{
            border: 2px solid blue;
            border-collapse: collapse;
        }
        td{
            border: 1px solid blue;
            padding: 5px;
            text-align: center;
        }
        /* th{
            background-color: #64ede4;
            color:while ;
        } */
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
        button{
            float: left;
            text-align: center;
            margin: 15px;
            text-decoration: none;
            color: black;
            background: gray;
        }
    </style>
</head>
<body>
    <h1>Bảng nhân viên</h1>
    <table>
        <tr>
            <td>Mã nhân viên</td>
            <td>Tên nhân viên</td>
            <td>Giới tính</td>
            <td>Địa chỉ</td>
            <td>Điện thoại</td>
            <td>Ngày sinh</td>
        </tr>
        <tr>
        <?php
            require "connec.php";

            mysqli_set_charset($conn, 'UTF8');
            $sql = "SELECT * FROM nhanvien";
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
                    echo "No flight in database";
                }
            $conn->query($sql);
            $conn->close();
            echo "<a href='timkiem1.php'><button>Tìm Kiếm</button></a><br>";
            echo "<a href='themNV1.php'><button>Thêm</button></a><br>";
            echo "<a href='suaSql1.php'><button>Sửa</button></a><br>";
            echo "<a href='xoaSql1.php'><button>Xóa</button></a>";
        ?>
        </tr>
    </table>
    <!-- <button><a href="timkiem1.php"></a>Tìm Kiếm</button><br>
    <button><a href="themNV1.php"></a>Thêm</button><br>
    <button><a href="suaSql1.php"></a>Sửa</button><br>
    <button><a href="xoaSql1.php"></a>Xóa</button> -->
</body>
</html>
