<?php include(dirname(__FILE__).'/header.php'); ?>

 <article class="bloc-8">
         
          <div class="blog">
              <h3 class="blog__category">#<?php $plxShow->artCat() ?></h3>
              <h2 class="blog__title"><?php $plxShow->artTitle(); ?></h2>
              <p>
                <span class="blog__date"><?php $plxShow->artDate('#num_day #month #num_year(4)'); ?> <?php $plxShow->lang('WRITTEN_BY'); ?> <?php $plxShow->artAuthor() ?></span>  
              </p>
              
              <div class="cb"></div>
              
                  <?php $plxShow->artContent(); ?>

              
              <div class="blog__auteur">
                 <h3>Information sur  <?php $plxShow->artAuthor() ?> auteur de l'article</h3>
                  <pre>
                     <?php $plxShow->artAuthorInfos('#art_authorinfos'); ?> 
                  </pre>
              </div>
              
              <?php include(dirname(__FILE__).'/commentaires.php'); ?>
              
          </div>
          
        </article>
        
        <?php include(dirname(__FILE__).'/sidebar.php'); ?>
    </div>
<?php include(dirname(__FILE__).'/footer.php'); ?>