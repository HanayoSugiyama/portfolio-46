<?php

if( ! isset ( $content_width ) ) {
	$content_width = 723;
}
function custom_theme_setup() {
//head内にフィールドリンクを出力
	add_theme_support( 'automatic-feed-links' );
//タイトルタグ
	add_theme_support( 'title-tag' );
	
	add_theme_support( 'wp-block-styles' );
	//埋め込みをレスポンシブに
add_theme_support( 'responsive-embeds' );

//アイキャッチ画像を有効化
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 231, 177 ,false );
}


add_action(  'after_setup_theme', 'custom_theme_setup' );


function custom_widget_register() {
	register_sidebar( array(
					'name' => 'サイドバーウエジェットエリア',
					'id' => 'sidebar-widget',
					'description' => 'ブログページのサイドバーに表示されます。',
					 'before_widget' => '<div id="%1$s" class="c-widget %2$s">',
					 'after_widget' => '</div>',
					'before_title' => '<h2 class="c-widget__title">',
					 'after_title' => '</h2>',
					 
					 
				
					));
}
add_action( 'widgets_init', 'custom_widget_register' );
