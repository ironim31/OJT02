<?php get_header(); ?>

<section>
    <h2>Latest Articles</h2>
    <!-- <div class="container">
        <div class="box">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/post_img_1.png" alt="">
            <div class="description">
                <p>2018/5/20</p>
                <h3>おしゃれカフェありますよ</h3>
            </div>
            <span>READ MORE <p></p></span>
        </div>

        <div class="box">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/post_img_2.png" alt="">
            <div class="description">
                <p>2018/5/19</p>
                <h3>あのネオンはいつ交換するのか？！観覧車の謎に迫る！</h3>
            </div>
            <span>READ MORE <p></p></span>
        </div>

        <div class="box">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/post_img_3.png" alt="">
            <div class="description">
                <p>2018/5/18</p>
                <h3>ラソナの車内はこんなのよ</h3>
            </div>
            <span>READ MORE <p></p></span>
        </div>

        <div class="box">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/post_img_4.png" alt="">
            <div class="description">
                <p>2018/5/27</p>
                <h3>お隣のアラハはハワイ？</h3>
            </div>
            <span>READ MORE <p></p></span>
        </div>

        <div class="box">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/post_img_5.png" alt="">
            <div class="description">
                <p>2018/5/16</p>
                <h3>なぜテント？ラソナの人に聞いてみた</h3>
            </div>
            <span>READ MORE <p></p></span>
        </div>
        <div class="box">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/post_img_6.png" alt="">
            <div class="description">
                <p>2018/5/15</p>
                <h3>ベイエリアおしゃれすぎる問題</h3>
            </div>
            <span>READ MORE <p id="line"></p></span>
        </div> -->

        <!-- メインループ(記事の取得) -->
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
            <div class="box">
            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), "large"); ?>" alt="programming">
                <div class="description">
                    <p><?php the_date(); ?></p>
                    <h3><?php the_title(); ?></h3>
                </div>
                <span>READ MORE <p id="line"></p></span>
            </div>
                <?php endwhile; else : ?>
                    <p>投稿がありません</p>
                <?php endif; ?>

</section>
</div>

<?php get_footer(); ?>