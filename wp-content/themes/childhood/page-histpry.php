<?php
/*
Template Name: Наша історія
*/

?>

<?php
get_header();
?>


<div class="aboutus">
    <div class="container">
        <h1 class="title"><?php the_field('histiry', 2); ?></h1>
        <div class="row">
            <div class="col-lg-6">
                <div class="subtitle">
                    <?php the_field('secondhistory', 2); ?>
                </div>
                <div class="aboutus__text">
                    <?php the_field('subgect', 2); ?>
                </div>
            </div>

            <div class="col-lg-6">
                <?php $image = get_field('picture', 2); ?>
                <img class="aboutus__img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            </div>
        </div>
        <div class="row">

            <div class="col-lg-6">
                <?php $image = get_field('secondpicture', 2); ?>
                <img class="aboutus__img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            </div>

            <div class="col-lg-6">
                <div class="subtitle">
                    <?php the_field('thirdhistory', 2); ?>
                </div>
                <div class="aboutus__text">
                    <?php the_field('secondsubgect', 2); ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="subtitle">
                    <?php the_field('forthhistory', 2); ?>
                </div>
                <div class="aboutus__text">
                    <?php the_field('thirdsubgect', 2); ?>
                </div>
            </div>

            <div class="col-lg-6">
                <?php $image = get_field('thirdspicture', 2); ?>
                <img class="aboutus__img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            </div>


        </div>
    </div>
</div>


<?php
get_footer();
?>