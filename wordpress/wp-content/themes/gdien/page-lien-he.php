<?php
/* Template Name: Liên Hệ */
get_header(); 
?>

    <section class="contact-page-section">
        <div class="contact-page-container">
            
            <!-- Left Side: Contact Info Card -->
            <div class="contact-info-col">
                <h2 class="contact-main-title">LIÊN HỆ TƯ VẤN ĐẦU TƯ</h2>
                <p class="contact-sub-title">Doanh nghiệp quan tâm đến Cụm công nghiệp Ngọc Châu vui lòng để lại thông tin. Đội ngũ tư vấn của chúng tôi sẽ liên hệ và cung cấp giải pháp phù hợp trong thời gian sớm nhất.</p>
                
                <div class="contact-info-card">
                    <div class="info-item">
                        <i class="fas fa-phone-alt"></i>
                        <div class="info-text">
                            <strong>Hotline</strong>
                            <span>0919 833 566</span>
                        </div>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-envelope"></i>
                        <div class="info-text">
                            <strong>Email</strong>
                            <span>ccnngocchau@gmail.com</span>
                        </div>
                    </div>
                    <div class="info-item address-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <div class="info-text">
                            <strong>Địa chỉ</strong>
                            <span>Xã Ngọc Thiện, tỉnh Bắc Ninh</span>
                        </div>
                    </div>
                    <div class="info-item zalo-item">
                        <div class="zalo-text-icon">
                            <span class="zalo-circle">Zalo</span>
                            <div class="info-text">
                                <strong>Zalo tư vấn</strong>
                                <span>Quét mã QR để kết nối</span>
                            </div>
                        </div>
                        <div class="zalo-qr-box">
                            <img src="<?php echo get_template_directory_uri(); ?>/gdien mới/more/qrzalo.png" alt="QR Zalo tư vấn" class="qr-img">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Side: Form -->
            <div class="contact-form-col">
                <h3 class="form-main-title">BIỂU MẪU ĐĂNG KÝ TƯ VẤN</h3>
                <div class="new-contact-form-wrapper">
                    <?php 
                    echo do_shortcode('[contact-form-7 id="18" html_class="new-contact-form"]'); 
                    ?>
                </div>
            </div>

        </div>
    </section>


    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Form logic here if needed
    });
    </script>
    
    <style>
        /* CSS for the new contact page */
        .contact-page-section {
            padding: 120px 20px 80px;
            background-color: #ffffff;
            font-family: 'Montserrat', sans-serif;
        }
        .contact-page-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            gap: 60px;
        }
        .contact-info-col {
            flex: 1;
        }
        .contact-form-col {
            flex: 1.2;
        }
        .contact-main-title {
            color: #021b3b;
            font-weight: 800;
            font-size: 32px;
            margin-bottom: 15px;
            text-transform: uppercase;
        }
        .contact-sub-title {
            color: #333;
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 30px;
        }
        .contact-info-card {
            background-color: #0a1f3e;
            border-radius: 20px;
            padding: 40px;
            color: #ffffff;
            display: flex;
            flex-direction: column;
            gap: 25px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }
        .info-item {
            display: flex;
            align-items: center;
            gap: 20px;
        }
        .info-item i {
            font-size: 24px;
            width: 30px;
            text-align: center;
        }
        .info-text {
            display: flex;
            flex-direction: column;
        }
        .info-text strong {
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 5px;
        }
        .info-text span {
            font-size: 15px;
            font-weight: 400;
        }
        .address-item {
            transition: all 0.3s ease;
            padding: 10px;
            border-radius: 10px;
            margin-left: -10px;
        }
        .address-item:hover {
            background-color: rgba(255,255,255,0.1);
            transform: translateX(5px);
        }
        .zalo-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 10px;
            padding-top: 20px;
            border-top: 1px solid rgba(255,255,255,0.1);
        }
        .zalo-text-icon {
            display: flex;
            align-items: center;
            gap: 20px;
        }
        .zalo-circle {
            background-color: #ffffff;
            color: #0a1f3e;
            width: 45px;
            height: 45px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 14px;
        }
        .zalo-qr-box {
            text-align: center;
        }
        .qr-img {
            width: 105px;
            height: 105px;
            object-fit: contain;
            background-color: #ffffff;
            padding: 5px;
            margin: 0 auto;
            border-radius: 8px;
            display: block;
        }
        .qr-text {
            font-size: 11px;
            display: block;
            color: #aaa;
        }
        
        /* Form styling */
        .form-main-title {
            color: #0b3155;
            font-size: 22px;
            font-weight: 800;
            text-align: center;
            margin-bottom: 35px;
            text-transform: uppercase;
        }
        .new-contact-form {
            display: flex;
            flex-direction: column;
            gap: 25px;
        }
        .form-row {
            display: flex;
            gap: 20px;
        }
        .form-group {
            flex: 1;
        }
        .form-group.half-width {
            flex: 0 0 calc(50% - 10px);
        }
        .form-group.full-width {
            flex: 1 1 100%;
        }
        .new-contact-form label {
            display: block;
            font-size: 14px;
            color: #333;
            margin-bottom: 8px;
            font-weight: 500;
        }
        .new-contact-form input,
        .new-contact-form textarea {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #7c889a;
            border-radius: 3px;
            font-size: 15px;
            font-family: inherit;
            outline: none;
            transition: border-color 0.3s;
            color: #333;
            background: #fff;
        }
        .new-contact-form input::placeholder,
        .new-contact-form textarea::placeholder {
            color: #555;
        }
        .new-contact-form input:focus,
        .new-contact-form textarea:focus {
            border-color: #0b3155;
        }
        .form-submit-row {
            text-align: right;
            margin-top: 5px;
        }
        .new-contact-form .btn-submit-contact,
        .new-contact-form input[type="submit"] {
            background-color: #cda270;
            color: #fff;
            font-weight: 800;
            font-size: 15px;
            padding: 15px 30px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-transform: uppercase;
            transition: background-color 0.3s;
            width: auto; /* Ngăn nút bị kéo giãn 100% */
        }
        .new-contact-form .btn-submit-contact:hover,
        .new-contact-form input[type="submit"]:hover {
            background-color: #b88d5b;
        }

        /* Responsive */
        @media (max-width: 992px) {
            .contact-page-container {
                flex-direction: column;
                gap: 40px;
            }
        }
        @media (max-width: 768px) {
            .form-row {
                flex-direction: column;
                gap: 25px;
            }
            .form-group.half-width {
                flex: 1;
            }
            .form-submit-row {
                text-align: center;
            }
        }

        /* Thông báo trạng thái gửi Form (Giao diện nền trắng) */
        .new-contact-form .wpcf7-response-output {
            margin: 20px 0 0 0 !important;
            padding: 14px 20px !important;
            border-radius: 6px !important;
            font-size: 15px !important;
            font-weight: 600 !important;
            color: #155724 !important; /* Chữ màu đậm rõ nét */
            background-color: #d4edda !important; /* Nền xanh lá nhạt */
            border: 1.5px solid #28a745 !important;
            text-align: center !important;
            box-sizing: border-box !important;
        }
        .new-contact-form .wpcf7-response-output.wpcf7-validation-errors,
        .new-contact-form .wpcf7-response-output.wpcf7-mail-sent-ng {
            color: #721c24 !important;
            background-color: #f8d7da !important;
            border-color: #dc3545 !important;
        }
    </style>

<?php get_footer(); ?>
