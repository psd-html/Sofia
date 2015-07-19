<?php include(dirname(__FILE__).'/header.php'); ?>

 <article class="bloc-8">
        
         
          <div class="blog erreur">
              <h3 CLASS="green"><?php $plxShow->lang('ERROR'); ?></h3>
              <p>
                  <?php $plxShow->erreurMessage(); ?>
              </p>
              <img src="<?php $plxShow->template(); ?>/img/404.png" alt="">
          </div>
        
                
                <span class="rss">
                    <?php $plxShow->artFeed('rss',$plxShow->catId()); ?>
                </span>

          
        </article>
        
        <?php include(dirname(__FILE__).'/sidebar.php'); ?>
    </div>
<?php include(dirname(__FILE__).'/footer.php'); ?>