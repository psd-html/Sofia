<?php include(dirname(__FILE__).'/header.php'); ?>

 <article class="bloc-8">
         
          <div class="blog">
              <h3 class="blog__category">#<?php $plxShow->artCat() ?></h3>
              <h2 class="blog__title"><?php $plxShow->artTitle(); ?></h2>
              <p>
                <span class="blog__date"><?php $plxShow->artDate('#num_day #month #num_year(4)'); ?></span>  
              </p>
              
                  <?php $plxShow->artContent(); ?>

              
              <div class="blog__auteur">
                 <h3>Information sur l'auteur de l'article</h3>
                  <?php $plxShow->artAuthorInfos('#art_authorinfos'); ?>
              </div>
              
              <?php include(dirname(__FILE__).'/commentaires.php'); ?>
              
          </div>
          
        </article>
        
        <?php include(dirname(__FILE__).'/sidebar.php'); ?>
    </div>
<?php include(dirname(__FILE__).'/footer.php'); ?>