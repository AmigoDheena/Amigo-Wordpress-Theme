<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amigo Website</title>
    <?php wp_head(); ?>
</head>
<body>
<header>
    <?php
        wp_nav_menu(
          array(
                  'Theme Location' => 'top-menu',
          )
        );
    ?>
</header>
