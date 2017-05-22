<?php

/**
 * 删除原始菜单
 **/
function remove_menus()
{
    global $menu;
    $restricted = array(__('Dashboard'),  __('Posts'), __('Comments'),  __('Tools'));//__('Themes'),__('Appearance'),
    end($menu);
    while (prev($menu)) {
        $value = explode(' ', $menu[key($menu)][0]);
        if (strpos($value[0], '<') === FALSE) {
            if (in_array($value[0] != NULL ? $value[0] : "", $restricted)) {
                unset($menu[key($menu)]);
            }
        } else {
            $value2 = explode('<', $value[0]);
            if (in_array($value2[0] != NULL ? $value2[0] : "", $restricted)) {
                unset($menu[key($menu)]);
            }
        }
    }
}

if (is_admin()) {
    // 删除左侧菜单
    add_action('admin_menu', 'remove_menus');
}

/**
 * 自定义菜单顺序
 **/
add_filter('custom_menu_order', 'custom_menu_order');
add_filter('menu_order', 'custom_menu_order');
function custom_menu_order($menu_ord)
{
    if (!$menu_ord) return true;
    return array(
        'edit.php?post_type=banner',
        'edit.php?post_type=news',
        'edit.php?post_type=notices',
        'edit.php?post_type=productions',
        'edit.php?post_type=cases',
        'edit.php?post_type=partners',
        'upload.php',
        'edit.php?post_type=page', // “页面”菜单
        'plugins.php', //“插件”菜单
    );
}

/**
 * 注册自定义post type
 **/

