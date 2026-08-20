<?php get_header(); ?>
    <!-- ===== NEWS HERO SECTION ===== -->
    <style>
        .news-content-box {
            padding: 10px 20px 10px 15px; /* Giảm padding trái từ 40px xuống 15px để dịch sang trái */
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            height: 100%;
            box-sizing: border-box;
        }
        .news-content-box > * {
            flex-shrink: 0; 
        }
        /* Điều chỉnh riêng cho thẻ 1 dịch sang trái một chút theo yêu cầu */
        .card-1 .news-content-box {
            transform: translateX(-25px);
        }
        .news-title {
            font-size: 17px !important; 
            font-weight: 700 !important;
            margin: 0 0 5px 0 !important;
            line-height: 1.3 !important;
            color: #ffffff !important;
            display: -webkit-box;
            -webkit-line-clamp: 1; 
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.8);
        }
        .news-excerpt {
            font-size: 13px !important;
            color: rgba(255, 255, 255, 0.9) !important;
            margin: 0 0 8px 0 !important;
            line-height: 1.4 !important;
            display: -webkit-box;
            -webkit-line-clamp: 2; 
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.8);
        }
        .news-bottom-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 2px;
        }
        .news-date {
            font-size: 11px;
            color: #9ca3af; /* Màu xám nhạt tinh tế */
            font-weight: 500;
            display: inline-flex;
            align-items: center;
            gap: 5px;
        }
        
        /* Icon mũi tên hiện đại góc dưới phải (Chỉ có mũi tên trơn) */
        .news-action-icon {
            position: absolute;
            bottom: 15px;
            right: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: rgba(255, 255, 255, 0.8); /* Màu trắng hơi trong suốt */
            font-size: 18px; /* Tăng kích thước mũi tên lên để dễ nhìn */
            transition: all 0.3s ease;
            z-index: 2;
        }
        .news-card-link:hover .news-action-icon {
            color: #f59e0b; /* Đổi màu cam khi lướt qua */
            transform: translateX(5px);
        }

        .news-card {
            position: relative; /* Để định vị icon mũi tên */
        }

        @media (max-width: 768px) {
            /* Ép thẻ full màn hình viền đối viền */
            .news-hero-section { padding: 0 !important; }
            .news-container-rect { 
                width: 100% !important; 
                max-width: 100% !important; 
                margin: 0 !important; 
                border-radius: 0 !important; 
                padding: 0 !important;
                position: relative !important;
            }
            .news-bg-img { 
                border-radius: 0 !important; 
                height: 260px !important; /* Làm banner ngắn lại */
                width: 100% !important;
                object-fit: cover !important;
                display: block !important;
            }
            /* Căn giữa chữ tiêu đề chính trên điện thoại cả ngang và dọc */
            .featured-news-overlay {
                position: absolute !important;
                top: 130px !important; /* Một nửa của 260px banner */
                left: 50% !important;
                transform: translate(-50%, -50%) !important; /* Đảm bảo ra giữa chính xác 100% */
                width: 100% !important;
                display: flex !important;
                flex-direction: column !important;
                align-items: center !important;
                justify-content: center !important;
                padding: 0 15px !important;
                box-sizing: border-box !important;
            }

            /* Xóa bỏ các lề thừa từ bản máy tính để căn giữa tuyệt đối */
            .featured-title {
                text-align: center !important;
                margin: 0 !important;
                padding: 0 !important;
                width: 100% !important;
            }
            .featured-desc {
                text-align: center !important;
                margin: 10px 0 0 0 !important;
                padding: 0 !important;
                width: 100% !important;
            }

            .news-feed-container { 
                padding: 15px 0 !important; /* Chừa khoảng trống quanh cụm tin tức */
                margin: 0 !important; 
            }
            .news-card-link {
                width: auto !important;
                margin: 0 15px 15px 15px !important; /* Lùi vào để tạo thành thẻ */
                display: block !important;
                box-shadow: 0 4px 15px rgba(0,0,0,0.4) !important; /* Đổ bóng tạo cảm giác nổi */
                border-radius: 6px !important; /* Bo góc siêu nhẹ (6px) không bị quá tròn */
                overflow: hidden !important;
            }
            .news-card {
                border-radius: 6px !important; 
            }
            .news-content-box {
                padding: 15px 15px 15px 15px; /* Tăng lại padding nhẹ nhàng cho cân đối */
            }
            .card-1 .news-content-box {
                transform: translateX(0); /* Bỏ dịch trái trên đt để tránh sát viền quá */
            }
            .news-title { font-size: 16px !important; }
            .news-excerpt { font-size: 13px !important; -webkit-line-clamp: 2; }
        }
    </style>
    <section class="news-hero-section">
        <div class="news-container-rect">
            <!-- Background image containing the port and the painted red boxes -->
            <img src="<?php echo get_template_directory_uri(); ?>/img-nen/tintucnen.png" alt="Tin Tức Cụm Công Nghiệp Ngọc Châu" class="news-bg-img">
            
            <!-- Featured News Overlay (Left Bottom) -->
            <div class="featured-news-overlay">
                <h1 class="featured-title">TIN TỨC & SỰ KIỆN</h1>
                <p class="featured-desc">Cập nhật những thông tin mới nhất<br>về dự án và các chính sách ưu đãi</p>
            </div>
            
            <!-- News Feed Overlay (Right Side) -->
            <div class="news-feed-container">
                <?php
                $news_query = new WP_Query(array(
                    'post_type' => 'post',
                    'posts_per_page' => 3,
                ));
                
                if ($news_query->have_posts()) :
                    $card_num = 1;
                    while ($news_query->have_posts() && $card_num <= 3) :
                        $news_query->the_post();
                ?>
                <?php
                $bg_style = 'height:100%;';
                if (has_post_thumbnail()) {
                    $thumb_url = get_the_post_thumbnail_url(get_the_ID(), 'large');
                    $bg_style .= ' background-image: linear-gradient(to right, rgba(2, 27, 59, 0.6), rgba(5, 10, 16, 0.4)), url(\'' . esc_url($thumb_url) . '\');';
                }
                ?>
                <a href="<?php the_permalink(); ?>" class="news-card-link" style="text-decoration:none; color:inherit; width:100%; height:32%; display:block;">
                    <article class="news-card card-<?php echo $card_num; ?>" style="<?php echo $bg_style; ?>">
                        <div class="news-action-icon"><i class="fas fa-arrow-right"></i></div>
                        <div class="news-content-box">
                            <h3 class="news-title"><?php the_title(); ?></h3>
                            <p class="news-excerpt"><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                            <div class="news-bottom-row">
                                <span class="news-date"><i class="far fa-clock"></i> <?php echo get_the_date('d/m/Y'); ?></span>
                            </div>
                        </div>
                    </article>
                </a>
                <?php 
                        $card_num++;
                    endwhile; 
                endif;
                wp_reset_postdata(); 
                ?>
            </div>
        </div>
    </section>
<?php get_footer(); ?>
