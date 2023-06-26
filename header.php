<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/reset.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body>
    <div class="inner_content">
        <!-- ヘッダー -->
        <header>

            <nav>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'header'
                ));
                ?>
            </nav>

            <section>
                <div class="kv">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="logo" class="logo">
                    <div class="kv_img_slider">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/visual_1_pc.png" alt="kv" class="kv_img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/visual_2_pc.png" alt="kv" class="kv_img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/visual_3_pc.png" alt="kv" class="kv_img">
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/visual_1_sp.png" alt="kv" id="kv_img_sp">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/visual_text_pc.png" alt="visual_text" id="kv_visual_text">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/visual_text_sp.png" alt="visual_text" id="kv_visual_text_sp">
                </div>
                <h1 id="kv_h1">進化し続ける「街」アメリカンビレッジマガジン</h1>
                <h1 id="kv_h1_sp">進化し続ける「街」<br>アメリカンビレッジマガジン</h1>
            </section>
            
        </header>