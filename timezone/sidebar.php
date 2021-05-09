    <aside class="single_sidebar_widget search_widget">
        <form action="<?php echo home_url(); ?>" method="GET">
            <div class="form-group">
                <div class="input-group mb-3">
                    <input type="text" class="form-control"
                           placeholder='<?php _e('Поиск по ключевому слову', 'tsn'); ?>'
                           onfocus="this.placeholder = ''"
                           onblur="this.placeholder = '<?php _e('Поиск по ключевому слову', 'tsn'); ?>'
                                   " name="s" id="s" value="<?php the_search_query(); ?>">
                    <div class="input-group-append">
                        <button class="btns" type="button"><i class="ti-search"></i></button>
                    </div>
                </div>
            </div>
            <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                    type="submit"><?php _e('Поиск', 'tsn'); ?>
            </button>
        </form>
    </aside>

    <aside class="single_sidebar_widget post_category_widget">
        <h4 class="widget_title"><?php _e('Cлучайные 6 категорий блога', 'tsn');  ?></h4>
        <ul class="list cat-list">
	        <?php
	        // display 6 random categories
	        $cats ='';
	        $categories=get_categories();
	        $rand_keys = array_rand($categories, 6);
	        foreach ($rand_keys as $key) {
		        $cats .= $categories[$key]->term_id .',';
	        }
	        wp_list_categories('title_li=0&hierarchical=0&hide_empty=0&show_count=1&include='.$cats);
	        ?>
        </ul>
    </aside>
    <?php
    $popular_posts_args = array(
	    'posts_per_page' => 4,
	    'meta_key' => 'my_post_viewed',
	    'orderby' => 'meta_value_num',
	    'order'=> 'DESC'
    );

    $popular_posts_loop = new WP_Query( $popular_posts_args );?>
    <aside class="single_sidebar_widget popular_post_widget">
        <h3 class="widget_title"><?php _e('Популярные статьи', 'tsn');  ?></h3>

        <div class="media post_item">
	        <?php while( $popular_posts_loop->have_posts() ):
		        $popular_posts_loop->the_post();?>
		        <?php if(get_the_post_thumbnail_url()): ?>
                <img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'sidebar-image' );?>" alt="<?php the_title(); ?>">
	        <?php else: ?>
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/nothing-abandoned-1.jpg" alt="<?php the_title(); ?>">
	        <?php endif; ?>

                <div class="media-body">

                    <a href="<?php the_permalink(); ?>">
				        <?php the_title('<h3>', '</h3>'); ?>
                    </a>
                    <p><?php the_time('F jS, Y'); ?></p>
                </div>
                <div class="mail"><?php the_post_thumbnail(); ?></div>
                <a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
	        <?php endwhile;
	        wp_reset_query();
	        ?>
        </div>
    </aside>

    <aside class="single_sidebar_widget tag_cloud_widget">
        <h4 class="widget_title"><?php _e('Облако популярных тегов', 'tsn');?></h4>
        <ul class="list">
            <li>
	            <?php wp_tag_cloud('smallest=15&largest=40&number=20&orderby=count'); ?>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </li>
        </ul>
    </aside>

    <?php dynamic_sidebar('right_sidebar')?>
