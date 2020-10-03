<?php get_header( ); ?>
<div class="container">
<div class="main">
<?php
    $args = array(
        'post_type' => 'post'
    );

    $post_query = new WP_Query($args);

    if($post_query->have_posts() ) {
        while($post_query->have_posts() ) {
            $post_query->the_post();
            ?>
            <article class="post">           
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <div class="meta">Created By 
            	<a href="<?php get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>">
            	<?php the_author(); ?> </a>on <?php the_time('F j, Y g:i a'); ?></div>
            <?php if(has_post_thumbnail()): ?>
            	<div class="post-thumnails">
            		<?php the_post_thumbnail( ); ?>
            	</div>
            <?php endif; ?>
            <?php the_excerpt( ); ?>
            
             <a class="button" href="<?php the_permalink(); ?>">
             	Read More
             </a> 

         </article>
            <?php
            }
        }
?>


		</div>


<?php get_footer( ); ?>