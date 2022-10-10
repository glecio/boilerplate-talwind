<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header>
    <nav class="nav">
      <div class="logo">
        <a href="<?php echo get_site_url(); ?>">
          logo
        </a>
      </div>
      <div class="nav__menu" id="nav-menu">
        <?php
        $args = array(
          'menu_class' => 'nav__list ml--48',
          'menu' => 'nav__list--id',
          'container' => 'false',
          'list_item_class'  => 'nav__item',
          'link_class'   => 'nav__link'

        );
        wp_nav_menu($args);
        ?>




      </div>


    </nav>
  </header>