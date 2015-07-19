<?php include(dirname(__FILE__).'/header.php'); ?>

     <article class="bloc-8">
         
          <div class="blog">

              <h2 class="blog__title"><?php $plxShow->staticTitle(); ?></h2>
              
                  <?php $plxShow->staticContent(); ?>

          </div>
          

        </article>
        
        <?php include(dirname(__FILE__).'/sidebar.php'); ?>
    </div>
<?php include(dirname(__FILE__).'/footer.php'); ?>