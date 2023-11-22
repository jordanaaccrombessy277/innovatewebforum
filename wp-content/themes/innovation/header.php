<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); 
    ?>
</head>
<body>

   <header class="bg-[#2c2887] text-white py-4">
         <nav class="flex justify-between items-center w-[92%] mx-auto p-2">
            <div class="">
                <h1 class="text-2xl font-[MontserratBold]">InnovateWeb <span class="">Forum</span></h1>
            </div>
            <div class="nav-links bg-white md:bg-transparent duration-500 md:static z-20 absolute md:min-h-fit min-h-[55vh] left-0 top-[-100%] md:w-auto w-full flex items-center px-5">
               <?php wp_nav_menu (['theme_location' => 'header',
                              'container' => false,
                              'menu_class' => 'flex md:flex-row text-black md:text-white flex-col md:items-center md:gap-[2vw] gap-8']) 
                ?>
            </div>
            <ion-icon id="toggler" name="menu" class="text-3xl cursor-pointer md:hidden"></ion-icon>
         </nav>
   </header>



   