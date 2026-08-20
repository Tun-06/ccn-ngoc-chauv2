<?php
/* Template Name: Vị Trí */
get_header(); 
?>

<div class="vitri-page-wrapper">
    <div class="vitri-container">
        
        <!-- Header -->
        <div class="vitri-header reveal">
            <h1 class="vitri-title">VỊ TRÍ CHIẾN LƯỢC<br>TÂM ĐIỂM KẾT NỐI</h1>
        </div>

        <!-- Intro Card -->
        <div class="vitri-intro-card reveal">
            <div class="vitri-intro-icon">
                <i class="fas fa-map-marker-alt"></i>
            </div>
            <p class="vitri-intro-text">
                CCN Ngọc Châu tọa lạc tại xã Ngọc Thiện – Tỉnh Bắc Ninh, sở hữu vị trí chiến lược, dễ dàng kết nối với các tuyến giao thông huyết mạch và các khu vực lân cận.
            </p>
        </div>

        <!-- Main Content: Map & List -->
        <div class="vitri-content-row">
            <!-- Bản đồ thay thế ô đỏ -->
            <div class="vitri-map-col reveal">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7431.120174987884!2d106.0773457755684!3d21.36784046102284!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31351411dd6bab8f%3A0xf986972467384ba4!2zVMOibiBDaMOidSBOZ-G7jWMgQ2jDonUgVMOibiBZw6pu!5e0!3m2!1svi!2s!4v1779437197865!5m2!1svi!2s" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <!-- Danh sách kết nối vùng -->
            <div class="vitri-list-col reveal">
                <ul class="vitri-connect-list">
                    <li><i class="fas fa-archway"></i> <span><strong>VÀNH ĐAI 5:</strong> <em>3 KM</em></span></li>
                    <li><i class="fas fa-road"></i> <span><strong>QUỐC LỘ 17:</strong> <em>10 KM</em></span></li>
                    <li><i class="fas fa-road"></i> <span><strong>QUỐC LỘ 37:</strong> <em>10 KM</em></span></li>
                    <li><i class="fas fa-archway"></i> <span><strong>VÀNH ĐAI 4:</strong> <em>16 KM</em></span></li>
                    <li><i class="fas fa-plane"></i> <span><strong>SÂN BAY QUỐC TẾ NỘI BÀI:</strong> <em>45 KM</em></span></li>
                    <li><i class="fas fa-plane"></i> <span><strong>SÂN BAY QUỐC TẾ GIA BÌNH:</strong> <em>58 KM</em></span></li>
                    <li><i class="fas fa-ship"></i> <span><strong>CẢNG HẢI PHÒNG:</strong> <em>107 KM</em></span></li>
                    <li><i class="fas fa-truck-moving"></i> <span><strong>CỬA KHẨU QUỐC TẾ HỮU NGHỊ:</strong> <em>128 KM</em></span></li>
                    <li><i class="fas fa-truck-moving"></i> <span><strong>CỬA KHẨU QUỐC TẾ MÓNG CÁI:</strong> <em>342 KM</em></span></li>
                </ul>
            </div>
        </div>

    </div>
</div>

<style>
/* Reset & Base cho trang Vị trí */
.vitri-page-wrapper {
    background-color: #ffffff;
    padding: 140px 20px 100px; /* Offset cho fixed header */
    font-family: 'Montserrat', sans-serif;
}

.vitri-container {
    max-width: 1300px;
    margin: 0 auto;
}

/* Header */
.vitri-header {
    margin-bottom: 40px;
}
.vitri-title {
    color: #0b3155; /* Xanh đen chủ đạo */
    font-size: clamp(32px, 4vw, 48px);
    font-weight: 900;
    line-height: 1.3;
    text-transform: uppercase;
    letter-spacing: 1px;
}

/* Intro Card */
.vitri-intro-card {
    display: flex;
    align-items: center;
    background: #ffffff;
    border: 1px solid rgba(0,0,0,0.08);
    border-radius: 20px;
    padding: 25px 40px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.03);
    margin-bottom: 50px;
    max-width: 900px;
    gap: 30px;
    transition: transform 0.3s ease;
}
.vitri-intro-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 40px rgba(0,0,0,0.06);
}
.vitri-intro-icon {
    font-size: 45px;
    color: #0b3155;
    position: relative;
    padding-bottom: 12px;
}
.vitri-intro-icon::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: -5px;
    right: -5px;
    height: 4px;
    background: #0b3155;
    border-radius: 2px;
}
.vitri-intro-text {
    font-size: 18px;
    color: #444;
    line-height: 1.6;
    margin: 0;
    font-weight: 500;
}

/* Content Row */
.vitri-content-row {
    display: flex;
    gap: 60px;
    align-items: stretch;
}

/* Map Col (Thay thế ô đỏ) */
.vitri-map-col {
    flex: 1.6; /* Chiếm nhiều không gian hơn */
    background: #ddd; /* Màu nền chờ loading */
    border-radius: 25px;
    overflow: hidden;
    min-height: 500px;
    box-shadow: 0 15px 40px rgba(0,0,0,0.1);
}
.vitri-map-col iframe {
    width: 100%;
    height: 100%;
    display: block;
    min-height: 500px;
}

/* List Col */
.vitri-list-col {
    flex: 1;
    display: flex;
    flex-direction: column;
    justify-content: center; /* Căn giữa theo chiều dọc */
}
.vitri-connect-list {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    flex-direction: column;
    gap: 28px;
}
.vitri-connect-list li {
    display: flex;
    align-items: center;
    gap: 20px;
    font-size: 16px;
    color: #0b3155;
    transition: transform 0.3s ease;
}
.vitri-connect-list li:hover {
    transform: translateX(10px);
}
.vitri-connect-list i {
    font-size: 26px;
    width: 35px;
    text-align: center;
    color: #0b3155;
}
.vitri-connect-list span {
    display: flex;
    align-items: center;
    gap: 8px;
}
.vitri-connect-list strong {
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}
.vitri-connect-list em {
    font-style: italic;
    font-weight: 500;
    text-transform: uppercase;
    color: #555;
}

/* Responsive */
@media (max-width: 1200px) {
    .vitri-content-row {
        gap: 40px;
    }
}

@media (max-width: 992px) {
    .vitri-content-row {
        flex-direction: column;
    }
    .vitri-map-col {
        width: 100%;
        min-height: 400px;
    }
    .vitri-map-col iframe {
        min-height: 400px;
    }
    .vitri-intro-card {
        flex-direction: column;
        text-align: center;
        padding: 30px 20px;
        gap: 15px;
    }
    .vitri-intro-icon::after {
        left: 50%;
        transform: translateX(-50%);
        width: 50px;
        right: auto;
    }
}
</style>

<?php get_footer(); ?>
