<!-- Title -->
<header class="row col-lg-10 center title">
    <div class="col-12">
        <h1 class="text-left"><?php the_title(); ?></h1>
    </div>
    <?php the_post_thumbnail(['973', '428'], ['class' => 'title-image col-12', 'title' => 'Feature image']); ?>            
</header>

<!-- Page Content -->
<div class="container page-content">   
    <div class="row center col-lg-10">  
        <div class="content col-md-12 center">
            <?php the_content(); ?>
        </div>        
    </div>        
</div>