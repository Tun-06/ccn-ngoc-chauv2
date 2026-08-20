<?php
/* Template Name: Tổng Quan */
get_header(); 
$img_dir = get_template_directory_uri() . '/gdien mới/tổng quan';
?>

<div class="tongquan-page-wrapper">
    <!-- Section 1: Giới thiệu -->
    <section class="tq-intro-section">
        <div class="tq-intro-bg" style="background-image: url('<?php echo $img_dir; ?>/5.png');"></div>
        <div class="tq-container">
            <div class="tq-intro-content">
                <h2 class="tq-title">GIỚI THIỆU<br>CỤM CÔNG NGHIỆP NGỌC CHÂU</h2>
                <p class="tq-desc">Cụm công nghiệp Ngọc Châu là dự án hạ tầng công nghiệp được định hướng phát triển theo mô hình hiện đại, phục vụ nhu cầu sản xuất của các doanh nghiệp trong và ngoài nước.</p>
            </div>
        </div>
    </section>

    <!-- Section 1.5: Floating Data Box -->
    <section class="tq-data-section">
        <div class="tq-container">
            <div class="tq-data-box">
                <!-- Top Row: Stats -->
                <div class="tq-stats-row">
                    <div class="tq-stat-item">
                        <div class="tq-icon-wrap"><img src="<?php echo $img_dir; ?>/Vector Smart Object-3.png" alt="Quy mô" class="tq-stat-icon"></div>
                        <strong>75 ha</strong>
                        <span>QUY MÔ</span>
                    </div>
                    <div class="tq-stat-divider"></div>
                    <div class="tq-stat-item">
                        <div class="tq-icon-wrap"><img src="<?php echo $img_dir; ?>/Vector Smart Object copy 5.png" alt="Đất công nghiệp" class="tq-stat-icon"></div>
                        <strong>488.962 m²</strong>
                        <span>ĐẤT CÔNG NGHIỆP</span>
                    </div>
                    <div class="tq-stat-divider"></div>
                    <div class="tq-stat-item">
                        <div class="tq-icon-wrap"><i class="far fa-clock" style="font-size: 45px; color: #0b3155;"></i></div>
                        <strong>50 năm</strong>
                        <span>THỜI GIAN HOẠT ĐỘNG</span>
                    </div>
                    <div class="tq-stat-divider"></div>
                    <div class="tq-stat-item">
                        <div class="tq-icon-wrap"><i class="far fa-calendar-alt" style="font-size: 45px; color: #0b3155;"></i></div>
                        <strong>05/02/2024</strong>
                        <span>NGÀY HOẠT ĐỘNG</span>
                    </div>
                    <div class="tq-stat-divider"></div>
                    <div class="tq-stat-item">
                        <div class="tq-icon-wrap"><i class="fas fa-cubes" style="font-size: 45px; color: transparent; -webkit-text-stroke: 2px #0b3155;"></i></div>
                        <strong>CCN</strong>
                        <span>LOẠI HÌNH</span>
                    </div>
                </div>

                <!-- Bottom Row: Table List -->
                <div class="tq-details-list">
                    <div class="tq-detail-row">
                        <div class="tq-detail-label">Tên thương mại:</div>
                        <div class="tq-detail-value">Cụm công nghiệp Ngọc Châu / Ngoc Chau Industrial Cluster</div>
                    </div>
                    <div class="tq-detail-row">
                        <div class="tq-detail-label">Chủ đầu tư:</div>
                        <div class="tq-detail-value">Công ty Cổ phần Đầu tư KCN WIN</div>
                    </div>
                    <div class="tq-detail-row">
                        <div class="tq-detail-label">Vị trí:</div>
                        <div class="tq-detail-value">Xã Ngọc Thiện, tỉnh Bắc Ninh</div>
                    </div>
                    <div class="tq-detail-row">
                        <div class="tq-detail-label">Thời gian hoạt động:</div>
                        <div class="tq-detail-value">05/02/2024 – 05/02/2074 (50 năm)</div>
                    </div>
                    <div class="tq-detail-row">
                        <div class="tq-detail-label">Loại hình:</div>
                        <div class="tq-detail-value">Cụm công nghiệp phục vụ sản xuất, công nghiệp hỗ trợ và kho xưởng sản xuất</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 2: Core Values -->
    <section class="tq-values-section" style="background-image: url('<?php echo $img_dir; ?>/2.png');">
        <div class="tq-container">
            <div class="tq-cards-row">
                <div class="tq-card">
                    <div class="tq-card-icon">
                        <i class="far fa-building" style="font-size: 50px; color: #0b3155;"></i>
                    </div>
                    <h3 class="tq-card-title">HIỆN ĐẠI</h3>
                    <p class="tq-card-desc">Hạ tầng đồng bộ, đáp ứng nhu cầu sản xuất, logistics và vận hành doanh nghiệp</p>
                </div>
                
                <div class="tq-card">
                    <div class="tq-card-icon">
                        <i class="fas fa-balance-scale" style="font-size: 50px; color: #0b3155;"></i>
                    </div>
                    <h3 class="tq-card-title">KỶ LUẬT</h3>
                    <p class="tq-card-desc">Quản lý vận hành chuyên nghiệp, chú trọng an toàn, môi trường và phòng cháy chữa cháy</p>
                </div>
                
                <div class="tq-card">
                    <div class="tq-card-icon">
                        <i class="fas fa-trophy" style="font-size: 50px; color: #0b3155;"></i>
                    </div>
                    <h3 class="tq-card-title">BỀN VỮNG</h3>
                    <p class="tq-card-desc">Phát triển không gian sản xuất ổn định, gắn với cộng đồng và môi trường bền vững</p>
                </div>
            </div>
        </div>
    </section>
