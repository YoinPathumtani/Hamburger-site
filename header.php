<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon-32x32.png">
</head>

<body class="c-grid" <?php body_class($class); ?>>
  <header class="l-header p-header">
    <button id="is-open" class="c-button-menu">Menu</button>
    <h1><a href="<?php echo esc_url(home_url('/')); ?>" class="c-text-siteTitle"><?php bloginfo('name'); ?></a></h1>
    <?php get_search_form(); ?>
    <?php wp_head(); ?>
  </header><!-- l-header -->
