<?php get_header();  ?>
 Index
<?php  if (have_posts()): ?> 
    <div class="flex flex-wrap justify-center">       
             <div class="">
             
                    <ul>
                        <?php while (have_posts()): the_post(); ?>
                        <li><a href="<?= the_permalink(); ?>"><?= the_title(); ?></a></li>
                        <?php endwhile; ?>
                    </ul>


                    <?php else: ?> 
                    <h1 class="">Nothing to show</h1>
                    <?php endif; ?> 

           </div>
    </div>
<?php get_footer(); ?>