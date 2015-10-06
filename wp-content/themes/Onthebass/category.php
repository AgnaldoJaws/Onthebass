
<?php get_header();?>


<div class="row">


	<div class="col-md-8">
		<div class="panel panel-default">
			<div class="panel-body">
	 <?php 	if (have_posts ()) : while ( have_posts () ) : 	the_post ();?>				
				<div class="panel panel-default">
					<div class="panel-body">
						<a href="<?php the_permalink(); ?>" id="title"><h1><?php the_title();?></h1>
						</a>				
				<?php the_excerpt();?>				
				 <div class="b">
				 		<?php the_post_thumbnail(array(200,200))?>
				 </div>
				Publicado em <?php the_date("d/m/Y")?>
				- <?php comments_number("Nenhum Comentário","1 Comentário","% comentários")?>
				--Publicado por <?php the_author()?>
				--Categoria <?php the_category("")?>
				
				     </div>
				</div>
				
				<?php endwhile;  else :?>
				<p>Nenhum post</p>				
				<?php endif;?>
				
	         </div>
		</div>
	</div>


	

</div>









