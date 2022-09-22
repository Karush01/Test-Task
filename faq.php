<?php

/**
 * /*
 * Template Name: Faq*/

get_header();

global $post;

$page_ID = $post->ID;

$faqs = get_field('faq', $page_ID);
$faq_counter = 0;
?>
<div class="faq mt120">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <p>Interesting information</p>
                <h2>Tips for the best experience of Tanzania</h2>
            </div>
            <div class="col-md-7">
                <div class="accordion" id="myAccordion">
                    <?php foreach ($faqs as $faq) {
                        $faq_counter++;?>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading_<?php echo $faq_counter?>">
                            <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#collapse_<?php echo $faq_counter?>"><?php echo $faq['question']?>
                            </button>
                        </h2>
                        <div id="collapse_<?php echo $faq_counter?>" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                            <div class="card-body">
                                <p> <?php echo $faq['answer']?></p>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>

