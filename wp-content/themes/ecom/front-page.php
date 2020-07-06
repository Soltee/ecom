<?php  get_header(); ?>

<div class="">
<?php //echo do_shortcode( '[products limit="8" columns="4" paginate="true"]' ); ?>
<?php echo do_shortcode( '[products limit="4" columns="4" best_selling="true" ]
' ); ?>
        
</div>
<?php  get_footer(); ?>