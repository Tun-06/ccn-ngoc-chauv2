<?php
/* Template Name: Quy Hoạch - Hạ Tầng */
get_header(); 
$img_dir = get_template_directory_uri() . '/gdien mới/quy hoạch';
?>

<div class="quyhoach-page-wrapper">
    <!-- Banner Section -->
    <section class="qh-banner-section">
        <img src="<?php echo $img_dir; ?>/cong bs 2.png" alt="Cụm công nghiệp Ngọc Châu banner" class="qh-banner-img">
    </section>

    <!-- Content Section -->
    <section class="qh-content-section">
        <div class="qh-container">
            <div class="qh-header">
                <h2>QUY HOẠCH ĐỒNG BỘ<br>HẠ TẦNG SẴN SÀNG CHO SẢN XUẤT</h2>
                <p>CCN Ngọc Châu được quy hoạch với cơ cấu sử dụng đất rõ ràng, phân khu chức năng hợp lý, đáp ứng nhu cầu đầu tư, xây dựng và vận hành nhà máy của doanh nghiệp thứ cấp.</p>
            </div>

            <div class="qh-split-layout">
                <!-- Left Column -->
                <div class="qh-left-col">
                    <h3 class="qh-col-title">CƠ CẤU SỬ DỤNG ĐẤT</h3>
                    
                    <div class="qh-chart-box">
                        <div class="qh-chart-img-wrap">
                            <img src="<?php echo $img_dir; ?>/Layer 1.png" alt="Biểu đồ cơ cấu sử dụng đất" class="qh-chart-img">
                            <div class="qh-chart-center-text">
                                <span class="qh-chart-label">TỔNG DIỆN TÍCH</span>
                                <span class="qh-chart-value">750.000 m²</span>
                            </div>
                        </div>
                        <div class="qh-chart-legend">
                            <div class="legend-item">
                                <span class="dot" style="background-color: #508cf3;"></span>
                                <div class="legend-text">
                                    <strong>ĐẤT CÔNG NGHIỆP</strong>
                                    <span>488.962 m² (65.19%)</span>
                                </div>
                            </div>
                            <div class="legend-item">
                                <span class="dot" style="background-color: #5dbf68;"></span>
                                <div class="legend-text">
                                    <strong>ĐẤT GIAO THÔNG</strong>
                                    <span>126.496 m² (16.87%)</span>
                                </div>
                            </div>
                            <div class="legend-item">
                                <span class="dot" style="background-color: #f28b46;"></span>
                                <div class="legend-text">
                                    <strong>ĐẤT CÂY XANH, MẶT NƯỚC</strong>
                                    <span>95.935 m² (12.79%)</span>
                                </div>
                            </div>
                            <div class="legend-item">
                                <span class="dot" style="background-color: #f5d44f;"></span>
                                <div class="legend-text">
                                    <strong>ĐẤT HÀNH CHÍNH, DỊCH VỤ</strong>
                                    <span>30.610 m² (4.08%)</span>
                                </div>
                            </div>
                            <div class="legend-item">
                                <span class="dot" style="background-color: #a281e8;"></span>
                                <div class="legend-text">
                                    <strong>ĐẤT HẠ TẦNG KỸ THUẬT</strong>
                                    <span>7.997 m² (1,07%)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <p class="qh-note">Thông tin mang tính chất tham khảo tại thời điểm phát hành, chi tiết theo hồ sơ quy hoạch được cơ quan có thẩm quyền phê duyệt.</p>
                </div>

                <!-- Right Column -->
                <div class="qh-right-col">
                    <h3 class="qh-col-title">HẠ TẦNG KỸ THUẬT</h3>
                    
                    <div class="qh-features-list">
                        <div class="qh-feature">
                            <div class="qh-icon"><img src="<?php echo $img_dir; ?>/Vector Smart Object-5.png" alt="Icon Giao thông"></div>
                            <div class="qh-feature-text">
                                <h4>GIAO THÔNG NỘI KHU</h4>
                                <p>Đường nội bộ được quy hoạch đồng bộ, đáp ứng nhu cầu lưu thông của xe container và phương tiện vận chuyển hàng hóa.</p>
                            </div>
                        </div>
                        <div class="qh-feature">
                            <div class="qh-icon"><img src="<?php echo $img_dir; ?>/Vector Smart Object-4.png" alt="Icon Hệ thống điện"></div>
                            <div class="qh-feature-text">
                                <h4>HỆ THỐNG ĐIỆN</h4>
                                <p>Hạ tầng điện trung thế được đầu tư đồng bộ, đáp ứng nhu cầu sản xuất và vận hành của doanh nghiệp.</p>
                            </div>
                        </div>
                        <div class="qh-feature">
                            <div class="qh-icon"><img src="<?php echo $img_dir; ?>/Vector Smart Object-2.png" alt="Icon Cấp nước"></div>
                            <div class="qh-feature-text">
                                <h4>HỆ THỐNG CẤP NƯỚC</h4>
                                <p>Nguồn cấp nước ổn định, đáp ứng nhu cầu sản xuất và sinh hoạt.</p>
                            </div>
                        </div>
                        <div class="qh-feature">
                            <div class="qh-icon"><img src="<?php echo $img_dir; ?>/Vector Smart Object-3.png" alt="Icon Xử lý nước thải"></div>
                            <div class="qh-feature-text">
                                <h4>XỬ LÝ NƯỚC THẢI</h4>
                                <p>Hệ thống thu gom và xử lý nước thải tập trung theo quy định về bảo vệ môi trường.</p>
                            </div>
                        </div>
                        <div class="qh-feature">
                            <div class="qh-icon"><img src="<?php echo $img_dir; ?>/Vector Smart Object-1.png" alt="Icon PCCC"></div>
                            <div class="qh-feature-text">
                                <h4>HỆ THỐNG PHÓNG CHÁY CHỮA CHÁY HIỆN ĐẠI</h4>
                                <p>Trang bị đầy đủ bình chữa cháy và các thiết bị chuyên dụng.</p>
                            </div>
                        </div>
                        <div class="qh-feature">
                            <div class="qh-icon"><img src="<?php echo $img_dir; ?>/Vector Smart Object.png" alt="Icon Viễn thông"></div>
                            <div class="qh-feature-text">
                                <h4>VIỄN THÔNG - INTERNET</h4>
                                <p>Hạ tầng viễn thông và Internet tốc độ cao được đầu tư đồng bộ, phục vụ hiệu quả hoạt động sản xuất và quản lý doanh nghiệp.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<style>
