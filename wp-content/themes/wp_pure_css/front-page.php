<?php get_header(); ?>
<div id="overlay">
  <div class="l-box"><p>We are a young architectural practice with ideas above</p>
  <p class="fixSpacing">our station.</p>
  
  </div>
</div>
<div class="main">
  <h2 id="statement" class="l-box">We are a young architectural practice with ideas above our station.</h2>

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
    <div class="practiceStatement">Shane Birney Architects is a design based architectural practice located in Derry~Londonderry producing thoughtful and beautifully crafted work. We believe in a simple, honest approach to design, combining quality with utility to produce work on time and on budget.
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

    // resize hack
    $('#seventyFive').parent().css('width', "75%")
		
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