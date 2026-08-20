<?php get_header(); ?>

<div class="single-post-wrapper" style="background-color: #f8fafc; padding: 120px 0 80px; min-height: 80vh;">
    <div class="single-post-layout-container">
        
        <?php
        if ( have_posts() ) :
            while ( have_posts() ) :
                the_post();
                $current_post_id = get_the_ID();
                ?>
                
                <!-- CỘT TRÁI: TIN NÓNG -->
                <aside class="sidebar-left">
                    <div class="sidebar-box">
                        <div class="sidebar-title-badge title-red">
                            <span>TIN NÓNG</span>
                        </div>
                        <div class="sidebar-news-list">
                            <?php
                            $hot_args = array(
                                'post_type' => 'post',
                                'post__not_in' => array($current_post_id),
                                'posts_per_page' => 3,
                                'orderby' => 'date',
                                'order' => 'DESC',
                                'ignore_sticky_posts' => 1
                            );
                            $hot_query = new WP_Query($hot_args);
                            if ($hot_query->have_posts()) :
                                while ($hot_query->have_posts()) : $hot_query->the_post();
                                ?>
                                <a href="<?php the_permalink(); ?>" class="sidebar-hot-item">
                                    <div class="sidebar-hot-img">
                                        <?php if (has_post_thumbnail()) : ?>
                                            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" alt="<?php the_title_attribute(); ?>">
                                        <?php else: ?>
                                            <img src="<?php echo get_template_directory_uri(); ?>/gdien mới/more/logo new.png" alt="Logo" style="object-fit: contain; padding: 10px; background: #f3f4f6;">
                                        <?php endif; ?>
                                    </div>
                                    <h4 class="sidebar-hot-title"><?php the_title(); ?></h4>
                                </a>
                                <?php
                                endwhile;
                                wp_reset_postdata();
                            endif;
                            ?>
                        </div>
                    </div>
                </aside>

                <!-- CỘT GIỮA: NỘI DUNG BÀI VIẾT CHÍNH -->
                <main class="main-content-column">
                    <article id="post-<?php the_ID(); ?>" <?php post_class('single-post-card'); ?>>
                        
                        <header class="entry-header">
                            <!-- NÚT QUAY LẠI TRANG TIN TỨC -->
                            <div class="post-back-nav">
                                <a href="<?php echo home_url('/tin-tuc/'); ?>" class="btn-back-to-news">
                                    <i class="fas fa-arrow-left"></i> QUAY LẠI TRANG TIN TỨC
                                </a>
                            </div>

                            <h1 class="entry-title" style="font-size: 30px; font-weight: 800; color: #022c54 !important; line-height: 1.35; margin-top: 18px; margin-bottom: 15px; font-family: 'Montserrat', sans-serif;">
                                <?php the_title(); ?>
                            </h1>

                            <div class="entry-meta" style="color: #64748b; font-size: 14px; margin-bottom: 25px; border-bottom: 1px solid #f1f5f9; padding-bottom: 15px; display: flex; align-items: center; gap: 15px;">
                                <span><i class="far fa-calendar-alt"></i> <?php echo get_the_date('d/m/Y \lú\c H:i'); ?></span>
                            </div>
                        </header>

                        <div class="entry-content">
                            <?php the_content(); ?>
                        </div>

                        <?php 
                        $post_tags = get_the_tags();
                        if ($post_tags) : 
                        ?>
                            <div class="post-tags">
                                <span class="tag-label">Thẻ:</span>
                                <?php foreach($post_tags as $tag) : ?>
                                    <span class="tag-item">#<?php echo $tag->name; ?></span>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>

                    </article>

                    <!-- BÀI VIẾT LIÊN QUAN -->
                    <div class="related-posts-section">
                        <h3 class="related-title">BÀI VIẾT LIÊN QUAN</h3>
                        <div class="related-posts-grid">
                            <?php
                            $orig_post = $post;
                            global $post;
                            $tags = wp_get_post_tags($orig_post->ID);
                            $tag_ids = array();
                            if ($tags) {
                                foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
                            }
                            $args = array(
                                'tag__in' => $tag_ids,
                                'post__not_in' => array($orig_post->ID),
                                'posts_per_page' => 3,
                                'ignore_sticky_posts' => 1
                            );
                            $related_query = new WP_Query($args);
                            
                            if (!$related_query->have_posts()) {
                                $args = array(
                                    'post__not_in' => array($orig_post->ID),
                                    'posts_per_page' => 3,
                                    'ignore_sticky_posts' => 1
                                );
                                $related_query = new WP_Query($args);
                            }

                            if ($related_query->have_posts()) :
                                while ($related_query->have_posts()) :
                                    $related_query->the_post();
                                    ?>
                                    <a href="<?php the_permalink(); ?>" class="related-card-link">
                                        <div class="related-card">
                                            <div class="related-img-wrap">
                                                <?php if (has_post_thumbnail()) : ?>
                                                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" alt="<?php the_title_attribute(); ?>">
                                                <?php else: ?>
                                                    <img src="<?php echo get_template_directory_uri(); ?>/gdien mới/more/logo new.png" alt="Logo" class="related-logo">
                                                <?php endif; ?>
                                            </div>
                                            <div class="related-info">
                                                <span class="related-date"><i class="far fa-calendar-alt"></i> <?php echo get_the_date('d/m/Y'); ?></span>
                                                <h4 class="related-card-title"><?php the_title(); ?></h4>
                                            </div>
                                        </div>
                                    </a>
                                    <?php
                                endwhile;
                            endif;
                            $post = $orig_post;
                            wp_reset_postdata();
                            ?>
                        </div>
                    </div>
                </main>

                <!-- CỘT PHẢI: ĐỌC NHIỀU & THÔNG TIN DỰ ÁN -->
                <aside class="sidebar-right">
                    <div class="sidebar-box">
                        <div class="sidebar-title-badge title-darkred">
                            <span>ĐỌC NHIỀU</span>
                        </div>
                        <div class="sidebar-top-list">
                            <?php
                            $top_args = array(
                                'post_type' => 'post',
                                'post__not_in' => array($current_post_id),
                                'posts_per_page' => 3,
                                'orderby' => 'rand'
                            );
                            $top_query = new WP_Query($top_args);
                            if ($top_query->have_posts()) :
                                $index = 1;
                                while ($top_query->have_posts()) : $top_query->the_post();
                                ?>
                                <a href="<?php the_permalink(); ?>" class="sidebar-top-item">
                                    <div class="sidebar-top-thumb-wrap">
                                        <?php if (has_post_thumbnail()) : ?>
                                            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'thumbnail'); ?>" alt="<?php the_title_attribute(); ?>">
                                        <?php else: ?>
                                            <img src="<?php echo get_template_directory_uri(); ?>/gdien mới/more/logo new.png" alt="Logo" style="object-fit: contain; padding: 4px; background: #eee;">
                                        <?php endif; ?>
                                        <span class="sidebar-top-num"><?php echo $index++; ?></span>
                                    </div>
                                    <h4 class="sidebar-top-title"><?php the_title(); ?></h4>
                                </a>
                                <?php
                                endwhile;
                                wp_reset_postdata();
                            endif;
                            ?>
                        </div>
                    </div>

                    <!-- THÔNG TIN DỰ ÁN -->
                    <div class="sidebar-box" style="margin-top: 30px;">
                        <div class="sidebar-title-badge title-blue">
                            <span>THÔNG TIN DỰ ÁN</span>
                        </div>
                        <div class="sidebar-info-card">
                            <h5>CỤM CÔNG NGHIỆP NGỌC CHÂU</h5>
                            <p><i class="fas fa-building"></i> <strong>Chủ đầu tư:</strong> Công ty Cổ phần Đầu tư KCN WIN</p>
                            <p><i class="fas fa-expand-arrows-alt"></i> <strong>Quy mô:</strong> 75 ha</p>
                            <p><i class="fas fa-map-marker-alt"></i> <strong>Địa điểm:</strong> Xã Ngọc Thiện, Bắc Ninh</p>
                            <p><i class="fas fa-phone-alt"></i> <strong>Hotline:</strong> 0919 833 566</p>
                            <a href="<?php echo home_url('/lien-he'); ?>" class="btn-sidebar-contact">LIÊN HỆ TƯ VẤN</a>
                        </div>
                    </div>
                </aside>

                <?php
            endwhile;
        endif;
        ?>

    </div>
</div>

<?php get_footer(); ?>
