<?php get_header(); ?>

<section>
    <h2>Latest Articles</h2>
    <div class="container">

        <!-- メインループ(記事の取得) -->
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
            <div class="box">

                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), "large"); ?>" alt="programming">
                
                <div class="description">
                    <p><?php echo get_the_date();?></p>
                    <h3><?php the_title(); ?></h3>
                </div>
                <a href="<?php the_permalink(); ?>">
                    <span>READ MORE <p id="line"></p></span>
                </a>
            </div>
                <?php endwhile; else : ?>
                    <p>投稿がありません</p>
                <?php endif; ?>

</section>
</div>

<?php get_footer(); ?>