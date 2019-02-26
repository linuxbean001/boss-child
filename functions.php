<?php

// Child theme functions.php

function boss_child_theme_enqueue_styles() {

    $parent_style = 'parent-style';

    wp_enqueue_style($parent_style, get_template_directory_uri() . '/style.css');
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array($parent_style), wp_get_theme()->get('Version')
    );
}

add_action('wp_enqueue_scripts', 'boss_child_theme_enqueue_styles');


require_once WP_CONTENT_DIR . '/themes/boss-child/inc/like-metabox.php';

require_once WP_CONTENT_DIR . '/themes/boss-child/inc/like-post.php';

function enqueue_js_files() {

    wp_register_script('like-post', get_template_directory_uri() . '-child/js/like-post.js', array('jquery'), false, '1.0', true);


    wp_enqueue_script('like-post');
}

add_action('wp_enqueue_scripts', 'enqueue_js_files');

function add_content_after_h2($content) {
    if (is_single()) {
        global $post;
        $div = '<a class="like" rel="' . $post->ID . '">' . likeCount($post->ID) . ' likes</a>';
        $content = preg_replace('/(<\/p>)/i', '\1' . $div, $content);
    }

    return $content;
}

add_filter('the_content', 'add_content_after_h2');

function custom_excerpt_length($length) {
    return 100;
}

add_filter('excerpt_length', 'custom_excerpt_length', 999);

