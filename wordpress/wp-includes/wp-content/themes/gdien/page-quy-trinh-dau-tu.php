<?php
/* Template Name: Quy Trình Đầu Tư */
get_header(); 
?>
<style>
/* Đặt trực tiếp vào file PHP để chống lỗi Cache trình duyệt 100% */
@media (max-width: 992px) {
    .investment-container-rect {
        border-radius: 0 !important; /* Vuông góc 100% */
        box-shadow: none !important;
        position: relative !important;
        display: block !important;
        height: auto !important;
    }
    .investment-bg-img {
        position: absolute !important;
        top: 0 !important;
        left: 0 !important;
        width: 100% !important;
        height: 100% !important; /* Ôm trọn toàn bộ chiều cao của khối */
        object-fit: cover !important;
        border-radius: 0 !important; /* Bỏ viền cong */
    }
    .investment-content-overlay {
        position: relative !important; /* Để text tự động đẩy chiều cao, không bao giờ bị cắt */
        height: auto !important;
        background-color: rgba(255, 255, 255, 0.9) !important; /* Đậm hơn xíu cho dễ đọc */
        padding: 40px 15px 50px 15px !important; /* Chừa lề trên dưới rộng rãi */
        border-radius: 0 !important; /* Vuông góc 100% */
    }
    .investment-process-section {
        padding: 60px 0 0 0 !important; /* Chừa chỗ cho header */
    }
}
</style>

    <!-- ===== INVESTMENT PROCESS SECTION ===== -->
    <section class="investment-process-section" style="background-color: #0F172A; padding: 0;">
        <div class="investment-container-rect">
            <img src="<?php echo get_template_directory_uri(); ?>/img-nen/nen-utda.png" alt="Nền Quy trình đầu tư" class="investment-bg-img">
            
            <div class="investment-content-overlay">
                <h2 class="investment-title">QUY TRÌNH ĐẦU TƯ TẠI CCN NGỌC CHÂU</h2>
                
                <div class="process-steps">
                    <div class="step-item">
                        <h3>Bước 1: Khảo sát & Lựa chọn ô đất</h3>
                        <p>Nhà đầu tư được tư vấn chi tiết về quy hoạch, diện tích và vị trí các lô đất trống phù hợp với ngành nghề sản xuất. Tiến hành khảo sát thực địa tại dự án.</p>
                    </div>
                    
                    <div class="step-item">
                        <h3>Bước 2: Ký kết Hợp đồng nguyên tắc (MOU)</h3>
                        <p>Xác lập thỏa thuận đặt giữ chỗ lô đất. Tại bước này, các điều khoản về giá thuê, phương thức thanh toán và thời hạn bàn giao sẽ được hai bên thống nhất.</p>
                    </div>
                    
                    <div class="step-item">
                        <h3>Bước 3: Hoàn thiện Pháp lý doanh nghiệp</h3>
                        <p>Nhà đầu tư tiến hành đăng ký thành lập pháp nhân mới tại địa phương và nộp hồ sơ xin cấp Giấy chứng nhận đăng ký đầu tư (IRC).</p>
                    </div>
                    
                    <div class="step-item">
                        <h3>Bước 4: Cấp Giấy chứng nhận đầu tư</h3>
                        <p>Cơ quan chức năng có thẩm quyền xét duyệt dự án và chính thức cấp Giấy chứng nhận đăng ký đầu tư cho doanh nghiệp.</p>
                    </div>
                    
                    <div class="step-item">
                        <h3>Bước 5: Ký kết Hợp đồng thuê đất chính thức</h3>
                        <p>Sau khi có IRC, hai bên ký kết Hợp đồng thuê lại đất và hạ tầng công nghiệp. Đây là cơ sở pháp lý quan trọng nhất để triển khai dự án.</p>
                    </div>
                    
                    <div class="step-item">
                        <h3>Bước 6: Bàn giao đất thực địa</h3>
                        <p>CCN Ngọc Châu tiến hành bàn giao mặt bằng sạch, mốc giới lô đất và các đấu nối hạ tầng (điện, nước, viễn thông) cho nhà đầu tư.</p>
                    </div>
                    
                    <div class="step-item">
                        <h3>Bước 7: Cấp Giấy chứng nhận quyền sử dụng đất (Sổ đỏ)</h3>
                        <p>Hỗ trợ nhà đầu tư hoàn thiện thủ tục để được cấp Giấy chứng nhận quyền sử dụng đất theo quy định của pháp luật.</p>
                    </div>
                    
                    <div class="step-item">
                        <h3>Bước 8: Cấp phép Xây dựng & Thi công</h3>
                        <p>Nhà đầu tư trình hồ sơ thiết kế và xin cấp phép xây dựng. Tiến hành khởi công xây dựng nhà xưởng dưới sự hỗ trợ giám sát kỹ thuật từ Ban quản lý CCN.</p>
                    </div>
                    
                    <div class="step-item">
                        <h3>Bước 9: Nghiệm thu & Đi vào hoạt động</h3>
                        <p>Hoàn thiện công trình, lắp đặt máy móc, nghiệm thu PCCC, môi trường và chính thức đưa dự án vào vận hành sản xuất.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
