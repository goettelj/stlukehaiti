<div class="action-items">
		Action Items
</div>


<?php 
 
while(has_sub_field("promos")): ?>
	
	<?php if(get_row_layout() == "video_promo"): // layout: one column wysiwyg ?>
			
			
		<div class="promo video">
			<h2><?php the_sub_field("title"); ?></h2>
			<img src="http://img.youtube.com/vi/<?php the_sub_field("youtube_id"); ?>/hqdefault.jpg" alt="<?php the_sub_field("alt"); ?>"  />
			<p><a href="<?php the_sub_field("link_url"); ?>"><?php the_sub_field("link_text"); ?></a></p>
		</div>

	
	<?php elseif(get_row_layout() == "image_promo"): // layout: Featured Section ?>
		
		<div class="promo image">
			<h2><?php the_sub_field("title"); ?></h2>
			<img src="<?php the_sub_field("image"); ?>" alt="<?php the_sub_field("alt"); ?>"  />
			<p><a href="<?php the_sub_field("link_url"); ?>"><?php the_sub_field("link_text"); ?></a></p>
			
		</div>			
						
 
	<?php endif; ?>
 
<?php endwhile; ?>






	

