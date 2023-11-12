<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        nav{
            width: 550px;
            height: 35px;
            background-color: lime;
            }
        nav li :hover{
            color: orangered;
        }
        nav ul{
            list-style: none;
        }
        nav ul li{
            float: left;
            line-height: 35px;
            padding: 0 15px;
        }
        nav ul li a{
            color: black;
            font-size: 12px;
            text-decoration: none;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <?php
        session_start();
        if (isset($_SESSION['username'])){
            echo "Ban da dang nhap voi ten la: " . $_SESSION['username']."</br>";
            echo 'Click vào đây để xem bảng nhân viên <a href="bangsql.php">Xem</a>';
        }
        else{
            echo "Ban chua dang nhap </br>";
        }
    ?>
    <nav>
        <ul>
            <li><a href="loginUser1.php">Đăng nhập</a></li>
            <li><a href="">Xem danh sách nhân viên</a></li>
            <li><a href="">Mua hàng</a></li>
            <li><a href="">Trợ giúp</a></li>
        </ul>
    </nav>
    <p>
    Bạn đam mê trong việc biến hóa các con chữ hay đơn giản là yêu thích, đột phá với sự sáng tạo của bản thân? Vị trí nhân viên content marketing của ClickAds sẽ phù hợp với bạn! <br>
    (Nguồn: Edu2review) <br>

    ClickAds là hệ thống dịch vụ Truyền thông, Quảng cáo và Marketing đa nền tảng. Với sứ mệnh đồng hành cùng doanh nghiệp, tổ chức trong sự phát triển kinh doanh vững chắc thông qua khả năng tiếp thị khách hàng tốt ưu chi phí và hiệu quả tối đa. <br>

    *Thông tin tuyển dụng: <br>

    Số lượng: 2 <br>

    Mô tả công việc
    - Viết bài chăm sóc fanpage/ website nôi bộ và khách hàng theo dự án <br>

    - Viết các bài nội dung quảng cáo sáng tạo <br>

    - Chủ đề các bài viết: Quán cafe, Quán ăn, Spa, làm đẹp, trung tâm tiếng anh, Salon tóc, Phòng xả Stress... <br>

    Yêu cầu: <br>

    - Có khả năng viết lách, văn phong tốt, sáng tạo <br>

    - Có tư duy marketing <br>

    - Viết bài chuẩn SEO <br>

    - Biết sử dụng phần mềm chỉnh sửa ảnh PTS, AI là 1 lợi thế. <br>

    - Có laptop riêng <br>

    - Có tinh thần trách nhiệm, làm việc nhóm. <br>

    - Ưu tiên sinh viên <br>

    Quyền lợi: <br>
    Full-time: <br>

    - Lương cứng 4 triệu + KPI + trợ cấp ăn trưa (20k/ngày) + tiền gửi xe (150k). <br>

    - Sẽ thỏa thuận lại tại tháng thứ 3 (Sau khi được đánh giá lại năng lực làm việc). <br>

    Partime: <br>

    -   Lương cứng 2 triệu + KPI <br>

    - Được training chuyên sâu về lĩnh vực Digital marketing đặc biệt là SEO. <br>

    - Được làm việc trong môi trường Agency năng động, sáng tạo và có nhiều cơ hội thăng tiến. <br>

    - Được trực tiếp chạy các dự án của công ty. <br>

    - Thưởng nóng nếu thực hiện tốt công việc. <br>

    - Tham gia các hoạt động ngoại khóa, team building định kỳ, du lịch, trải nghiệm,...cùng công ty. <br>

    Liên hệ<br>
    - Ghi rõ tiêu đề mail, CV: [TEG] - Content - Tên ứng viên <br>

    - Gửi về:tuyendung.clickads.vn@gmail.com <br>

    - Website: http://clickads.vn/ <br>

    - Địa chỉ làm việc: Số 48, Ngõ 612 Đê La Thành, Ba Đình. <br>


    *Hãy truy cập Edu2Review mỗi ngày để tìm kiếm những cơ hội việc làm hấp dẫn.
    </p>
</body>
</html>