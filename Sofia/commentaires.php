<?php if(!defined('PLX_ROOT')) exit; ?>

	<?php if($plxShow->plxMotor->plxRecord_coms): ?>

		<h3 id="comments" class="green center">
			<?php echo $plxShow->artNbCom(); ?>
		</h3>

		<?php while($plxShow->plxMotor->plxRecord_coms->loop()): # On boucle sur les commentaires ?>

		<div id="<?php $plxShow->comId(); ?>">
			<p>
					<a class="nbcom" href="<?php $plxShow->ComUrl(); ?>" title="#<?php echo $plxShow->plxMotor->plxRecord_coms->i+1 ?>">#<?php echo $plxShow->plxMotor->plxRecord_coms->i+1 ?></a>&nbsp;
					<time datetime="<?php $plxShow->comDate('#num_year(4)-#num_month-#num_day #hour:#minute'); ?>"><?php $plxShow->comDate('#day #num_day #month #num_year(4) - #hour:#minute'); ?></time>

			</p>
			<blockquote>
				<p class="content_com type-<?php $plxShow->comType(); ?>">
				    <?php $plxShow->comContent(); ?>
				    <cite>Commentaire de <?php $plxShow->comAuthor('link'); ?></cite>
				</p>
			</blockquote>
		</div>

		<?php endwhile; # Fin de la boucle sur les commentaires ?>

		<p class="blog__page">
            <span class="rss"><?php $plxShow->comFeed('rss',$plxShow->artId()); ?></span>
        </p>

	<?php endif; ?>

	<?php if($plxShow->plxMotor->plxRecord_arts->f('allow_com') AND $plxShow->plxMotor->aConf['allow_com']): ?>

	<h3 class="green center">
		<?php $plxShow->lang('WRITE_A_COMMENT') ?>
	</h3>

	<form id="form" action="<?php $plxShow->artUrl(); ?>#form" method="post">

		<fieldset>
           <p>
                <label for="id_name"><?php $plxShow->lang('NAME') ?> :</label>
                <input id="id_name" name="name" type="text" value="<?php $plxShow->comGet('name',''); ?>"> 
           </p>
            
            
            <p>
                <label for="id_mail"><?php $plxShow->lang('EMAIL') ?> :</label>
                <input id="id_mail" name="mail" type="text" value="<?php $plxShow->comGet('mail',''); ?>">	 
            </p>		

            <p>
                <label for="id_site"><?php $plxShow->lang('WEBSITE') ?> :</label>
                <input id="id_site" name="site" type="text"  value="<?php $plxShow->comGet('site',''); ?>">
            </p>

            <p>
                <label for="id_content" class="lab_com"><?php $plxShow->lang('COMMENT') ?> :</label>
                <textarea id="id_content" name="content" ><?php $plxShow->comGet('content',''); ?></textarea>
            </p>


			<?php $plxShow->comMessage('<p class="text-red"><strong>#com_message</strong></p>'); ?>
				
			<p>
			   <?php if($plxShow->plxMotor->aConf['capcha']): ?> 
			</p>


            <p>
               <label for="id_rep"><i class="flaticon-padlock"></i><?php echo $plxShow->lang('ANTISPAM_WARNING') ?></label>
            </p>  
            <p>    
                <label for="id_rep"><?php $plxShow->capchaQ(); ?></label>
                <input class="capcha" id="id_rep" name="rep" type="text"> 
            </p>
            
            <?php endif; ?>

            <p class="center">
               <input class="bt" type="submit" value="<?php $plxShow->lang('SEND') ?>" /> 
            </p>
		</fieldset>
			
	</form>

	<?php else: ?>

	<p>
		<?php $plxShow->lang('COMMENTS_CLOSED') ?>.
	</p>

	<?php endif; # Fin du if sur l'autorisation des commentaires ?>