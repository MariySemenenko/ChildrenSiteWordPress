
<!-- Це сторінка яка виводить пости (якщо нажати на совенятко, то переходимо на його сторінку)  -->

<?php

get_header();
?>



<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

		endwhile; 
		?>

		</main><!-- #main -->
	</div><!-- #primary -->


<!-- -------------------Toys-------------------------- -->

<div class="container toys">
        <h2 class="subtitle">Можливо вам сподобаються..</h2>
        <div class="toys__wrapper">

            <?php
            $posts = get_posts(array(
                'numberposts' => 3,
                'category_name'    => 'softtoys',
                'orderby'     => 'date',
                'order'       => 'ASC',
                'post_type'   => 'post',
                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
            ));

            foreach ($posts as $post) {
                setup_postdata($post);
            ?>

                <div class="toys__item" style="background-image: url(<?php

                                                                        if (has_post_thumbnail()) {

                                                                            the_post_thumbnail_url();
                                                                        } else {
                                                                            echo get_template_directory_uri() . '/assets/img/notfound.png';
                                                                        }

                                                                        ?>);">

                    <div class="toys__item-info">
                        <div class="toys__item-title"><?php the_title() ?></div>
                        <div class="toys__item-descr">
                            <?php the_field('toysdescription'); ?>
                        </div>
                        <a href="<?php echo get_permalink(); ?>" class="minibutton toys__trigger">Детальніше</a>
                    </div>
                </div>

            <?php
            }

            wp_reset_postdata(); // сброс
            ?>
        </div>

        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="toys__alert">
                    <span>Не знайшли, що шукали?</span> Зв'яжіться і ми - и ми з радістю знайдемо те, що вам потрібно!
                </div>
            </div>
        </div>

        
    </div>


<?php

get_footer();
?>