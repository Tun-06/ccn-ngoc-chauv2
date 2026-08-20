<?php get_header(); ?>

    <!-- ===== HERO SLIDER ===== -->
    <section class="hero-slider" id="hero-slider">
        <div class="slider-wrapper">
            <div class="slide active" id="slide-1">
                <img src="<?php echo get_template_directory_uri(); ?>/img-slide/1.jpg" alt="Cụm Công Nghiệp Ngọc Châu - Cổng chính" class="slide-img">
            </div>
            <div class="slide" id="slide-2">
                <img src="<?php echo get_template_directory_uri(); ?>/img-slide/2.jpg" alt="Cụm Công Nghiệp Ngọc Châu - Toàn cảnh" class="slide-img">
            </div>
            <div class="slide" id="slide-3">
                <img src="<?php echo get_template_directory_uri(); ?>/img-slide/3.jpg" alt="Cụm Công Nghiệp Ngọc Châu - Ban đêm" class="slide-img">
            </div>
            <div class="slide" id="slide-4">
                <img src="<?php echo get_template_directory_uri(); ?>/img-slide/4.jpg" alt="Cụm Công Nghiệp Ngọc Châu - Phối cảnh đêm" class="slide-img">
            </div>
            <div class="slide" id="slide-5">
                <img src="<?php echo get_template_directory_uri(); ?>/img-slide/5.jpg" alt="Cụm Công Nghiệp Ngọc Châu - Phối cảnh ngày" class="slide-img">
            </div>
        </div>

        

        <!-- Slider Controls -->
        <button class="slider-arrow slider-prev" id="slider-prev" aria-label="Slide trước">
            <i class="fas fa-chevron-left"></i>
        </button>
        <button class="slider-arrow slider-next" id="slider-next" aria-label="Slide tiếp">
            <i class="fas fa-chevron-right"></i>
        </button>

        <!-- Slider Dots -->
        <div class="slider-dots" id="slider-dots">
            <button class="dot active" data-slide="0" aria-label="Slide 1"></button>
            <button class="dot" data-slide="1" aria-label="Slide 2"></button>
            <button class="dot" data-slide="2" aria-label="Slide 3"></button>
            <button class="dot" data-slide="3" aria-label="Slide 4"></button>
            <button class="dot" data-slide="4" aria-label="Slide 5"></button>
        </div>
    </section>

    <!-- ===== STATS SECTION ===== -->
    <section class="stats-section" id="stats-section">
        <div class="stats-bg-overlay"></div>
        <div class="stats-container">
            <div class="stats-header">
                <h2 class="stats-title" id="stats-title">CÁC CON SỐ VỀ NGỌC CHÂU</h2>
            </div>
            <div class="stats-grid">
                <!-- Stat 1: Quy mô -->
                <div class="stat-card" id="stat-scale">
                    <div class="stat-icon">
                        <svg viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <line x1="40" y1="8" x2="40" y2="72" stroke="white" stroke-width="3" stroke-linecap="round"/>
                            <line x1="8" y1="40" x2="72" y2="40" stroke="white" stroke-width="3" stroke-linecap="round"/>
                            <polyline points="40,8 35,18 40,8 45,18" stroke="white" stroke-width="3" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
                            <polyline points="40,72 35,62 40,72 45,62" stroke="white" stroke-width="3" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
                            <polyline points="8,40 18,35 8,40 18,45" stroke="white" stroke-width="3" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
                            <polyline points="72,40 62,35 72,40 62,45" stroke="white" stroke-width="3" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <p class="stat-label">Quy mô dự án (ha)</p>
                    <p class="stat-number" data-target="75">0</p>
                </div>

                <!-- Stat 2: Thời gian -->
                <div class="stat-card" id="stat-duration">
                    <div class="stat-icon">
                        <svg viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="20" y="8" width="40" height="8" rx="2" stroke="white" stroke-width="3" fill="none"/>
                            <rect x="24" y="64" width="32" height="8" rx="2" stroke="white" stroke-width="3" fill="none"/>
                            <line x1="20" y1="16" x2="30" y2="38" stroke="white" stroke-width="3" stroke-linecap="round"/>
                            <line x1="60" y1="16" x2="50" y2="38" stroke="white" stroke-width="3" stroke-linecap="round"/>
                            <line x1="24" y1="64" x2="34" y2="42" stroke="white" stroke-width="3" stroke-linecap="round"/>
                            <line x1="56" y1="64" x2="46" y2="42" stroke="white" stroke-width="3" stroke-linecap="round"/>
                            <line x1="30" y1="38" x2="50" y2="38" stroke="white" stroke-width="2"/>
                            <line x1="34" y1="42" x2="46" y2="42" stroke="white" stroke-width="2"/>
                        </svg>
                    </div>
                    <p class="stat-label">Thời gian hoạt động<br>của dự án</p>
                    <p class="stat-date">05/02/2024 - 05/02/2074</p>
                </div>

                <!-- Stat 3: Miễn thuế -->
                <div class="stat-card" id="stat-tax">
                    <div class="stat-icon">
                        <svg viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="52" cy="20" r="10" stroke="white" stroke-width="3" fill="none"/>
                            <text x="52" y="24" text-anchor="middle" fill="white" font-size="12" font-weight="bold">$</text>
                            <path d="M20 60 Q20 40 40 40 L60 40 Q70 40 70 50 L70 60 Q70 70 60 70 L30 70 Q20 70 20 60Z" stroke="white" stroke-width="3" fill="none"/>
                            <path d="M40 50 L50 50 Q55 50 55 55 L55 58 Q55 62 50 62 L38 62" stroke="white" stroke-width="2.5" fill="none" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <p class="stat-label">Miễn thuế lên tới</p>
                    <p class="stat-number stat-percent" data-target="100">0<span>%</span></p>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
