<?php
/*
Template Name: General Template
*/
?>

<!--
  Install the Show Current Template plugin by JOTAKI.
  This plugin shows the template used by the pages/posts.
-->

<?php get_header() ?>

<div id="content" class="site-content">
  <div id="primary" class="content-area">
    <main id="main" class="site-main">
      <div class="container">
        <div class="general-template">
          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : ?>
              <?php the_post(); ?>
              <article>
                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>
              </article>
            <?php endwhile; ?>
          <?php else : ?>
            <p>Nothing yet to be displayed!</p>
          <?php endif; ?>
        </div>
      </div>
    </main>
  </div>
</div>

<?php get_footer() ?>