<?php if (isset($is_category)):?>
 <div class="border border-gray-500 rounded my-2 mr-2 px-4 pb-4 pt-2 bg-gray-200">
  <h1 class="font-bold text-xl"><?php echo i18n('Category');?>: <?php echo $category->title;?></h1>
  <div class="text-sm"><?php echo $category->body;?></div>
 </div>
<?php endif;?>
<?php if (isset($is_tag)):?>
<?php endif;?>
<?php if (isset($is_archive)):?>
<?php endif;?>
<?php if (isset($is_search)):?>
<?php endif;?>
<?php if (isset($is_type)):?>
<?php endif;?>
<?php foreach ($posts as $p):?>
<div class="divide-y">
 <article class="mb-4">
  <header class="pb-2">
   <h2 class="font-bold text-2xl">
        <?php if (!empty($p->link)) {?>
            <a href="<?php echo $p->link;?>"><?php echo $p->title;?></a>
        <?php } else { ?>
            <a href="<?php echo $p->url;?>"><?php echo $p->title;?></a>
        <?php } ?>
   </h2>
   <time datetime="<?php echo format_date($p->date);?>" class="text-xs italic"><?php echo format_date($p->date);?></time>
  </header>
<?php echo get_teaser($p->body, $p->url);?> &hellip;
 </article>
<div></div>
</div>
<?php endforeach;?>
