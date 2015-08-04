<?php get_header(); ?>
<?php do_action('contentheader'); ?>
<div class="container">

    <div class="row">

        <div class="col-xd-12 col-sm-9" role="main">
            <div id="breadcrumb">
                <?php
                if ( function_exists( 'yoast_breadcrumb' ) ) {
                    yoast_breadcrumb();
                }
                ?>
            </div>
            <div class="main-content">
                <h1>Sorry, we kunnen de pagina niet vinden...</h1>
                <p>
                    Onze fout. Misschien bestaat de pagina die je zocht niet meer. Of is hij verplaatst. We helpen jou graag met zoeken. 
                    <?php get_search_form(); ?>
                </p>
            </div>
        </div>



        <div class="hidden-xs col-sm-3" role="complementary">
            <?php get_template_part( 'sidebar' ); ?>
        </div>

    </div>

</div>

<?php get_footer(); ?>

