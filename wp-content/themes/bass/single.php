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


<!-- start content -->

<div class="row">
	
	

	<div class="col-md-10" id="row_sidebar">
		<div class="panel panel-default">
			<div class="panel-body">
	 <?php 	if (have_posts ()) : while ( have_posts () ) : 	the_post ();?>				
				<div class="panel panel-default">
				 <div class="b">
				 		<?php the_post_thumbnail(array(50,50))?>
				 </div>
					<div class="panel-body">
						<a href="<?php the_permalink(); ?>" id="title"><h1><?php the_title();?></h1>
						</a>
							Publicado por <?php the_author();?> em <?php the_time('d/m/y');?>
							ás <?php the_time('g:i a');?> <hr color="#cccccc" />
						</br> </br>
							<?php the_content();?> <br />
						<hr color="#cccccccc">
						<br /> <br />
							<?php comments_template();?>
				     </div>
				</div>
				
				<?php endwhile;  else :?>
				<p>Nenhum post</p>				
				<?php endif;?>
				
	         </div>
		</div>
	</div>


</div>
	
   

<?php get_footer(); ?>