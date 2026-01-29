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
