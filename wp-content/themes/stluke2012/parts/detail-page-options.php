<?php 
 
/*
*  Loop through a Flexible Content field and display it's content with different views for different layouts
*/
 
while(has_sub_field("content")): ?>
	
	<?php if(get_row_layout() == "featured_image"): // layout: one column wysiwyg ?>
		<figure>
			<img src="<?php the_sub_field("image"); ?>" alt="<?php the_sub_field("alt"); ?>" />
			<figcaption><p><span class="caption_head"><?php the_sub_field("caption_head"); ?></span> <?php the_sub_field("caption"); ?></p></figcaption>
		</figure>
	
	<?php elseif(get_row_layout() == "featured_slideshow"): // layout: one column wysiwyg ?>
	
			<script src="http://malsup.github.com/jquery.cycle2.js"></script>
			
			<div class="featured-slideshow">
		
			<?php if(get_sub_field('slide')): ?>
				<div class="cycle-slideshow" data-cycle-slides=".slideshow-slide" data-cycle-prev=".back" data-cycle-next=".next"  data-cycle-timeout=0>
					<?php while(has_sub_field('slide')): ?>
						<figure class="slideshow-slide">
							<img src="<?php the_sub_field("image"); ?>" alt="<?php the_sub_field("alt"); ?>"  />
							<figcaption><p><span class="caption_head"><?php the_sub_field("caption_head"); ?></span> <?php the_sub_field("caption"); ?></p></figcaption>
						</figure>
				
					<?php endwhile; ?>
				
				</div>
				
				<div class="back"></div>
				<div class="next"></div>
			
			<?php endif; ?>		
			</div>
		
 
	<?php elseif(get_row_layout() == "one_column"): // layout: one column wysiwyg ?>
 
		
		<?php the_sub_field("text_area"); ?>
		
 
	<?php elseif(get_row_layout() == "two_columns"): // layout: two column wysiwyg ?>
 
		<div class="columns">
			<div class="two-col">
				<?php the_sub_field("column_one"); ?>
			</div>
		
			<div class="two-col">
				<?php the_sub_field("column_two"); ?>
			</div>
 		</div>	
		
	<?php elseif(get_row_layout() == "pull_quote"): // layout: Pull Quote ?>
	
			<blockquote class="pullquote"><q><?php the_sub_field("quote"); ?></q><?php if(get_sub_field('attribution')) {?><p class="attribution">— <?php the_sub_field("attribution"); ?></p><?php }?></blockquote>	
			
	<?php elseif(get_row_layout() == "cta_button"): // layout: one column wysiwyg ?>

			<p class="button"><a href="<?php the_sub_field("cta_url"); ?>" ><?php the_sub_field("cta_text"); ?><?php
			 
			if(get_sub_field('title'))
			{?><span class="tip"><b><?php the_sub_field("title"); ?></b></span>
							<?php }?></a></p>
	
	<?php elseif(get_row_layout() == "table_with_header"): // layout: Table ?>
	
		<div class="featured">
			<h2 class="featured-title"><?php the_sub_field("section_header"); ?></h2>
			<table class="table">
				<thead>
					<?php the_sub_field("table_head"); ?>
				</thead>
				
				<?php if(get_sub_field('table_row_container')): ?>
					<?php while(has_sub_field('table_row_container')): ?>
				 	<tr>
					<?php the_sub_field('table_row'); ?>
				 	</tr>
					<?php endwhile; ?>
				 
					
				 
				<?php endif; ?>
				
			</table>
		</div>
	
	<?php elseif(get_row_layout() == "featured_list"): // layout: Featured List ?>
					
		<div class="featured">
			<h2 class="featured-title"><?php the_sub_field("section_header"); ?></h2>
			<?php if(get_sub_field('list_item')): ?>
			<ul class="featured-list">
				<?php while(has_sub_field('list_item')): ?>
				<li class="group">
					<?php if(get_sub_field('link_url')): ?><a href="<?php the_sub_field("link_url"); ?>"><?php endif; ?><img src="<?php the_sub_field("image_thumbnail"); ?>" alt="<?php the_sub_field("alt"); ?>" /><?php if(get_sub_field('link_url')): ?></a><?php endif; ?>
					<h3 class="kicker"><?php the_sub_field("kicker"); ?></h3>
					<h2><?php if(get_sub_field('link_url')): ?><a href="<?php the_sub_field("link_url"); ?>"><?php endif; ?><?php the_sub_field("header"); ?><?php if(get_sub_field('link_url')): ?></a><?php endif; ?></h2>
					<p><?php the_sub_field("body_copy"); ?></p>
					<p class="link"><a href="<?php the_sub_field("link_url"); ?>"><?php the_sub_field("link_text"); ?></a></p>
				</li>
				<?php endwhile; ?>
				 
					
				</ul> 
			<?php endif; ?>
				
				
			
		</div>
		
	<?php elseif(get_row_layout() == "featured_section"): // layout: Featured Section ?>
					
		<div class="featured">
			<h2 class="featured-title"><?php the_sub_field("section_header"); ?></h2>
			
			<?php the_sub_field("body_copy"); ?>
			
		</div>	
	
	<?php elseif(get_row_layout() == "html_area"): // layout: Featured Section ?>
					
	<?php the_sub_field("html"); ?></h2>
			
			
	
				
 
	<?php endif; ?>
 
<?php endwhile; ?>