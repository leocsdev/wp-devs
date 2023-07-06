<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<body <?php body_class() ?>>
  <h1>Hello WP Devs!</h1>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae amet aspernatur architecto repellendus! Labore culpa autem modi, ab neque rem inventore, ad laboriosam ex, dolorum quia odit. Cupiditate, debitis. Recusandae, possimus. Eaque hic voluptatibus cumque corrupti saepe tenetur perspiciatis laboriosam vel debitis at exercitationem itaque eos, autem, sit odit iusto?</p>

  <div id="page" class="site">
    <header>
      <section class="top-bar">
        <div class="container">
          <div class="logo">
            Logo
          </div>
          <div class="searchbox">
            Search
          </div>
        </div>
      </section>
      <section class="menu-area">
        <div class="container">
          <nav class="main-menu">
            <?php wp_nav_menu(array('theme_location' => 'wp_devs_main_menu')) ?>
          </nav>
        </div>
      </section>
    </header>