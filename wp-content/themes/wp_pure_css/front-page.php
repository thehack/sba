<?php get_header(); ?>
<div id="overlay">
  <div class="l-box"><h2>PUSHING DESIGN INTO THE FUTURE</h2>
  </div>
</div>
<div class="main">
  <div id="slides" class="l-box">

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; else: ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
      <?php endif; ?>
  </div>
</div>
<!-- the gallery -->
<div class="pure-g-r main">
  <div class="pure-u l-box">
    <div class="practiceStatement">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus.
    </div>
  </div>
	<?php 
		global $more;    // Declare global $more (before the loop).
    
		$args = array ( 'category' => 3, 'posts_per_page' => 5);
		$myposts = get_posts( $args );
		foreach( $myposts as $post ) :	setup_postdata($post);
		$more = 0;
	?>
    <div class="pure-u-1-2 l-box">
      <div class="hovertext">
        <?php the_content(); ?>
      </div>
    </div>
  <?php endforeach; ?>
</div>

<?php get_footer(); ?>

<script type="text/javascript">
	
	jQuery('document').ready(function($) {

		//hide the more tags
		$('.more-link').hide();

    // initiate slideshow
    $('#slides').slidesjs({
      effect: {
        fade: {
          speed: 1000,
          crossfade: true
        }
      },
        width: 1033,
        height: 581,
        navigation: {
          active:false
        },
        pagination: {
          active: false
        },
        play: {
          auto: true,
          active: false,
          effect: 'fade'}
        });

    });
</script>