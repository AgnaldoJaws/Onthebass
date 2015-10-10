

<?php get_header();?>


<div class="row">

	<div class="col-md-8" id="row_sidebar">
		<div class="panel panel-default">
			<div class="panel-body">
	 <?php 	if (have_posts ()) : while ( have_posts () ) : 	the_post ();?>				
				<div class="panel panel-default">
					<div class="panel-body">
						
						<div class="title">
						<a href="<?php the_permalink(); ?>" ><h1><?php the_title();?></h1></a>
						</div>
						
						<div class="imagem">
						<a href="<?php the_permalink(); ?>" ><?php the_post_thumbnail(array(50,50))?></a>
						</div>
					
					
						<div class="texto">
						<a href="<?php the_permalink(); ?>" >	<?php the_excerpt();?>	</a>
						</div>
						
						<div class="pub">
						<h4>
						Publicado por <?php the_author()?>
						 em <?php the_date("d/m/Y")?>
				- <?php comments_number("Nenhum Comentário","1 Comentário","% comentários")?>
				
				</h4>
						</div>
						
				
						<a href="<?php the_permalink(); ?>" >	<button type="button" class="btn btn-default">Continua Lendo</button> </a>
				     </div>
				</div>
				
				<?php endwhile;  else :?>
				<p>Nenhum post</p>				
				<?php endif;?>
				
	         </div>
		</div>
	</div>

	<div class="col-md-4">
		<div class="panel panel-default">
		<?php get_sidebar()?>
		
		</div>
		
		</div>

</div>
<div style="clear: both;"></div>
<?php get_footer()?>