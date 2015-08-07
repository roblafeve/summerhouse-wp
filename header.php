<!DOCTYPE html>
<html lang="en" <?php body_class(); ?>>
  <head>
    <?php wp_head(); ?>
    <meta charset="UTF-8"/>
    <title>Summer House</title>
    <meta property="fb:app_id" content="1623024351307828" />
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no, width=device-width"/>
    <link rel="stylesheet" href="styles/style.css"/>
  </head>
  <body>

    <?php get_template_part('facebook') ?>

    <?php get_template_part('titlebar') ?>

    <?php if(!is_front_page()): ?>
    <div class="content">
    <?php endif; ?>
