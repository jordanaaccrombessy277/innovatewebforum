<?php get_header();  ?>
<section>
<div class="relative text-white bg-gradient-to-tr from-[#3939E5] to-[#000000] w-full h-[700px] md:h-[500px] overflow-hidden flex flex-wrap justify-between items-center">       
     <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero.jpg" class="object-cover object-center absolute w-full mix-blend-overlay min-h-full">
     <div class="absolute flex flex-col w-full mx-auto p-12 z-10">
        <div class="w-full p-4 flex flex-wrap justify-center items-center">
                <div class="flex flex-row gap-2 md:gap-4 justify-center items-center">
                       <div class="">
                            <p id="nb_day" class="font-bold text-center text-5xl md:text-6xl">00</p>
                            <p class="text-center">jour<span id="textD"></span></p>
                        </div>
                        <div class="">
                            <p id="nb_hours" class="font-bold text-center text-5xl md:text-6xl">00</p>
                            <p class="text-center">heure<span id="textH"></span></p>
                        </div>
                        <div class="">
                            <p id="nb_min" class="font-bold text-center text-5xl md:text-6xl">00</p>
                            <p class="text-center">minute<span id="textM"></span></p>
                        </div>
                        <div class="">
                            <p id="nb_sec" class="font-bold text-center text-5xl md:text-6xl">00</p>
                            <p class="text-center">seconde<span id="textS"></span></p>
                        </div>
                </div>
        </div>
        <div class="w-full p-4 flex flex-wrap justify-center items-center">
            <div class="w-full">
                <h1 class="uppercase mb-4 font-bold text-3xl md:text-4xl text-center">
                    Explorez l'Avenir du développement Web avec InnovateWeb Forum 
                </h1>
                <p class="md:text-1xl mb-4 font-light text-center">
                    Rejoignez-nous le <span class="font-[MontserratBold]">15 décembre 2023</span> au palais des congrès pour une expérience immersive où vous découvrirez les avancées qui façonneront le métier de développeur web de demain
                </p>    
                <p class="text-center font-bold"><a href="#inscription" class="inline-block px-12 py-4 my-2 rounded-2xl bg-white text-[#2c2887]">Inscrivez-vous</a></p>       
            </div>
        </div>      
     </div>
