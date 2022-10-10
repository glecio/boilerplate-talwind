<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header class="w-full h-16 bg-indigo-600 drop-shadow-lg">
    <div class="container px-4 md:px-0 h-full mx-auto flex justify-between items-center">
      <!-- Logo Here -->
      <a class="text-yellow-400 text-xl font-bold italic" href="https://www.kindacode.com">KINDA<span class="text-white">CODE</span></a>

      <!-- Menu links here -->
      <ul id="manu4" class="hidden fixed top-0 right-0 px-10 py-16 bg-gray-800 z-50
                md:relative md:flex md:p-0 md:bg-transparent md:flex-row md:space-x-6">

        <li class="md:hidden z-90 fixed top-4 right-6">
          <a href="javascript:void(0)" class="text-right text-white text-4xl" onclick="toggleMenu()">&times;</a>
        </li>

        <li>
          <a class="text-white opacity-70 hover:opacity-100 duration-300" href="#">Home</a>
        </li>
        <li>
          <a class="text-white opacity-70 hover:opacity-100 duration-300" href="#">Something</a>
        </li>
        <li>
          <a class="text-white opacity-70 hover:opacity-100 duration-300" href="#">Forums</a>
        </li>

        <li>
          <a class="text-white opacity-70 hover:opacity-100 duration-300" href="#">About</a>
        </li>
        <li>
          <a class="text-white opacity-70 hover:opacity-100 duration-300" href="#">Contact</a>
        </li>
      </ul>

      <!-- This is used to open the menu on mobile devices -->
      <div class="flex items-center md:hidden">
        <button class="text-white text-4xl font-bold opacity-70 hover:opacity-100 duration-300" onclick="toggleMenu()">
          &#9776;
        </button>
      </div>
      <!--
      <nav class="nav flex">
        <div class="logo">
          <a href="<?php echo get_site_url(); ?>">
            logo
          </a>
        </div>
        <div class="nav__menu" id="nav-menu">
          <?php
          $args = array(
            'menu_class' => 'nav__list flex',
            'menu' => 'nav__list--id',
            'container' => 'false',
            'list_item_class'  => 'nav__item',
            'link_class'   => 'nav__link'

          );
          //wp_nav_menu($args);
          ?>




        </div>


      </nav> -->
  </header>