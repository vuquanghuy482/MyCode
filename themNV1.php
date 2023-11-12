<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Thêm nhân viên mới</h1>
    <form action="themNV2.php" method="post" name="register">
        <h2>Tên nhân viên</h2>
        <input type="text" name="tenNhanvien"><br>
        <h2>Giới tính</h2>
        <input type="radio" name="gioiTinh" value="Nam">Female
        <input type="radio" name="gioiTinh" value="Nu">Male
        <h2>Địa chỉ</h2>
        <input type="text" name="diaChi"><br>
        <h2>Điện Thoại</h2>
        <input type="text" name="dienThoai"><br>
        <h2>Ngày Sinh</h2>
        <input type="text" name="ngaySinh"><br>
        <button type="submit">Add</button>
    </form>
</body>
</html>