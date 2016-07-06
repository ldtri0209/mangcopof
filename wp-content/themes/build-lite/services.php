<?php
/*
Template Name: Dịch vụ
*/
get_header();
?>
    <div class="container">
        <div class="page_content">
            <section class="contact-main">
                <div class="contact-info">
                    <div id="info">
                        <h5>MỌI THÔNG TIN CHI TIẾT VUI LÒNG LIÊN HỆ:</h5>
                        <p id="contact-detail">
                            <span class="title">Contact: </span>
                            <span class="info">Mrs. Thu Ha<br></span>
                            <span class="title">Phone: </span>
                            <span class="info">(+84) 90 91 02 030<br></span>
                            <span class="title">Mobile: </span>
                            <span class="info">(+84) 978 449 549<br></span>
                            <span class="title">Skype: </span>
                            <span class="info">hanguyen2091<br></span>
                            <span class="title">Email: </span>
                            <span class="info">thuha.ngule@gmail.com<br></span>
                        </p>
                    </div>
                    <div id="map">
                        <h5 class="entry-title">GOOGLE MAP</h5>
                        <?php
                            echo do_shortcode ('[put_wpgm id=1]');
                        ?>
                    </div>
                </div>
                <div class="contact-form">
                    <h5 class="entry-title" style="margin: 2% 1%;">LIÊN HỆ CHÚNG TÔI</h5>
                    <?php
                        echo do_shortcode ('[contact-form-7 id="4" title="Thành Lợi"]');
                    ?>
                </div>
            </section>
            <div class="clear"></div>
        </div><!-- site-aligner -->
    </div><!-- content -->
<?php get_footer(); ?>
