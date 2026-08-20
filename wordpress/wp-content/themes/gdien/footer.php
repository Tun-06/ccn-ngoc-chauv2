    <!-- ===== FOOTER ===== -->
    <style>
        /* ===== NEW FOOTER CSS ===== */
        .footer {
            background-color: #040f21 !important;
            background-image: none !important;
            border-top: 1px solid #cba258;
            padding: 40px 0 0 0 !important;
        }
        .footer::before {
            display: none !important;
        }
        .footer-container.new-footer {
            max-width: 1400px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1.5fr 1.5fr 1.5fr 1fr;
            gap: 15px;
            padding: 0 30px;
            align-items: center;
        }
        .footer-col-new {
            padding: 0 20px;
            position: relative;
        }
        /* Separator lines */
        .footer-col-new:not(:last-child)::after {
            content: '';
            position: absolute;
            right: 0;
            top: 50%;
            transform: translateY(-50%);
            width: 1px;
            height: 100px; /* Cố định chiều cao đường gạch dọc */
            background-color: #cba258;
            opacity: 0.7;
        }
        .footer-logo-img {
            max-width: 220px;
            height: auto;
        }
        .footer-heading-new {
            color: #ffffff;
            font-family: 'Montserrat', sans-serif;
            font-size: 15px;
            font-weight: 700;
            margin-bottom: 15px;
            text-transform: uppercase;
        }
        .footer-info-list, .footer-contact-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .footer-info-list li {
            color: #ffffff;
            font-size: 13px;
            margin-bottom: 8px;
            line-height: 1.6;
        }
        .footer-contact-list li {
            color: #ffffff;
            font-size: 13px;
            margin-bottom: 12px;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .footer-contact-list li i {
            width: 16px;
            text-align: center;
            font-size: 16px;
        }
        .new-social-icons {
            display: flex;
            gap: 12px;
        }
        .circle-icon {
            width: 38px;
            height: 38px;
            border-radius: 50%;
            border: 1px solid #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #ffffff;
            font-size: 16px;
            transition: all 0.3s ease;
            text-decoration: none;
        }
        .circle-icon:hover {
            background-color: #cba258;
            border-color: #cba258;
            color: #ffffff;
        }
        .zalo-icon span {
            font-size: 11px;
            font-weight: bold;
            font-family: sans-serif;
        }
        .footer-bottom.new-footer-bottom {
            border-top: 1px solid #cba258;
            margin-top: 40px;
            padding: 20px 30px;
            text-align: center;
        }
        
        /* Mobile responsive */
        @media (max-width: 992px) {
            .footer-container.new-footer {
                grid-template-columns: 1fr 1fr;
                gap: 40px 0;
            }
            .footer-col-new:nth-child(2)::after {
                display: none;
            }
            .footer-col-new:nth-child(1)::after,
            .footer-col-new:nth-child(3)::after {
                height: 80px;
            }
        }
        @media (max-width: 768px) {
            .footer-container.new-footer {
                grid-template-columns: 1fr;
                gap: 30px;
                text-align: center;
            }
            .footer-col-new::after {
                display: none !important;
            }
            .footer-logo-col {
                display: flex;
                justify-content: center;
            }
            .footer-contact-list li {
                justify-content: center;
            }
            .new-social-icons {
                justify-content: center;
            }
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
            overflow-y: auto !important; /* Cho phép lướt dọc nếu popup quá dài */
            overflow-x: hidden !important;
            max-height: 90vh !important; /* Đảm bảo popup không dài hơn màn hình */
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
            font-family: inherit;
        }

        .lead-popup-form textarea {
            min-height: 85px !important;
            resize: vertical;
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
            margin: 15px 0 0 0 !important;
            padding: 12px 15px !important;
            border-radius: 8px !important;
            font-size: 13px !important;
            color: #ffffff !important;
            background: rgba(40, 167, 69, 0.25) !important;
            border: 1.5px solid #28a745 !important;
            text-align: center !important;
        }
        .lead-popup-form .wpcf7-response-output.wpcf7-validation-errors,
        .lead-popup-form .wpcf7-response-output.wpcf7-mail-sent-ng {
            color: #ffcccc !important;
            background: rgba(220, 53, 69, 0.25) !important;
            border-color: #dc3545 !important;
        }
    </style>
    <footer class="footer" id="footer">
        <div class="footer-container new-footer">
            <!-- Col 1: Logo -->
            <div class="footer-col-new footer-logo-col">
                <img src="<?php echo get_template_directory_uri(); ?>/gdien mới/more/logo new.png" alt="WIN HOLDINGS CỤM CÔNG NGHIỆP NGỌC CHÂU" class="footer-logo-img">
            </div>
            
            <!-- Col 2: Info text -->
            <div class="footer-col-new footer-info-col">
                <h4 class="footer-heading-new">CỤM CÔNG NGHIỆP NGỌC CHÂU</h4>
                <ul class="footer-info-list">
                    <li>Hạ tầng sản xuất hiện đại</li>
                    <li>Pháp lý minh bạch – Đồng hành bền vững</li>
                </ul>
            </div>
            
            <!-- Col 3: Contact -->
            <div class="footer-col-new footer-contact-col">
                <h4 class="footer-heading-new">THÔNG TIN LIÊN HỆ:</h4>
                <ul class="footer-contact-list">
                    <li><i class="fas fa-map-marker-alt"></i> Xã Ngọc Thiện, tỉnh Bắc Ninh</li>
                    <li><i class="fas fa-phone-alt"></i> 0919.833.566</li>
                    <li><i class="fas fa-envelope"></i> ccnngocchau@gmail.com</li>
                </ul>
            </div>
            
            <!-- Col 4: Socials -->
            <div class="footer-col-new footer-social-col">
                <h4 class="footer-heading-new">THEO DÕI CHÚNG TÔI</h4>
                <div class="new-social-icons">
                    <a href="#" class="circle-icon" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="circle-icon" aria-label="Website"><i class="fas fa-globe"></i></a>
                    <a href="#" class="circle-icon zalo-icon" aria-label="Zalo"><span>Zalo</span></a>
                </div>
            </div>
        </div>
        <div class="footer-bottom new-footer-bottom">
            &nbsp;
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

            // B. HIỆN NÚT SUBMIT
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
            
            // Đảm bảo tất cả các thẻ div/p trong form hiển thị đầy đủ
            const allDivs = popupForm.querySelectorAll('div, p');
            allDivs.forEach(div => {
                div.classList.remove('d-none', 'hidden');
                if (div.style.display === 'none') {
                    div.style.setProperty('display', 'block', 'important');
                }
            });
        }

        // 2. HIỂN THỊ POPUP SAU 5 GIÂY HOẶC KHI CLICK NÚT NHẬN HỒ SƠ
        const popup = document.getElementById('leadPopupOverlay');
        const closeBtn = document.getElementById('leadPopupClose');
        const popupBtns = document.querySelectorAll('a[href="#nhan-ho-so"]');

        function showPopup(e) {
            if (e) e.preventDefault();
            if (popup) {
                popup.classList.add('show');
            }
        }

        if (popup && closeBtn) {
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

        // Bấm các nút Nhận hồ sơ thì mở popup
        popupBtns.forEach(btn => {
            btn.addEventListener('click', showPopup);
        });

        // Tự động mở sau 5 giây (chỉ 1 lần mỗi session)
        if (!sessionStorage.getItem('leadPopupShown')) {
            setTimeout(function() {
                showPopup();
                sessionStorage.setItem('leadPopupShown', 'true');
            }, 5000);
        }
    });
    </script>

    <?php wp_footer(); ?>
</body>
</html>
