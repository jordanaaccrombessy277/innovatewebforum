
<?php wp_footer();  
?>  

<footer class="text-white bg-[#2c2887] h-auto flex flex-wrap justify-center items-center w-full mx-auto p-8">
     <div class="flex flex-wrap w-full">
     <div class="w-full p-4 lg:w-1/4">
        <p class="font-bold mb-4">Navigations</p>
                <?php wp_nav_menu (['theme_location' => 'footer-navigation',
                              'container' => false,
                              'menu_class' => 'flex flex-col']) 
                ?>
     </div>
     <div class="w-full p-4 lg:w-1/4">       
          <p class="font-bold mb-4">Contacts</p> 
          <p class="mb-2"><ion-icon name="mail-outline"></ion-icon> <span class="align-[4px]">InnovateWebForum@gmail.com</span></p>
          <p class="mb-2"><ion-icon name="call-outline"></ion-icon> <span class="align-[4px]">+ 229 00000000</span></p>
          
     </div>
     <div class="w-full p-4 lg:w-1/4">       
         <p class="font-bold mb-2">Suivez-nous :</p> 
          <ul class="mb-2 flex flex-wrap gap-4">
                    <li class="mb-2"><a class="text-2xl" href="" target="_blank"><ion-icon name="logo-facebook"></ion-icon></a></li>
                    <li class="mb-2"><a class="text-2xl" href=""><ion-icon name="logo-twitter"></ion-icon></a></li>
                    <li class="mb-2"><a class="text-2xl" href=""><ion-icon name="logo-instagram"></ion-icon></a></li>
                    <li class="mb-2"><a class="text-2xl" href=""><ion-icon name="logo-linkedin"></ion-icon></a></li>
          </ul> 
     </div>
     <div class="w-full p-4 lg:w-1/4">                   
                <p class="font-bold mb-4">Copyright © 2023 InnovateWeb Forum </p>        
     </div>
     </div>
</footer>

</body>
</html>