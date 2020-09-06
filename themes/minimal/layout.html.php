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
     </main>
    </div>
   </div>
  </div>
  <footer class="text-center w-full bg-gray-400 text-white text-xs py-2" role="contentinfo">
<?php echo copyright();?>
  </footer>
 </body>
</html>
