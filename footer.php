<?php
$menuLocations = get_nav_menu_locations(); // Get our nav locations (set in our theme, usually functions.php)
// This returns an array of menu locations ([LOCATION_NAME] = MENU_ID);
$menuFooter = $menuLocations['top-destinations'];
$menuFooterTwo = $menuLocations['travel-information'];
$footerNav = wp_get_nav_menu_items($menuFooter);
$footerNavTwo = wp_get_nav_menu_items($menuFooterTwo);
$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>
<footer class="mt120">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <a href="<?php echo home_url() ?>">
                    <img src="<?php echo get_field('logo_footer', 'option') ?>">
                </a>
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-3 footer-column">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <span class="footer-title">Top destinations</span>
                    </li>
                    <?php foreach ($footerNav as $menuitem_f) { ?>
                        <li class="nav-item <?php if ($actual_link == $menuitem_f->url) {
                            echo 'active';
                        } ?>">
                            <a class="nav-link"
                               href="<?php echo $menuitem_f->url ?>"><?php echo $menuitem_f->title ?></a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
            <div class="col-md-3 footer-column">
                <ul class="nav flex-column mb86">
                    <li class="nav-item">
                        <span class="footer-title">Travel information</span>
                    </li>
                    <?php foreach ($footerNavTwo as $menuitem_f_two) { ?>
                        <li class="nav-item <?php if ($actual_link == $menuitem_f_two->url) {
                            echo 'active';
                        } ?>">
                            <a class="nav-link"
                               href="<?php echo $menuitem_f_two->url ?>"><?php echo $menuitem_f_two->title ?></a>
                        </li>
                    <?php } ?>
                </ul>
                <a href="#" class="book_btn_f">Book a tour</a>
            </div>

        </div>



        <div class="row  justify-content-between mt20">
            <div class="col-md-6 box">
                <ul class="list-inline quick-links">
                    <li class="list-inline-item">
                        <a href="#">© 2022 Tanzania</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">Terms and conditions</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="last_elem">Privacy policy</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4 box">
                <ul class="list-inline social-buttons">
                    <li class="list-inline-item">
                        <a href="#">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">
                            <i class="fa fa-facebook-f"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </li>

                    <li class="list-inline-item">
                        <a href="#">
                            <i class="fa fa-pinterest"></i>
                        </a>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</footer>
</div>


<?php wp_footer(); ?>
<script>
let  burgers = document.getElementById('burger_header');
    burgers.addEventListener("click", function(){
        this.classList.remove("animate");

        var bars = this.querySelectorAll('.burger__bar');
        for (let i = 0; i < bars.length; i++) {
            // Reset span animations - https://css-tricks.com/restart-css-animation/
            void bars[i].offsetWidth;
        }

        if (this.classList.contains("open")){
            this.classList.remove("open");
            this.classList.add("close");
            this.setAttribute('aria-expanded', 'false');
        } else {
            this.classList.remove("close");
            this.classList.add("open");
            this.setAttribute('aria-expanded', 'true');
        }
        this.classList.add("animate");

        $('#navigation_header').toggleClass(
            'open_hide_menu'
        )
    });


</script>


