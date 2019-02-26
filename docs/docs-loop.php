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
    div#inner-wrap {
    overflow: visible !important;
}
li#started-personal-li {
    display: none;
}
li#edited-personal-li {
    display: none;
}
.green-number {
    display: none;
}
    ul.socailshare.sharemenuul a {
    color: #fff;
}
    .sharemenuul{
        display:block !important;
    }
    .main-pannel a:hover {
        text-decoration: none;
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
    span#MonthPicker_Button_IconDemo::after {
        content: "Sort by date";
        position: absolute;
        width: 200px;
        right: -28px;
        top: 14px;
        margin: 0 auto;
    }
    .ui-state-default .ui-icon {
        background-image: url(images/ui-icons_888888_256x240.png);
        visibility: hidden;
    }
    .horse-sec-inner a {
        background: #fda612;
        color: #000;
        padding: 1px 10px;
        font-size: 13px;
        font-weight: 600;
        border-radius: 5px;
        vertical-align: middle;
    }
    .middle-content {
        background: #fff;
    }
    a.ui-button.ui-widget.ui-state-default.ui-corner-all.ui-button-text-only span.ui-button-text {
        background: #fff;
    }
    .month-picker-month-table .ui-button {
        width: 4.2em;
        margin: 10px;
    }
    ul.allsector li {
        padding: 10px;
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
    table.month-picker-month-table {
        background: #345686;
    }
    div#MonthPicker_IconDemo {
        background: #345686;
        border: 1px #345686 solid;
    }
    span.ui-button-text {
        color: #345686;
        text-transform: uppercase;
        font-weight: 700;
    }
    .ui-widget-header.month-picker-header.ui-corner-all {
        border: none;
    }
    table.month-picker-year-table {
        background: #345686;
    }
    td.month-picker-title span.ui-button-text {
        color: #fff;
        margin-top: 0 !important;
        padding-top: 0 !important;
        vertical-align: initial;
    }
    td.month-picker-title {
        vertical-align: -webkit-baseline-middle;
        padding-bottom: 10px;
    }
    a.ui-button.ui-widget.ui-corner-all.ui-button-icon-only {
        background: #fff;
    }
    a span.ui-button-text:hover {
        background: #ffff0c;
    }
    input#IconDemo {
        position: absolute;
        left: 15px;
        top: 5px;
    }
    ul.allsector li a {
        color: #fff;
    }
    ul.allsector {
        min-width: 150px;
        font-size: 13px;
        font-weight: 600;
        letter-spacing: 0.06em;
        padding-top: 10px;
        padding-bottom: 10px;
        padding-left: 33px;
        padding-right: 20px;
    }
    ul.allsector {
        display: inline-block;
        float: right;
        background: #345686;
        padding: 17px;
        position: absolute;
        display: none;
        top: 52px;
        right: 15px;
        z-index: 9999;
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
        display: inline-block;
        border-radius: 5px;
		width:100%;
    }
    .top-section {
        overflow: hidden;
        background: #fff;
        border-bottom: 1px solid #999;        
    }
    div#subnav {
        display: none;
    }
    .table .table {
        background-color: transparent;
    }
    .middle-content p {
        color: #000;
        font-size: 18px;
    }

    .logo-sec {
        padding: 5px;
        text-align: center;
        border-right: 1px solid #555;
        min-height: 62px; 
        background: #fff;        
    }

    .logo-sec img{
        max-width: 90px; 
        max-height:51px;
    }

    .blok-text {
        border-right: 1px solid #777;
        display: flex;
        text-align: center;
        min-height: 62px;
        background: #fff;        
    }

    .blok-text h5{
        margin: auto;
        font-weight: 700;        
    }

    .greeb-btn {
        background: #fff;
        min-height: 62px;
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
        min-height: 62px;        
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
        background: #272d3c;
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
ul.socailshare.sharemenuul a {
    color: #fff;
    cursor: pointer;
}
a.soshare {
    cursor: pointer;
}

</style>
<?php
$bp_docs_do_theme_compat = is_buddypress() && bp_docs_do_theme_compat('docs-loop.php');
if (!$bp_docs_do_theme_compat) :
    ?>
    <div id="buddypress">
    <?php endif; ?>

    <div class="<?php bp_docs_container_class(); ?>">

        <?php //include( apply_filters('bp_docs_header_template', bp_docs_locate_template('docs-header.php')) ) ?>

        <?php if (current_user_can('bp_docs_manage_folders') && bp_docs_is_folder_manage_view()) : ?>
            <?php bp_locate_template('docs/manage-folders.php', true) ?>
        <?php else : ?>

            <!--            <h2 class="directory-title">
            <?php //bp_docs_directory_breadcrumb() ?>
                        </h2>-->

            <!--            <div class="docs-info-header">
            <?php //bp_docs_info_header() ?>
                        </div>-->

            <?php if (bp_docs_enable_folders_for_current_context()) : ?>
                <div class="folder-action-links">
                    <?php if (current_user_can('bp_docs_manage_folders')) : ?>
                        <div class="manage-folders-link">
                            <a href="<?php bp_docs_manage_folders_url() ?>"><?php _e('Manage Folders', 'buddypress-docs') ?></a>
                        </div>
                    <?php endif ?>

                    <div class="toggle-folders-link hide-if-no-js">
                        <a href="#" class="toggle-folders" id="toggle-folders-hide"><?php _e('Hide Folders', 'buddypress-docs') ?></a>
                        <a href="#" class="toggle-folders" id="toggle-folders-show"><?php _e('Show Folders', 'buddypress-docs') ?></a>
                    </div>
                </div>
            <?php endif; ?>

            <table class="doctable">



                <tbody>



                <section id="main-wrapper">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12 ">
                                <div class="top-btn">

                <!--                                      <a class="dark-btn" href="<?php //bp_docs_order_by_link('created')     ?>">-->
                
                 <div class="mycal">

                                    <a class="dark-btn">
                                        <span>Sort by date</span></a>




                                    <input id="IconDemo" class="Default month-year-input" type="text" style="" name="IconDemo">

</div>

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
                                                <li><a class="te" datavalue="<?php echo $term->name; ?>" ><?php echo $term->name; ?></a></li>
                                            <?php } ?>

                                            <input type="hidden" value="" name="sectorname">
                                            <!--                                            </form>-->
                                        </ul>
                                    <?php endif; ?>
                                </div>
                                <div class="clearfix"></div>
                                
                  <?php if( current_user_can('editor') || current_user_can('administrator') ) {  
				  echo '<div class="main-pannel-main">';
				  echo do_shortcode("[list-allposts]"); 
				  echo '</div>';
				  
				  ?> 
              
   
<?php } else{


                 
				 echo '<div class="main-pannel-main">';
				  echo do_shortcode("[list-allposts]"); 
				  echo '</div>';
				  
				  ?>
                                
                                <?php /*?><div class="main-pannel-main">
                                    <?php $has_docs = false ?>
                                    <?php if (bp_docs_has_docs(array('update_attachment_cache' => true))) : ?>
                                        <?php $has_docs = true ?>
                                        <?php $i=0;while (bp_docs_has_docs()) : bp_docs_the_doc() ?>
                                            <div class="main-pannel">
                                                <div class="top-section">
                                                    <div class="col-md-2 col-sm-2 col-xs-12 logo-sec">
                                                        <a href="<?php the_field('company_page'); ?>">
                <!--                                                        <img src="http://profusenx.com/19/blok/2018-05-16.png"> -->
                                                            <?php
                                                            if (function_exists('get_wp_term_image')) {
                                                                $meta_image = get_wp_term_image($term_id);
                                                                //It will give category/term image url 
                                                                //echo $term_id;
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
                                                        <h5><a href="<?php the_field('company_page'); ?>"><?php echo $term_id = $term->name; ?><a/></h5>
                                                    </div>

                                                    <div class="col-md-6 col-sm-6 col-xs-12 greeb-btn">
                                                        <div class="green-number">
                                                            <a href="<?php the_field('price_links_to_chart_'); ?>" target="_blank"><span style="color: #fff;">1.87</span></a>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-2 col-sm-2 col-xs-12 horse-sec">
                                                        <div class="horse-sec-inner">
                                                            <img src="<?php echo get_template_directory_uri(); ?>-child/images/unicorn.png">
                                                            <a class="like" rel="<?php echo get_the_ID() ?>" >  <?php echo likeCount(get_the_ID()); ?> </a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="middle-content">

                                                    <p>


                                                        <?php if (bp_docs_get_excerpt_length()) : ?>

                                                            <?php the_excerpt() ?>


                                                        <?php endif ?>

                                                        <?php do_action('bp_docs_loop_after_doc_excerpt') ?>

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
                                                            <li><a href="<?php bp_docs_doc_link() ?>" >Discussion <i class="fa fa-comment" aria-hidden="true"></i></a></li>
                                                            <li><a class='soshare'>Share <i class="fa fa-share" aria-hidden="true"></i></a>

                                                                <ul class="socailshare" id="">
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
                                            <div class="clearfix new"></div>
                                            <?php $i++; ?>
                                        <?php endwhile ?>
                                            
                                    <?php endif ?>
                                </div><?php */?>
                                <?php } ?>
                                
                            </div> 
                        </div>
                    </div>
                </section>


                </tbody>
            </table>

            <?php if ($has_docs) : ?>
                <div id="bp-docs-pagination">
                    <div id="bp-docs-pagination-count">
                        <?php printf(__('Viewing %1$s-%2$s of %3$s docs', 'buddypress-docs'), bp_docs_get_current_docs_start(), bp_docs_get_current_docs_end(), bp_docs_get_total_docs_num()); ?>
                    </div>

                    <div id="bp-docs-paginate-links">
                        <?php bp_docs_paginate_links(); ?>
                    </div>
                </div>
            <?php else : ?>
                <?php if (bp_docs_current_user_can_create_in_context()) : ?>
                    <p class="no-docs"><?php //printf(__('There are no docs for this view. Why not <a href="%s">create one</a>?', 'buddypress-docs'), bp_docs_get_create_link()); ?>
                    <?php else : ?>
                    <p class="no-docs"><?php //_e('There are no docs for this view.', 'buddypress-docs'); ?></p>
                <?php endif; ?>
            <?php endif; ?>
        <?php endif; ?>
        <?php bp_docs_ajax_value_inputs(); ?>
    </div><!-- /.bp-docs -->

    <?php if (!$bp_docs_do_theme_compat) : ?>
    </div><!-- /#buddypress -->
<?php endif; ?>


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

            
			
			var data1=$('span.ui-button-text4').text();
			
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
     
     alert('yaar khan');
     }
     });*/

</script>
<script>
    $(document).ready(function () {
     /* var $ = jQuery;  

    });
    
    document.getElementById("copyButton").addEventListener("click", function() {
    copyToClipboard(document.getElementById("copyTarget"));*/
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


