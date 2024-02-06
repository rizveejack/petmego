</div>
<footer class="text-center pt-5 pb-5 lg:pb-0 bg-black mt-5 text-white">
    <?php 
      wp_nav_menu(
          array(
            'menu' => 'footer',
            'container' => 'nav',
            'menu_class' => 'flex items-center justify-center space-x-3 list-none ml-0 mb-2 font-bold',
          )
        );
    ?>
    <div class="flex items-center justify-between max-w-3xl mx-auto flex-col lg:flex-row">
    <div class="pb-2 text-sm">Copyright <?php echo date("Y"); ?> all rights reserved</div>
    <div class="pb-0 text-xs">Made with ❤️️ Design by <a href="https://codetogrow.com" target="_blank">CodeToGrow</a></div>
    </div>
</footer>
</body>
<?php wp_footer() ?>
</html>