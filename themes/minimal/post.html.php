<div class="article">
 <header class="mb-3">
  <h1 class="text-3xl font-bold"><?php echo $p->title;?></h1>
  <div class="text-xs font-semibold text-gray-500"><time datetime="<?php echo format_date($p->date);?>"><?php echo format_date($p->date);?></time>
  <?php echo i18n("snippet_posted_in");?><a class="text-gray-600 underline hover:text-blue-500" href="<?php echo $p->categoryp;?>"><?php echo $p->ct;?></a></div>
 </header>
<?php echo $p->body;?>
</div>