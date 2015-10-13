<?php 

	/**
	 * Wp in Progress
	 * 
	 * @author WPinProgress
	 *
	 * This source file is subject to the GNU GENERAL PUBLIC LICENSE (GPL 3.0)
	 * It is also available at this URL: http://www.gnu.org/licenses/gpl-3.0.txt
	 */

	get_header(); 
	novalite_header_content();

?> 







<div class="row">

	<div class="col-md-12" id="row_sidebar">
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
						
				
						
				     </div>
				</div>
				
				<?php endwhile;  else :?>
				<p>Nenhum post</p>				
				<?php endif;?>
				
	         </div>
		</div>
	</div>

	

</div>
<div style="clear: both;"></div>
<?php get_footer()?>


