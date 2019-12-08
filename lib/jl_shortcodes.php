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
                $query->the_post(); ?>
                <div class="col-md-6 col-12 jl-latest-post-container" stye="background-image:url('<?php echo get_the_post_thumbnail_url('','full'); ?>')">
                    <div class="jl-latest-post-title-container">
                        <h3><?php  the_title(); ?></h3>
                    </div>
                </div>
            <?php } ?>
            </div>
        <?php } else {

        }
    }

    add_shortcode('jl_latest_posts', 'jl_generate_latest_post');
}

