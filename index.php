<?php get_header() ?>

<img 
  src="<?php header_image(); ?>"
  height="<?php echo get_custom_header()->height; ?>"
  width="<?php echo get_custom_header()->width; ?>"
  alt=""
>

<div id="content" class="site-content">
  <div id="primary" class="content-area">
    <main id="main" class="site-main">
      <h1>Blog</h1>
      <div class="container">
        <div class="blog-items">
          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : ?>
              <?php the_post(); ?>
              <article>
                <h2><?php the_title(); ?></h2>
                <?php 
                  // adds featured image, you can set the image size to:
                  // 'thumbnail', 'medium', 'large', 'full' or custom size array(width, height)
                  the_post_thumbnail(array(275, 275));
                ?>
                <div class="meta-info">
                  <p>Posted in <?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?></p>
                  <p>Categories: <?php the_category(' '); ?></p>
                  <p>Tags: <?php the_tags(' ', ', '); ?></p>
                </div>
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