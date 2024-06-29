<?php get_header(); ?>
<!-- /header -->

    <!-- main -->
    <main>
      <!-- 下層FV -->
       <div class="l-kv">
        <div class="l-kv__bg l-kv__bg-news">
          <p class="l-kv__page-name">最新情報</p>
        </div>
       </div>
      <!-- /下層FV -->

      <!-- 記事本体 -->
       <section class="p-single-news">
        <div class="p-single-news__inner">
          <!-- 記事の詳細 -->
           <div class="p-single-news__content" data-fadeIn>
            <h2 class="p-single-news__title"><?php echo the_title(); ?></h2>
            <div class="p-single-news__img"><?php the_post_thumbnail(); ?><span class="p-single-news__date"><span><?php echo the_time('Y'); ?><br><?php echo the_time('m.d'); ?></span></span></div>
            <div class="p-single-news__text"><?php echo the_content(); ?></div>
            <div class="p-single-news__buttons">
                <!-- 前の投稿がある場合のみリンクを表示 -->
                <?php if (get_previous_post_link()): ?>
                    <div class="p-single-news__prev">
                        <?php previous_post_link('%link', '前の情報を見る'); ?>
                    </div>
                <?php endif; ?>

                <!-- 次の投稿がある場合のみリンクを表示 -->
                <?php if (get_next_post_link()): ?>
                    <div class="p-single-news__next">
                        <?php next_post_link('%link', '次の情報を見る'); ?>
                    </div>
                <?php endif; ?>
            </div>
           </div><!-- /記事の詳細 -->
           <!-- 最新情報 -->
            <aside class="p-single-news__side" data-fadeIn>
              <p class="p-single-news__information">最新情報</p>
              <!-- 点線 -->
              <div class="p-single-news__dotted"></div>
                <?php 
                $args = array(
                'post_type' => 'news',//ポストタイプのスラッグ
                'order' => 'DESC',//並び順、DESCは最新ジュン
                'posts_per_page' => 4//何件表示するか？
                );
                $my_query = new WP_Query($args);//$my_queryにargsを入れている
                if($my_query->have_posts()) :
                ?>
              <!-- リスト -->
              <div class="p-single-news__list">
              <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                <!-- 記事 -->
                <a href="<?php the_permalink(); ?>" class="p-single-news__item">
                  <div class="p-single-news__item__left"><?php the_post_thumbnail(); ?></div>
                  <div class="p-single-news__item__right">
                    <p class="p-single-news__item__date"><?php echo the_time('Y.m.d'); ?></p>
                    <p class="p-single-news__item__title"><?php echo the_title(); ?></p>
                  </div>
                </a>
                <?php endwhile; ?>
              </div>
              <?php endif; ?>
              <!-- 点線 -->
              <div class="p-single-news__dotted"></div>
            </aside>
           <!-- 最新情報 -->
        </div>
       </section>
      <!-- /記事本体 -->
    </main>
    <!-- /main -->

    <!-- footer -->
    <?php get_footer(); ?>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/common.js"></script>
    
</body>
</html>