add_action('init', 'post_type');
function post_type()
{
    //banner
    register_post_type('banner', // Register Custom Post Type
        array(
            'labels' => array(
                'name' => __('banner图'),
                'singular_name' => __('全部banner'),
                'add_new' => __('添加banner'),
                'add_new_item' => __('添加banner'),
                'edit' => __('编辑banner'),
                'edit_item' => __('编辑banner'),
                'new_item' => __('新banner'),
                'all_items' => __('所有banner'),
                'view' => __('查看banner'),
                'view_item' => __('查看banner'),
                'search_items' => __('搜索banner'),
                'not_found' => __('当前无banner'),
                'not_found_in_trash' => __('回收站banner'),
            ),

            'public' => true,
            'hierarchical' => true,
            'has_archive' => true,
            'supports' => array(
                'title',
                'thumbnail'
            ),
            'can_export' => true,
        )
    );
    //partners
    register_post_type('partners', // Register Custom Post Type
        array(
            'labels' => array(
                'name' => __('合作伙伴'),
                'singular_name' => __('全部合作伙伴'),
                'add_new' => __('添加合作伙伴'),
                'add_new_item' => __('添加合作伙伴'),
                'edit' => __('编辑合作伙伴'),
                'edit_item' => __('编辑合作伙伴'),
                'new_item' => __('新合作伙伴'),
                'all_items' => __('所有合作伙伴'),
                'view' => __('查看合作伙伴'),
                'view_item' => __('查看合作伙伴'),
                'search_items' => __('搜索合作伙伴'),
                'not_found' => __('当前无合作伙伴'),
                'not_found_in_trash' => __('回收站无合作伙伴'),
            ),

            'public' => true,
            'hierarchical' => true, // Allows your posts to behave like Hierarchy Pages
            'has_archive' => true,
            'supports' => array(
                'title',
                'thumbnail'
            ),
            'can_export' => true, // Allows export in Tools > Export
        )
    );
    //news
    register_post_type('news', // Register Custom Post Type
        array(
            'labels' => array(
                'name' => __('新闻'),
                'singular_name' => __('全部新闻'),
                'add_new' => __('添加新闻'),
                'add_new_item' => __('添加新闻'),
                'edit' => __('编辑新闻'),
                'edit_item' => __('编辑新闻'),
                'new_item' => __('新新闻'),
                'all_items' => __('所有新闻'),
                'view' => __('查看新闻'),
                'view_item' => __('查看新闻'),
                'search_items' => __('搜索新闻'),
                'not_found' => __('当前无新闻'),
                'not_found_in_trash' => __('回收站无新闻'),
            ),

            'public' => true,
            'hierarchical' => true, // Allows your posts to behave like Hierarchy Pages
            'has_archive' => true,
            'supports' => array(
                'title',
                'editor',
                'excerpt',
                'thumbnail'
            ),
            'can_export' => true, // Allows export in Tools > Export
        )
    );
    //notices
    register_post_type('notices', // Register Custom Post Type
        array(
            'labels' => array(
                'name' => __(' 公告'),
                'singular_name' => __('全部公告'),
                'add_new' => __('添加公告'),
                'add_new_item' => __('添加公告'),
                'edit' => __('编辑公告'),
                'edit_item' => __('编辑公告'),
                'new_item' => __('新公告'),
                'all_items' => __('所有公告'),
                'view' => __('查看公告'),
                'view_item' => __('查看公告'),
                'search_items' => __('搜索公告'),
                'not_found' => __('当前无公告'),
                'not_found_in_trash' => __('回收站无公告'),
            ),

            'public' => true,
            'hierarchical' => true, // Allows your posts to behave like Hierarchy Pages
            'has_archive' => true,
            'supports' => array(
                'title',
                'editor',
                'thumbnail'
            ),
            'can_export' => true, // Allows export in Tools > Export
        )
    );
    //productions
    register_post_type('productions', // Register Custom Post Type
        array(
            'labels' => array(
                'name' => __(' 产品'),
                'singular_name' => __('全部产品'),
                'add_new' => __('添加产品'),
                'add_new_item' => __('添加产品'),
                'edit' => __('编辑产品'),
                'edit_item' => __('编辑产品'),
                'new_item' => __('新产品'),
                'all_items' => __('所有产品'),
                'view' => __('查看产品'),
                'view_item' => __('查看产品'),
                'search_items' => __('搜索产品'),
                'not_found' => __('当前无产品'),
                'not_found_in_trash' => __('回收站无产品'),
            ),

            'public' => true,
            'hierarchical' => true, // Allows your posts to behave like Hierarchy Pages
            'has_archive' => true,
            'supports' => array(
                'title',
                'editor',
                'excerpt',
                'thumbnail'
            ),
            'can_export' => true, // Allows export in Tools > Export
        )
    );
    //cases
    register_post_type('cases', // Register Custom Post Type
        array(
            'labels' => array(
                'name' => __('案例'),
                'singular_name' => __('全部案例'),
                'add_new' => __('添加案例'),
                'add_new_item' => __('添加案例'),
                'edit' => __('编辑案例'),
                'edit_item' => __('编辑案例'),
                'new_item' => __('新案例'),
                'all_items' => __('所有案例'),
                'view' => __('查看案例'),
                'view_item' => __('查看案例'),
                'search_items' => __('搜索案例'),
                'not_found' => __('当前无案例'),
                'not_found_in_trash' => __('回收站无案例'),
            ),

            'public' => true,
            'hierarchical' => true, // Allows your posts to behave like Hierarchy Pages
            'has_archive' => true,
            'supports' => array(
                'title',
                'editor',
                'excerpt',
                'thumbnail'
            ),
            'can_export' => true, // Allows export in Tools > Export
        )
    );
}

/**
 * 注册自定义meta_box
 **/
add_action('add_meta_boxes', 'meta_box');
function meta_box()
{
    add_meta_box(
        'link',
        '链接地址',
        'link_meta_box',
        'partners',
        'normal'
    );
}

//--edit样式--
function link_meta_box($post)
{
    wp_nonce_field('link_meta_box', 'link_meta_box_nonce');
    $value = get_post_meta($post->ID, '_link', true);
    ?>

  <label for="link"></label>

  <input style="width: 100%" type="text" id="link" name="link"
         value="<?php echo esc_attr($value); ?>">

    <?php
}

//--验证保存内容--
add_action('save_post', 'save_partners_meta_box');
function save_partners_meta_box($post_id)
{
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }
    if (!isset($_POST['link_meta_box_nonce'])) {
        return;
    }
    if (!wp_verify_nonce($_POST['link_meta_box_nonce'], 'link_meta_box')) {
        return;
    }
    if (!isset($_POST['link'])) {
        return;
    }
    $link = sanitize_text_field($_POST['link']);
    update_post_meta($post_id, '_link', $link);
}

?>