</div>
</section>
<section id="apropos" class="h-auto w-full px-4 py-12 lg:w-[900px] flex flex-wrap items-center justify-center mx-auto">
     <div class="">
         <h2 class="font-bold text-2xl md:text-3xl mb-4 text-center text-[#2c2887]">Qu'est-ce que InnovateWeb Forum ?</h2>
         <p class="mb-4 text-center">
            C'est un événement phare qui se déroule le <span class="font-[MontserratBold]">15 décembre 2023</span> au palais des congrès et qui rassemble les esprits les plus brillants et éminents du développement web pour discuter des dernières innovations, des meilleures pratiques et des tendances révolutionnaires dans le domaine. Explorez un monde où les idées prennent vie, où la technologie redéfinit les normes et où l'innovation devient réalité. 
         </p>
         <div class="flex flex-wrap w-full">
              <p class="w-full p-4 md:w-1/2 "> L'InnovateWeb Forum est bien plus qu'un simple événement, c'est une communauté passionnée dédiée à l'élargissement des horizons du développement web. De conférences informatives à des discussions interactives, chaque moment est une opportunité d'apprendre, de grandir et de puiser dans la richesse des connaissances partagées. Rejoignez-nous pour une expérience immersive où l'inspiration devient une force motrice, propulsant le domaine du développement web vers de nouveaux sommets passionnants.</p>
              <div class="w-full p-4 md:w-1/2 flex flex-wrap items-center">
                <img class="rounded-2xl" src="<?php echo get_template_directory_uri(); ?>/assets/images/dev.jpg" alt="InnovateWeb Forum"  />
              </div>
         </div>
     </div>
 </section>
 
 <section class="h-auto w-full mx-auto bg-[#2c2887] text-white">
    <h2 id="programme" class="text-2xl md:text-3xl p-16 mb-4 font-bold text-3xl md:text-4xl text-left">Programme</h2>
    <div class="px-16 pb-8">
        
        <div class="w-full flex flex-wrap justify-center mx-auto gap-5 mb-2">
        <?php
                    $args_session = array(
                    'post_type' => 'sessions',
                    'post_status' => 'publish',
                    'posts_per_page' => 3,
                    'orderby' => 'id',
                    'order' => 'ASC'
                    );
                    $query_session = new WP_Query( $args_session );
                    if ( $query_session->have_posts() ) :
                        while ( $query_session->have_posts() ) : $query_session->the_post(); ?>
                             <?php $featured_img_url_w = get_the_post_thumbnail_url($post->ID, 'full'); ?>
                            <div class="w-full h-[400px] py-4 px-2 lg:w-1/4">
                                <p class="mb-4"><ion-icon name="calendar-number-outline"></ion-icon><span class="align-[2px] px-2">15/12/23</span></p>                
                                <img class="w-full mb-4 h-[190px] rounded-xl shadow-md object-cover" src="<?= $featured_img_url_w; ?>" alt="session innovateWeb Forum" srcset="" />                                  
                                <p class="font-semibold mb-4"><?= the_title(); ?></p>
                                <p class="mb-4">Intervenant : <?= the_field('intervenant'); ?></p>                
                            </div>
                        <?php endwhile; wp_reset_postdata(); ?>
                    <?php else : ?>
                        <div class="w-full mx-auto py-4 px-2">
                                <p class="">Il n'y a pas de session pour le moment</p>                
                            </div>
                    <?php endif; ?>
        </div>

 </section>
 <section class="h-auto w-full mx-auto">
   <h2 class="text-2xl md:text-3xl p-16 font-bold text-[#2c2887] text-3xl md:text-4xl text-left">Les intervenants</h2>
    <div class="px-16 pb-16">
        <div class="w-full flex flex-wrap justify-center mx-auto gap-5">
                <?php
                    $args_intervenant = array(
                    'post_type' => 'intervenants',
                    'post_status' => 'publish',
                    'posts_per_page' => 3,
                    'orderby' => 'id',
                    'order' => 'ASC'
                    );
                    $query_intervenant = new WP_Query( $args_intervenant );
                    if ( $query_intervenant->have_posts() ) :
                        while ( $query_intervenant->have_posts() ) : $query_intervenant->the_post(); ?>
                             <?php $featured_img_url_w = get_the_post_thumbnail_url($post->ID, 'full'); ?>
                            <div class="w-full h-auto p-4 lg:w-1/4 hover:scale-105 hover:duration-1000">
                                <img class="w-full h-auto lg:h-[190px] mb-4 rounded-3xl shadow-md object-cover" src="<?= $featured_img_url_w; ?>" alt="intervenant Safen" srcset="" />
                                <p class="text-center text-[#2c2887] font-bold"><a href="<?= the_permalink(); ?>" class="text-black"><?= the_title(); ?></a></p>
                            </div>
                        <?php endwhile; wp_reset_postdata(); ?>
                    <?php else : ?>
                        <div class="w-full mx-auto py-4 px-2">
                                <p class="text-center rounded-xl text-[#3939E5] bg-white">Il n'y a pas d'intervenant pour le moment</p>                
                            </div>
                    <?php endif; ?>
        </div>
    </div>	
 </section>
 <section id="inscription" class="h-auto w-full mx-auto bg-[#2c2887] text-white">
    <h2 class="text-2xl md:text-3xl p-16 font-bold text-3xl md:text-4xl text-left">Inscription</h2>
    <div class="px-16 pb-16">
        <div class="w-full flex flex-col justify-center mx-auto gap-5">
            <?php echo do_shortcode('[ninja_form id=2]'); ?>
        </div>
    </div>
 </section>
 <section id="témoignages" class="h-auto w-full md:w-[700px] mx-auto p-16">
    <div class="">
        <h2 class="text-2xl pb-8 md:text-3xl text-[#2c2887] font-bold text-3xl md:text-4xl text-left">Témoignages</h2>
        <div class="w-full my-4 flex flex-wrap h-auto md:h-[200px] rounded-lg shadow-[6px_6px_10px_-1px_rgba(0,0,0,0.15),-6px_-6px_10px_-1px_rgba(255,255,255,0.8)]">        
            <div class="rounded-2xl w-full md:w-1/3 h-full">
            <img class="w-full md:w-[200px] object-cover  h-full" src="<?php echo get_template_directory_uri(); ?>/assets/images/girl.jpg" alt="InnovateWeb Forum"  />
            </div>
            <div class="w-full md:w-2/3 h-full p-4">
                <h3 class="font-[MontserratBold]">Jean DOE</h3>
                <p class="">Participer à l'InnovateWeb Forum a été une expérience incroyablement enrichissante pour moi en tant que développeur web. Les conférences de haut niveau ont élargi ma vision sur les dernières tendances et les technologies émergentes. </p>
            </div>
        </div>
        <div class="w-full my-4 flex flex-wrap h-auto md:h-[200px] rounded-lg shadow-[6px_6px_10px_-1px_rgba(0,0,0,0.15),-6px_-6px_10px_-1px_rgba(255,255,255,0.8)]">        
            <div class="rounded-2xl w-full md:w-1/3 h-full">
            <img class="w-full md:w-[200px] object-cover h-full" src="<?php echo get_template_directory_uri(); ?>/assets/images/girl.jpg" alt="InnovateWeb Forum"  />
            </div>
            <div class="w-full md:w-2/3 h-full p-4">
                <h3 class="font-[MontserratBold]">Marlene D</h3>
                <p class="">Ce qui rend cet événement exceptionnel, c'est l'atmosphère collaborative et l'opportunité de rencontrer des experts de l'industrie. </p>
            </div>
        </div>
    </div>
 </section>
 <section class="relative text-white bg-[#2c2887]  w-full h-[400px] md:h-[300px] overflow-hidden flex flex-wrap justify-center items-center">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/6020105.jpg" class="object-cover object-center absolute w-full mix-blend-overlay min-h-full">
      <div class="absolute flex flex-col gap-4 w-full px-12 lg:p-12 z-10 h-[450px] items-center justify-center mx-auto">
          <p class="text-white text-center md:text-2xl">
             Plongez dans le futur passionnant du développement web avec InnovateWeb Forum
          </p>
          <p class="text-center font-bold"><a href="#inscription" class="inline-block px-12 py-4 rounded-2xl bg-white text-[#2c2887]">Inscrivez-vous</a></p>       
      </div>
 </section>
<?php get_footer(); ?>