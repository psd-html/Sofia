<?php include(dirname(__FILE__).'/header.php'); ?>

 <article class="bloc-8">
        
         
          <div class="blog erreur">
              <h3 CLASS="green"><?php $plxShow->lang('ERROR'); ?></h3>
              <p>
                  <?php $plxShow->erreurMessage(); ?>
              </p>
              
              <h3 class="erreur_404">404</h3>
          </div>
        
                
                <span class="rss">
                    <?php $plxShow->artFeed('rss',$plxShow->catId()); ?>
                </span>

          
        </article>
        
        <?php include(dirname(__FILE__).'/sidebar.php'); ?>
    </div>
<?php include(dirname(__FILE__).'/footer.php'); ?>