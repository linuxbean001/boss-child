<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">


<link href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css" rel="stylesheet" type="text/css" />

<link href="<?php echo get_template_directory_uri(); ?>-child/docs/demo/MonthPicker.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>-child/docs/demo/examples.css" />

<script src="https://code.jquery.com/jquery-1.12.1.min.js"></script>
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<script src="https://cdn.rawgit.com/digitalBush/jquery.maskedinput/1.4.1/dist/jquery.maskedinput.min.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>-child/docs/demo/MonthPicker.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>-child/docs/demo/examples.js"></script>
<script>jQuery("span.ui-button-text").replaceWith("Sort by date");</script>
<style>
ul.socailshare.sharemenuul a {
    color: #fff;
    cursor: pointer;
}
a.soshare {
    cursor: pointer;
}
    .ui-widget-header.month-picker-header.ui-corner-all {
    border: none;
}
.green-number {
    display: none;
}
.ui-state-default .ui-icon {
    background-image: url(images/ui-icons_888888_256x240.png);
    visibility: hidden;
}
span#MonthPicker_Button_IconDemo::after {
    content: "Sort by date";
    position: absolute;
    width: 200px;
    right: -28px;
    top: 14px;
    margin: 0 auto;
}
div#MonthPicker_IconDemo {
    background: #345686;
    border: 1px #345686 solid;
}
table.month-picker-year-table {
    background: #345686;
}
a.ui-button.ui-widget.ui-corner-all.ui-button-icon-only {
    background: #fff;
}
td.month-picker-title {
    vertical-align: -webkit-baseline-middle;
    padding-bottom: 10px;
}
td.month-picker-title span.ui-button-text {
    color: #fff;
    margin-top: 0 !important;
    padding-top: 0 !important;
    vertical-align: initial;
}
a.ui-button.ui-widget.ui-corner-all.ui-button-icon-only {
    background: #fff;
}

