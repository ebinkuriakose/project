<?php get_header();?>
<div class="gal">
<?php while(havce_posts()):the_post();?>
<?php the_content();?>
</div>
<?php endwhile;?>

<?php get_footer();?>

