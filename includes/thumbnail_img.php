    <?php if ( get_post_meta($post->ID, 'thumbnail', true) ) : ?>
    <?php $image = get_post_meta($post->ID, 'thumbnail', true); ?>
    <a href="<?php echo $image ?>" rel="example4" class="cboxElement" title="<?php the_title(); ?>"><img src="<?php echo $image; ?>" alt="<?php the_title(); ?>"/></a>
    <?php else: ?>
</div>
<!-- 截图 -->
<div class="thumbnail">

<?php if (has_post_thumbnail()) { the_post_thumbnail('thumbnail'); }
else { ?>
<a href="<?php echo catch_first_image() ?>" class="cboxElement" rel="example4" title="<?php the_title(); ?>">
<img class="home-thumb" src="<?php echo catch_first_image() ?>" width="140px" height="100px" alt="<?php the_title(); ?>"/>
</a>
<?php } ?>

<?php endif; ?>
