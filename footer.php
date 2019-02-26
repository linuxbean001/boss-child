<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Boss
 * @since Boss 1.0.0
 */
?>
</div><!-- #main .wrapper -->

</div><!-- #page -->

</div> <!-- #inner-wrap -->

</div><!-- #main-wrap (Wrap For Mobile) -->

<footer id="colophon" role="contentinfo">

    <?php get_template_part('template-parts/footer-widgets'); ?>

    <div class="footer-inner-bottom">

        <div class="footer-inner">
            <?php get_template_part('template-parts/footer-copyright'); ?>
            <?php get_template_part('template-parts/footer-links'); ?>
        </div><!-- .footer-inner -->

    </div><!-- .footer-inner-bottom -->

    <?php do_action('bp_footer') ?>
    <script>
        jQuery("a.dark-btn.pull-right").on("click", function () {

            jQuery("ul.allsector").toggle();


        });
    </script>
</footer><!-- #colophon -->
</div><!-- #right-panel-inner -->
</div><!-- #right-panel -->

</div><!-- #panels -->
<script type="text/javascript">

    /* Ajax for get activity from Project select option*/

    jQuery(document).ready(function () { /* PREPARE THE SCRIPT */
        jQuery("#sectorid").change(function () { /* WHEN YOU CHANGE AND SELECT FROM THE SELECT FIELD */
            var mycompany = jQuery(this).val(); /* GET THE VALUE OF THE SELECTED DATA */
            //  alert(myproject);
            jQuery.ajax({
                type: 'POST',
                url: '<?php echo admin_url('admin-ajax.php'); ?>',
                data: {
                    action: 'selectCompany',
                    mycompany: mycompany,
                },
                success: function (result) {


                    jQuery(".main-pannel-main").html(result);
                    //alert(result);
                }
            });
        });
    });


    //var formdata = jQuery('#SignIn_Form').serialize();

    // jQuery(document).ready(function () {

    jQuery("a.te").click(function () {
        jQuery("ul.allsector").css("display", "none");

    });
    var $ = jQuery;
</script>
<script>
//    $(document).ready(function () {
//        $(".soshare").click(function () {
//            $("ul.socailshare").toggleClass("sharemenuul");
//        });
//    });

  /*  document.getElementById("copyButton").addEventListener("click", function () {
        copyToClipboard(document.getElementById("copyTarget"));
    });

    function copyToClipboard(element) {


        var $temp = $("<input>");

        $("body").append($temp);
        $temp.val($(element).text()).select();
        document.execCommand("copy");
        $temp.remove();
    }
    $("a#copyButton").click(function () {
        alert("Link has been copied to clipboard!");
    });*/
</script>

<script type="text/javascript">

    /* Ajax for get activity from Project select option*/

    //jQuery(document).ready(function () { /* PREPARE THE SCRIPT */



    $('a.te').click(function () {

        var mycompany = $(this).attr('datavalue');



        /* WHEN YOU CHANGE AND SELECT FROM THE SELECT FIELD */
        // var mycompany = jQuery(this).val(); /* GET THE VALUE OF THE SELECTED DATA */
        //  alert(myproject);
        jQuery.ajax({
            type: 'POST',
            url: '<?php echo admin_url('admin-ajax.php'); ?>',
            data: {
                action: 'selectCompany',
                mycompany: mycompany,
            },
            success: function (result) {

                jQuery(".main-pannel-main").html(result);
                //alert(result);
            }
        });
    });
    // });


    //var formdata = jQuery('#SignIn_Form').serialize();

$('body').on('click','.soshare',function(){
     $(this).parent().children('.socailshare').toggleClass("sharemenuul");
}); 



</script>


<style>
    ul.socailshare.sharemenuul {
        display: block;
    }
#masthead .pop.user-pop-links {
    max-height: 900px !important;
    overflow-y: auto;
    overflow-x: hidden;
    padding-bottom: 20px;
    padding-left: 0;
    left: auto;
    right: 0;
    background: transparent;
    box-shadow: none;
}
p.no-docs {
   display:none;
}
.mycal {
    display: initial;
}
div#MonthPicker_IconDemo li {
    width: 24%;
    float: left;
    padding: 20px;
}
div#MonthPicker_IconDemo li a {
    padding: 1px;
    color: #fff !important;
	
	}
	a.dark-btn.pull-right {
    cursor: pointer;
}
a.te {
    cursor: pointer;
}
	
	table.month-picker-month-table.imran span.ui-button-text:hover {
    background: yellow !important;
}
</style>


<?php if( current_user_can('editor') || current_user_can('administrator') ) {  ?> 
  

<style>
p.no-docs {
    display: block !important;
}
</style>
<?php } ?>


<script>

/*$( ".top-btn .mycal" ).one('click', function () { 

$( "div#MonthPicker_IconDemo" ).append( '<table class="month-picker-month-table imran"><tbody><tr><td><a class="button-13 ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" role="button" href="javascript:void(0)" onclick="something()"><span class="ui-button-text1">Q1</span></a></td><td><a class="button-14 ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" role="button" href="javascript:void(0)" onclick="something()"><span class="ui-button-text2">Q2</span></a></td><td><a class="button-15 ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" role="button" href="javascript:void(0)" onclick="something()"><span class="ui-button-text3">Q3</span></a></td><td><a class="button-16 ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" role="button" href="javascript:void(0)" onclick="something()"><span class="ui-button-text4">Q4</span></a></td></tr></tbody></table>' )});*/
</script>


<?php wp_footer(); ?>

</body>
</html>