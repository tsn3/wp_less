<aside class="single_sidebar_widget search_widget">
	<form action="<?php echo home_url(); ?>" method="GET">
		<div class="form-group">
			<div class="input-group mb-3">
				<input type="text" class="form-control"
				       placeholder='<?php esc_html_e('Поиск по ключевому слову', 'tsn'); ?>'
				       onfocus="this.placeholder = ''"
				       onblur="this.placeholder = '<?php esc_html_e('Поиск по ключевому слову', 'tsn'); ?>'
					       " name="s" id="s" value="<?php the_search_query(); ?>">
				<div class="input-group-append">
					<button class="btns" type="button"><i class="ti-search"></i></button>
				</div>
			</div>
		</div>
		<button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
		        type="submit"><?php esc_html_e('Поиск', 'tsn'); ?>
		</button>
	</form>
</aside>
