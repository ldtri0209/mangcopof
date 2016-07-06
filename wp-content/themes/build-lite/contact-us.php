<?php
/*
Template Name: Liên Hệ
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
                            <span class="title">Contact 1: </span>
                            <span class="info">Mrs. Thu Ha<br></span>
                            <span class="title">Phone: </span>
                            <span class="info">(+84) 90 91 02 303<br></span>
                            <span class="title">Skype: </span>
                            <span class="info">ha.pof<br></span>
                            <span class="title">Email: </span>
                            <span class="info">thuha.ngule@gmail.com<br></span>
                        </p>
                        <p id="contact-detail">
                            <span class="title">Contact 2: </span>
                            <span class="info">Ms. My Tuyen<br></span>
                            <span class="title">Phone: </span>
                            <span class="info">(+84) 932 756 950<br></span>
                            <span class="title">Skype: </span>
                            <span class="info">mytuyen2015<br></span>
                            <span class="title">Email: </span>
                            <span class="info">mytuyeniuh91@gmail.com<br></span>
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
