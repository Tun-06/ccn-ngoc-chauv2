<?php
/* Template Name: Giới Thiệu */
get_header(); 
?>

    <!-- ===== ABOUT HERO SECTION (Section 1) ===== -->
    <style>
        /* Căn giữa toàn bộ nội dung khối thẻ trên tất cả thiết bị (Máy tính & Điện thoại) */
        .about-hero-content .about-card.glassmorphism {
            text-align: center !important;
        }
        .about-hero-content .card-logo-row {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 10px;
        }
        .about-hero-content .about-company-name {
            padding-left: 0 !important; /* Xóa khoảng cách lệch bên trái của bản gốc */
            text-align: center !important; /* Căn giữa dòng chữ */
        }

        /* Responsive: Làm gọn khối About trên điện thoại */
        @media (max-width: 768px) {
            .about-hero-content .about-card.glassmorphism {
                padding: 20px 15px !important;
                margin: 0 15px 20px 15px !important;
                width: calc(100% - 30px) !important;
                max-width: none !important;
                box-sizing: border-box;
            }
            .about-hero-content .about-brand {
                font-size: 24px !important;
            }
            .about-hero-content .about-company-name {
                font-size: 16px !important; /* Cho chữ to hơn 1 chút (từ 14px lên 16px) */
                line-height: 1.4 !important;
                margin-top: 10px !important;
                white-space: nowrap !important; /* Ép chữ nằm trên cùng 1 dòng */
            }
            .about-hero-content .about-logo {
                max-height: 40px !important;
                width: auto !important;
            }
        } /* ĐÓNG NGOẶC CHO @MEDIA BỊ THIẾU Ở ĐÂY */

        /* ===== CÁCH TIẾP CẬN MỚI: Dùng chung hiệu ứng Glassmorphism (Kính mờ) với Logo ===== */
        .about-hero-overlay {
            /* Giữ lại lớp phủ đen mờ cơ bản để làm dịu toàn bộ ảnh nền */
            background: rgba(0, 0, 0, 0.4) !important;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
        }

        .about-container {
            position: relative;
            z-index: 2;
        }

        /* Áp dụng chuẩn phong cách Glassmorphism trắng mờ cho từng ô giống hệ thống Logo */
        .about-features-grid .feature-item-row {
            background: rgba(255, 255, 255, 0.1) !important;
            backdrop-filter: blur(15px) !important;
            -webkit-backdrop-filter: blur(15px) !important;
            border: 1px solid rgba(255, 255, 255, 0.2) !important;
            border-radius: 20px !important;
            box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.3) !important;
            padding: 20px 25px !important;
            transition: transform 0.3s ease;
        }
        
        .about-features-grid .feature-item-row:hover {
            transform: translateY(-5px); /* Trượt nhẹ lên trên khi di chuột */
        }
        
        /* Giữ lại viền chữ mỏng để đọc rõ trên nền kính trắng */
        .feature-text h3, .feature-text p, .feature-icon i {
            text-shadow: 0 1px 3px rgba(0,0,0,0.8) !important;
        }
        .feature-icon i {
            filter: drop-shadow(0 1px 3px rgba(0,0,0,0.8)) !important; 
        }
        
        .about-features-grid {
            gap: 25px !important;
        }
        @media (max-width: 768px) {
            /* ===== Gom 4 tính năng thành 1 cục (1 box) duy nhất trên Mobile ===== */
            .about-features-grid {
                background: rgba(255, 255, 255, 0.1) !important;
                backdrop-filter: blur(15px) !important;
                -webkit-backdrop-filter: blur(15px) !important;
                border: 1px solid rgba(255, 255, 255, 0.2) !important;
                border-radius: 20px !important;
                box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.3) !important;
                padding: 20px 15px !important;
                gap: 15px !important; /* Giảm khoảng cách giữa các hàng bên trong cục này */
                margin: 0 15px !important;
            }
            /* Xóa giao diện kính mờ của từng mục con bên trong */
            .about-features-grid .feature-item-row {
                background: transparent !important;
                backdrop-filter: none !important;
                -webkit-backdrop-filter: none !important;
                border: none !important;
                box-shadow: none !important;
                padding: 10px 5px !important;
            }
            /* Tắt luôn hiệu ứng hover nảy lên trên mobile vì đã gom thành 1 cục */
            .about-features-grid .feature-item-row:hover {
                transform: none !important;
            }
        }

        /* ===== MAP LIGHTBOX CSS ===== */
        .map-lightbox {
            display: none;
            position: fixed;
            z-index: 9999;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.9);
            justify-content: center;
            align-items: center;
        }
        .map-lightbox.active {
            display: flex;
        }
        .lightbox-img {
            max-width: 95%;
            max-height: 95vh; /* Giới hạn chiều cao để không bị scroll */
            object-fit: contain;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0,0,0,0.5);
            animation: zoomIn 0.3s ease;
        }
        @keyframes zoomIn {
            from { transform: scale(0.9); opacity: 0; }
            to { transform: scale(1); opacity: 1; }
        }
        .lightbox-close {
            position: absolute;
            top: 20px;
            right: 25px;
            color: #fff;
            font-size: 35px; /* Giảm size font một chút để vừa với nút tròn */
            font-weight: bold;
            cursor: pointer;
            z-index: 10000;
            background-color: rgba(0, 0, 0, 0.7); /* Thêm nền đen mờ */
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%; /* Nút hình tròn */
            box-shadow: 0 4px 10px rgba(0,0,0,0.5); /* Đổ bóng để tách biệt khỏi ảnh */
            transition: all 0.3s ease;
        }
        .lightbox-close:hover {
            background-color: #f97316; /* Đổi màu nền sang cam khi di chuột */
            color: #fff;
            transform: scale(1.1); /* Phóng to nhẹ khi di chuột */
        }
        .master-plan-img {
            cursor: zoom-in;
            transition: opacity 0.3s;
        }
        .master-plan-img:hover {
            opacity: 0.85;
        }
    </style>
    <section class="about-hero" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img-nen/nen-gt.jpg');">
        <div class="about-hero-overlay"></div>
        <div class="about-container">
            <div class="about-hero-content">
                <div class="about-card glassmorphism">
                    <div class="card-logo-row">
                        <img src="<?php echo get_template_directory_uri(); ?>/gdien mới/more/logo new.png" alt="Cụm công nghiệp Ngọc Châu" class="about-logo">
                        <h2 class="about-brand" style="font-size: 23px; white-space: nowrap;">CỤM CÔNG NGHIỆP NGỌC CHÂU</h2>
                    </div>
                    <h1 class="about-company-name" style="font-size: 17px; font-weight: 600; margin-top: 5px; opacity: 0.9;">Công ty Cổ phần đầu tư KCN WIN</h1>
                </div>
                
                <div class="about-features-grid">
                    <div class="feature-item-row">
                        <div class="feature-icon"><i class="far fa-map"></i></div>
                        <div class="feature-text">
                            <h3>Quy mô 75ha</h3>
                            <p>Diện tích các ô quy hoạch đa dạng từ:<br>3.940 – 26.238 m2</p>
                        </div>
                    </div>
                    <div class="feature-item-row">
                        <div class="feature-icon"><i class="fas fa-map-marker-alt"></i></div>
                        <div class="feature-text">
                            <h3>Vị trí chiến lược</h3>
                            <p>Tọa lạc trên mặt đường TL295 và TL298, dễ dàng kết nối với tuyến huyết mạch Vành Đai 4 và Vành đai 5</p>
                        </div>
                    </div>
                    <div class="feature-item-row">
                        <div class="feature-icon"><i class="far fa-building"></i></div>
                        <div class="feature-text">
                            <h3>Hạ tầng đồng bộ</h3>
                            <p>Đường nội khu rộng lên tới 30m<br>Hệ thống điện 110KV</p>
                        </div>
                    </div>
                    <div class="feature-item-row">
                        <div class="feature-icon"><i class="fas fa-project-diagram"></i></div>
                        <div class="feature-text">
                            <h3>Kết nối vùng</h3>
                            <p>Dễ dàng kết nối với các KCN, CCN đang hoạt động trên địa bàn</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="thin-divider"></div>

    <!-- ===== POLICIES SECTION (Section 2) ===== -->
    <style>
        .policies-section {
            position: relative;
            padding: 80px 0;
            height: auto;
            display: flex;
            align-items: center;
            justify-content: center;
            background-image: url('<?php echo get_template_directory_uri(); ?>/img-giao-dien/gioi-thieu-2.jpg');
            background-size: cover;
            background-position: center;
        }

        .policies-overlay {
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background: rgba(0, 0, 0, 0.15); /* Slight darken for contrast */
            z-index: 1;
        }

        .policies-container {
            position: relative;
            z-index: 2;
            max-width: 1550px;
            margin: 0 auto;
            display: flex;
            gap: 80px;
            padding: 0 30px;
        }

        .policy-card {
            flex: 1;
            background: rgba(255, 255, 255, 0.98);
            border-radius: 30px;
            padding: 50px 40px;
            box-shadow: 0 15px 40px rgba(0,0,0,0.25);
            color: #000;
        }

        .policy-title {
            font-size: clamp(32px, 4.5vw, 42px);
            font-weight: 900;
            text-align: center;
            margin-bottom: 40px;
            color: #000;
            font-family: 'Montserrat', sans-serif;
            text-transform: uppercase;
        }

        .policy-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .policy-item {
            display: flex;
            align-items: center;
            margin-bottom: 22px;
            gap: 20px;
        }

        .policy-item:last-child {
            margin-bottom: 0;
        }

        .policy-icon {
            flex-shrink: 0;
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 32px;
            color: #000;
        }

        .policy-text {
            font-size: 22px;
            line-height: 1.5;
            font-weight: 600;
            color: #111;
        }

        .policy-text strong {
            font-weight: 900;
            color: #000;
        }

        .policy-image-wrapper {
            position: relative;
            width: 100%;
            margin-bottom: 30px;
            border-radius: 20px;
            overflow: hidden;
        }

        /* Tạo hiệu ứng mờ (fade) 4 cạnh viền trắng đè lên ảnh */
        .policy-image-wrapper::after {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            box-shadow: inset 0 0 50px 20px #ffffff;
            border-radius: 20px;
            pointer-events: none;
        }

        .policy-image-wrapper img {
            width: 100%;
            height: auto;
            display: block;
            object-fit: cover;
            border-radius: 20px;
        }

        @media (max-width: 992px) {
            .policies-container {
                flex-direction: column;
            }
        }

        @media (min-width: 993px) {
            .policies-section {
                height: 100dvh;
                padding-top: 65px;
                box-sizing: border-box;
                overflow: hidden;
            }
            .policies-container {
                gap: 3vw;
                padding: 0 2vw;
            }
            .policy-card {
                padding: 3vh 2.5vw;
                border-radius: 2vh;
            }
            .policy-title {
                font-size: clamp(20px, 3vh, 32px);
                margin-bottom: 2vh;
            }
            .policy-item {
                margin-bottom: 1vh !important;
            }
            .policy-icon {
                width: 3.5vh !important;
                height: 3.5vh !important;
                font-size: 2vh !important;
            }
            .policy-text {
                font-size: clamp(14px, 1.8vh, 18px) !important;
            }
            .policy-image-wrapper {
                margin-bottom: 2vh;
            }
            .policy-image-wrapper img {
                max-height: 20vh;
                object-fit: cover;
            }
        }
    </style>

    <section class="policies-section">
        <div class="policies-overlay"></div>
        <div class="policies-container">
            <!-- Khối 1: Ngành nghề -->
            <div class="policy-card">
                <h2 class="policy-title">NGÀNH NGHỀ THU HÚT ĐẦU TƯ</h2>
                <ul class="policy-list">
                    <li class="policy-item">
                        <div class="policy-icon"><i class="fas fa-tshirt"></i></div>
                        <div class="policy-text">Sản xuất trang phục</div>
                    </li>
                    <li class="policy-item">
                        <div class="policy-icon"><i class="fas fa-capsules"></i></div>
                        <div class="policy-text">Sản xuất thuốc, hoá dược và dược liệu</div>
                    </li>
                    <li class="policy-item">
                        <div class="policy-icon"><i class="fas fa-cubes"></i></div>
                        <div class="policy-text">Sản xuất sản phẩm từ khoáng phi kim loại<br>loại khác</div>
                    </li>
                    <li class="policy-item">
                        <div class="policy-icon"><i class="fas fa-layer-group"></i></div>
                        <div class="policy-text">Sản xuất kim loại</div>
                    </li>
                    <li class="policy-item">
                        <div class="policy-icon"><i class="fas fa-industry"></i></div>
                        <div class="policy-text">Sản xuất sản phẩm từ kim loại đúc sẵn<br>(trừ máy móc, thiết bị)</div>
                    </li>
                    <li class="policy-item">
                        <div class="policy-icon"><i class="fas fa-mobile-alt"></i></div>
                        <div class="policy-text">Sản xuất sản phẩm điện tử, máy vi tính<br>và sản phẩm quang học</div>
                    </li>
                    <li class="policy-item">
                        <div class="policy-icon"><i class="far fa-lightbulb"></i></div>
                        <div class="policy-text">Sản xuất thiết bị điện</div>
                    </li>
                    <li class="policy-item">
                        <div class="policy-icon"><i class="fas fa-car"></i></div>
                        <div class="policy-text">Sản xuất xe có động cơ</div>
                    </li>
                    <li class="policy-item">
                        <div class="policy-icon"><i class="fas fa-chair"></i></div>
                        <div class="policy-text">Sản xuất giường, tủ, bàn, ghế</div>
                    </li>
                    <li class="policy-item">
                        <div class="policy-icon"><i class="fas fa-warehouse"></i></div>
                        <div class="policy-text">Cho thuê kho nhà xưởng phục vụ sản xuất</div>
                    </li>
                    <li class="policy-item">
                        <div class="policy-icon"><i class="fas fa-tools"></i></div>
                        <div class="policy-text">Công nghiệp hỗ trợ</div>
                    </li>
                </ul>
            </div>

            <!-- Khối 2: Chính sách -->
            <div class="policy-card">
                <h2 class="policy-title">CHÍNH SÁCH ƯU ĐÃI ĐẦU TƯ</h2>
                
                <div class="policy-image-wrapper">
                    <img src="<?php echo get_template_directory_uri(); ?>/img-giao-dien/csuddt.jpg" alt="Chính sách ưu đãi đầu tư">
                </div>

                <ul class="policy-list">
                    <li class="policy-item" style="margin-bottom: 35px;">
                        <div class="policy-icon" style="font-size: 28px; width: 45px;"><i class="fas fa-percent"></i></div>
                        <div class="policy-text" style="font-size: 22px; font-weight: 700;">Ưu đãi thuế theo ngành nghề</div>
                    </li>
                    <li class="policy-item" style="margin-bottom: 35px;">
                        <div class="policy-icon" style="font-size: 28px; width: 45px;"><i class="fas fa-map-marked-alt"></i></div>
                        <div class="policy-text" style="font-size: 22px; font-weight: 700;">Chính sách miễn giảm tiền thuê đất</div>
                    </li>
                    <li class="policy-item" style="margin-bottom: 35px;">
                        <div class="policy-icon" style="font-size: 28px; width: 45px;"><i class="fas fa-cogs"></i></div>
                        <div class="policy-text" style="font-size: 22px; font-weight: 700;">Ưu đãi thuế nhập khẩu máy móc thiết bị</div>
                    </li>
                    <li class="policy-item" style="margin-bottom: 20px;">
                        <div class="policy-icon" style="font-size: 28px; width: 45px;"><i class="fas fa-hand-holding-usd"></i></div>
                        <div class="policy-text" style="font-size: 22px; font-weight: 700;">Các hỗ trợ đầu tư theo quy định hiện hành</div>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <div class="thin-divider"></div>

    <!-- ===== INTRO & VISION SECTION (Section 3) ===== -->
    <style>
        .intro-vision-section {
            position: relative;
            padding: 80px 0;
            height: auto;
            display: flex;
            align-items: center;
            justify-content: center;
            background-image: url('<?php echo get_template_directory_uri(); ?>/img-giao-dien/gioi-thieu-3.jpg');
            background-size: cover;
            background-position: center;
        }

        .intro-vision-overlay {
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background: rgba(0, 0, 0, 0.4); /* Lớp phủ đen mờ */
            z-index: 1;
        }

        .intro-vision-container {
            position: relative;
            z-index: 2;
            max-width: 1550px;
            margin: 0 auto;
            padding: 0 30px;
        }

        .intro-vision-main-title {
            font-size: clamp(36px, 4.5vw, 54px);
            font-weight: 900;
            text-align: center;
            margin-bottom: 50px;
            color: #fff;
            font-family: 'Montserrat', sans-serif;
            text-transform: uppercase;
            text-shadow: 2px 2px 5px rgba(0,0,0,0.5);
        }

        .intro-vision-grid {
            display: flex;
            gap: 30px;
            align-items: stretch;
        }

        .intro-vision-left {
            flex: 0 0 45%;
            display: flex;
            flex-direction: column;
            gap: 30px;
        }

        .intro-vision-right {
            flex: 0 0 calc(55% - 30px);
            display: flex;
        }

        .intro-card {
            background: rgba(255, 255, 255, 0.98);
            border-radius: 25px;
            padding: 40px;
            box-shadow: 0 15px 40px rgba(0,0,0,0.25);
            color: #111;
        }
        
        .intro-card.full-height {
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .intro-card-title {
            font-size: 30px;
            font-weight: 900;
            margin-bottom: 25px;
            color: #000;
            text-transform: uppercase;
            text-align: center;
            font-family: 'Montserrat', sans-serif;
        }

        .intro-card-title.align-left {
            text-align: left;
        }

        /* Styling for Left Cards */
        .info-text-line {
            font-size: 22px;
            line-height: 1.6;
            margin-bottom: 18px;
            color: #111;
        }
        .info-text-line:last-child {
            margin-bottom: 0;
        }
        .info-text-line strong {
            font-weight: 800;
            color: #000;
        }

        .vision-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .vision-item {
            margin-bottom: 20px;
        }
        .vision-item:last-child {
            margin-bottom: 0;
        }
        .vision-item-title {
            font-size: 24px;
            font-weight: 800;
            color: #000;
            margin-bottom: 8px;
        }
        .vision-sublist {
            list-style: none;
            padding-left: 20px;
            margin: 0;
        }
        .vision-sublist li {
            position: relative;
            font-size: 21px;
            line-height: 1.6;
            margin-bottom: 5px;
            color: #222;
            padding-left: 15px;
        }
        .vision-sublist li::before {
            content: '-';
            position: absolute;
            left: 0;
            top: 0;
            font-weight: bold;
        }

        /* Styling for Right Card */
        .chart-container-flex {
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            margin-bottom: 30px;
            margin-top: 10px;
            gap: 15px;
            flex-grow: 1; /* Căn giữa nội dung phần biểu đồ vào phần khoảng trống */
        }
        
        .chart-labels-col {
            display: flex;
            flex-direction: column;
            gap: 30px; /* Tăng khoảng cách các nhãn lên 1 chút cho thoáng */
            flex: 1;
        }

        .chart-label-box {
            display: flex;
            align-items: flex-start;
            gap: 12px;
        }

        .color-square {
            width: 18px;
            height: 18px;
            flex-shrink: 0;
            margin-top: 3px;
        }

        .chart-label-text {
            font-size: 19px;
            line-height: 1.4;
            color: #111;
        }
        .chart-label-text strong {
            font-weight: 800;
            color: #000;
        }

        .chart-image-center {
            position: relative;
            width: 50%; /* Tăng phần trăm độ rộng */
            max-width: 420px; /* Tăng kích thước tối đa của biểu đồ */
            flex-shrink: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .chart-image-center img {
            width: 100%;
            height: auto;
            display: block;
        }

        .chart-inner-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            width: 80%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .chart-inner-text .title {
            font-size: 18px;
            font-weight: 800;
            color: #000;
            margin-bottom: 2px;
        }

        .chart-inner-text .value {
            font-size: 30px;
            font-weight: 900;
            color: #000;
        }

        .land-use-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: auto;
            background: #fff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }

        .land-use-table td {
            padding: 16px 20px;
            font-size: 20px;
        }

        .land-use-table tr:nth-child(odd) td {
            background-color: #f6f8fa;
        }

        .land-use-table td:first-child {
            font-weight: 800;
            color: #000;
            width: 45%;
        }

        .land-use-table td:last-child {
            color: #222;
        }

        @media (max-width: 1200px) {
            .intro-vision-grid {
                flex-direction: column;
            }
            .intro-vision-left {
                flex: none;
                flex-direction: row;
            }
            .intro-vision-left .intro-card {
                flex: 1;
            }
            .intro-vision-right {
                flex: none;
            }
        }

        @media (max-width: 992px) {
            .chart-container-flex {
                flex-direction: column;
            }
            .chart-labels-col {
                width: 100%;
                flex-direction: row;
                flex-wrap: wrap;
                justify-content: center;
            }
            .chart-label-box {
                width: 45%;
            }
        }

        @media (max-width: 768px) {
            .intro-vision-left {
                flex-direction: column;
            }
            .intro-card {
                padding: 30px 20px;
            }
            .chart-image-center {
                width: 70%;
            }
            .chart-inner-text .title {
                font-size: 11px;
            }
            .chart-inner-text .value {
                font-size: 16px;
            }
            .chart-label-box {
                width: 100%;
            }
            .land-use-table td {
                padding: 12px 15px;
                font-size: 16px;
            }
            .land-use-table td:first-child {
                width: 50%;
            }
        }

        @media (min-width: 993px) {
            .intro-vision-section {
                height: 100dvh;
                padding-top: 65px;
                box-sizing: border-box;
                overflow: hidden;
            }
            .intro-vision-container {
                padding: 0 3vw;
            }
            .intro-vision-main-title {
                font-size: clamp(22px, 3.5vh, 42px);
                margin-bottom: 3vh;
            }
            .intro-card {
                padding: 2.5vh 2vw;
                border-radius: 2vh;
            }
            .intro-card-title {
                font-size: clamp(16px, 2.5vh, 26px);
                margin-bottom: 1.5vh;
            }
            .info-text-line {
                font-size: clamp(14px, 1.8vh, 18px);
                margin-bottom: 1vh;
            }
            .vision-item-title {
                font-size: clamp(15px, 2vh, 20px);
                margin-bottom: 0.5vh;
            }
            .vision-sublist li {
                font-size: clamp(13px, 1.7vh, 17px);
                margin-bottom: 0.5vh;
            }
            .intro-vision-grid {
                gap: 1.5vw;
            }
            .intro-vision-left {
                gap: 1.5vh;
            }
            .chart-container-flex {
                margin-bottom: 1.5vh;
                margin-top: 0;
            }
            .chart-labels-col {
                gap: 1.5vh;
            }
            .chart-label-text {
                font-size: clamp(12px, 1.5vh, 16px);
            }
            .color-square {
                width: 1.5vh;
                height: 1.5vh;
            }
            .chart-image-center {
                max-width: 30vh;
            }
            .chart-inner-text .title {
                font-size: clamp(10px, 1.2vh, 14px);
            }
            .chart-inner-text .value {
                font-size: clamp(14px, 2.5vh, 24px);
            }
            .land-use-table td {
                padding: 1vh 1.5vw;
                font-size: clamp(12px, 1.5vh, 16px);
            }
        }
    </style>

    <section class="intro-vision-section">
        <div class="intro-vision-overlay"></div>
        <div class="intro-vision-container">
            <h2 class="intro-vision-main-title">GIỚI THIỆU VỀ CỤM CÔNG NGHIỆP NGỌC CHÂU</h2>
            
            <div class="intro-vision-grid">
                <!-- Cột trái (2 thẻ) -->
                <div class="intro-vision-left">
                    <div class="intro-card">
                        <div class="info-text-line">
                            <strong>Tên thương mại:</strong> Cụm công nghiệp Ngọc Châu / Ngoc Chau Industrial Cluster (Ngoc Chau IC)
                        </div>
                        <div class="info-text-line">
                            <strong>Vị trí dự án:</strong> xã Ngọc Châu và xã Ngọc Thiện, huyện Tân Yên, tỉnh Bắc Giang (Nay là xã Ngọc Thiện, tỉnh Bắc Ninh)
                        </div>
                        <div class="info-text-line">
                            <strong>Thời gian hoạt động:</strong> 05/02/2024 - 05/02/2074 (50 năm)
                        </div>
                    </div>

                    <div class="intro-card">
                        <h3 class="intro-card-title align-left">TẦM NHÌN PHÁT TRIỂN CỦA DỰ ÁN</h3>
                        <ul class="vision-list">
                            <li class="vision-item">
                                <div class="vision-item-title">1. Hiện đại</div>
                                <ul class="vision-sublist">
                                    <li>Hạ tầng đồng bộ</li>
                                    <li>Giao thông tối ưu cho Logistic</li>
                                </ul>
                            </li>
                            <li class="vision-item">
                                <div class="vision-item-title">2. Kỷ luật</div>
                                <ul class="vision-sublist">
                                    <li>Quản lý vận hành chuyên nghiệp</li>
                                    <li>An toàn vệ sinh môi trường</li>
                                    <li>Đảm bảo phòng cháy chữa cháy</li>
                                </ul>
                            </li>
                            <li class="vision-item">
                                <div class="vision-item-title">3. Bền vững</div>
                                <ul class="vision-sublist">
                                    <li>Không gian cảnh quan xanh</li>
                                    <li>Cộng đồng doanh nghiệp ổn định</li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Cột phải (1 thẻ lớn) -->
                <div class="intro-vision-right">
                    <div class="intro-card full-height">
                        <h3 class="intro-card-title">CƠ CẤU SỬ DỤNG ĐẤT CCN NGỌC CHÂU</h3>
                        
                        <div class="chart-container-flex">
                            <!-- Labels bên trái biểu đồ -->
                            <div class="chart-labels-col">
                                <div class="chart-label-box">
                                    <div class="color-square" style="background-color: #4caf50;"></div>
                                    <div class="chart-label-text">
                                        <strong>Đất cây xanh, mặt nước:</strong><br>96.109 m² (12,81%)
                                    </div>
                                </div>
                                <div class="chart-label-box">
                                    <div class="color-square" style="background-color: #ff9800;"></div>
                                    <div class="chart-label-text">
                                        <strong>Đất giao thông:</strong><br>126.415 m² (16,86%)
                                    </div>
                                </div>
                                <div class="chart-label-box">
                                    <div class="color-square" style="background-color: #673ab7;"></div>
                                    <div class="chart-label-text">
                                        <strong>Đất hành chính, dịch vụ:</strong><br>30.479 m² (4,06%)
                                    </div>
                                </div>
                            </div>

                            <!-- Biểu đồ chính giữa -->
                            <div class="chart-image-center">
                                <img src="<?php echo get_template_directory_uri(); ?>/img-giao-dien/bieudo.jpg" alt="Biểu đồ cơ cấu đất">
                                <div class="chart-inner-text">
                                    <div class="title">TỔNG DIỆN TÍCH:</div>
                                    <div class="value">749.600 m²</div>
                                </div>
                            </div>

                            <!-- Labels bên phải biểu đồ -->
                            <div class="chart-labels-col" style="justify-content: flex-start;">
                                <div class="chart-label-box">
                                    <div class="color-square" style="background-color: #1976d2;"></div>
                                    <div class="chart-label-text">
                                        <strong>Đất công nghiệp:</strong><br>489.001 m² (65,2%)
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Bảng số liệu chi tiết -->
                        <table class="land-use-table">
                            <tbody>
                                <tr>
                                    <td>Đất công nghiệp:</td>
                                    <td>489.001 m² (65,2%) - max 5 tầng</td>
                                </tr>
                                <tr>
                                    <td>Đất giao thông:</td>
                                    <td>126.414 m² (16,86%) - max 3 tầng</td>
                                </tr>
                                <tr>
                                    <td>Đất cây xanh, mặt nước:</td>
                                    <td>96.109 m² (12,81%) - max 1 tầng</td>
                                </tr>
                                <tr>
                                    <td>Đất hành chính, dịch vụ:</td>
                                    <td>30.479 m² (4,06%) - max 9 tầng</td>
                                </tr>
                                <tr>
                                    <td>Đất hạ tầng kỹ thuật:</td>
                                    <td>7.997 m² (1,07%) - max 2 tầng</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="thin-divider"></div>

    <!-- ===== MASTER PLAN SECTION (Section 4) ===== -->
    <style>
        .image-section-container {
            position: relative;
            background: #000;
        }
        @media (max-width: 768px) {
            .image-section-container {
                display: flex;
                flex-direction: column;
                background: #fff;
                padding-bottom: 30px;
            }
            .master-plan-overlay {
                position: static !important;
                width: 90% !important;
                transform: none !important;
                margin: 20px auto 0 auto !important;
            }
        }
    </style>
    <section class="about-section image-section image-section-container" style="overflow: hidden;">
        <!-- Ảnh nền chính (background) -->
        <img src="<?php echo get_template_directory_uri(); ?>/img-giao-dien/gioi-thieu-4.jpg" alt="Mặt bằng quy hoạch" class="master-plan-img" id="masterPlanTrigger" style="width: 100%; display: block; cursor: pointer;" title="Bấm để xem ảnh bản đồ kích thước lớn">
        
        <!-- Các ảnh overlay đè lên trên (căn chỉnh bằng top, left, right, width theo % để tự động co giãn) -->
        <!-- Ảnh 4.1 -->
        <img src="<?php echo get_template_directory_uri(); ?>/img-giao-dien/gioi-thieu-4.1.png" alt="Thông số 1" class="master-plan-overlay" style="position: absolute; top: 50%; left: 10%; width: 31%; height: auto; transform: translateY(-50%); z-index: 5; pointer-events: none;">
        
        <!-- Ảnh 4.2 -->
        <img src="<?php echo get_template_directory_uri(); ?>/img-giao-dien/gioi-thieu-4.2.png?v=2" alt="Thông số 2" class="master-plan-overlay" style="position: absolute; top: 50%; right: 10%; width: 33.8%; height: auto; transform: translateY(-50%); z-index: 5; pointer-events: none;">
    </section>

    <!-- ===== LIGHTBOX OVERLAY ===== -->
    <div id="mapLightbox" class="map-lightbox">
        <span class="lightbox-close">&times;</span>
        <img class="lightbox-img" src="<?php echo get_template_directory_uri(); ?>/img-nen/file-lam-viec-2-resized.jpg" alt="Bản đồ quy hoạch chi tiết">
    </div>

    <!-- SCRIPT CHO LIGHTBOX -->
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const triggerImg = document.getElementById('masterPlanTrigger');
        const lightbox = document.getElementById('mapLightbox');
        const closeBtn = document.querySelector('.lightbox-close');

        if(triggerImg && lightbox && closeBtn) {
            // Mở Lightbox khi bấm vào ảnh
            triggerImg.addEventListener('click', function() {
                lightbox.classList.add('active');
                document.body.style.overflow = 'hidden'; // Khóa cuộn trang
            });

            // Đóng khi bấm nút X
            closeBtn.addEventListener('click', function() {
                lightbox.classList.remove('active');
                document.body.style.overflow = ''; // Mở lại cuộn trang
            });

            // Đóng khi bấm ra vùng đen bên ngoài ảnh
            lightbox.addEventListener('click', function(e) {
                if(e.target === lightbox) {
                    lightbox.classList.remove('active');
                    document.body.style.overflow = '';
                }
            });
            
            // Đóng khi bấm nút ESC trên bàn phím
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape' && lightbox.classList.contains('active')) {
                    lightbox.classList.remove('active');
                    document.body.style.overflow = '';
                }
            });
        }
    });
    </script>

<?php get_footer(); ?>