table.month-picker-month-table {
    background: #345686;
}
.month-picker-month-table .ui-button {
    width: 4.2em;
    margin: 10px;
}
a.ui-button.ui-widget.ui-state-default.ui-corner-all.ui-button-text-only span.ui-button-text {
    background: #fff;
}
    .middle-content {
        background: #fff;
    }
    ul.socailshare {
    background: #272d3c;
    position: absolute;
    z-index: 9999;
    display: inline-block;
    width: 244px;
    right: 16px;
    padding: 20px;
    display: none;
    border-radius: 5px;
}
ul.socailshare li {
    color: #fff !important;
    text-align: left;
    padding: 6px;
    margin-left: 30px;
}
ul.allsector {
 display: inline-block;
    background: #345686;
    padding: 20px; 
    display: none;
    float: right;
    right: 15px;
    border-radius: 5px;
    top: 55px;
    position: absolute;
    z-index: 9999;
    min-width: 150px;
    font-size: 13px;
    font-weight: 600;
    letter-spacing: 0.06em;
    padding-top: 10px;
    padding-bottom: 10px;
    padding-left: 33px;
    padding-right: 20px;
}
ul.allsector li {
    padding: 10px;
}
input#IconDemo {
    position: absolute;
    left: 15px;
    top: 5px;
}
span#MonthPicker_Button_IconDemo {
    letter-spacing: 0.06em;
    padding-top: 13px;
    padding-bottom: 10px;
    -webkit-transition: 0.3s;
    -o-transition: 0.3s;
    transition: 0.3s;
    text-decoration: none;
    display: inline-block;
    color: #fff;
    /* margin-top: 7px; */
    min-width: 150px;
    border-radius: 5px;
    text-align: center;
    width: 120px;
    height: 47px;
    background: #345686;
    z-index: 9999999;
    color: #fff;
    border: 1px solid #345686;
    font-weight: 500;
    position: absolute;
    left: 15px;
}
.sharemenuul {
    display: block !important;
}
.col-md-3.col-sm-3.col-xs-12.company-page {
    background: #272d3c;
}
ul.socailshare.sharemenuul a {
    color: #fff;
}
.bottom-section {
    background: #272d3c;
    border-top: 1px solid #999;
    display: inline-flex;
    width: 100%;
}
    .main-pannel a:hover {
    text-decoration: none;
}
ul.allsector li a {
    color: #fff;
}
ul.allsector {
    display: inline-block;
    float: right;
    background: #345686;
    padding: 20px;
display:none;
}
.middle-content .like {
    display: none;
}
    .blok-text a {
        color: #000;
    }
    .clearfix.new {
        margin-bottom: 20px;
    }
    body{
        font-family: 'Open Sans', sans-serif; 
    }    
    img{
        width: 100%;
    }

    .main-pannel {
        border: 2px solid #999;
       
        border-radius: 5px;
    }
    .top-section {
        overflow: hidden;
        background: #fff;
        border-bottom: 1px solid #999;        
    }
    .middle-content p {
    color: #000;
    font-size: 18px;
}

    .logo-sec {
        padding: 5px;
        text-align: center;
        border-right: 1px solid #555;
        min-height: 60px; 
        background: #fff;        
    }

    .logo-sec img{
        max-width: 90px;   
        max-height:50px;
    }

    .blok-text {
        border-right: 1px solid #777;
        display: flex;
        text-align: center;
        min-height: 60px;
        background: #fff;        
    }

    .blok-text h5{
        margin: auto;
        font-weight: 700;        
    }

    .greeb-btn {
        background: #fff;
        min-height: 60px;
    }

    .green-number {
        background: #7ed320;
        color: #fff;
        margin-top: 10px;
        float: right;
        padding: 10px 25px;
        border-radius: 5px;
    }

    .green-number span{
        margin-top: 15px;
    }

    .horse-sec {
        background: #272d3c;
        text-align: center;
        min-height: 60px;        
    }

    .horse-sec-inner {
        margin-top: 10px;
    }

    .horse-sec img{
        max-width: 35px;
    }

    .horse-sec a{
        text-align: right;
        background: #fda612;
        color: #000;
        padding: 1px 10px;
        font-size: 13px;
        font-weight: 600;
        border-radius: 5px;
        vertical-align: middle;
      cursor: pointer;
    }

    .middle-content {
        padding: 70px 45px;
    }

    .middle-content p {
        line-height: 23px;
        font-size: 17px;
    }

    .bottom-section {
      
        background: #272d3c;
        border-top: 1px solid #999;        
    }

    .company-page {
        color: #fff;
        min-height: 60px;        
    }
    .company-page-inner {
        margin-top: 17px;
    }

    .company-page-inner a {
        color: #fff;
        font-weight: 500;
        text-decoration: none;
    }

    .company-page .fa{
        font-size: 24px;
        vertical-align: middle;        
    }

    .company-page span {
        vertical-align: middle;
        margin-left: 15px;    
    }

    .bottom-list {
        background: #fff;
        min-height: 60px;
        text-align: right;        
    }

    .bottom-list li{
        margin-left: 10px;        
    }

    .bottom-list a{
        color: #272d3c;
        font-weight: 700;
        text-decoration: none;        
    }

    .bottom-list .fa {
        font-size: 30px;
        margin-left: 8px;
        vertical-align: middle;
    }

    .bottom-list ul.list-inline {
        margin-top: 15px;
    }



    .top-btn {
        margin-bottom: 30px;
    }        

    .dark-btn {
        background: #345686;
        color: #ffffff;
        border: 2px solid #345686;
        font-size: 13px;
        font-weight: 600;
        letter-spacing: 0.06em;
        padding-top: 10px;
        padding-bottom: 10px;
        padding-left: 20px;
        padding-right: 20px;
        -webkit-transition: 0.3s;
        -o-transition: 0.3s;
        transition: 0.3s;
        text-decoration: none;
        display: inline-block;
        color: #fff;
        margin-top: 7px;
        min-width: 150px;
        border-radius: 5px;
        text-align: center;
    }


    .dark-btn:hover {
        background: #272d3c;
        border-color: #272d3c;
        color: #fff;
        text-decoration: none;

    }

    .dark-btn:focus {
        outline: 0;
    }        

    @media (max-width: 767px) {


        .green-number {
            float: none;
            text-align: center;
        }

        .middle-content {
            padding: 30px 15px;
        }

        .bottom-list {
            text-align: left;
        } 

        .list-inline>li {
            display: block;
            margin-bottom: 15px;
        }  
        .logo-sec {
            border-right: none;
        } 

        .blok-text {
            border-right: none;
            border-top: 1px solid #999;
            border-bottom: 1px solid #999;
        } 

        .dark-btn {
            min-width: 135px;
        }        
    }    


</style>
<?php
$bp_docs_do_theme_compat = is_buddypress() && bp_docs_do_theme_compat('single/index.php');
if (!$bp_docs_do_theme_compat) :
    ?>
    <div id="buddypress">
