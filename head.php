<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Load custom fonts -->
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() . '/fonts/fonts.css'; ?>" />

  <!-- Main CSS -->
  <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />

  <?php
  /*
    WordPress function to display the page and site title
    For more information:
    https://developer.wordpress.org/reference/functions/wp_title/
    https://stackoverflow.com/questions/26636216/wp-title-showing-page-title-but-not-site-title

    When you're ready to add more advanced SEO functionality to the theme,
    check out the Yoast SEO plugin: https://yoast.com/wordpress/plugins/seo/
  */
  ?>
  <title><?php wp_title('&middot;', true, 'right'); ?><?php echo get_bloginfo('name'); ?></title>

  <?php
  /*
    Want to add a favicon to your site?
    1. Create a 32x32 PNG image and save it as: favicon.png
    2. Upload it to the theme directory.
    3. Uncomment the code below.
  */
  ?>

  <?php /*

  <!-- Favicon -->
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri() . '/favicon.png'; ?>">

  */ ?>

  <?php
    // Load jQuery
    wp_enqueue_script("jquery");
  ?>

  <?php
    /*
      The wp_head() call below is used by WordPress and many other plugins
      as a place to hook into when needed. Leave this here for best results.
    */
    wp_head();
  ?>
</head>
