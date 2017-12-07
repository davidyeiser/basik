<!doctype html>
<html <?php language_attributes(); ?>>

<?php
  get_template_part('head');
?>

<body <?php body_class(); ?>>
  <div class="site">
    <div class="site-upper">

    <?php
      // HEADER
      do_action('get_header');
      get_template_part('header');
    ?>

      <div class="site-main" role="document">
        <main class="main frame">
          <div class="measure">

          <?php
            if (is_home()) :
          ?>
            <h1 class="site-tagline"><?php echo get_bloginfo('description'); ?></h1>
          <?php
            endif;
          ?>

          <?php
            /*
              START WORDPRESS LOOP
              All main content (e.g. posts, pages) is accessed via the WP Loop.
            */
            if ( have_posts() ) :
              while ( have_posts() ) : the_post();
          ?>
              <?php
                // SINGLE VIEW
                // e.g. post
                if (is_single()) :
              ?>

              <article class="entry">
                <header class="entry-header">
                  <time class="publish-date" datetime="<?php echo get_post_time('c', true); ?>"><?php the_time('F j, Y'); ?></time>
                  <h1 class="title"><?php the_title(); ?></h1>
                </header>

                <div class="entry-content typeset">
                  <?php the_content(); ?>
                </div>
              </article>

              <?php
                // PAGE
                elseif (is_page()) :
              ?>

              <article class="entry">
                <header class="entry-header">
                  <h1 class="title"><?php the_title(); ?></h1>
                </header>

                <div class="entry-content typeset">
                  <?php the_content(); ?>
                </div>
              </article>

              <?php
                // ARCHIVE VIEW
                // Home page, archive page, etc.
                else :
              ?>
              <article class="entry-block">
                <header class="preview-entry-header">
                  <a class="entry-link" href="<?php the_permalink(); ?>" title="Go to post">
                    <h2 class="preview-title title"><?php the_title(); ?></h2>
                    <time class="preview-publish-date" datetime="<?php echo get_post_time('c', true); ?>"><?php the_time('M j/y'); ?></time>
                  </a>
                </header>

                <?php
                /*
                <div class="preview-content typeset">
                  <?php the_excerpt(); ?>
                </div>
                */
                ?>
              </article>
              <?php
                endif;
              ?>
          <?php
              endwhile;
            else :
          ?>
              <p><?php esc_html_e( 'Sorry, no content matched your criteria.' ); ?></p>
          <?php
            endif;
            /*
              END WORDPRESS LOOP
            */
          ?>
          </div> <!-- /.measure -->
        </main> <!-- /.main -->
      </div> <!-- /.site-main -->
    </div>

    <div class="site-lower">
    <?php
      // FOOTER
      do_action('get_footer');
      get_template_part('footer');
      wp_footer();
    ?>
    </div>
  </div>

  <?php
  /*
    Below (between) the <script> tag is the jQuery code
    used for the menu nav icon.
  */
  ?>
  <script>
  (function($) {
    $('#js-menu-control').click(function() {
      $me = $(this);

      if ($me.hasClass('menu-control-active')) {
        $('#main-nav').removeClass('show');
        $me.removeClass('menu-control-active');
      }
      else {
        $('#main-nav').addClass('show');
        $me.addClass('menu-control-active');
      }
    });
  })(jQuery);
  </script>
</body>
</html>
