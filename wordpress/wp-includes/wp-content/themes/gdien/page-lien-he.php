<?php
/* Template Name: Liên Hệ */
get_header(); 
?>

    <!-- ===== CONTACT SECTION ===== -->
    <section class="contact-section">
        <div class="contact-container">
            
            <!-- Left Side: Form -->
            <div class="contact-form-wrapper">
                <h2 class="contact-title">LIÊN HỆ VỚI CHÚNG TÔI</h2>
                
                <?php 
                echo do_shortcode('[contact-form-7 id="18" html_class="contact-form"]'); 
                ?>
            </div>

            <!-- Right Side: Map -->
            <div class="contact-map-wrapper">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7431.120174987884!2d106.0773457755684!3d21.36784046102284!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31351411dd6bab8f%3A0xf986972467384ba4!2zVMOibiBDaMOidSBOZ-G7jWMgQ2jDonUgVMOibiBZw6pu!5e0!3m2!1svi!2s!4v1779437197865!5m2!1svi!2s" width="100%" height="100%" style="border:0; border-radius: 15px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

        </div>
    </section>

<?php get_footer(); ?>
