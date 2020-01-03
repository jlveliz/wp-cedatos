<?php 

if(!function_exists('jl_generate_latest_post')) {

    function jl_generate_latest_post($atts = [])
    {
        extract(shortcode_atts([
            'number' => 4,
            'categories' =>'',
            'order' => 'DESC'
        ], $atts));

        $atrs['posts_per_page'] = $number;
        $atrs['post_type'] ='post';
        if($categories != '') $atrs['cat_name'] = $categories;
        $atrs['order'] = $order; 


        $query = new WP_Query($atrs);

        if($query->have_posts()) { ?>
            <div class="row">
            <?php while ($query->have_posts()) { 
                $query->the_post(); 
                $title = strlen(get_the_title()) > 75 ? substr(get_the_title(),0,75)."..." : get_the_title();
                ?>
                
                <div class="col-lg-6 box col-12 mb-4 p-3">
                    <div class="col-12 jl-latest-post-container" style="background-image:url('<?php echo get_the_post_thumbnail_url('','full'); ?>')">
                        <a href="<?php echo the_permalink() ?>" class="read-more"> Ver Más</a>    
                        <div class="jl-latest-post-title-container">
                            <h3 class="border-0"><a class="text-white" href="<?php echo the_permalink() ?>"><?php  echo $title; ?></a></h3>
                        </div>
                    </div>
                </div>
                
            <?php } ?>
                <div class="col-12">
                    <a href="<?php echo esc_url(get_permalink( get_option( 'page_for_posts' ) )) ?>" class="btn btn-default rounded-0 btn-block btn-lg bg-dark text-center pt-3 pb-3 text-white"> Ver Más</a>
                </div>
            </div> 
        <?php } else {

        }
    }

    add_shortcode('jl_latest_posts', 'jl_generate_latest_post');
}

