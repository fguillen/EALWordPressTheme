<?php get_template_parts( array( 'parts/shared/html-header' ) ); ?>
<?php get_template_parts( array( 'parts/shared/header' ) ); ?>

<!-- XXX: page -->

<div id="wrapper">
  <?php get_template_parts( array( 'parts/shared/menu' ) ); ?>

  <div id="right-column">
    <div id="content">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <div class="item">
          <div class="text">
            <h2><?php the_title(); ?></h2>

            <div class="description">
              <?php the_content(); ?>
            </div>
          </div>

          <div class="images">
            <?php the_block('images'); ?>
          </div>
        </div> <!-- item -->

      <?php endwhile; ?>

    </div>
  </div>
</div>

<?php get_template_parts( array( 'parts/shared/html-footer' ) ); ?>