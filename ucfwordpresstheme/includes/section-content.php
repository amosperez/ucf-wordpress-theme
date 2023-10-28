<?php 
// Check if there are any posts
if (have_posts()): 

    // Loop through and display the posts
    while (have_posts()): 
        the_post(); 
        the_content(); //***Find out more about this***
    endwhile; 

else: 
    // Fallback message for when no posts are found
    echo '<p>No posts found.</p>';
endif; 
?>