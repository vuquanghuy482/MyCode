<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Thay đổi thông tin nhan viên</h1>
    <form action="suaSql2.php" method="post">
        <h2>Mã nhân viên</h2>
        <input type="text" name="maNhanvien"><br>
        <h2>Tên nhân viên</h2>
        <input type="text" name="tenNhanvien"><br>
        <h2>Giới tính</h2>
        <input type="radio" name="gioiTinh" value="Nam">Female
        <input type="radio" name="gioiTinh" value="Nu">Male
        <h2>Địa chỉ</h2>
        <input type="text" name="diaChi"><br>
        <h2>Điện thoại</h2>
        <input type="text" name="dienThoai"><br>
        <h2>Ngày sinh</h2>
        <input type="text" name="ngaySinh"><br>
        <button type="submit">Sửa</button>
    </form>
</body>
</html>