/* Reset & Base */
.quyhoach-page-wrapper {
    font-family: 'Montserrat', sans-serif;
    color: #333;
    background-color: #f4f5f7;
}

/* Banner Section */
.qh-banner-section {
    width: 100%;
    margin-top: 60px; /* Adjust if your header is fixed */
}
.qh-banner-img {
    width: 100%;
    height: auto;
    display: block;
}

/* Content Section */
.qh-content-section {
    padding: 40px 20px 50px; /* Reduced padding */
}
.qh-container {
    max-width: 1300px;
    margin: 0 auto;
}

/* Header */
.qh-header {
    margin-bottom: 30px; /* Reduced margin */
}
.qh-header h2 {
    color: #0b3155;
    font-size: 32px; /* Smaller font */
    font-weight: 800;
    line-height: 1.2;
    margin-bottom: 10px; /* Reduced margin */
}
.qh-header p {
    color: #444;
    font-size: 15px; /* Smaller font */
    max-width: 800px;
    line-height: 1.5;
}

/* Split Layout */
.qh-split-layout {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
}
.qh-left-col {
    width: 48%;
    padding-right: 40px;
    border-right: 1px solid #c9cdd2;
}
.qh-right-col {
    width: 48%;
    padding-left: 40px;
}
.qh-col-title {
    color: #0b3155;
    font-size: 20px; /* Smaller font */
    font-weight: 800;
    margin-bottom: 25px; /* Reduced margin */
    text-transform: uppercase;
}

/* Left Column - Chart */
.qh-chart-box {
    display: flex;
    align-items: center;
    gap: 20px; /* Reduced gap */
    margin-bottom: 25px; /* Reduced margin */
}
.qh-chart-img-wrap {
    flex: 1;
    max-width: 250px; /* Smaller chart */
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
}
.qh-chart-img {
    width: 100%;
    height: auto;
    display: block;
}
.qh-chart-center-text {
    position: absolute;
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}
.qh-chart-label {
    font-size: 10px;
    color: #666;
    font-weight: 700;
    text-transform: uppercase;
    margin-bottom: 2px;
}
.qh-chart-value {
    font-size: 16px;
    color: #0b3155;
    font-weight: 800;
}
.qh-chart-legend {
    flex: 1;
    display: flex;
    flex-direction: column;
    gap: 15px; /* Reduced gap */
}
.legend-item {
    display: flex;
    align-items: center;
    gap: 15px;
}
.legend-item .dot {
    width: 15px; /* Smaller dot */
    height: 15px;
    border-radius: 50%;
    flex-shrink: 0;
}
.legend-text {
    display: flex;
    flex-direction: column;
}
.legend-text strong {
    color: #0b3155;
    font-size: 13px; /* Smaller font */
    font-weight: 700;
    text-transform: uppercase;
}
.legend-text span {
    color: #0b3155;
    font-size: 13px; /* Smaller font */
    font-weight: 700;
}
.qh-note {
    color: #666;
    font-size: 13px;
    font-style: italic;
    line-height: 1.5;
}

/* Right Column - Features */
.qh-features-list {
    display: flex;
    flex-direction: column;
    gap: 20px; /* Reduced gap between items */
}
.qh-feature {
    display: flex;
    align-items: flex-start;
    gap: 15px;
}
.qh-icon {
    width: 35px; /* Smaller icon */
    flex-shrink: 0;
}
.qh-icon img {
    width: 100%;
    height: auto;
    display: block;
}
.qh-feature-text h4 {
    color: #0b3155;
    font-size: 14px; /* Smaller font */
    font-weight: 800;
    margin-bottom: 4px; /* Reduced margin */
    margin-top: 0;
}
.qh-feature-text p {
    color: #333;
    font-size: 13px; /* Smaller font */
    line-height: 1.4;
    margin: 0;
}

/* Responsive */
@media (max-width: 1024px) {
    .qh-header h2 { font-size: 32px; }
    .qh-split-layout {
        flex-direction: column;
    }
    .qh-left-col {
        width: 100%;
        padding-right: 0;
        border-right: none;
        border-bottom: 1px solid #c9cdd2;
        padding-bottom: 40px;
        margin-bottom: 40px;
    }
    .qh-right-col {
        width: 100%;
        padding-left: 0;
    }
}

@media (max-width: 768px) {
    .qh-header h2 { font-size: 28px; }
    .qh-chart-box {
        flex-direction: column;
        align-items: flex-start;
    }
    .qh-chart-img-wrap {
        max-width: 100%;
        margin: 0 auto;
    }
}
</style>

<?php get_footer(); ?>
