<?php /*
Template Name: Writing Tricks
*/ ?>

<?php get_header(); ?>

<?php genesis_before_content_sidebar_wrap(); ?>
<div id="content-sidebar-wrap TEST">
    <?php genesis_before_content(); ?>
    <div id="content" class="hfeed">

        <?php genesis_before_loop(); ?>
        <?php genesis_loop(); ?>
        <?php genesis_after_loop(); ?>

    </div><!-- end #content -->
    <?php genesis_after_content(); ?>

</div><!-- end #content-sidebar-wrap -->
<?php genesis_after_content_sidebar_wrap(); ?>

<?php get_footer(); ?>