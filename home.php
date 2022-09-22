<?php

/**
 * /*
 * Template Name: Home*/

get_header();

global $post;

$page_ID = $post->ID;


$sliders = get_field('slider', $page_ID);
$t_b_list = get_field('t_b_list', $page_ID);
?>

<div class='home-slider'>
    <div class='home-slider__slider'>
        <?php foreach ($sliders as $slider) { ?>
            <div class='home-slider__slider--item'>
                <div class='home-slider__slider--item__img'>
                    <img src='<?php echo $slider['background'] ?>'>
                </div>
                <div class='home-slider__slider--item__content'>
                    <div class='container'>
                        <div class='home-slider__slider--item__content--text'>
                            <div class='home-slider__slider--item__title'>
                                <?php echo $slider['title'] ?>
                            </div>
                            <p><?php echo $slider['description'] ?></p>
                            <div class='home-slider__slider--item__button'>
                                <a href='<?php echo $slider['button_link'] ?>'><?php echo $slider['button_text'] ?></a>
                            </div>
                            <ul>
                                <?php foreach ($slider['list'] as $item) { ?>
                                    <li><?php echo $item['text'] ?></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
    <div class='home-slider__slider--line'>
        <div class='home-slider__slider--line__num home-slider__slide--line__num_start'>01</div>
        <div class='home-slider__slider--line__default'>
            <div class='home-slider__slider--line__active'></div>
        </div>
        <div class='home-slider__slider--line__num home-slider__slider--line__num_last'></div>
    </div>
</div>
<div class="text_with_image mt120">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-md-5">
                <img src="<?php the_field('t_b_image', $page_ID); ?>" alt="">
            </div>
            <div class="col-md-7 pl120">
                <p><?php the_field('t_b_heading', $page_ID); ?></p>
                <h2><?php the_field('t_b_title', $page_ID); ?></h2>
                <ul>
                    <?php foreach ($t_b_list as $item_list) { ?>
                        <li>
                            <span><?php echo $item_list['title']?></span>
                            <span><?php echo $item_list['text']?></span>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>

