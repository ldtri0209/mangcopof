<?php
/**
 * The template for displaying home page.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Build Lite
 */
get_header(); ?>
<?php if ( is_front_page() && ! is_home() ) { ?>
<section id="wrapsecond">
  <div class="container">
    <div class="services-wrap">
      <?php for($p=1; $p<4; $p++) { ?>
      <?php if( get_theme_mod('page-column'.$p,false)) { ?>
      <?php $queryxxx = new WP_query('page_id='.get_theme_mod('page-column'.$p,true)); ?>
      <?php while( $queryxxx->have_posts() ) : $queryxxx->the_post(); ?>
      <div class="one_third <?php if($p % 3 == 0) { echo "last_column"; } ?>"> <a href="<?php the_permalink(); ?>">
        <?php the_post_thumbnail( array(85,85, true) );?>
        <h4>
          <?php the_title(); ?>
        </h4>
        </a>
		<?php echo build_lite_content(20); ?> <a class="MoreLink" href="<?php the_permalink(); ?>">
        <?php esc_attr_e('Read More','build-lite'); ?>
        </a> </div>
      <?php endwhile;
                                    wp_reset_query(); ?>
      <?php }} ?>

      <div class="one_third"> <a href="http://mangcopof.com/dich-vu/"> <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/services-icon1.png" alt="" />
        <h4>
          <?php esc_attr_e('Dịch vụ','build-lite'); ?>
        </h4>
        </a>
        <p>
          <?php esc_attr_e('Đến với chúng tôi, quý khách hàng luôn cảm thấy hài lòng về chất lượng sản phẩm cũng như dịch vụ hỗ trợ tận tình, chu đáo..','build-lite'); ?>
        </p>
        <a class="MoreLink" href="http://mangcopof.com/dich-vu/">
        <?php esc_attr_e('Xem thêm','build-lite'); ?>
        </a>
      </div>
      <div class="one_third"> <a href="http://mangcopof.com/san-pham/"> <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/services-icon2.png" alt="" />
        <h4>
          <?php esc_attr_e('Sản phẩm','build-lite'); ?>
        </h4>
        </a>
        <p>
          <?php esc_attr_e('Chúng tôi cam kết chất lượng sản phẩm hàng đầu, giá cạnh tranh nhất và hàng luôn luôn có sẵn trong kho.','build-lite'); ?>
        </p>
        <a class="MoreLink" href="http://mangcopof.com/san-pham/">
        <?php esc_attr_e('Xem thêm','build-lite'); ?>
        </a>
      </div>
      <div class="one_third last_column"> <a href="http://mangcopof.com/lien-he/"> <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/services-icon3.png" alt="" />
        <h4>
          <?php esc_attr_e('Liên hệ','build-lite'); ?>
        </h4>
        </a>
        <p>
          <?php esc_attr_e('Hãy liên hệ ngay với chúng tôi để được hỗ trợ. Chúng tôi sẵn sàng giải quyết mọi thắc mắc cho những khách hàng khó tính nhất.','build-lite'); ?>
        </p>
        <a class="MoreLink" href="http://mangcopof.com/lien-he/">
        <?php esc_attr_e('Xem thêm','build-lite'); ?>
        </a>
      </div>
      <div class="clear"></div>
    </div>
    <!-- services-wrap-->
    <div class="clear"></div>
  </div>
  <!-- container -->
</section>
<div class="clear"></div>
<section id="wrapfirst">
  <div class="container">
    <div class="welcomewrap">
      <?php if( get_theme_mod('page-setting1')) { ?>
      <?php $queryvar = new WP_query('page_id='.get_theme_mod('page-setting1' ,true)); ?>
      <?php while( $queryvar->have_posts() ) : $queryvar->the_post();?>
      <?php the_post_thumbnail('homepage-thumb');?>
      <h1>
        <?php the_title(); ?>
      </h1>
      <?php the_content(); ?>
      <div class="clear"></div>
      <?php endwhile; }?>

      <img width="400px" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/mang-co-pof.jpg" alt="Công ty THHH TBVT Thành Lợi"/>
      <h2>
        <?php esc_attr_e('Giới thiệu','build-lite'); ?>
      </h2>
      <p style="text-align: justify;">
        Với mong muốn cung cấp các thiết bị vật tư cho ngành công nghiệp, chúng tôi ra đời với phương châm Uy tín là tất cả.
Chuyên cung cấp các loại bao bì vật tư như: màng co POF, màng co túi POF, màng quấn pallet (PE), túi PE, dây đai, và các loại máy móc khác như Máy niềng thùng, máy cắt dán màng co POF,…
          <br><br>Là một trong những doanh nghiệp hàng đầu trong việc cung cấp màng co POF, hiện nay chúng tôi là nhà cung cấp chính màng co POF tại Việt Nam. Với nhiều năm kinh nghiệm trong ngành chúng tôi đã xây dựng được một thương hiệu ngày càng lớn mạnh, được khách hàng đánh giá cao về uy tín, chất lượng, giá cả, cung cách phục vụ, chúng tôi luôn luôn nhận được sự ủng hộ và tái đặt hàng của khách hàng.
Bên cạnh sản phẩm chất lượng tốt, giá cả cạnh tranh, chúng tôi cam kết luôn luôn mang lại cho khách hàng dịch vụ hậu mãi chu đáo, luôn luôn hỗ trợ khách hàng đến cùng khi có vấn đề phát sinh.
      </p>
    </div> <!-- welcomewrap-->
    <div class="clear"></div>
  </div>
  <!-- container -->
</section>
<div class="clear"></div>
    <?php }?>
    <div class="container">
         <div class="page_content">
            <section class="site-main">
                <div class="blog-post">
                    <?php if ( is_front_page() && ! is_home() ) {
                        echo "<h2>Sản Phẩm Chính</h2>";
                        echo do_shortcode('[product_category category="san-pham-chinh" per_page="4" columns="2" orderby="date" order="asc"]');
                    } else {
                        if (have_posts()) :
                            // Start the Loop.
                            while (have_posts()) : the_post();
                                /*
                                 * Include the post format-specific template for the content. If you want to
                                 * use this in a child theme, then include a file called called content-___.php
                                 * (where ___ is the post format) and that will be used instead.
                                 */
                                get_template_part('content', get_post_format());

                            endwhile;
                            // Previous/next post navigation.
                            the_posts_pagination();

                        else :
                            // If no content, include the "No posts found" template.
                            get_template_part('no-results', 'index');

                        endif;
                    }?>
                </div><!-- blog-post -->
            </section>
            <?php get_sidebar();?>
            <div class="clear"></div>
                 <?php if ( is_front_page() && ! is_home() ) { ?>
                     <div class="fusion-reading-box-container reading-box-container-1 fusion-animated animated- fadeInDown" data-animationtype="fadeInDown" data-animationduration="1" style="visibility: visible; animation-duration: 1s;">
                         <div class="reading-box" style="padding: 28px 28px 27px 31px;background-color:#FFFAE5;border-width:1px;border-color:#f6f6f6;border-left-width:3px;border-left-color:#EFC62C;border-style:solid;">
                             <h2>Tại sao không liên hệ ngay để được hỗ trợ?</h2>
                             <div class="reading-box-description">
                                 Với đội ngũ nhân viên năng động, nhiệt tình chúng tôi tin rằng sẽ làm hài hòng với cả khách hàng khó tính nhất.
                             </div>
                             <a id="contact-me" class="button fusion-button button-default default button-square button-large large button-flat mobile-button continue-right" href="/lien-he" target="_blank"><span>Liên Hệ Ngay</span></a>
                         </div>
                     </div>
                 <?php }?>
        </div><!-- site-aligner -->
</div><!-- content -->
<?php get_footer(); ?>