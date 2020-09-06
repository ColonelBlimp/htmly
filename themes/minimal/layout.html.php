<!DOCTYPE html>
<html lang="en" class="text-xl">
 <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?php echo $title;?></title>
  <meta name="description" content="<?php echo $description; ?>">
  <link rel="canonical" href="<?php echo $canonical; ?>">
  <link rel="stylesheet" href="<?php echo site_url();?>themes/minimal/css/main.css">
  <link rel="stylesheet" href="<?php echo site_url();?>themes/minimal/css/custom.css">
  <script defer src="<?php echo site_url();?>/themes/minimal/js/utils.js"></script>
 </head>
 <body class="flex flex-col h-screen justify-between">
  <div class="mb-auto px-4 pt-2">
   <header role="banner">
    <div class="divide-y divide-gray-500 relative">
     <div class="pb-2">
      <h1 class="text-2xl font-bold"><a href="/"><?php echo blog_title();?></a></h1>
      <p class="text-xs italic"><?php echo blog_tagline();?></p>
     </div>
     <div class="py-2 text-right font-bold w-full">
      <button class="font-bold cursor-pointer" onclick="dropdown();"><?php echo i18n("menu_title");?></button>
     </div>
     <div class="dropdown-content-container left" id="dropdown-menu">
      <nav class="font-bold text-sm p-1 pl-2 bg-gray-500 text-white">
<?php echo menu();?>
      </nav>
     </div>
     <div class="h-0 mb-2"></div>
    </div>
   </header>
   <div class="grid row-gap-1 grid-cols-1 md:grid-cols-3 md:gap-3">
    <div class="col-span-1 md:col-span-2">
     <main role="main">
<?php echo content();?>
     </main>
    </div>
    <div class="col-span-1">
     <aside>
      <section class="p-2 pb-4">
       <form>
        <input class="text-xs font-semibold p-1 border rounded border-gray-500 w-full focus:border-blue-500 focus:text-bule-500 focus:shadow" type="search" placeholder="<?php echo i18n("search_placeholder");?>">
        <button type="submit" class="search-submit"></button>
       </form>
      </section>
      <section class="border rounded border-gray-400 mb-3">
       <div class="divide-y">
        <div class="bg-gray-250 px-2 pb-1">
         <h2 class="font-semibold"><?php echo i18n("recent_aside_title");?></h2>
        </div>
        <ul class="text-xs divide-y">
<?php
foreach (recent_posts(true) as $post) {
?>
          <li class="p-1"><a href="<?php echo $post->url;?>"><?php echo $post->title;?></a></li>
<?php
}
?>
        </ul>
       </div>
      </section>
      <section class="border rounded border-gray-400 mb-3">
       <div class="divide-y">
        <div class="bg-gray-250 px-2 pb-1">
         <h2 class="font-semibold"><?php echo i18n("categories_aside_title");?></h2>
        </div>
        <ul class="text-xs divide-y">
<?php
foreach (category_list(true) as $cat) {
?>
         <li class="p-1"><a href="<?php echo site_url() . $cat[0];?>"><?php echo $cat[1];?></a></li>
<?php
}
?>
        </ul>
       </div>
      </section>
      <section class="border rounded border-gray-400 mb-3">
       <div class="divide-y">
        <div class="bg-gray-250 px-2 pb-1">
         <h2 class="font-semibold"><?php echo i18n("tags_aside_title");?></h2>
        </div>
<?php $i = 1; $tags = tag_cloud(true); arsort($tags); ?>
        <ul class="text-xs divide-y">
<?php foreach ($tags as $tag => $count):?>
         <li class="p-1"><a href="<?php echo site_url();?>tag/<?php echo $tag;?>"><?php echo tag_i18n($tag);?> (<?php echo $count;?>)</a></li>
<?php if ($i++ >= 5) break;?>
<?php endforeach;?>
        </ul>
       </div>
      </section>
     </aside>
    </div>
   </div>
  </div>
  <footer class="text-center w-full bg-gray-400 text-white text-xs py-2" role="contentinfo">
<?php echo copyright();?>
  </footer>
 </body>
</html>
