 <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:400,600,700\" rel=\"stylesheet\">
    <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\">
    <style>
        .middle-content {
    background: #fff;
}
        
        body{
           font-family: \'Open Sans\', sans-serif; 
        }    
        img{
            width: 100%;
        }
        
        .main-pannel {
    border: 2px solid #999;
    overflow: hidden;
    border-radius: 5px;
}
        .top-section {
    overflow: hidden;
    background: #272d3c;
    border-bottom: 1px solid #999;        
}
        
        .logo-sec {
    padding: 10px;
    text-align: center;
    border-right: 1px solid #555;
    min-height: 60px; 
    background: #fff;        
}
        
        .logo-sec img{
    max-width: 90px;       
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
        
        .horse-sec span{
       text-align: right;
    background: #fda612;
    color: #000;
    padding: 1px 10px;
    font-size: 13px;
    font-weight: 600;
    border-radius: 5px;
    vertical-align: middle;
}
        
        .middle-content {
    padding: 70px 45px;
}
        
       .middle-content p {
    line-height: 23px;
    font-size: 17px;
}
        
        .bottom-section {
    overflow: hidden;
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
$bp_docs_do_theme_compat = is_buddypress() && bp_docs_do_theme_compat( \'docs-loop.php\' );
if ( ! $bp_docs_do_theme_compat ) : ?>
<div id=\"buddypress\">
<?php endif; ?>

<div class=\"<?php bp_docs_container_class(); ?>\">

<?php include( apply_filters( \'bp_docs_header_template\', bp_docs_locate_template( \'docs-header.php\' ) ) ) ?>

<?php if ( current_user_can( \'bp_docs_manage_folders\' ) && bp_docs_is_folder_manage_view() ) : ?>
    <?php bp_locate_template( \'docs/manage-folders.php\', true ) ?>
<?php else : ?>

    <?php
        $crumbs = array();
        $crumbs = apply_filters( \'bp_docs_directory_breadcrumb\', $crumbs );
    ?>
    <h2 class=\"<?php echo (empty($crumbs))?\'empty \':\'\'; ?>directory-title\">
        <?php bp_docs_directory_breadcrumb() ?>
    </h2>

    <div class=\"docs-info-header\">
        <?php bp_docs_info_header() ?>
    </div>

    <?php if ( bp_docs_enable_folders_for_current_context() ) : ?>
        <div class=\"folder-action-links\">
            <?php if ( current_user_can( \'bp_docs_manage_folders\' ) ) : ?>
                <div class=\"manage-folders-link\">
                    <a href=\"<?php bp_docs_manage_folders_url() ?>\"><?php _e( \'Manage Folders\', \'boss\' ) ?></a>
                </div>
            <?php endif ?>

            <div class=\"toggle-folders-link hide-if-no-js\">
                <a href=\"#\" class=\"toggle-folders\" id=\"toggle-folders-hide\"><?php _e( \'Hide Folders\', \'boss\' ) ?></a>
                <a href=\"#\" class=\"toggle-folders\" id=\"toggle-folders-show\"><?php _e( \'Show Folders\', \'boss\' ) ?></a>
            </div>
        </div>
    <?php endif; ?>
    <div class=\"all-docs-table\">
    <table class=\"doctable\">

        <thead>
            <tr valign=\"bottom\">
                <?php if ( bp_docs_enable_attachments() ) : ?>
                    <th scope=\"column\" class=\"attachment-clip-cell\"> </th>
                <?php endif ?>

                <th scope=\"column\" class=\"title-cell<?php bp_docs_is_current_orderby_class( \'title\' ) ?>\">
                    <a href=\"<?php bp_docs_order_by_link( \'title\' ) ?>\"><?php _e( \'Title\', \'boss\' ); ?></a>
                </th>

                <?php if ( ! bp_docs_is_started_by() ) : ?>
                    <th scope=\"column\" class=\"author-cell<?php bp_docs_is_current_orderby_class( \'author\' ) ?>\">
                        <a href=\"<?php bp_docs_order_by_link( \'author\' ) ?>\"><?php _e( \'Author\', \'boss\' ); ?></a>
                    </th>
                <?php endif; ?>

                <th scope=\"column\" class=\"created-date-cell<?php bp_docs_is_current_orderby_class( \'created\' ) ?>\">
                    <a href=\"<?php bp_docs_order_by_link( \'created\' ) ?>\"><?php _e( \'Created\', \'boss\' ); ?></a>
                </th>

                <th scope=\"column\" class=\"edited-date-cell<?php bp_docs_is_current_orderby_class( \'modified\' ) ?>\">
                    <a href=\"<?php bp_docs_order_by_link( \'modified\' ) ?>\"><?php _e( \'Last Edited\', \'boss\' ); ?></a>
                </th>

                <?php do_action( \'bp_docs_loop_additional_th\' ) ?>
            </tr>
            </thead>

            <tbody>
                <section id=\"main-wrapper\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-md-12 \">
                    <div class=\"top-btn\">
                        <a class=\"dark-btn\" href=\"login.html\" target=\"_self\"><span>Sort by date</span></a>
                        <a class=\"dark-btn pull-right\" href=\"login.html\" target=\"_self\"><span>Filter Sector</span></a>
                    </div>
                    
                    <div class=\"clearfix\"></div>
                   
                    <div class=\"main-pannel\">
                        <div class=\"top-section\">
                            <div class=\"col-md-2 col-sm-2 col-xs-12 logo-sec\">
                                <img src=\"http://profusenx.com/19/blok/2018-05-16.png\">
                            </div>

                            <div class=\"col-md-2 col-sm-2 col-xs-12 blok-text\">
                                <h5>BLOK.V</h5>
                            </div>

                            <div class=\"col-md-6 col-sm-6 col-xs-12 greeb-btn\">
                                <div class=\"green-number\">
                                    <span>1.87</span>
                                </div>
                            </div>

                            <div class=\"col-md-2 col-sm-2 col-xs-12 horse-sec\">
                                <div class=\"horse-sec-inner\">
                                    <img src=\"http://profusenx.com/19/blok/unicorn.png\">
                                    <span>1000</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class=\"middle-content\">
                        
                            <p>Mr. Sothi is simply dummy text of the printing and typesetting industry simply dummy text of the
                                printing and typesetting simply dummy simply dummy text of the printing text of the industry. Lorem Ipsum is simply dummy text 
                                of the dummy text of the printing and typesetting the printing text of the industry. printing and typesetting industry simply
                                dummy text of the printing and typesetting simply dummy simply dummy text of the printing text of the industry.</p>
                        </div>
                        
                        <div class=\"bottom-section\">
                            <div class=\"col-md-3 col-sm-3 col-xs-12 company-page\">
                                <div class=\"company-page-inner\">
                                    <a href=\"#\"><i class=\"fa fa-address-card\" aria-hidden=\"true\"></i> 
                                    <span> Company Page</span></a>
                                </div>
                            </div>
                            
                            <div class=\"col-md-9 col-sm-9 col-xs-12 bottom-list\">
                                <ul class=\"list-inline\">
                                    <li><a href=\"#\">View Source <i class=\"fa fa-file-text\" aria-hidden=\"true\"></i></a></li>
                                    <li><a href=\"#\">Discussion <i class=\"fa fa-comment\" aria-hidden=\"true\"></i></a></li>
                                    <li><a href=\"#\">Share <i class=\"fa fa-share\" aria-hidden=\"true\"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

        <?php if ( bp_docs_enable_folders_for_current_context() ) : ?>
            <?php /* The \'..\' row */ ?>
            <?php if ( ! empty( $_GET[\'folder\'] ) ) : ?>
                <tr class=\"folder-row\">
                    <?php /* Just to keep things even */ ?>
                    <?php if ( bp_docs_enable_attachments() ) : ?>
                        <td class=\"attachment-clip-cell\">
                            <?php bp_docs_attachment_icon() ?>
                        </td>
                    <?php endif ?>

                    <td class=\"folder-row-name\" colspan=10>
                        <a href=\"<?php echo esc_url( bp_docs_get_parent_folder_url() ) ?>\" class=\"up-one-folder\"><?php bp_docs_genericon( \'category\', 0 ); ?><span class=\"screen-reader-text\"><?php _e( \'Go up one folder\', \'boss\' ) ?></span><?php _ex( \'..\', \'up one folder\', \'boss\' ) ?></a>
                    </td>
                </tr>
            <?php endif ?>

            <?php if ( bp_docs_include_folders_in_loop_view() ) : ?>
                <?php foreach ( bp_docs_get_folders() as $folder ) : ?>
                    <tr class=\"folder-row\">
                        <?php /* Just to keep things even */ ?>
                        <?php if ( bp_docs_enable_attachments() ) : ?>
                            <td class=\"attachment-clip-cell\">
                                <?php bp_docs_attachment_icon() ?>
                            </td>
                        <?php endif ?>

                        <td class=\"folder-row-name\" colspan=10>
                            <div class=\"toggleable <?php bp_docs_toggleable_open_or_closed_class(); ?>\">
                                <span class=\"folder-toggle-link toggle-link-js\"><a class=\"toggle-folder\" id=\"expand-folder-<?php echo $folder->ID; ?>\" data-folder-id=\"<?php echo $folder->ID; ?>\" href=\"<?php echo esc_url( bp_docs_get_folder_url( $folder->ID ) ) ?>\"><span class=\"hide-if-no-js\"><?php bp_docs_genericon( \'expand\', $folder->ID ); ?></span><?php bp_docs_genericon( \'category\', $folder->ID ); ?><?php echo esc_html( $folder->post_title ) ?></a></span>
                                <div class=\"toggle-content folder-loop\"></div>
                            </div>
                        </td>
                    </tr>
                <?php endforeach ?>
            <?php endif; ?>
        <?php endif; /* bp_docs_enable_folders_for_current_context() */ ?>

       
        </tbody>
        </table>

        

     </div>


    <?php if ( $has_docs ) : ?>
        <div id=\"bp-docs-pagination\">
            <div id=\"bp-docs-pagination-count\">
                <?php printf( __( \'Viewing %1$s-%2$s of %3$s docs\', \'boss\' ), bp_docs_get_current_docs_start(), bp_docs_get_current_docs_end(), bp_docs_get_total_docs_num() ); ?>
            </div>

            <div id=\"bp-docs-paginate-links\">
                <?php bp_docs_paginate_links(); ?>
            </div>
        </div>
    <?php else : ?>
        <?php if ( bp_docs_current_user_can_create_in_context() ) : ?>
            <p class=\"no-docs\"><?php printf( __( \'There are no docs for this view. Why not <a href=\"%s\">create one</a>?\', \'boss\' ), bp_docs_get_create_link() ); ?>
        <?php else : ?>
            <p class=\"no-docs\"><?php _e( \'There are no docs for this view.\', \'boss\' ); ?></p>
        <?php endif; ?>
    <?php endif; ?>
<?php endif; ?>
<?php bp_docs_ajax_value_inputs(); ?>
</div><!-- /.bp-docs -->

<?php if ( ! $bp_docs_do_theme_compat ) : ?>
</div><!-- /#buddypress -->
<?php endif; ?>




<div id=\"bdc-calendar-container\">
    <h3 class=\"bdc-title\">Upcoming publications</h3>
    <div id=\"bdc-legend\"></div>
    <div id=\"bdc-calendar\"></div>
</div>

    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js\"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js\"></script>