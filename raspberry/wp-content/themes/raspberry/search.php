<?php get_header(); ?>
<section>
    
    <h2>
    <?php echo("Search Results for '" . get_search_query() . "'"); ?>
    </h2>
    
    <?php
    // search query
    $args = array( 's' =>get_search_query());
    $the_query = new WP_Query( $args );
    
    // results
    get_search_form();
    
    if ($the_query->have_posts()) {
        while ($the_query->have_posts()) {
            $the_query->the_post();
            
            // post content
            ?> 
            <b><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></b><br>
            <?php
            
            //echo the_taxonomies();
            $content = strip_tags(get_the_content());
            
            if(strlen($content) > 150) {
                echo substr($content, 0, 150) . "(...)";
            } else {
                echo $content;
            }

            echo "<br><br>";
        }
        
    } else {
        echo "No posts found.";
    }
    
    ?>
    
</section>
<?php get_footer(); ?>