if (function_exists("register_field_group")) {
    register_field_group(array(
        'id' => 'acf_company-page',
        'title' => 'Company Page',
        'fields' => array(
            array(
                'key' => 'field_5afd25f45a4f5',
                'label' => 'Company Page',
                'name' => 'company_page',
                'type' => 'page_link',
                'post_type' => array(
                    0 => 'page',
                ),
                'allow_null' => 0,
                'multiple' => 0,
            ),
            array(
                'key' => 'field_5afd2f6b80154',
                'label' => 'Price links to chart ',
                'name' => 'price_links_to_chart_',
                'type' => 'text',
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'formatting' => 'html',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_5afd49623582a',
                'label' => 'View Source ',
                'name' => 'view_source_',
                'type' => 'text',
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'formatting' => 'html',
                'maxlength' => '',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'bp_doc',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array(
            'position' => 'normal',
            'layout' => 'no_box',
            'hide_on_screen' => array(
            ),
        ),
        'menu_order' => 0,
    ));
}

//==========================For load post by category

add_action('wp_ajax_nopriv_selectCompany', 'selectCompany');
add_action('wp_ajax_selectCompany', 'selectCompany');

function selectCompany() {

$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
    $args = array(
        'post_type' => 'bp_doc',
		'posts_per_page' => -1,
        'paged' => $paged,
        'order' => 'ASC',
        'tax_query' => array(
            array(
                'taxonomy' => 'bp_docs_associated_item',
                'field' => 'slug',
                'terms' => $_POST['mycompany'] //pass your term name here
            )
        )
    );
	
	$i=0;

    $the_query = new WP_Query($args);

    if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post();
            ?>

<div class="main-pannel">
  <div class="top-section">
    <div class="col-md-2 col-sm-2 col-xs-12 logo-sec"> <a href="<?php the_field('company_page'); ?>">
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
            ?>
      </a> </div>
    <div class="col-md-2 col-sm-2 col-xs-12 blok-text">
      <h5><a href="<?php the_field('company_page'); ?>"><?php echo $term->name; ?><a/></h5>
    </div>
    <div class="col-md-6 col-sm-6 col-xs-12 greeb-btn">
      <div class="green-number"> <a href="<?php the_field('price_links_to_chart_'); ?>" target="_blank"><span style="color: #fff;">1.87</span></a> </div>
    </div>
    <div class="col-md-2 col-sm-2 col-xs-12 horse-sec">
      <div class="horse-sec-inner"> <img src="<?php echo get_template_directory_uri(); ?>-child/images/unicorn.png"> <a class="like" rel="<?php echo get_the_ID() ?>"> <?php echo likeCount(get_the_ID()); ?> </a> </div>
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
      <div class="company-page-inner"> <a href="<?php the_field('company_page'); ?>"><i class="fa fa-address-card" aria-hidden="true"></i> <span> Company Page</span></a> </div>
    </div>
    <div class="col-md-9 col-sm-9 col-xs-12 bottom-list">
      <ul class="list-inline">
        <li><a href="<?php the_field('view_source_'); ?>" target="_blank">View Source <i class="fa fa-file-text" aria-hidden="true"></i></a></li>
        <li><a href="<?php bp_docs_doc_link() ?>">Discussion <i class="fa fa-comment" aria-hidden="true"></i></a></li>
        <li><a class='soshare'>Share <i class="fa fa-share" aria-hidden="true"></i></a>
          <ul class="socailshare">
            <li> <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php bp_docs_doc_link() ?>">Share to Facebook</a></li>
            <li> <a target="_blank" href="https://twitter.com/home?status=<?php bp_docs_doc_link() ?>">Share to Twitter</a></li>
            <li><a target="_blank" href="https://www.reddit.com/submit?url=<?php bp_docs_doc_link() ?>">Share to Reddit</a></li>
            <li>
              <p id="p1<?php echo $i;?>" style="display: none;">
                <?php bp_docs_doc_link() ?>
              </p>
              <a id="copyButton" onclick="copyToClipboard('#p1<?php echo $i;?>')">Copy Past Link</a>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</div>
<div class="clearfix new"></div>
<?php $i++; ?>

<?php endwhile; ?>
<?php
    endif;?>
   <?php 
/* $big = 999999999; // need an unlikely integer
 echo paginate_links( array(
    'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
    'format' => '?paged=%#%',
    'current' => max( 1, get_query_var('paged') ),
    'total' => $the_query->max_num_pages
) );

wp_reset_postdata();*/

?>
<script>
    $(document).ready(function () {
      var $ = jQuery;  

    });
    
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
<script type='text/javascript' src='https://catalystwire.com/wp-content/themes/boss-child/js/like-post.js?ver=4.9.6'></script>
<?php
}
?>
<?php

//End Filter Ajax Functianlity
// create shortcode with parameters so that the user can define what's queried - default is to list all blog posts
add_shortcode('list-posts', 'rmcc_post_listing_parameters_shortcode');

function rmcc_post_listing_parameters_shortcode($atts) {

    ob_start();
	
	
	

    // define attributes and their defaults
    extract(shortcode_atts(array(
        'category'      => '',
            'post_type'     =>'',
            'term_id' => '',
        'order' => 'date',
        'orderby' => 'title',
        'posts' => -1,
       
                    ), $atts));
    
         global $post,$wpdb;
$tmp_post = $post;
$post_type = $atts['post_type'];
 $term_id = $atts['term_id'];


$query=$wpdb->get_results("SELECT SQL_CALC_FOUND_ROWS  wp_posts.ID FROM wp_posts  LEFT JOIN wp_term_relationships ON (wp_posts.ID = wp_term_relationships.object_id) LEFT JOIN wp_posts AS p2 ON (wp_posts.post_parent = p2.ID)  WHERE 1=1  AND ( 
  wp_term_relationships.term_taxonomy_id IN ('".$term_id."')
) AND wp_posts.post_type = 'bp_doc' AND (((wp_posts.post_status = 'publish') OR (wp_posts.post_status = 'inherit' AND (p2.post_status = 'publish')))) GROUP BY wp_posts.ID ORDER BY wp_posts.post_date DESC");
//echo "<pre>";
//print_r($query);

foreach($query as $post){
   
    ?>
<div class="main-pannel">
  <div class="top-section">
    <div class="col-md-2 col-sm-2 col-xs-12 logo-sec"> <a href="<?php the_field('company_page'); ?>">
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
        ?>
      </a> </div>
    <div class="col-md-2 col-sm-2 col-xs-12 blok-text">
      <h5><a href="<?php the_field('company_page'); ?>"><?php echo $term->name; ?><a/></h5>
    </div>
    <div class="col-md-6 col-sm-6 col-xs-12 greeb-btn">
      <div class="green-number"> <a href="<?php the_field('price_links_to_chart_'); ?>" target="_blank"><span style="color: #fff;">1.87</span></a> </div>
    </div>
    <div class="col-md-2 col-sm-2 col-xs-12 horse-sec">
      <div class="horse-sec-inner"> <img src="<?php echo get_template_directory_uri(); ?>-child/images/unicorn.png"> <a class="like" rel="<?php echo $post->ID ?>"> <?php echo likeCount($post->ID); ?> </a> </div>
    </div>
  </div>
  <div class="middle-content">
    <p>
      <?php if (bp_docs_get_excerpt_length()) : ?>
      <?php //echo get_the_excerpt($post->ID) ;
			
			
			$my_postid = $post->ID;//This is page id or post id
			$content_post = get_post($my_postid);
			$content = $content_post->post_content;
			$content = apply_filters('the_content', $content);
			$content = str_replace(']]>', ']]&gt;', $content);
			echo $content;

?>
      <?php endif ?>
      <?php do_action('bp_docs_loop_after_doc_excerpt') ?>
    </p>
  </div>
  <div class="bottom-section">
    <div class="col-md-3 col-sm-3 col-xs-12 company-page">
      <div class="company-page-inner"> <a href="<?php the_field('company_page'); ?>"><i class="fa fa-address-card" aria-hidden="true"></i> <span> Company Page</span></a> </div>
    </div>
    <div class="col-md-9 col-sm-9 col-xs-12 bottom-list">
      <ul class="list-inline">
        <li><a href="<?php the_field('view_source_'); ?>" target="_blank">View Source <i class="fa fa-file-text" aria-hidden="true"></i></a></li>
        <li><a href="<?php bp_docs_doc_link() ?>">Discussion <i class="fa fa-comment" aria-hidden="true"></i></a></li>
        <li><a class='soshare'>Share <i class="fa fa-share" aria-hidden="true"></i></a>
          <ul class="socailshare">
            <li> <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php bp_docs_doc_link() ?>">Share to Facebook</a></li>
            <li> <a target="_blank" href="https://twitter.com/home?status=<?php bp_docs_doc_link() ?>">Share to Twitter</a></li>
            <li><a target="_blank" href="https://www.reddit.com/submit?url=<?php bp_docs_doc_link() ?>">Share to Reddit</a></li>
            <li>
              <p id="p1<?php echo $i;?>" style="display: none;">
                <?php bp_docs_doc_link() ?>
              </p>
              <a id="copyButton" onclick="copyToClipboard('#p1<?php echo $i;?>')">Copy Past Link</a>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</div>
<div class="clearfix new"></div>
<?php
   }



}

// End Short code

// create shortcode for all post for admin
add_shortcode('list-allposts', 'rmcc_post_all_shortcode');

function rmcc_post_all_shortcode($atts) {

    ob_start();
	
	
	

    // define attributes and their defaults
    extract(shortcode_atts(array(
        'category'      => '',
            'post_type'     =>'',
           
        'order' => 'date',
        'orderby' => 'title',
        'posts' => -1,
       
                    ), $atts));
    
         global $post,$wpdb;
$tmp_post = $post;
$post_type = $atts['post_type'];
 $term_id = $atts['term_id'];


$query="SELECT SQL_CALC_FOUND_ROWS  wp_posts.ID FROM wp_posts  LEFT JOIN wp_term_relationships ON (wp_posts.ID = wp_term_relationships.object_id) LEFT JOIN wp_posts AS p2 ON (wp_posts.post_parent = p2.ID)  WHERE 1=1  AND ( 
  wp_term_relationships.term_taxonomy_id
) AND wp_posts.post_type = 'bp_doc' AND (((wp_posts.post_status = 'publish') OR (wp_posts.post_status = 'inherit' AND (p2.post_status = 'publish')))) GROUP BY wp_posts.ID ORDER BY wp_posts.post_date DESC";
//echo "<pre>";
//print_r($query);
	//$total= count($query);
 // $total_query = "SELECT COUNT(1) FROM (${query}) AS combined_table";
   $total = count($wpdb->get_results( $query ));
// $query . " LIMIT ${offset}, ${items_per_page}";
    $items_per_page = 10;
    $page = isset( $_GET['cpage'] ) ? abs( (int) $_GET['cpage'] ) : 1;
    $offset = ( $page * $items_per_page ) - $items_per_page;
    $latestposts = $wpdb->get_results( $query . " LIMIT ${offset}, ${items_per_page}" );
//print_r($latestposts );
foreach($latestposts as $post){
   
    ?>
<div class="main-pannel">
  <div class="top-section">
    <div class="col-md-2 col-sm-2 col-xs-12 logo-sec"> <a href="<?php the_field('company_page'); ?>">
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
        ?>
      </a> </div>
    <div class="col-md-2 col-sm-2 col-xs-12 blok-text">
      <h5><a href="<?php the_field('company_page'); ?>"><?php echo $term->name; ?><a/></h5>
    </div>
    <div class="col-md-6 col-sm-6 col-xs-12 greeb-btn">
      <div class="green-number"> <a href="<?php the_field('price_links_to_chart_'); ?>" target="_blank"><span style="color: #fff;">1.87</span></a> </div>
    </div>
    <div class="col-md-2 col-sm-2 col-xs-12 horse-sec">
      <div class="horse-sec-inner"> <img src="<?php echo get_template_directory_uri(); ?>-child/images/unicorn.png"> <a class="like" rel="<?php echo $post->ID ?>"> <?php echo likeCount($post->ID); ?> </a> </div>
    </div>
  </div>
  <div class="middle-content">
    <p>
      <?php if (bp_docs_get_excerpt_length()) : ?>
      <?php //echo get_the_excerpt($post->ID) ;
			
			
			$my_postid = $post->ID;//This is page id or post id
			$content_post = get_post($my_postid);
			$content = $content_post->post_content;
			$content = apply_filters('the_content', $content);
			$content = str_replace(']]>', ']]&gt;', $content);
			echo $content;

?>
      <?php endif ?>
      <?php do_action('bp_docs_loop_after_doc_excerpt') ?>
    </p>
  </div>
  <div class="bottom-section">
    <div class="col-md-3 col-sm-3 col-xs-12 company-page">
      <div class="company-page-inner"> <a href="<?php the_field('company_page'); ?>"><i class="fa fa-address-card" aria-hidden="true"></i> <span> Company Page</span></a> </div>
    </div>
    <div class="col-md-9 col-sm-9 col-xs-12 bottom-list">
      <ul class="list-inline">
        <li><a href="<?php the_field('view_source_'); ?>" target="_blank">View Source <i class="fa fa-file-text" aria-hidden="true"></i></a></li>
        <li><a href="<?php bp_docs_doc_link() ?>">Discussion <i class="fa fa-comment" aria-hidden="true"></i></a></li>
        <li><a class='soshare'>Share <i class="fa fa-share" aria-hidden="true"></i></a>
          <ul class="socailshare">
            <li> <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php bp_docs_doc_link() ?>">Share to Facebook</a></li>
            <li> <a target="_blank" href="https://twitter.com/home?status=<?php bp_docs_doc_link() ?>">Share to Twitter</a></li>
            <li><a target="_blank" href="https://www.reddit.com/submit?url=<?php bp_docs_doc_link() ?>">Share to Reddit</a></li>
            <li>
              <p id="p1<?php echo $i;?>" style="display: none;">
                <?php bp_docs_doc_link() ?>
              </p>
              <a id="copyButton" onclick="copyToClipboard('#p1<?php echo $i;?>')">Copy Past Link</a>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</div>
<div class="clearfix new"></div>
<?php
   }
   
   ?>
<div class="pagination">
  <?php

  echo paginate_links( array(
        'base' => add_query_arg( 'cpage', '%#%' ),
        'format' => '',
        'prev_text' => __('&laquo;'),
        'next_text' => __('&raquo;'),
        'total' => ceil($total / $items_per_page),
        'current' => $page
    ));
?>
</div>
<?php

}

// End Short code

//==========================For sort post by date

add_action('wp_ajax_nopriv_selectDate', 'selectDate');
add_action('wp_ajax_selectDate', 'selectDate'); 

function selectDate() {
    
    $date= explode("/",$_POST['data']);

    $args = array(
        'post_type' => 'bp_doc',
        'date_query' => array(
		array(
			'year'  => $date[1],
			'month' => $date[0]
			
		),
	)
        
    );

  $i=0;
    $the_query = new WP_Query($args);
    
    $total = $the_query->found_posts;
    
    if($total==0){?>
<h4>No post found in this range. Please try with another date.</h4>
<?php  }

    if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post();
            ?>
<div class="main-pannel">
  <div class="top-section">
    <div class="col-md-2 col-sm-2 col-xs-12 logo-sec"> <a href="<?php the_field('company_page'); ?>">
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
            ?>
      </a> </div>
    <div class="col-md-2 col-sm-2 col-xs-12 blok-text">
      <h5><a href="<?php the_field('company_page'); ?>"><?php echo $term->name; ?><a/></h5>
    </div>
    <div class="col-md-6 col-sm-6 col-xs-12 greeb-btn">
      <div class="green-number"> <a href="<?php the_field('price_links_to_chart_'); ?>" target="_blank"><span style="color: #fff;">1.87</span></a> </div>
    </div>
    <div class="col-md-2 col-sm-2 col-xs-12 horse-sec">
      <div class="horse-sec-inner"> <img src="<?php echo get_template_directory_uri(); ?>-child/images/unicorn.png"> <a class="like" rel="<?php echo get_the_ID() ?>"> <?php echo likeCount(get_the_ID()); ?> </a> </div>
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
      <div class="company-page-inner"> <a href="<?php the_field('company_page'); ?>"><i class="fa fa-address-card" aria-hidden="true"></i> <span> Company Page</span></a> </div>
    </div>
    <div class="col-md-9 col-sm-9 col-xs-12 bottom-list">
      <ul class="list-inline">
        <li><a href="<?php the_field('view_source_'); ?>" target="_blank">View Source <i class="fa fa-file-text" aria-hidden="true"></i></a></li>
        <li><a href="<?php bp_docs_doc_link() ?>">Discussion <i class="fa fa-comment" aria-hidden="true"></i></a></li>
        <li><a class='soshare'>Share <i class="fa fa-share" aria-hidden="true"></i></a>
          <ul class="socailshare">
            <li> <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php bp_docs_doc_link() ?>">Share to Facebook</a></li>
            <li> <a target="_blank" href="https://twitter.com/home?status=<?php bp_docs_doc_link() ?>">Share to Twitter</a></li>
            <li><a target="_blank" href="https://www.reddit.com/submit?url=<?php bp_docs_doc_link() ?>">Share to Reddit</a></li>
            <li>
              <p id="p1<?php echo $i;?>" style="display: none;">
                <?php bp_docs_doc_link() ?>
              </p>
              <a id="copyButton" onclick="copyToClipboard('#p1<?php echo $i;?>')">Copy Past Link</a>
          </ul>
        </li>
      </ul>
      </ul>
    </div>
  </div>
</div>
<div class="clearfix new"></div>
<?php $i++; ?>
<?php endwhile; ?>
<?php
    endif;
	?>
<script>
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
<script type='text/javascript' src='https://catalystwire.com/wp-content/themes/boss-child/js/like-post.js?ver=4.9.6'></script>
<?php
}

//End Sortby date Ajax Functianlity

function cat_func($atts) {
    extract(shortcode_atts(array(
            'class_name'    => 'cat-post',
            'totalposts'    => '-1',
            'category'      => '',
            'post_type'     =>'',
            'term_id' => '',
            'thumbnail'     => 'false',
            'thumbnail_height' => '130',
            'thumbnail_width' => '130',
            'date'          => 'false',
            'excerpt'       => 'true',
            'orderby'       => 'post_date',
            'order'         => 'desc',
         
            ), $atts));

    $output = '<div class="'.$class_name.'">';
    global $post;
$tmp_post = $post;
$post_type = $atts['post_type'];
$term_id = $atts['term_id'];
    //$myposts = get_posts("numberposts=$totalposts&post_type=$post_type&orderby=$orderby&order=$order");
    $myposts = get_posts(array(
        'post_type' => $post_type,
        'numberposts' => -1,
        'tax_query' => array(
          array(
            'taxonomy' => 'company',
            'field' => 'id',
            'terms' => $term_id // Where term_id of Term 1 is "1".
          )
        )
)
      );

    foreach($myposts as $post) {
        setup_postdata($post);
        $output .= '<div class="cat-post-list">';
        if($thumbnail == 'true') {
            $thumb_image = get_post_meta($post->ID, 'thumbnail-url',true);
            if(empty($thumb_image)){
                 preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
                 $thumb_image = $matches [1] [0];
            }
            if(empty($thumb_image)){
                 $thumb_image ='';
            }

            $output .= '<div class="cat-post-images"><img height="'.$thumbnail_height.'" width="'.$thumbnail_width.'" src="'.$thumb_image.'" /></div>';
        }
        $output .= '<div class="cat-content"><span class="cat-post-title"><a href="'.get_permalink().'">'.get_the_title().'</a></span>';
        if ($date == 'true') {
            $output .= '<span class="cat-post-date">'.get_the_date().'</span>';
        }
        if ($excerpt == 'true') {
            $output .= '<span class="cat-post-excerpt">'.get_the_excerpt().'</span>';
        }
        $output .= '</div>
            <div class="cat-clear"></div>
        </div>';
    };
    $output .= '</div>';
    $post = $tmp_post;
    wp_reset_query();
    return $output;
}
add_shortcode('cat', 'cat_func');

// Add Company Texonomy



/**
 * Add custom taxonomies
 *
 * Additional custom taxonomies can be defined here
 * http://codex.wordpress.org/Function_Reference/register_taxonomy
 */
function add_custom_taxonomies() {
  // Add new "Locations" taxonomy to Posts
  register_taxonomy('company', 'bp_doc', array(
    // Hierarchical taxonomy (like categories)
    'hierarchical' => true,
    // This array of options controls the labels displayed in the WordPress Admin UI
    'labels' => array(
      'name' => _x( 'Company', 'taxonomy general name' ),
      'singular_name' => _x( 'Company', 'taxonomy singular name' ),
      'search_items' =>  __( 'Search Company' ),
      'all_items' => __( 'All Company' ),
      'parent_item' => __( 'Parent Company' ),
      'parent_item_colon' => __( 'Parent Company:' ),
      'edit_item' => __( 'Edit Company' ),
      'update_item' => __( 'Update Company' ),
      'add_new_item' => __( 'Add New Company' ),
      'new_item_name' => __( 'New Company Name' ),
      'menu_name' => __( 'Company' ),
    ),
    // Control the slugs used for this taxonomy
    'rewrite' => array(
      'slug' => 'company', // This controls the base slug that will display before each term
      'with_front' => false, // Don't display the category base before "/locations/"
      'hierarchical' => true // This will allow URL's like "/locations/boston/cambridge/"
    ),
  ));
}
add_action( 'init', 'add_custom_taxonomies', 0 );
define( 'UPLOADS', 'wp-content/uploads' );


//Login User redirect
$required_capability = 'edit_others_posts';
$redirect_to = '';
function no_admin_init() {      
    // We need the config vars inside the function
    global $required_capability, $redirect_to;      
    // Is this the admin interface?
    if (
        // Look for the presence of /wp-admin/ in the url
        stripos($_SERVER['REQUEST_URI'],'/wp-admin/') !== false
        &&
        // Allow calls to async-upload.php
        stripos($_SERVER['REQUEST_URI'],'async-upload.php') == false
        &&
        // Allow calls to admin-ajax.php
        stripos($_SERVER['REQUEST_URI'],'admin-ajax.php') == false
    ) {         
        // Does the current user fail the required capability level?
        if (!current_user_can($required_capability)) {  
		global $current_user;
      get_currentuserinfo();

    $username= $current_user->user_login;            
            if ($redirect_to == '') { $redirect_to = get_option('home').'/members/'.$username; }              
            // Send a temporary redirect
            wp_redirect($redirect_to,302);              
        }           
    }       
}
// Add the action with maximum priority
add_action('init','no_admin_init',0);
?>
