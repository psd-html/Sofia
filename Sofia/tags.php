<?php include(dirname(__FILE__).'/header.php'); ?>

 <article class="bloc-8">
       
       <h3 class="center message">
            <i class="flaticon-restore"></i><?php $plxShow->tagName(); ?>
        </h3>

        <?php while($plxShow->plxMotor->plxRecord_arts->loop()): ?>
         
          <div class="blog">
              <h3 class="blog__category">#<?php $plxShow->artCat() ?></h3>
              <h2 class="blog__title"><?php $plxShow->artTitle('link'); ?></h2>
              
                  <?php $plxShow->artChapo('Lire la suite'); ?>
              
              
              <div class="info">
                  <span class="blog__date"><?php $plxShow->artDate('#num_day #month #num_year(4)'); ?></span>
                  <span class="blog__coms"><i class="flaticon-conversation"></i><?php $plxShow->artNbCom(); ?></span>
              </div>
          </div>
          
          <?php endwhile; ?>
          
            <div class="blog__page">
                <nav class="blog__page__navigation">
                    <?php $plxShow->pagination(); ?>
                </nav>
                
                <span class="rss">
                    <?php $plxShow->artFeed('rss',$plxShow->catId()); ?>
                </span>
            </div>
          
        </article>
        
        <?php include(dirname(__FILE__).'/sidebar.php'); ?>
    </div>
<?php include(dirname(__FILE__).'/footer.php'); ?>