<?php get_header(); ?>
<!-- /header -->

    <!-- main -->
    <main>
      <!-- 下層FV -->
       <div class="l-kv">
        <div class="l-kv__bg l-kv__bg-news">
          <p class="l-kv__page-name"><span>最新情報</span></p>
        </div>
       </div>
      <!-- /下層FV -->

      <!-- 記事一覧 -->
    <section class="p-archive-news">

      <div class="p-archive-news__contain">
        <div class="p-archive-news__list">
          
          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
          <!-- ニュース -->
          <a href="<?php the_permalink(); ?>" class="p-archive-news__item" data-fadeIn>
            <div class="p-archive-news__inner">
              <p class="p-archive-news__date"><?php echo the_time('Y.m.d'); ?></p>
            </div>
            <p class="p-archive-news__title"><?php echo the_title(); ?></p>
          </a><!-- ニュース -->
          <?php endwhile; endif; ?>
          
        </div>

        <!-- ページャー -->
         <div class="pager">
              <?php global $wp_rewrite;
              $paginate_base = get_pagenum_link(1);
              if(strpos($paginate_base, '?') || ! $wp_rewrite->using_permalinks()){
                  $paginate_format = '';
                  $paginate_base = add_query_arg('paged','%#%');
              }
              else{
                  $paginate_format = (substr($paginate_base,-1,1) == '/' ? '' : '/') .
                  user_trailingslashit('page/%#%/','paged');
                  $paginate_base .= '%_%';
              }
              echo paginate_links(array(
                  'base' => $paginate_base,
                  'format' => $paginate_format,
                  'total' => $wp_query->max_num_pages,
                  'mid_size' => 1,
                  'current' => ($paged ? $paged : 1),
                  'prev_text' => '<',
                  'next_text' => '>',
              )); ?>
          </div>
        <!-- ページャー -->
        
      </div>

    </section><!-- 記事一覧 -->
    </main>
    <!-- /main -->

    <!-- footer -->
    <?php get_footer(); ?>