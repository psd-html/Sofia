<?php include(dirname(__FILE__).'/header.php'); ?>

    <article class="bloc-12">
         
          <div class="page">
              <h3 class="blog__category">#<?php $plxShow->artCat() ?></h3>
              <h2 class="blog__title"><?php $plxShow->artTitle(); ?></h2>
              <p>
                <span class="blog__date"><?php $plxShow->artDate('#num_day #month #num_year(4)'); ?></span>  
              </p>
              
                  <?php $plxShow->artContent(); ?>

              
              <div class="blog__auteur">
                  <?php $plxShow->artAuthorInfos('<div class="author-infos">#art_authorinfos</div>'); ?>
              </div>
              
              <?php include(dirname(__FILE__).'/commentaires.php'); ?>
              
          </div>
          
        </article>

    </div>
<?php include(dirname(__FILE__).'/footer.php'); ?>