<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<?php
$menuLocations = get_nav_menu_locations(); // Get our nav locations (set in our theme, usually functions.php)
// This returns an array of menu locations ([LOCATION_NAME] = MENU_ID);

$menuHeader = $menuLocations['primary']; // Get the *primary* menu ID

$primaryNav = wp_get_nav_menu_items($menuHeader);
$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>
<div class="content">
    <header>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="cell">
                    <div class="d-flex justify-content-between align-items-center">
                        <a  href="<?php echo home_url() ?>">
                            <img src="<?php echo get_field('logo_header', 'option') ?>">
                        </a>
                        <button class="burger burger--spin" aria-expanded="false" aria-controls="" id="burger_header">
                            <span class="burger__bar"></span>
                            <span class="burger__bar"></span>
                            <span class="burger__bar"></span>
                        </button>

                    </div>
                </div>
                <div class="collapse navbar-collapse justify-content-between" id="navigation_header">
                    <a class="navbar-brand" href="<?php echo home_url() ?>">
                        <img src="<?php echo get_field('logo_header', 'option') ?>">
                    </a>
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <?php foreach ($primaryNav as $menuitem) { ?>
                            <li class="nav-item <?php if ($actual_link == $menuitem->url) {
                                echo 'active';
                            } ?>">
                                <a class="nav-link"
                                   href="<?php echo $menuitem->url ?>"><?php echo $menuitem->title ?></a>
                            </li>
                        <?php } ?>
                    </ul>
                    <a href="#" class="book_btn">Book a tour</a>
                </div>
            </nav>
        </div>
    </header>
