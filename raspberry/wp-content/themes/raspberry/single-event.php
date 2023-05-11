<!doctype html>

<?php get_header(); ?>

<section>
    <h2><?php wp_title('');?></h2>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
    <article> 
        <?php
        if (get_field('youtube_trailer_link')) { 
            $yt_link = get_field('youtube_trailer_link'); ?>
        
        <iframe frameBorder="0" src="<?php echo $yt_link;?>">
        </iframe> 
    
        <?php
        } else {
            the_post_thumbnail( 'large' );
        } ?>

         
        <?php
        echo("<p>");
        $args = array(
            //'before' => '',
            'sep' => ' | ',
            //'after' => '',
            'template' => '%s: %l'
        );
        
        the_taxonomies( $args );
        the_content(); 
        ?>
        
        <table>
            <tr>
                <td>Presenter</td>
                <td><?php the_field('presenter'); ?></td>
            </tr>
            <tr>
                <td>Location</td>
                <td><?php the_field('venue_address_line_1'); ?></td>
            </tr>
            <tr>
                <td></td>
                <td><?php the_field('venue_address_line_2'); ?></td>
            </tr>
            <tr>
                <td></td>
                <td><?php the_field('venue_suburb'); ?></td>
            </tr>
            <tr>
                <td></td>
                <td><?php the_field('venue_postcode'); ?></td>
            </tr>
            <tr>
                <td></td>
                <td><?php the_field('venue_state'); ?></td>
            </tr>
            <tr>
                <td>Time</td>
                <td><?php the_field('event_time'); ?></td>
            </tr>
            <tr>
                <td>Tickets</td>
                <td><?php the_field('ticket_price'); ?></td>
            </tr>
        
        </table>
        
    </article>
    
    <p></p>
    
    <div class="wrapper">
        <button class="ticketbutton" type="button" onclick="window.location.href='index.php'">Purchase Tickets</button>
    </div>
    
    <br>
    <span style="float:left"><?php previous_post_link(); ?> </span>
    <span style="float:right"><?php next_post_link(); ?></span>
    <br>
    
    <?php endwhile; else : ?>
        <h2>Error</h2>
        <p>Sorry, no posts matched your criteria.</p>
    <?php endif; ?>

</section>



<?php get_footer(); ?>