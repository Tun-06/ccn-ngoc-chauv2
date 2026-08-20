<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/gdien%20m%E1%BB%9Bi/more/logo1.png" type="image/png">
    <link rel="icon" type="image/png" sizes="192x192" href="<?php echo get_template_directory_uri(); ?>/gdien%20m%E1%BB%9Bi/more/logo1.png">
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/gdien%20m%E1%BB%9Bi/more/logo1.png">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <!-- ===== HEADER ===== -->
    <header class="header" id="header">
        <div class="header-container">
            <a href="<?php echo home_url(); ?>" class="logo" id="logo">
                <img src="<?php echo get_template_directory_uri(); ?>/gdien mới/more/logo new.png" alt="<?php bloginfo('name'); ?>" class="logo-img">
            </a>
            <nav class="nav" id="main-nav">
                <?php
                if (has_nav_menu('primary')) {
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'menu_class'     => 'nav-list',
                        'container'      => false,
                        'link_class'     => 'nav-link'
                    ));
                } else {
                ?>
                <ul class="nav-list">
                    <li><a href="<?php echo home_url(); ?>" class="nav-link" id="nav-home">TRANG CHỦ</a></li>
                    <li><a href="<?php echo home_url('/tong-quan'); ?>" class="nav-link" id="nav-overview">TỔNG QUAN</a></li>
                    <li><a href="<?php echo home_url('/quy-hoach-ha-tang'); ?>" class="nav-link" id="nav-infrastructure">QUY HOẠCH - HẠ TẦNG</a></li>
                    <li><a href="https://tour360.xo.je/?i=1" target="_blank" class="nav-link" id="nav-tour">THAM QUAN DỰ ÁN</a></li>
                    <li><a href="<?php echo home_url('/quy-trinh-dau-tu'); ?>" class="nav-link" id="nav-investment">QUY TRÌNH ĐẦU TƯ</a></li>
                    <li><a href="<?php echo home_url('/tin-tuc'); ?>" class="nav-link" id="nav-news">TIN TỨC</a></li>
                    <li><a href="<?php echo home_url('/lien-he'); ?>" class="nav-link" id="nav-contact">LIÊN HỆ</a></li>
                </ul>
                <?php } ?>
            </nav>
            <div class="header-action" id="header-action">
                <a href="#nhan-ho-so" class="btn-header">NHẬN HỒ SƠ DỰ ÁN</a>
            </div>
            <div class="lang-switcher" id="lang-switcher">
                <!-- Mồi GTranslate tải script bằng shortcode ẩn -->
                <div style="display:none;" id="hidden-gtranslate">
                    <?php echo do_shortcode('[gtranslate]'); ?>
                </div>

                <!-- Nút bấm hiển thị cờ hiện tại -->
                <button class="lang-toggler" id="lang-toggler" aria-label="Chọn ngôn ngữ"></button>
                
                <!-- Hộp chứa danh sách cờ (Tích hợp GTranslate) -->
                <div class="lang-dropdown-wrapper">
                    <ul class="lang-dropdown">
                        <!-- Việt Nam (Gốc) -->
                        <li class="lang-item lang-item-vi current-lang">
                            <a href="#" data-lang="vi" class="glink nturl notranslate">vi</a>
                        </li>
                        <!-- Tiếng Anh -->
                        <li class="lang-item lang-item-en">
                            <a href="#" data-lang="en" class="glink nturl notranslate">en</a>
                        </li>
                        <!-- Tiếng Trung -->
                        <li class="lang-item lang-item-zh">
                            <a href="#" data-lang="zh-CN" class="glink nturl notranslate">zh</a>
                        </li>
                    </ul>
                </div>
            </div>
            <button class="mobile-menu-btn" id="mobile-menu-btn" aria-label="Menu">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>

        <style>
        /* ====================================================
           🌐 GIAO DIỆN CHUYỂN ĐỔI NGÔN NGỮ (CHUẨN YENQUANGIP)
           ==================================================== */
        .lang-switcher {
            position: relative;
            margin-right: 20px;
            z-index: 1005;
            height: 35px;
        }

        /* Nút tròn chính (luôn luôn hiện) */
        .lang-toggler {
            width: 35px !important;
            height: 35px !important;
            min-width: 35px !important; /* Chống bị Safari kéo giãn */
            max-width: 35px !important;
            min-height: 35px !important;
            max-height: 35px !important;
            box-sizing: border-box !important; /* Khóa kích thước khung */
            appearance: none !important; /* Xóa viền/padding mặc định của nút trên iPhone/Safari */
            -webkit-appearance: none !important;
            border-radius: 50% !important; /* Ép buộc bo tròn xoe */
            overflow: hidden !important; /* Cắt vứt phần cờ bị dư ở góc */
            background-size: 100% 100% !important; /* Ép giãn đầy hình vuông, không để lộ viền đen */
            background-position: center !important;
            background-repeat: no-repeat !important;
            border: 2px solid transparent;
            cursor: pointer;
            padding: 0 !important; /* Ép không có padding dồn khung */
            margin: 0 !important;
            background-color: #040f21; /* Nền tối phòng khi ảnh chưa load */
            transition: all 0.3s ease;
            display: block !important;
        }
        .lang-toggler:hover {
            transform: scale(1.1);
        }
        
        /* Dropdown Box (nằm tách biệt bên dưới) */
        .lang-dropdown-wrapper {
            display: none;
            position: absolute;
            top: 45px; /* Tách rời nút toggler 10px */
            left: -5px; /* Căn giữa tương đối */
            background: rgba(4, 15, 33, 0.95);
            box-shadow: 0 5px 15px rgba(0,0,0,0.5);
            padding: 5px;
            border-radius: 25px; /* Bo tròn toàn bộ hộp chứa */
            z-index: 10;
        }
        .lang-switcher.active .lang-dropdown-wrapper {
            display: block; /* Hiện khi active */
        }

        /* Danh sách cờ */
        .lang-dropdown {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            flex-direction: column;
        }
        .lang-item {
            margin-bottom: 5px;
            display: block; /* Luôn hiện tất cả các cờ */
        }
        .lang-item:last-child {
            margin-bottom: 0;
        }
        /* BỎ order: -1 ĐỂ GIỮ CỐ ĐỊNH THỨ TỰ VIỆT -> ANH -> TRUNG */

        /* Hình dạng cờ trong danh sách dropdown */
        .lang-item a {
            display: block !important;
            width: 35px !important;
            height: 35px !important;
            min-width: 35px !important;
            max-width: 35px !important;
            min-height: 35px !important;
            max-height: 35px !important;
            box-sizing: border-box !important;
            appearance: none !important;
            -webkit-appearance: none !important;
            border-radius: 50% !important; /* Tròn xoe */
            overflow: hidden !important; /* Cắt góc cờ dư */
            text-indent: -9999px; /* Ẩn chữ */
            background-size: 100% 100% !important; /* Ép giãn đầy để không bị vệt đen */
            background-position: center !important;
            background-repeat: no-repeat !important;
            border: 2px solid transparent;
            padding: 0 !important;
            margin: 0 !important;
            transition: all 0.3s ease;
        }
        .lang-item a:hover {
            transform: scale(1.1);
            border-color: #f97316 !important; /* Viền cam khi hover */
        }

        /* Định nghĩa ảnh cờ (Dùng bộ lọc chặt chẽ để không bị trùng class) */
        .flag-vi, .lang-item[class*="-vi"] a, .lang-item.vi a { background-image: url('https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.4.6/flags/1x1/vn.svg'); }
        .flag-en, .lang-item[class*="-en"] a, .lang-item.en a { background-image: url('https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.4.6/flags/1x1/gb.svg'); }
        .flag-zh, .lang-item[class*="-zh"] a, .lang-item.zh a { background-image: url('https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.4.6/flags/1x1/cn.svg'); }

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
            .header .nav#main-nav.open li:nth-child(7) .nav-link { transition-delay: 0.4s !important; opacity: 1; transform: translateX(0); }
            .header .nav#main-nav.open li:nth-child(8) .nav-link { transition-delay: 0.45s !important; opacity: 1; transform: translateX(0); }

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

            /* Căn lề nút ngôn ngữ trên mobile */
            .lang-switcher {
                margin-right: 15px; 
                transition: all 0.4s ease !important;
            }

            /* Hiệu ứng khi mở Menu: Xóa thanh Header ngang, trượt Logo lên trên biến mất */
            .header.menu-open-header {
                background: transparent !important;
                box-shadow: none !important;
            }
            .logo {
                transition: all 0.4s ease !important; /* Thêm transition mượt mà cho logo */
            }
            .header.menu-open-header .logo,
            .header.menu-open-header .lang-switcher {
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

            // ==========================================
            // Xử lý Click cho GTranslate Language Switcher
            // ==========================================
            
            // BẮT BUỘC: Ép GTranslate tải thư viện dịch ngay lập tức (vượt qua cơ chế lazy-load của họ)
            setTimeout(() => {
                const gtWrappers = document.querySelectorAll('.gtranslate_wrapper');
                gtWrappers.forEach(wrapper => {
                    wrapper.dispatchEvent(new Event('pointerenter'));
                    // Dispatch thêm các event khác để đảm bảo 100% kích hoạt
                    wrapper.dispatchEvent(new Event('mouseenter'));
                    wrapper.dispatchEvent(new Event('mouseover'));
                });
            }, 500);

            const langSwitcher = document.getElementById('lang-switcher');
            const langToggler = document.getElementById('lang-toggler');
            
            if (langSwitcher && langToggler) {
                const langItems = langSwitcher.querySelectorAll('.lang-item a');
                
                // Hàm tự động đổi hình cờ và class dựa trên mã ngôn ngữ
                function setLanguageUI(langCode) {
                    let flagClass = 'flag-vi';
                    if (langCode === 'en') flagClass = 'flag-en';
                    else if (langCode === 'zh-CN' || langCode === 'zh') flagClass = 'flag-zh';
                    
                    // Cập nhật cờ trên nút
                    langToggler.className = `lang-toggler ${flagClass}`;
                    
                    // Cập nhật trạng thái current-lang trong danh sách
                    langItems.forEach(item => {
                        const itemLang = item.getAttribute('data-lang');
                        if (itemLang === langCode || (langCode === 'zh-CN' && itemLang === 'zh') || (langCode === 'vi' && itemLang === 'vi')) {
                            item.parentElement.classList.add('current-lang');
                        } else {
                            item.parentElement.classList.remove('current-lang');
                        }
                    });
                }

                // 1. Khởi tạo: Đọc cookie googtrans để biết ngôn ngữ hiện tại
                let currentLangCode = 'vi'; // Mặc định
                const match = document.cookie.match(/(^|;) ?googtrans=([^;]*)(;|$)/);
                if (match && match[2]) {
                    const parts = match[2].split('|'); // googtrans thường có dạng /vi/en hoặc vi|en tùy phiên bản
                    const val = parts[0]; 
                    const subParts = val.split('/');
                    if (subParts.length === 3) {
                        currentLangCode = subParts[2]; // Lấy phần 'en' từ '/vi/en'
                    }
                }
                setLanguageUI(currentLangCode);

                // 2. Mở / Đóng menu cờ
                langToggler.addEventListener('click', function(e) {
                    e.preventDefault();
                    langSwitcher.classList.toggle('active');
                });

                // 3. Xử lý khi bấm chọn một cờ
                langItems.forEach(item => {
                    item.addEventListener('click', function(e) {
                        e.preventDefault(); // Chặn việc sinh ra dấu # trên link URL
                        
                        const selectedLang = this.getAttribute('data-lang');
                        
                        // Kích hoạt dịch qua GTranslate
                        if (typeof doGTranslate === 'function') {
                            doGTranslate(`vi|${selectedLang}`);
                        } else {
                            // Fallback cực mạnh: Tác động thẳng vào bộ chọn ẩn của Google
                            const gtCombo = document.querySelector('.goog-te-combo');
                            if (gtCombo) {
                                gtCombo.value = selectedLang;
                                gtCombo.dispatchEvent(new Event('change'));
                            }
                        }

                        // Cập nhật UI ngay lập tức cho mượt
                        setLanguageUI(selectedLang);
                        
                        // Đóng menu
                        langSwitcher.classList.remove('active');
                    });
                });

                // 4. Bấm ra ngoài khoảng trống thì đóng menu
                document.addEventListener('click', function(e) {
                    if (!langSwitcher.contains(e.target)) {
                        langSwitcher.classList.remove('active');
                    }
                });
            }

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
