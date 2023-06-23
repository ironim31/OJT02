<?php
// サムネイルを追加する方法
add_theme_support("post-thumbnails");
// the excerptのpタグを削除する方法
remove_filter('the_excerpt','wpautop');

