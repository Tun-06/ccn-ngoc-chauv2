<?php get_header(); ?>

<section class="single-post-section" style="padding-top: 120px; padding-bottom: 60px; min-height: 70vh; background-color: #0B192C; color: #fff;">
    <div class="container" style="max-width: 900px; margin: 0 auto; padding: 0 20px;">
        <?php
        if ( have_posts() ) :
            while ( have_posts() ) :
                the_post();
                ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="entry-header" style="margin-bottom: 30px;">
                        <h1 class="entry-title" style="font-size: 36px; font-weight: bold; margin-bottom: 15px; color: #fff; line-height: 1.3;"><?php the_title(); ?></h1>
                        <div class="entry-meta" style="color: #94a3b8; font-size: 15px; margin-bottom: 25px; border-bottom: 1px solid #1e293b; padding-bottom: 15px;">
                            <span><i class="far fa-calendar-alt"></i> <?php echo get_the_date('d/m/Y'); ?></span>
                        </div>
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="post-thumbnail" style="margin-bottom: 40px; border-radius: 12px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.5);">
                                <?php the_post_thumbnail('full', ['style' => 'width: 100%; height: auto; display: block;']); ?>
                            </div>
                        <?php endif; ?>
                    </header>

                    <div class="entry-content" style="font-size: 18px; line-height: 1.8; color: #cbd5e1;">
                        <?php the_content(); ?>
                    </div>
                </article>
                <?php
            endwhile;
        else :
            echo '<p>Không tìm thấy bài viết.</p>';
        endif;
        ?>
    </div>
</section>

<?php get_footer(); ?>
