<?php
$this->breadcrumbs = array(
    'Hollywood Bangla News',
);

$this->widget('bootstrap.widgets.TbListView', array(
    'dataProvider' => $dataProvider,
    'itemView' => '_view',
));
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