<?php
$this->breadcrumbs = array(
    'Hollywood Bangla News',
);
?>
<div id="exepopup">
    <h1>Join Us On Facebook</h1>
    <div class="exepopupdata"><iframe src="http://facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fhollywoodbangla&amp;width=400&amp;colorscheme=light&amp;show_faces=true&amp;border_color=%23fff&amp;stream=false&amp;header=false&amp;height=250" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:400px; height:250px;" allowTransparency="true"></iframe></div>
    <div id="exepopupfooter">Please Wait <span>60</span> Seconds...!!!<a href="#" id="exepopupclose" onclick="return false;">Skip</a>
    </div>
</div>
<script type='text/javascript'>
    jQuery(document).ready(function() {
        function exepopupfunc() {
            var sec = 60
            var timer = setInterval(function() {
                $("#exepopupfooter span").text(sec--);
                if (sec == 0) {
                    $("#exepopup").fadeOut("slow");
                    clearInterval(timer);
                }
            }, 1000);
            var exepopupwindow = jQuery(window).height();
            var exepopupdiv = jQuery("#exepopup").height();
            var exepopuptop = jQuery(window).scrollTop() + 50;
            jQuery("#exepopup").css({"top": exepopuptop});
        }
        jQuery(window).fadeIn(exepopupfunc).resize(exepopupfunc)
        var exepopupleft = 500;
        jQuery("#exepopup").animate({opacity: "1", left: "0", left: exepopupleft}, 0).show();
        jQuery("#exepopupclose").click(function() {
            jQuery("#exepopup").animate({opacity: "0", left: "-5000000"}, 1000).show();
        });
    });