<?php endif; ?>

    <div class="<?php bp_docs_container_class(); ?>"> 
     

     



<?php do_action('bp_docs_before_doc_content') ?>


        <section id="main-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 ">
                         <div class="top-btn">

                <!--                                      <a class="dark-btn" href="<?php //bp_docs_order_by_link('created')     ?>">-->

                                    <a class="dark-btn">
                                        <span>Sort by date</span></a>




                                    <input id="IconDemo" class="Default month-year-input" type="text" style="" name="IconDemo">



                                    <a class="dark-btn pull-right"  target="_self"><span>Filter Sector</span></a>


                                    <?php
                                    $taxonomy = 'bp_docs_associated_item';
                                    $terms = get_terms($taxonomy);

                                    if ($terms && !is_wp_error($terms)) :
                                        ?>
                                        <ul class='allsector'>
                                            <!--                                            <form action="" method="post" onsubmit="return submitForm();" name="SellForms" >-->


                                        <!--                                                <select name="sectorid" id="sectorid">-->



                                            <?php foreach ($terms as $term) { ?>
                                                <li><a class="te" datavalue="<?php echo $term->name; ?>" onclick="myFunction()"><?php echo $term->name; ?></a></li>
                                            <?php } ?>

                                            <input type="hidden" value="" name="sectorname">
                                            <!--                                            </form>-->
                                        </ul>
                                    <?php endif; ?>
                                </div>

                        <div class="clearfix"></div>
                        
                         <div class="main-pannel-main">

                        <div class="main-pannel">
                            <div class="top-section">
                                <div class="col-md-2 col-sm-2 col-xs-12 logo-sec">
                                    <a href="<?php the_field('company_page'); ?>">
<!--                                                        <img src="http://profusenx.com/19/blok/2018-05-16.png"> -->
                                        <?php
                                        if (function_exists('get_wp_term_image')) {
                                            $meta_image = get_wp_term_image($term_id);
                                            //It will give category/term image url 
                                          $term_id;
                                            if ($meta_image) {
                                                
                                            }
                                        }

                                        // echo $meta_image; // category/term image url
                                        $terms = get_the_terms($post->ID, 'company');
                                        if ($terms) {
                                            foreach ($terms as $term) {
                                            $term_id = $term->term_id;
                                                $meta_image = get_wp_term_image($term_id);
                                                echo "<img src='" . $meta_image . "'>";
                                            }
                                        }
                                        ?></a>
                                </div>

                                <div class="col-md-2 col-sm-2 col-xs-12 blok-text">
                                    <h5><a href="<?php the_field('company_page'); ?>"><?php echo $term->name; ?><a/></h5>
                                </div>

                                <div class="col-md-6 col-sm-6 col-xs-12 greeb-btn">
                                    <div class="green-number">
                                        <a href="<?php the_field('price_links_to_chart_'); ?>" target="_blank"><span style="color: #fff;">1.87</span></a>
                                    </div>
                                </div>

                                <div class="col-md-2 col-sm-2 col-xs-12 horse-sec">
                                    <div class="horse-sec-inner">
                                        <img src="<?php echo get_template_directory_uri(); ?>-child/images/unicorn.png">
                  <a class="like" rel="<?php echo get_the_ID() ?>">  <?php echo likeCount($post->ID); ?></a>
                      
                                    </div>
                                </div>
                            </div>

                            <div class="middle-content">

                                <p>

                                    <?php bp_docs_the_content() ?>

                                </p>






                            </div>

                            <div class="bottom-section">
                                <div class="col-md-3 col-sm-3 col-xs-12 company-page">
                                    <div class="company-page-inner">
                                        <a href="<?php the_field('company_page'); ?>"><i class="fa fa-address-card" aria-hidden="true"></i> 
                                            <span> Company Page</span></a>
                                    </div>
                                </div>

                                <div class="col-md-9 col-sm-9 col-xs-12 bottom-list">
                                    <ul class="list-inline">
                                        <li><a href="<?php the_field('view_source_'); ?>" target="_blank">View Source <i class="fa fa-file-text" aria-hidden="true"></i></a></li>
                                        <li><a href="<?php bp_docs_doc_link() ?>">Discussion <i class="fa fa-comment" aria-hidden="true"></i></a></li>
                                           <li><a class='soshare'>Share <i class="fa fa-share" aria-hidden="true"></i></a>

                                                                <ul class="socailshare">
                                                                    <li>     <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php bp_docs_doc_link() ?>">Share to Facebook</a></li>
                                                                    <li>  <a target="_blank" href="https://twitter.com/home?status=<?php bp_docs_doc_link() ?>">Share to Twitter</a></li>
                                                                     <li><a target="_blank" href="https://www.reddit.com/submit?url=<?php bp_docs_doc_link() ?>">Share to Reddit</a></li>
                                                                    <li>
                                                                        <p id="p1<?php echo $i;?>" style="display: none;"><?php bp_docs_doc_link() ?></p>
                                                                        <a id="copyButton" onclick="copyToClipboard('#p1<?php echo $i;?>')">Copy Past Link</a>
                                                                       
                                                                </ul>

                                                            </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                         </div>
                        <div class="clearfix new"></div>


                    </div>

                </div>
            </div>
        </section>
        <?php do_action('bp_docs_after_doc_content') ?>

        <?php if (bp_docs_enable_attachments() && bp_docs_doc_has_attachments()) : ?>
            <div class="doc-attachments">
                <h3><?php _e('Attachments', 'buddypress-docs') ?></h3>
                <?php include ( bp_docs_locate_template('single/attachments.php') ) ?>
            </div>
        <?php endif ?>

        <div class="doc-meta">
            <?php do_action('bp_docs_single_doc_meta') ?>
        </div>

        <?php if (apply_filters('bp_docs_allow_comment_section', true)) : ?>
            <?php comments_template('/docs/single/comments.php') ?>
        <?php endif ?>
    </div><!-- .bp-docs -->

    <?php if (!$bp_docs_do_theme_compat) : ?>
    </div><!-- /#buddypress -->
