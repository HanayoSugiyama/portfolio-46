<!-- ▼ フッター : 開始-->
<footer class="l-footer">
	<div class="l-container">
		<p class="c-footer-description"><?php bloginfo('desctiption'); ?></p>
		<a class="c-logo is-white" href="<?php echo esc_url( home_url( '/' ) ); ?>">

			<div class="c-logo__image">
				<img src="<?php echo esc_url(get_theme_file_uri( 'images/logo.png ')); ?>" alt="">
			</div>

			<div class="c-logo__text"><?php bloginfo('desctiption'); ?></div>
		</a>
	</div>
</footer>
<div class="c-copyright">
	<p>Copyright © 2019 MY PORTFOLIO All Rights Reserved.</p>
</div>
<!-- ▲ フッター : 終了-->
<?php wp_footer(); ?>
</body>

</html>
