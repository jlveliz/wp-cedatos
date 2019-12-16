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
            <div class="row mx-0">
            <?php while ($query->have_posts()) { 
                $query->the_post(); ?>
                
                <div class="col-lg-5 col-md-5 col-sm-6 col-12 jl-latest-post-container mb-4 mr-md-5 mr-0" style="background-image:url('<?php echo get_the_post_thumbnail_url('','full'); ?>')">
                    <a href="<?php echo the_permalink() ?>" class="read-more"> Ver Más</a>    
                <div class="jl-latest-post-title-container">
                        <h3 class="border-0"><a class="text-white" href="<?php echo the_permalink() ?>"><?php  the_title(); ?></a></h3>
                    </div>
                </div>
                
            <?php } ?>
                <div class="col-lg-11 col-md-11 col-sm-11 col-11 pl-lg-0">
                    <a href="<?php echo esc_url(get_permalink( get_option( 'page_for_posts' ) )) ?>" class="btn btn-default rounded-0 btn-block btn-lg bg-dark text-center pt-3 pb-3 text-white"> Ver Más</a>
                </div>
            </div> 
        <?php } else {

        }
    }

    add_shortcode('jl_latest_posts', 'jl_generate_latest_post');
}

