<?php $title = 'BackOffice'; ?>

<?php ob_start(); ?>

<div class="h-screen w-screen bg-blue-900 flex justify-center content-center flex-wrap">
  <div class="d-flex flex-column mx-auto">
      <p class="font-sans text-white text-9xl">Hello User</p>
      <div class="px-4 pb-2 pt-4">
        <a href="index.php?action=logout"><button class="uppercase block w-full text-white mx-auto p-3 text-md rounded-lg bg-gray-800 hover:bg-gray-900 focus:outline-none">Logout</button></a>
      </div>
  </div>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('src/Views/template.php'); ?>