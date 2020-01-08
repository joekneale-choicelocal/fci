<html> <?php //closed in footer.php ?>
    <head>
        <meta charset="<?php get_bloginfo( 'charset' ); ?>">
        <title><?php wp_title(""); ?></title>
        <meta name="viewport" content="width=device-width">
        <?php wp_head();?>
    </head>
    <body> <?php //closed in footer.php ?>
    <?php get_template_part(get_partial_path('top_nav')) ?>
