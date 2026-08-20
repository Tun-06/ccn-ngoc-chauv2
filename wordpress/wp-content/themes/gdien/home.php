<?php get_header(); ?>
    <style>
        /* ===== NEW NEWS PAGE STYLES ===== */
        .news-page-wrapper {
            background-color: #ffffff; /* Nền trắng theo yêu cầu */
            padding: 120px 0 80px; 
            min-height: calc(100vh - 300px);
        }
        .news-page-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 30px;
        }
        .news-page-title {
            text-align: center;
            color: #022c54; /* Xanh đen */
            font-family: 'Montserrat', sans-serif;
            font-size: 32px;
            font-weight: 800;
            text-transform: uppercase;
            margin-bottom: 30px;
            letter-spacing: 1px;
        }
        
        /* Category Filters */
        .news-filters {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 15px;
            margin-bottom: 50px;
        }
        .filter-btn {
            background-color: transparent;
            border: 1px solid #022c54;
            color: #022c54;
            font-family: 'Montserrat', sans-serif;
            font-size: 14px;
            font-weight: 700;
            padding: 10px 25px;
            border-radius: 30px;
            cursor: pointer;
            text-transform: uppercase;
            transition: all 0.3s ease;
        }
        .filter-btn.active, .filter-btn:hover {
            background-color: #022c54;
            color: #ffffff;
        }

        /* News Grid (4 Columns) */
        .news-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 30px;
            margin-bottom: 50px;
        }
        
        /* News Card */
        .new-card {
            background: #ffffff;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            display: flex;
            flex-direction: column;
            border: 1px solid #f0f0f0;
            height: 100%;
        }
        .new-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.12);
        }
        .new-card-img-wrap {
            width: 100%;
            padding-top: 65%; /* Aspect ratio */
            position: relative;
            overflow: hidden;
            background-color: #f3f4f6;
        }
        .new-card-img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        .new-card:hover .new-card-img {
            transform: scale(1.05);
        }
        .new-card-content {
            padding: 20px;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }
        .new-card-date {
            color: #6b7280;
            font-size: 12px;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            gap: 6px;
        }
        .new-card-title {
            color: #022c54;
            font-family: 'Montserrat', sans-serif;
            font-size: 16px;
            font-weight: 700;
            margin: 0 0 10px 0;
            line-height: 1.4;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            transition: color 0.3s ease;
        }
        .new-card:hover .new-card-title {
            color: #cba258; /* Gold color */
        }
        .new-card-excerpt {
            color: #4b5563;
            font-size: 13px;
            line-height: 1.5;
            margin: 0 0 15px 0;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
            flex-grow: 1;
        }
        .new-card-readmore {
            color: #022c54;
            font-weight: 600;
            font-size: 13px;
            display: inline-flex;
            align-items: center;
            gap: 5px;
            text-transform: uppercase;
            margin-top: auto;
        }
        .new-card-readmore i {
            transition: transform 0.3s ease;
        }
        .new-card:hover .new-card-readmore i {
            transform: translateX(5px);
        }

        /* View All Button */
        .news-view-all-wrap {
            text-align: center;
        }
        .btn-view-all {
            display: inline-block;
            background-color: #022c54;
            color: #ffffff;
            font-family: 'Montserrat', sans-serif;
            font-size: 15px;
            font-weight: 700;
            padding: 12px 35px;
            border-radius: 30px;
            text-transform: uppercase;
            text-decoration: none;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }
        .btn-view-all:hover {
            background-color: #041b36;
            color: #ffffff;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        /* Responsive */
        @media (max-width: 1200px) {
            .news-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }
        @media (max-width: 992px) {
            .news-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            .news-page-title {
                font-size: 28px;
            }
        }
        @media (max-width: 768px) {
            .news-page-wrapper {
                padding: 100px 0 60px;
            }
            .news-grid {
                grid-template-columns: 1fr;
            }
            .filter-btn {
                font-size: 12px;
                padding: 8px 15px;
            }
        }
    </style>

    <div class="news-page-wrapper">
        <div class="news-page-container">
            
            <h1 class="news-page-title">TIN TỨC & CẬP NHẬT DỰ ÁN</h1>
            
            <div class="news-filters">
                <?php 
                $current_cat = isset($_GET['cat_slug']) ? sanitize_text_field($_GET['cat_slug']) : ''; 
                $categories = get_categories(array(
                    'hide_empty' => false,
                    'orderby'    => 'count',
                    'order'      => 'DESC'
                ));
                ?>
                <a href="<?php echo strtok($_SERVER["REQUEST_URI"], '?'); ?>" class="filter-btn <?php echo empty($current_cat) ? 'active' : ''; ?>" style="text-decoration: none;">TẤT CẢ</a>
                
                <?php foreach ($categories as $cat) : 
                    if ($cat->slug === 'uncategorized' || $cat->slug === 'chua-phan-loai') continue;
                ?>
                    <a href="?cat_slug=<?php echo esc_attr($cat->slug); ?>" class="filter-btn <?php echo $current_cat == $cat->slug ? 'active' : ''; ?>" style="text-decoration: none;">
                        <?php echo esc_html(mb_strtoupper($cat->name, 'UTF-8')); ?>
                    </a>
                <?php endforeach; ?>
            </div>
            
            <div class="news-grid">
                <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 8, // Hiển thị 8 bài viết (2 hàng)
                    'paged' => $paged
                );
                
                if (!empty($current_cat)) {
                    $args['category_name'] = $current_cat;
                }
                
                $news_query = new WP_Query($args);
                
                if ($news_query->have_posts()) :
                    while ($news_query->have_posts()) :
                        $news_query->the_post();
                ?>
                <a href="<?php the_permalink(); ?>" style="text-decoration: none;">
                    <article class="new-card">
                        <div class="new-card-img-wrap">
                            <?php if (has_post_thumbnail()) : ?>
                                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium_large'); ?>" alt="<?php the_title_attribute(); ?>" class="new-card-img">
                            <?php else : ?>
                                <!-- Fallback image nếu không có ảnh đại diện -->
                                <img src="<?php echo get_template_directory_uri(); ?>/gdien mới/more/logo new.png" alt="Win Holdings" class="new-card-img" style="object-fit: contain; padding: 20px; background: #e5e7eb;">
                            <?php endif; ?>
                        </div>
                        <div class="new-card-content">
                            <span class="new-card-date"><i class="far fa-calendar-alt"></i> <?php echo get_the_date('d/m/Y'); ?></span>
                            <h3 class="new-card-title"><?php the_title(); ?></h3>
                            <p class="new-card-excerpt"><?php echo wp_trim_words(get_the_excerpt(), 18, '...'); ?></p>
                            <span class="new-card-readmore">ĐỌC TIẾP <i class="fas fa-arrow-right"></i></span>
                        </div>
                    </article>
                </a>
                <?php 
                    endwhile; 
                else :
                    echo '<p style="grid-column: 1 / -1; text-align: center; color: #666;">Chưa có bài viết nào.</p>';
                endif;
                wp_reset_postdata(); 
                ?>
            </div>
            
            <div class="news-view-all-wrap">
                <!-- Nút xem tất cả -->
                <a href="<?php echo home_url('/tin-tuc'); ?>" class="btn-view-all">XEM TẤT CẢ TIN TỨC</a>
            </div>
            
        </div>
    </div>
<?php get_footer(); ?>
