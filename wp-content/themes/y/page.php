

<?php get_header();?>


<div class="container">

	<div class="area-do-conteudo">
		     <?php
							if (have_posts ()) :
								while ( have_posts () ) :
									the_post ();
									?>
		<div class="conteudo">

			<h1><?php the_title();?></h1>
	<?php the_content();?>
		</div>
				
				
				<?php
								endwhile
								;
							 else :
								
								?>
				<p>Nenhum post</p>
				
				<?php endif;?>
	</div>

	<div class="right_container"><?php get_sidebar()?></div>

</div>
<div style="clear: both;"></div>
<?php get_footer()?>