<?php endif; ?>
<script type="text/javascript">

    /* Ajax for get activity from Project select option*/

    jQuery(document).ready(function () { /* PREPARE THE SCRIPT */



        $('a.te').click(function myFunction() {

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
    });


    //var formdata = jQuery('#SignIn_Form').serialize();


</script>

<script type="text/javascript">

    /* Ajax for get activity from Project select option*/



    //var formdata = jQuery('#SignIn_Form').serialize();




    setTimeout(function () {
        jQuery('span#MonthPicker_Button_IconDemo').click(function () {
            setTimeout(function () {
                jQuery('table.month-picker-month-table td a').attr('href', 'javascript:void(0)');
                jQuery('table.month-picker-month-table td a').attr("onclick", "something()");
            }, 1000);
        });

    }, 2000);


    function something() {




        //  $("button").click(function(){

//});



        jQuery(document).ready(function () { /* PREPARE THE SCRIPT */



            // var mycompany = $(this).attr('datavalue');

            var data = jQuery('input#IconDemo').val();

            //alert(data);

            /* WHEN YOU CHANGE AND SELECT FROM THE SELECT FIELD */
            // var mycompany = jQuery(this).val(); /* GET THE VALUE OF THE SELECTED DATA */
            //  alert(myproject);
            jQuery.ajax({
                type: 'POST',
                url: '<?php echo admin_url('admin-ajax.php'); ?>',
                data: {
                    action: 'selectDate',
                    data: data,
                },
                success: function (result) {

                    jQuery(".main-pannel-main").html(result);
                    //alert(result);
                }
            });

        });


    }


    /*$("span#MonthPicker_Button_IconDemo").datepicker({
     
     
     // The hidden field to receive the date
     altField: "#dateHidden",
     // The format you want
     altFormat: "yy-mm-dd",
     // The format the user actually sees
     dateFormat: "dd/mm/yy",
     onSelect: function (date) {
     // Your CSS changes, just in case you still need them    
     
    // alert('yaar khan');
     }
     });*/

</script>
<script>
//    $(document).ready(function () {
//        $(".soshare").click(function () {
//            $("ul.socailshare").toggleClass("sharemenuul");
//        });
//    });
    
    document.getElementById("copyButton").addEventListener("click", function() {
    copyToClipboard(document.getElementById("copyTarget"));
});

function copyToClipboard(element) {
    
    
  var $temp = $("<input>");
  
  $("body").append($temp);
  $temp.val($(element).text()).select();
  document.execCommand("copy");
  $temp.remove();
}
$("a#copyButton").click(function(){
    alert("Link has been copied to clipboard!");
});
</script>


