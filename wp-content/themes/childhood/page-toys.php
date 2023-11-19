<?php
/*
Template Name: М'які іграшки
*/

?>

<?php
get_header();
?>

<div class="toys">
    <div class="container">
        <h2 class="subtitle">М'які іграшки</h2>
        <div class="toys__wrapper">

            <?php
            $posts = get_posts(array(
                'numberposts' => -1,
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

        <!-- ----------------------Pозвиваючі------------------------------- -->



        <h2 class="subtitle">Розвиваючі</h2>
        <div class="toys__wrapper">

            <?php
            $posts = get_posts(array(
                'numberposts' => -1,
                'category_name'    => 'edutoys',
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
                        <div class="toys__item-title"><?php the_title(); ?></div>
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


            <!-- -------------------------------------------------- -->

            <div class="col-lg-10 offset-lg-1">
                <div class="toys__alert">
                    <span><?php the_field('doll', 2); ?></span><?php the_field('seconddoll', 2); ?>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
get_footer();
?>