</div>

<style>
/* Reset & Base */
.tongquan-page-wrapper {
    font-family: 'Montserrat', sans-serif;
    color: #333;
    background-color: #f4f5f7;
    overflow: hidden;
}
.tq-container {
    max-width: 1600px; /* Wider to stretch near edges */
    width: 95%;
    margin: 0 auto;
    padding: 0 20px;
    position: relative;
    z-index: 2;
}

/* Section 1: Intro */
.tq-intro-section {
    position: relative;
    padding: 100px 0 110px; /* Slightly increased bottom padding */
    background: linear-gradient(to right, #f4f5f7 40%, rgba(244,245,247,0) 100%);
}
.tq-intro-bg {
    position: absolute;
    top: 0;
    right: 0;
    width: 60%;
    height: 100%;
    background-size: cover;
    background-position: center right;
    background-repeat: no-repeat;
    z-index: 0;
    mask-image: linear-gradient(to left, rgba(0,0,0,1) 50%, rgba(0,0,0,0) 100%);
    -webkit-mask-image: linear-gradient(to left, rgba(0,0,0,1) 50%, rgba(0,0,0,0) 100%);
}
.tq-intro-content {
    max-width: 800px; /* Increased so title fits on 2 lines */
    position: relative;
    z-index: 2;
}
.tq-title {
    color: #0b3155;
    font-size: 42px;
    font-weight: 800;
    line-height: 1.2;
    margin-bottom: 20px;
    text-transform: uppercase;
}
.tq-desc {
    color: #333;
    font-size: 18px;
    line-height: 1.6;
}

/* Section 1.5: Data Box */
.tq-data-section {
    margin-top: 0; /* Changed from -30px to 0 to move it down */
    position: relative;
    z-index: 10;
    margin-bottom: 80px;
}
.tq-data-box {
    background: #ffffff;
    border-radius: 20px;
    box-shadow: 0 15px 35px rgba(0,0,0,0.15); /* Slightly darker shadow, especially at the bottom */
    padding: 40px;
}
.tq-stats-row {
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-bottom: 2px solid #0b3155;
    padding-bottom: 30px;
    margin-bottom: 30px;
}
.tq-stat-item {
    text-align: center;
    flex: 1;
    display: flex;
    flex-direction: column;
    align-items: center;
}
.tq-icon-wrap {
    height: 50px;
    display: flex;
    align-items: flex-end; /* Align all icons to the same baseline */
    justify-content: center;
    margin-bottom: 15px;
}
.tq-stat-icon {
    max-height: 100%;
    width: auto;
}
.tq-stat-item strong {
    color: #0b3155;
    font-size: 26px;
    font-weight: 800;
    margin-bottom: 5px;
    line-height: 1;
}
.tq-stat-item span {
    color: #0b3155;
    font-size: 14px;
    font-weight: 700;
    text-transform: uppercase;
}
.tq-stat-divider {
    width: 1px;
    height: 60px;
    background-color: #e5e7eb;
}

.tq-details-list {
    display: flex;
    flex-direction: column;
}
.tq-detail-row {
    display: flex;
    padding: 20px 0;
    border-bottom: 1px solid #e5e7eb;
}
.tq-detail-row:last-child {
    border-bottom: none;
    padding-bottom: 0;
}
.tq-detail-row:first-child {
    padding-top: 0;
}
.tq-detail-label {
    width: 250px;
    color: #0b3155;
    font-weight: 800;
    font-size: 16px;
    flex-shrink: 0;
}
.tq-detail-value {
    color: #444;
    font-size: 16px;
    line-height: 1.5;
}

/* Section 2: Values */
.tq-values-section {
    padding: 180px 0; /* Increased padding to show more of the background image */
    background-size: cover;
    background-position: center;
    position: relative;
}
/* Overlay for better readability */
.tq-values-section::before {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0; bottom: 0;
    background: rgba(0, 0, 0, 0.2);
}
.tq-cards-row {
    display: flex;
    justify-content: space-between;
    gap: 30px;
}
.tq-card {
    background: #ffffff;
    border-radius: 20px;
    padding: 40px 30px;
    text-align: center;
    flex: 1;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    transition: transform 0.3s ease;
}
.tq-card:hover {
    transform: translateY(-10px);
}
.tq-card-icon {
    margin-bottom: 25px;
    height: 60px;
    display: flex;
    align-items: center;
    justify-content: center;
}
.tq-card-title {
    color: #0b3155;
    font-size: 22px;
    font-weight: 800;
    margin-bottom: 15px;
    text-transform: uppercase;
}
.tq-card-desc {
    color: #0b3155;
    font-size: 15px;
    line-height: 1.6;
    font-weight: 600;
    margin: 0;
}

/* Responsive */
@media (max-width: 1024px) {
    .tq-intro-bg { width: 100%; mask-image: none; -webkit-mask-image: none; opacity: 0.3; }
    .tq-intro-section { background: #f4f5f7; padding: 60px 0 120px; }
    .tq-intro-content { max-width: 100%; text-align: center; }
    
    .tq-stats-row { flex-wrap: wrap; gap: 20px; border-bottom: none; }
    .tq-stat-divider { display: none; }
    .tq-stat-item { flex: 0 0 45%; margin-bottom: 20px; }
    
    .tq-cards-row { flex-direction: column; }
}

@media (max-width: 768px) {
    .tq-title { font-size: 28px; }
    .tq-stat-item { flex: 0 0 100%; }
    .tq-detail-row { flex-direction: column; gap: 5px; }
    .tq-detail-label { width: 100%; }
    .tq-data-box { padding: 20px; }
}
</style>

<?php get_footer(); ?>
