    <!-- ===== FOOTER ===== -->
    <style>
        /* Bố cục Footer trên điện thoại: 2 cột (Trái: Về chúng tôi, Dự án, Tin tức | Phải: Hỗ trợ, Liên hệ) */
        @media (max-width: 768px) {
            .footer-links {
                display: grid !important;
                grid-template-columns: 1fr 1fr !important; /* Chia 2 cột đều nhau */
                gap: 15px 10px !important; 
                padding: 0 15px; /* Thêm lề cho đỡ sát viền đt */
            }
            .footer-col {
                margin-bottom: 10px !important;
                text-align: left !important; /* Căn trái cho dễ đọc */
            }
            /* Cột 1 (Bên trái) */
            .footer-col:nth-child(1) { grid-column: 1; grid-row: 1; } /* Về chúng tôi */
            .footer-col:nth-child(2) { grid-column: 1; grid-row: 2; } /* Dự án */
            .footer-col:nth-child(5) { grid-column: 1; grid-row: 3; text-align: left !important; } /* Liên hệ chuyển sang trái */
            
            /* Cột 2 (Bên phải) */
            .footer-col:nth-child(4) { grid-column: 2; grid-row: 1; padding-left: 40px !important; } /* Hỗ trợ dịch sang phải 40px */
            .footer-col:nth-child(3) { grid-column: 2; grid-row: 2; padding-left: 40px !important; } /* Tin tức dịch sang phải 40px */
        }

        /* ===== LEAD POPUP CSS (Hiện sau 10s) ===== */
        .lead-popup-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(10, 25, 47, 0.85); /* Nền xanh đen mờ đồng bộ web */
            backdrop-filter: blur(5px);
            z-index: 100000;
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            visibility: hidden;
            transition: all 0.5s ease;
        }
        .lead-popup-overlay.show {
            opacity: 1;
            visibility: visible;
        }
        .lead-popup-container {
            background: linear-gradient(145deg, #0f2041 0%, #1a365d 100%) !important; /* Màu xanh dương chuẩn giao diện */
            width: 90% !important;
            max-width: 400px !important; /* KHÓA CHẶT CHIỀU RỘNG */
            border-radius: 20px !important;
            padding: 30px 25px !important;
            box-shadow: 0 20px 50px rgba(0,0,0,0.5) !important;
            border: 1px solid rgba(255,255,255,0.1) !important;
            position: relative !important;
            transform: translateY(50px);
            transition: all 0.5s ease;
            overflow: hidden !important; /* Ép content không được lòi ra ngoài */
        }
        .lead-popup-overlay.show .lead-popup-container {
            transform: translateY(0);
        }
        .lead-popup-close {
            position: absolute;
            top: 15px;
            right: 15px;
            color: #fff;
            font-size: 20px;
            cursor: pointer;
            width: 35px;
            height: 35px;
            border: 2px solid rgba(255,255,255,0.4);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s;
            z-index: 20; /* Luôn nằm trên cùng */
        }
        .lead-popup-close:hover {
            color: #f97316;
            border-color: #f97316;
            transform: rotate(90deg);
        }
        .lead-popup-header {
            text-align: center;
            margin-bottom: 20px;
        }
        .lead-popup-header h3 {
            color: #f97316 !important; /* Màu cam thương hiệu */
            font-size: 22px !important;
            margin-bottom: 10px !important;
            font-weight: 700 !important;
            text-transform: uppercase !important;
        }
        .lead-popup-header p {
            color: #e2e8f0 !important;
            font-size: 14px !important;
            line-height: 1.5 !important;
            margin-bottom: 0 !important;
        }
        
        /* Chỉnh style form Contact Form 7 trong Popup */
        /* --- ÉP FORM THÀNH 1 CỘT (Khắc phục lỗi chia 2 cột giống trang Liên Hệ) --- */
        .lead-popup-form form {
            display: flex !important;
            flex-direction: column !important;
            width: 100% !important;
        }
        /* Bẻ gãy toàn bộ cấu trúc Grid/Flex/Float của Bootstrap bên trong popup */
        .lead-popup-form .row {
            display: flex !important;
            flex-direction: column !important;
            width: 100% !important;
            margin: 0 !important;
        }
        .lead-popup-form [class*="col-"] {
            display: flex !important;
            flex-direction: column !important;
            width: 100% !important;
            max-width: 100% !important;
            flex: none !important;
            float: none !important;
            margin: 0 !important;
            padding: 0 !important;
        }

        .lead-popup-form input[type="text"],
        .lead-popup-form input[type="email"],
        .lead-popup-form input[type="tel"],
        .lead-popup-form textarea {
            width: 100% !important;
            padding: 12px 15px !important;
            margin-bottom: 12px !important;
            border: none !important;
            border-radius: 8px !important;
            background: rgba(255,255,255,0.95) !important;
            font-size: 14px !important;
            box-sizing: border-box !important;
            color: #333 !important;
        }
        
        /* Ẩn triệt để Textarea (Nội dung) */
        .lead-popup-form textarea,
        .lead-popup-form .wpcf7-textarea {
            display: none !important;
        }

        .lead-popup-form label,
        .lead-popup-form .wpcf7-form-control-wrap {
            color: #fff !important;
            font-size: 12px !important;
            font-weight: 700 !important;
            display: block !important;
            margin-bottom: 5px !important;
            text-transform: uppercase !important;
        }

        /* Nút Submit */
        .lead-popup-form input[type="submit"] {
            width: 100% !important;
            background: #f97316 !important; /* Nút Gửi màu cam */
            color: #fff !important;
            border: none !important;
            border-radius: 25px !important;
            padding: 14px !important;
            font-size: 16px !important;
            font-weight: bold !important;
            cursor: pointer !important;
            transition: background 0.3s !important;
            box-shadow: 0 5px 15px rgba(249, 115, 22, 0.4) !important;
            margin-top: 15px !important;
            display: block !important;
            position: relative !important;
            visibility: visible !important;
            opacity: 1 !important;
        }
        .lead-popup-form input[type="submit"]:hover {
            background: #ea580c !important;
        }
        .lead-popup-form .wpcf7-not-valid-tip {
            font-size: 12px !important;
            margin-top: -8px !important;
            margin-bottom: 10px !important;
            color: #ff4d4f !important;
        }
        .lead-popup-form .wpcf7-response-output {
            margin: 10px 0 0 0 !important;
            padding: 10px !important;
            border-radius: 8px !important;
            font-size: 13px !important;
        }
    </style>
    <footer class="footer" id="footer">
        <div class="footer-container">
            <!-- Social Icons -->
            <div class="footer-social">
                <a href="#" class="social-icon" id="social-facebook" aria-label="Facebook">
                    <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                        <polygon points="50,5 90,27.5 90,72.5 50,95 10,72.5 10,27.5" />
                    </svg>
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#" class="social-icon" id="social-linkedin" aria-label="LinkedIn">
                    <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                        <polygon points="50,5 90,27.5 90,72.5 50,95 10,72.5 10,27.5" />
                    </svg>
                    <i class="fab fa-linkedin-in"></i>
                </a>
                <a href="#" class="social-icon" id="social-youtube" aria-label="YouTube">
                    <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                        <polygon points="50,5 90,27.5 90,72.5 50,95 10,72.5 10,27.5" />
                    </svg>
                    <i class="fab fa-youtube"></i>
                </a>
            </div>

            <!-- Footer Links -->
            <div class="footer-links">
                <div class="footer-col">
                    <h4 class="footer-heading">Về chúng tôi</h4>
                    <ul>
                        <li><a href="<?php echo home_url('/gioi-thieu'); ?>">Giới thiệu công ty</a></li>
                        <li><a href="#">Tầm nhìn & Sứ mệnh</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4 class="footer-heading">Dự án</h4>
                    <ul>
                        <li><a href="<?php echo home_url('/quy-trinh-dau-tu'); ?>">Quy trình đầu tư</a></li>
                        <li><a href="https://tour360.xo.je/?i=1" target="_blank">Tham quan dự án</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4 class="footer-heading">Tin tức</h4>
                    <ul>
                        <li><a href="<?php echo home_url('/tin-tuc'); ?>">Tin tức mới nhất</a></li>
                        <li><a href="#">Sự kiện</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4 class="footer-heading">Hỗ trợ</h4>
                    <ul>
                        <li><a href="<?php echo home_url('/quy-trinh-dau-tu'); ?>">Quy trình đầu tư</a></li>
                        <li><a href="<?php echo home_url('/lien-he'); ?>">Liên hệ</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4 class="footer-heading">Liên hệ</h4>
                    <ul>
                        <li><a href="#">Hotline: 0123 456 789</a></li>
                        <li><a href="#">Email: info@ngocchau.vn</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> Win Holdings - Cụm Công Nghiệp Ngọc Châu. All rights reserved.</p>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <button id="back-to-top" class="back-to-top" aria-label="Lên đầu trang">
        <i class="fas fa-chevron-up"></i>
    </button>

    <!-- ===== LEAD POPUP ===== -->
    <div id="leadPopupOverlay" class="lead-popup-overlay">
        <div class="lead-popup-container" style="overflow-y: auto; max-height: 90vh;">
            <span class="lead-popup-close" id="leadPopupClose">&times;</span>
            <div class="lead-popup-header">
                <h3>Nhận Thông Tin Dự Án</h3>
                <p>Quý khách quan tâm đến Cụm Công Nghiệp Ngọc Châu vui lòng để lại thông tin để chuyên viên tư vấn liên hệ ngay.</p>
            </div>
            <div class="lead-popup-body">
                <!-- Nhúng lại chính xác Form Liên Hệ ID 18 để lưu vào Flamingo -->
                <?php echo do_shortcode('[contact-form-7 id="18" html_class="lead-popup-form"]'); ?>
            </div>
        </div>
    </div>

    <!-- SCRIPT HIỂN THỊ POPUP VÀ XỬ LÝ GIAO DIỆN -->
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        
        // 1. CHUẨN HÓA GIAO DIỆN FORM TRONG POPUP BẰNG JS
        const popupForm = document.querySelector('.lead-popup-form');
        if (popupForm) {
            // A. Loại bỏ các class chia cột của Bootstrap để form xếp dọc 100%
            const gridElements = popupForm.querySelectorAll('.col-md-6, .col-sm-12, .row, .col, .col-md-12');
            gridElements.forEach(el => {
                el.className = ''; // Xóa sạch mọi class lưới
                el.style.setProperty('width', '100%', 'important');
                el.style.setProperty('display', 'block', 'important');
                el.style.setProperty('float', 'none', 'important');
            });

            // B. Tìm và ẩn CHÍNH XÁC mục "THÔNG TIN KHÁC" và "NỘI DUNG"
            // CSS dùng !important nên JS cũng phải dùng setProperty(..., 'important')
            const allLabels = popupForm.querySelectorAll('label, span, div, p');
            allLabels.forEach(el => {
                if (el.children.length === 0 || el.tagName === 'LABEL') {
                    if (el.textContent.toUpperCase().includes('THÔNG TIN KHÁC') || el.textContent.toUpperCase().includes('NỘI DUNG')) {
                        el.style.setProperty('display', 'none', 'important');
                        
                        // Ẩn ô input/textarea ngay sát nó (nếu có)
                        const nextSib = el.nextElementSibling;
                        if (nextSib) nextSib.style.setProperty('display', 'none', 'important');
                        
                        // Ẩn thẻ <p> hoặc <div> chứa TRỰC TIẾP nó (chỉ ẩn nếu thẻ cha này không chứa quá nhiều elements)
                        const parent = el.parentElement;
                        if (parent && parent.tagName !== 'FORM' && parent.children.length <= 3) {
                            parent.style.setProperty('display', 'none', 'important');
                        }
                    }
                }
            });

            // C. Ẩn toàn bộ textarea cho an toàn (chỉ lấy 3 trường)
            const textareas = popupForm.querySelectorAll('textarea');
            textareas.forEach(ta => {
                ta.style.setProperty('display', 'none', 'important');
                let wrap = ta.closest('.wpcf7-form-control-wrap');
                if (wrap) wrap.style.setProperty('display', 'none', 'important');
            });

            // D. HIỆN NÚT SUBMIT
            const submitBtns = popupForm.querySelectorAll('input[type="submit"], button[type="submit"], .wpcf7-submit');
            submitBtns.forEach(btn => {
                btn.style.setProperty('display', 'block', 'important');
                btn.style.setProperty('visibility', 'visible', 'important');
                btn.style.setProperty('opacity', '1', 'important');
                btn.style.setProperty('width', '100%', 'important');
                
                // Đảm bảo thẻ bọc nút cũng hiện
                let wrap = btn.parentElement;
                while (wrap && wrap.tagName !== 'FORM') {
                    wrap.style.setProperty('display', 'block', 'important');
                    wrap = wrap.parentElement;
                }
            });
            
            // Xóa hết class dính líu đến ẩn của các thẻ cha (trừ cái nào chứa chữ bị ẩn)
            const allDivs = popupForm.querySelectorAll('div, p');
            allDivs.forEach(div => {
                if(div.textContent.toUpperCase().includes('THÔNG TIN KHÁC') || div.textContent.toUpperCase().includes('NỘI DUNG')) return; 
                div.classList.remove('d-none', 'hidden');
                if (div.style.display === 'none') {
                    div.style.setProperty('display', 'block', 'important');
                }
            });
        }

        // 2. HIỂN THỊ POPUP SAU 10 GIÂY
        if (!sessionStorage.getItem('leadPopupShown')) {
            setTimeout(function() {
                const popup = document.getElementById('leadPopupOverlay');
                const closeBtn = document.getElementById('leadPopupClose');
                
                if (popup) {
                    popup.classList.add('show');
                    sessionStorage.setItem('leadPopupShown', 'true');
                    
                    closeBtn.addEventListener('click', function() {
                        popup.classList.remove('show');
                    });
                    popup.addEventListener('click', function(e) {
                        if (e.target === popup) {
                            popup.classList.remove('show');
                        }
                    });
                    document.addEventListener('keydown', function(e) {
                        if (e.key === 'Escape') popup.classList.remove('show');
                    });
                }
            }, 10000);
        }
    });
    </script>

    <?php wp_footer(); ?>
</body>
</html>
