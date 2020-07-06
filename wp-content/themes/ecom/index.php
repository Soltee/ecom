<?php  get_header(); ?>

<div class="">
    <?php if( have_posts() ){ 
        while( have_posts() ) {
            the_post();
            echo the_content();
        }
    ?>
        
    <?php } ?>
</div>
<?php  get_footer(); ?>