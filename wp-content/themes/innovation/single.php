<?php get_header(); ?>
<div class="w-full md:w-[500px] h-auto mx-auto p-16 justify-center items-center flex flex-col">

<?php if (have_posts()): ?>
    <?php while (have_posts()): the_post(); ?>
    <div class="w-full">
        <h1 class="text-3xl font-[MontserratBold] my-4"><?= the_title(); ?></h1>
            <?= the_content(); ?>      
    </div> 
    <div class="w-full">
        <?php $featured_img_url = get_the_post_thumbnail_url($post->ID, 'full'); ?>       
        <img src="<?= $featured_img_url; ?>" alt="" class="w-full object-cover h-full">
    </div>            
    <?php endwhile; ?>
<?php else: ?>
    <h1 class="">Nothing to show</h1>
<?php endif; ?>
</div>
<?php get_footer(); ?>