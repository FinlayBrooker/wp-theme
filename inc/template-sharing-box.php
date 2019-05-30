<?php
/**
 * Social share
 *
 * @package yellowtractor
 */

?>


<?php $postUrl = 'http' . (isset($_SERVER['HTTPS']) ? 's' : '') . '://' . "{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}"; ?>
<div class="share-button content-margin content-background clearfix">

    <a href="#" class="social-toggle">Share</a>
		 <div class="social-networks">
			 <ul>
			 <li class="social-twitter">
        <a target="_blank" class="social-twitter" href="https://twitter.com/intent/tweet?url=<?php echo $postUrl; ?>&text=<?php echo the_title(); ?>&via=<?php the_author_meta('twitter'); ?>" title="Tweet this">T</a>
        </li>

				<li class="social-facebook">
				<a target="_blank" class="social-facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $postUrl; ?>" title="Share on Facebook">F</a>
					</li>
					<li class="social-gplus">
				<a target="_blank" class="social-gplus" href="https://plus.google.com/share?url=<?php echo $postUrl; ?>" title="Share on Google+">G+</a>
       </li>
			</ul>
		</div>
</div>
