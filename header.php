<!DOCTYPE html>

<html>

<head>
    <?php wp_head(); ?>
    <!-- Links to stylesheet named "style" -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, user-scalable=1.0">


</head>

<body <?php body_class(); ?>

    <?php get_template_part( 'partials/components/header-desktop' ); ?>
    <?php get_template_part( 'partials/components/header-mobile' ); ?>