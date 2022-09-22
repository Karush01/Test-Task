<?php
/**
 * The template for displaying 404 pages (Page Not Found).
 *
 * @package ThemeGrill
 * @subpackage eStore
 * @since eStore 1.0
 */

get_header(); ?>

<section class='error_404'>
    <div class='wrapper'>
        <div class='flex__block'>
            <div class='right__img'>
                <img src='<?php echo site_url()?>/wp-content/themes/estore/assets/images/image 79.png'>
            </div>
            <div class='left__text'>
                <div class='title_section--404'>404</div>
                <div class='under__title--404'>אופס! מצטער לא נמצא</div>
                <p>אנחנו לא יכולים למצוא את הדף שאתה מחפש</p>
                <a class='btn_style btn_style--bg' href='<?php echo site_url()?>'>בחזרה לבית</a>
            </div>

        </div>
    </div>
</section>

<?php get_footer(); ?>
