<?php
/**
 * Шаблон для відображення всіх сторінок
 *
 * Це шаблон, який за умовчанням відображає всі сторінки.
 * Зверніть увагу, що це конструкція сторінок WordPress
 * і що інші «сторінки» на вашому сайті WordPress можуть використовувати
 * інший шаблон.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package temptheme
 */

get_header();
?>

<?php the_content(); ?> 

<?php
get_footer();
//  для відображення сторінок контенту (для сторінки shop)