</script>
<div class="row-fluid">
    <div class="span9">        
        <div class="row-fluid">
            <div class="span12">
                <?php $this->local_main_news(); ?>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span4">
                <?php $this->local_main_news1(); ?>
            </div>
            <div class="span4">
                <?php $this->local_main_news2(); ?>
            </div>
            <div class="span4">
                <?php $this->local_main_news3(); ?>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span4">
                <?php $this->local_main_news4(); ?>
            </div>
            <div class="span4">
                <?php $this->local_main_news5(); ?>
            </div>
            <div class="span4">
                <?php $this->local_main_news6(); ?>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span6">
                <?php $this->local_main_news7(); ?>
            </div>
            <div class="span6">
                <?php $this->local_main_news8(); ?>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span6">
                <?php $this->get_advertisement_425(6); ?>
            </div>
            <div class="span6">
                <?php $this->get_advertisement_425(19); ?>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span4">
                <?php $this->get_interviews_title(56); ?>
                <?php $this->get_interviews_list(56); ?>
            </div>            
            <div class="span4">
                <?php $this->get_interviews_title(43); ?>
                <?php $this->get_interviews_list(43); ?>
            </div>
            <div class="span4">
                <?php $this->get_interviews_title(1); ?>
                <?php $this->get_interviews_list(1); ?>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span4">
                <?php $this->get_advertisement_270(7); ?>
            </div>
            <div class="span4">
                <?php $this->get_advertisement_270(8); ?>
            </div>
            <div class="span4">
                <?php $this->get_advertisement_270(9); ?>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span4">
                <?php $this->get_interviews_title(44); ?>
                <?php $this->get_interviews_list(44); ?>
            </div>
            <div class="span4">
                <?php $this->get_interviews_title(59); ?>
                <?php $this->get_interviews_list(59); ?>
            </div>
            <div class="span4">
                <?php $this->get_interviews_title(41); ?>
                <?php $this->get_interviews_list(41); ?>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span4">
                <?php $this->get_advertisement_270(10); ?>
            </div>
            <div class="span4">
                <?php $this->get_advertisement_270(11); ?>
            </div>
            <div class="span4">
                <?php $this->get_advertisement_270(12); ?>
            </div>
        </div>       
        <div class="row-fluid">
            <div class="span4">
                <?php $this->get_interviews_title(58); ?>
                <?php $this->get_interviews_list(58); ?>
            </div>
            <div class="span4">
                <?php $this->get_interviews_title(40); ?>
                <?php $this->get_interviews_list(40); ?>
            </div>
            <div class="span4">
                <?php $this->get_interviews_title(90); ?>
                <?php $this->get_interviews_list(90); ?>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span4">
                <?php $this->get_advertisement_270(29); ?>
            </div>
            <div class="span4">
                <?php $this->get_advertisement_270(27); ?>
            </div>
            <div class="span4">
                <?php $this->get_advertisement_270(28); ?>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span4">
                <?php $this->get_interviews_title(52); ?>
                <?php $this->get_interviews_list(52); ?>
            </div>
            <div class="span4">
                <?php $this->get_interviews_title(37); ?>
                <?php $this->get_interviews_list(37); ?>
            </div>
            <div class="span4">
                <?php $this->get_interviews_title(91); ?>
                <?php $this->get_interviews_list(91); ?>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span4">
                <?php $this->get_advertisement_270(26); ?>
            </div>
            <div class="span4">
                <?php $this->get_advertisement_270(30); ?>
            </div>
            <div class="span4">
                <?php $this->get_advertisement_270(13); ?>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span4">
                <?php $this->get_interviews_title(46); ?>
                <?php $this->get_interviews_list(46); ?>
            </div>
            <div class="span4">
                <?php $this->get_interviews_title(31); ?>
                <?php $this->get_interviews_list(31); ?>
            </div>
            <div class="span4">
                <?php $this->get_interviews_title(34); ?>
                <?php $this->get_interviews_list(34); ?>
            </div>
        </div> 
        <div class="row-fluid">
            <div class="span4">
                <?php $this->get_advertisement_270(14); ?>
            </div>
            <div class="span4">
                <?php $this->get_advertisement_270(15); ?>
            </div>
            <div class="span4">
                <?php $this->get_advertisement_270(16); ?>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span4">
                <?php $this->get_interviews_title(71); ?>
                <?php $this->get_interviews_list(71); ?>
            </div>
            <div class="span4">
                <?php $this->get_interviews_title(86); ?>
                <?php $this->get_interviews_list(86); ?>
            </div>
            <div class="span4">
                <?php $this->get_interviews_title(87); ?>
                <?php $this->get_interviews_list(87); ?>
            </div>
        </div> 
        <div class="row-fluid">
            <div class="span4">
                <?php $this->get_advertisement_270(23); ?>
            </div>
            <div class="span4">
                <?php $this->get_advertisement_270(34); ?>
            </div>
            <div class="span4">
                <?php $this->get_advertisement_270(24); ?>
            </div>
        </div>
    </div>
    <div class="span3">  
        <div class="row-fluid">
            <div class="span12">
                <div style="margin-top: 50px;">
                    <div id="google_translate_element" style="width: 270px;"></div>
                    <script type="text/javascript">
                        function googleTranslateElementInit() {
                            new google.translate.TranslateElement({pageLanguage: 'bn', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
                        }
                    </script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                </div>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span12">
                <div style="margin-top: 20px;">
                    <?php $this->get_scroll_image(42); ?>
                </div>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span12">
                <?php $this->get_advertisement_270(17); ?>
            </div>
        </div>
        <div class="row-fluid">            
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#tab1"><?php echo $this->get_category_name(42); ?></a></li>
                            <li><a data-toggle="tab" href="#tab2"><?php echo $this->get_category_name(73); ?></a></li>                            
                        </ul>
                    </div>
                    <div class="widget-content tab-content">
                        <div id="tab1" class="tab-pane active new_tab_schrol"><?php $this->getLosAngelseNewsImage(42); ?></div>
                        <div id="tab2" class="tab-pane new_tab_schrol"><?php $this->getCategoryNewsList(73); ?></div>                        
                    </div>                            
                </div>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span12">
                <?php $this->get_advertisement_270(18); ?>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span12">
                <iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fhollywoodbangla&amp;width=270&amp;height=290&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=false&amp;show_border=true&amp;appId=623963124283493" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:270px; height:290px;" allowTransparency="true"></iframe>
            </div>
        </div> 
        <div class="row-fluid">
            <div class="span12">
                <?php $this->get_advertisement_270(20); ?>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span12">
                <?php //$this->getCategoryNewsImage(67); ?>
                <?php $this->get_interviews_title(67); ?>
                <?php $this->get_interviews_list(67); ?>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span12">
                <?php $this->get_advertisement_270(21); ?>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span12">
                <?php //$this->getCategoryNews(88); ?>
                <?php $this->get_interviews_title(88); ?>
                <?php $this->get_interviews_list(88); ?>
            </div>
        </div>    
        <div class="row-fluid">
            <div class="span12">
                <?php $this->get_advertisement_270(25); ?>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span12">
                <iframe width="270" height="215" src="//www.youtube.com/embed/<?php echo $this->get_youtube_video(); ?>" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span12">
                <?php $this->get_advertisement_270(22); ?>
            </div>
        </div>               
    </div>
</div>