<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <!-- ===== HEADER ===== -->
    <header class="header" id="header">
        <div class="header-container">
            <a href="<?php echo home_url(); ?>" class="logo" id="logo">
                <img src="<?php echo get_template_directory_uri(); ?>/img-nen/logo.png" alt="<?php bloginfo('name'); ?>" class="logo-img">
            </a>
            <nav class="nav" id="main-nav">
                <ul class="nav-list">
                    <li><a href="<?php echo home_url(); ?>" class="nav-link" id="nav-home">TRANG CHỦ</a></li>
                    <li><a href="<?php echo home_url('/gioi-thieu'); ?>" class="nav-link" id="nav-about">GIỚI THIỆU</a></li>
                    <li><a href="<?php echo home_url('/quy-trinh-dau-tu'); ?>" class="nav-link" id="nav-advantage">QUY TRÌNH ĐẦU TƯ</a></li>
                    <li><a href="<?php echo home_url('/tin-tuc'); ?>" class="nav-link" id="nav-news">TIN TỨC</a></li>
                    <li><a href="https://tour360.xo.je/?i=1" target="_blank" class="nav-link" id="nav-tour">THAM QUAN DỰ ÁN</a></li>
                    <li><a href="<?php echo home_url('/lien-he'); ?>" class="nav-link" id="nav-contact">LIÊN HỆ</a></li>
                </ul>
            </nav>
            <button class="search-btn" id="search-btn" aria-label="Tìm kiếm">
                <i class="fas fa-search"></i>
            </button>
            <button class="mobile-menu-btn" id="mobile-menu-btn" aria-label="Menu">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>

        <style>
        /* ====================================================
           🔥 GIAO DIỆN MENU MOBILE DẠNG NGĂN KÉO BÉ XINH 🔥
           ==================================================== */
        @media (max-width: 992px) {
            /* Dạng thanh trượt bên phải (Drawer) */
            .header .nav#main-nav {
                position: fixed !important;
                top: 0;
                right: 0; /* Bắt đầu từ mép phải */
                left: auto !important;
                width: 260px !important; /* Rộng 260px vừa phải bé bé xinh xinh */
                max-width: 80vw;
                height: 100vh;
                background: rgba(4, 15, 33, 0.95) !important; /* Xanh đen trong suốt */
                backdrop-filter: blur(15px) !important;
                -webkit-backdrop-filter: blur(15px) !important;
                box-shadow: -5px 0 25px rgba(0,0,0,0.5) !important; /* Đổ bóng tạo khối */
                display: flex !important;
                justify-content: flex-start !important; /* Dồn lên trên */
                align-items: flex-start !important;
                padding-top: 80px !important; /* Chừa chỗ cho nút Menu ở góc trên */
                
                /* Hiệu ứng ẩn bên phải */
                transform: translateX(100%);
                opacity: 0;
                visibility: hidden;
                transition: all 0.4s cubic-bezier(0.77, 0.2, 0.05, 1) !important;
                z-index: 998 !important;
            }

            /* Khi mở Menu: Trượt vào */
            .header .nav#main-nav.open {
                transform: translateX(0) !important;
                opacity: 1 !important;
                visibility: visible !important;
            }

            /* Danh sách link */
            .header .nav-list {
                display: flex !important;
                flex-direction: column !important;
                align-items: flex-start !important; /* Căn trái toàn bộ menu */
                gap: 15px !important; 
                padding: 0 25px !important; /* Căn lề 2 bên 25px */
                width: 100%;
            }

            /* Style cho từng nút link: Nhỏ nhắn, có đường gạch dưới mỏng */
            .header .nav-link {
                font-size: 15px !important; /* Chữ nhỏ xinh */
                font-weight: 600 !important;
                color: #ffffff !important;
                text-transform: uppercase !important;
                letter-spacing: 1px !important;
                position: relative !important;
                
                /* Chữ lướt nhẹ từ phải sang */
                opacity: 0;
                transform: translateX(20px);
                transition: all 0.3s ease !important;
                text-decoration: none !important;
                display: block !important;
                width: 100% !important;
                padding-bottom: 12px !important;
                border-bottom: 1px solid rgba(255, 255, 255, 0.1) !important; /* Dòng phân cách mờ */
            }

            /* Ẩn dòng kẻ của mục cuối cùng */
            .header .nav-list li:last-child .nav-link {
                border-bottom: none !important;
            }

            /* Điểm nhấn khi nhấn vào link */
            .header .nav-link:active {
                color: #3b82f6 !important; 
            }

            /* Hiệu ứng trôi chữ từ phải sang tuần tự cực mượt khi mở */
            .header .nav#main-nav.open li:nth-child(1) .nav-link { transition-delay: 0.1s !important; opacity: 1; transform: translateX(0); }
            .header .nav#main-nav.open li:nth-child(2) .nav-link { transition-delay: 0.15s !important; opacity: 1; transform: translateX(0); }
            .header .nav#main-nav.open li:nth-child(3) .nav-link { transition-delay: 0.2s !important; opacity: 1; transform: translateX(0); }
            .header .nav#main-nav.open li:nth-child(4) .nav-link { transition-delay: 0.25s !important; opacity: 1; transform: translateX(0); }
            .header .nav#main-nav.open li:nth-child(5) .nav-link { transition-delay: 0.3s !important; opacity: 1; transform: translateX(0); }
            .header .nav#main-nav.open li:nth-child(6) .nav-link { transition-delay: 0.35s !important; opacity: 1; transform: translateX(0); }

            /* Nút Menu phải nằm trên cùng */
            .mobile-menu-btn {
                z-index: 1000 !important;
                position: relative;
            }

            /* Lớp phủ đen kịt để chặn bấm bên ngoài */
            .mobile-menu-overlay {
                position: fixed !important;
                top: 0;
                left: 0;
                width: 100vw;
                height: 100vh;
                background: rgba(0, 0, 0, 0.6) !important;
                backdrop-filter: blur(2px) !important;
                z-index: 997 !important;
                opacity: 0;
                visibility: hidden;
                transition: all 0.3s ease !important;
            }
            .mobile-menu-overlay.active {
                opacity: 1;
                visibility: visible;
            }

            /* Hiệu ứng khi mở Menu: Xóa thanh Header ngang, trượt Logo và Search lên trên biến mất */
            .header.menu-open-header {
                background: transparent !important;
                box-shadow: none !important;
            }
            .logo, .search-btn {
                transition: all 0.4s ease !important; /* Thêm transition mượt mà cho logo và search */
            }
            .header.menu-open-header .logo,
            .header.menu-open-header .search-btn {
                transform: translateY(-100px) !important;
                opacity: 0 !important;
                pointer-events: none !important;
            }
        }
        </style>

        <!-- Script chống lỗi Cache và xử lý đóng Menu tuyệt đối -->
        <script>
        document.addEventListener('DOMContentLoaded', () => {
            const nav = document.getElementById('main-nav');
            const header = document.getElementById('header');
            if (!nav) return;

            // Tạo lớp phủ tối
            const overlay = document.createElement('div');
            overlay.className = 'mobile-menu-overlay';
            document.body.appendChild(overlay);

            // Khi click vào lớp phủ -> Giả lập bấm nút hamburger để đóng
            overlay.addEventListener('click', () => {
                const btn = document.getElementById('mobile-menu-btn');
                if (btn && nav.classList.contains('open')) {
                    btn.click(); 
                }
            });

            // Theo dõi trạng thái của Menu (bất chấp file script.js bị cache)
            const observer = new MutationObserver((mutations) => {
                mutations.forEach((mutation) => {
                    if (mutation.attributeName === 'class') {
                        if (nav.classList.contains('open')) {
                            overlay.classList.add('active');
                            document.body.style.overflow = 'hidden'; // Khóa cuộn trang
                            if(header) header.classList.add('menu-open-header'); // Làm biến mất thanh ngang
                        } else {
                            overlay.classList.remove('active');
                            document.body.style.overflow = ''; // Mở khóa cuộn trang
                            if(header) header.classList.remove('menu-open-header'); // Hiện lại thanh ngang
                        }
                    }
                });
            });
            observer.observe(nav, { attributes: true });
        });
        </script>
    </header>
