<div class="action-items">
	
	<?php the_field("take_action_block", 621); ?>
	
</div>


<?php 
 
while(has_sub_field("promos")): ?>
	
	<?php if(get_row_layout() == "video_promo"): // layout: Video Promo ?>
			
			
		<div class="promo video">
			<h2><a href="<?php the_sub_field("link_url"); ?>"><?php the_sub_field("title"); ?></a></h2>
			<a href="<?php the_sub_field("link_url"); ?>"><img src="http://img.youtube.com/vi/<?php the_sub_field("youtube_id"); ?>/hqdefault.jpg" alt="<?php the_sub_field("alt"); ?>"  /></a>
			<p class="readmore"><a href="<?php the_sub_field("link_url"); ?>"><?php the_sub_field("link_text"); ?></a></p>
		</div>

	
	<?php elseif(get_row_layout() == "image_promo"): // layout: Image Promo ?>
		
		<div class="promo image">
			<h2><a href="<?php the_sub_field("link_url"); ?>"><?php the_sub_field("title"); ?></a></h2>
			<a href="<?php the_sub_field("link_url"); ?>"><img src="<?php the_sub_field("image"); ?>" alt="<?php the_sub_field("alt"); ?>"  /></a>
			<p class="readmore"><a href="<?php the_sub_field("link_url"); ?>"><?php the_sub_field("link_text"); ?></a></p>
			
		</div>			
						
 
	<?php endif; ?>
 
<?php endwhile; ?>






	

