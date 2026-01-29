<?php
// Include the header.php file
get_header();
?>

<main>
  <?php
  // Check if WordPress has posts in the database
  if ( have_posts() ) :

    // Start looping through posts
    while ( have_posts() ) :
      the_post(); // Moves pointer to the next post

      // Display post title
      the_title('<h2>', '</h2>');

      // Display post content
      the_content();

    endwhile;

  else :
    // If no posts found
    echo "<p>No posts found.</p>";
  endif;
  ?>
</main>

<?php
// Include the footer.php file
get_footer();
?>


// --------------------------header.php--------------------------
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">

  <!-- Required for plugins & styles -->
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header>
  <h1><?php bloginfo('name'); ?></h1>
  <p><?php bloginfo('description'); ?></p>
</header>
--------------------------footer.php--------------------------
<footer>
  <p>© <?php echo date('Y'); ?> My Website</p>
</footer>

<?php
// Required for scripts (VERY IMPORTANT)
wp_footer();
?>
</body>

</html>
------------------------functions.php------------------------
<?php
// Enable featured images
add_theme_support('post-thumbnails');

// Load CSS properly
function load_theme_assets() {
  wp_enqueue_style(
    'main-style',                     // Handle name
    get_stylesheet_uri()              // style.css path
  );
}
add_action('wp_enqueue_scripts', 'load_theme_assets');
