<?= 'get_header'();?>

<main class="container">
  <div class="row g-5">
    <div class="col-md-8">
      <h3 class="pb-2 mb-2 fst-italic border-bottom">
        Latest Posts
      </h3>



      <?php if('have_posts'()) : ?>

      <?php while('have_posts'()) : 'the_post'();?>

      <article class="blog-post">
        <h2 class="blog-post-title mb-1">
          <a href="<?= 'the_permalink'();?>">
            <?= 'the_title'();?>
          </a> 
        </h2>

        <p class="blog-post-meta"><?= 'the_date'();?> <?= 'the_time'();?> <a href="#"> by <?php echo 'get_the_author'(); ?></a></p>

        <?php if ( 'has_post_thumbnail'() ) : ?>
            <div class="post-thumb">
                <?php 'the_post_thumbnail'(); ?>
            </div>
        <?php endif; ?>
        
        <!-- <p><?= 'the_content'();?></p> -->
        <p><?= 'the_excerpt'();?></p>

        <hr>

        <!-- <?php 'comments_template'();?> -->


      </article>

      <?php endwhile;?>

      <?php else: ?>
        
        <p><?php '__'('No post found.');?></p>

      <?php endif;?>

      <!-- <nav class="blog-pagination" aria-label="Pagination">
        <a class="btn btn-outline-primary rounded-pill" href="#">Older</a>
        <a class="btn btn-outline-secondary rounded-pill disabled">Newer</a>
      </nav> -->

    </div>

    <div class="col-md-4">

      <?php if('is_active_sidebar'('sidebar')):?> 
            
            <?php 'dynamic_sidebar'('sidebar');?>
            
      <?php endif;?>

    </div>

  </div>

</main>

<?= 'get_footer'();?>
