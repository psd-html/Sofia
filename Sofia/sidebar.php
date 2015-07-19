<aside class="bloc-4">
   <div class="widget">
   <!-- les derniers articles -->
        <h3 class="widget__title"><?php $plxShow->lang('LATEST_ARTICLES'); ?></h3>
            <ul>
               <?php $plxShow->lastArtList('<li><a class="#art_status" href="#art_url" title="#art_title">#art_title</a></li>'); ?>
            </ul> 
        </div>

   <div class="widget">
   <!-- les categories -->
        <h3 class="widget__title"><?php $plxShow->lang('CATEGORIES'); ?></h3>
            <ul>
               <?php $plxShow->catList('','<li>
                <a href="#cat_url" title="#cat_name"><i class="flaticon-botton4"></i>#cat_name</a> (#art_nb)</li>'); ?>
            </ul> 
        </div>

    <div class="widget">
        <!-- liste des Tags -->
        <h3 class="widget__title"><?php $plxShow->lang('TAGS'); ?></h3>
        <ul>
           <?php $plxShow->tagList('<li class="tag"><a class="#tag_status" href="#tag_url" title="#tag_name">#tag_name</a></li>', 20); ?>
        </ul>
    </div>
    
    <div class="widget">
        <!-- les dernieres commentaires -->
        <h3 class="widget__title"><?php $plxShow->lang('LATEST_COMMENTS'); ?></h3>
        <ul>
           <?php $plxShow->lastComList('<li class="com"><a href="#com_url"><span>#com_author '.$plxShow->getLang('SAID').' :</span> #com_content(34)</a></li>'); ?>
        </ul>
    </div>
    
    <div class="widget">
        <!-- les archives -->
        <h3 class="widget__title"><?php $plxShow->lang('ARCHIVES'); ?></h3>
        <ul>
           <?php $plxShow->archList('<li><a class="#archives_status" href="#archives_url" title="#archives_name">#archives_name</a> (#archives_nbart)</li>'); ?>
        </ul>
    </div>

</aside>