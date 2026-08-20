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
    <section class="about-hero" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img-nen/nen-gt.png');">
        <div class="about-hero-overlay"></div>
        <div class="about-container">
            <div class="about-hero-content">
                <div class="about-card glassmorphism">
                    <div class="card-logo-row">
                        <img src="<?php echo get_template_directory_uri(); ?>/img-nen/logo1.png" alt="WIN Holdings" class="about-logo">
                        <h2 class="about-brand">WIN HOLDINGS</h2>
                    </div>
                    <h1 class="about-company-name">Công ty Cổ phần đầu tư KCN WIN</h1>
                </div>
                
                <div class="about-features-grid">
                    <div class="feature-item-row">
                        <div class="feature-icon"><i class="far fa-map"></i></div>
                        <div class="feature-text">
                            <h3>Quy mô 75ha</h3>
                            <p>Tổng diện tích quy hoạch lên<br>đến 75ha với hạ tầng đồng bộ.</p>
                        </div>
                    </div>
                    <div class="feature-item-row">
                        <div class="feature-icon"><i class="fas fa-map-marker-alt"></i></div>
                        <div class="feature-text">
                            <h3>Vị trí chiến lược</h3>
                            <p>Tọa lạc sát đường tỉnh lộ huyết mạch</p>
                        </div>
                    </div>
                    <div class="feature-item-row">
                        <div class="feature-icon"><i class="far fa-building"></i></div>
                        <div class="feature-text">
                            <h3>Hạ tầng đồng bộ</h3>
                            <p>Hệ thống điện 110kV,<br>trạm cấp nước sạch công suất lớn.</p>
                        </div>
                    </div>
                    <div class="feature-item-row">
                        <div class="feature-icon"><i class="fas fa-project-diagram"></i></div>
                        <div class="feature-text">
                            <h3>Kết nối vùng</h3>
                            <p>Cách trung tâm TP. Bắc Giang chỉ 15km</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="thin-divider"></div>

    <!-- ===== POLICIES SECTION (Section 2) ===== -->
    <section class="about-section image-section">
        <img src="<?php echo get_template_directory_uri(); ?>/img-giao-dien/gioi-thieu-2.png" alt="Chính sách ưu đãi" style="width: 100%; display: block;">
    </section>

    <div class="thin-divider"></div>

    <!-- ===== VISION SECTION (Section 3) ===== -->
    <section class="about-section image-section">
        <img src="<?php echo get_template_directory_uri(); ?>/img-giao-dien/gioi-thieu-3.png" alt="Tầm nhìn" style="width: 100%; display: block;">
    </section>

    <div class="thin-divider"></div>

    <!-- ===== MASTER PLAN SECTION (Section 4) ===== -->
    <section class="about-section image-section">
        <img src="<?php echo get_template_directory_uri(); ?>/img-giao-dien/gioi-thieu-4.png" alt="Mặt bằng quy hoạch" class="master-plan-img" id="masterPlanTrigger" style="width: 100%; display: block;" title="Bấm để xem ảnh bản đồ kích thước lớn">
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
