<?php
/**
 * ogc_pa_theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ogc_pa_theme
 */

function getAssetUrlWithTimestamp($pathFromThemeRoot)
{
    if(mb_substr($pathFromThemeRoot, 0, 1) !== '/'){
        $pathFromThemeRoot = '/'.$pathFromThemeRoot;
    }
    $fullPath = get_template_directory().$pathFromThemeRoot;
    if(file_exists($fullPath)){
        return get_template_directory_uri().$pathFromThemeRoot.'?'.filemtime($fullPath);
    }else{
        return '';
    }
}

if ( ! function_exists( 'ogc_pa_theme_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function ogc_pa_theme_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on ogc_pa_theme, use a find and replace
		 * to change 'ogc_pa_theme' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'ogc_pa_theme', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'ogc_pa_theme' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',                            
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'ogc_pa_theme_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'ogc_pa_theme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function ogc_pa_theme_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'ogc_pa_theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'ogc_pa_theme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ogc_pa_theme_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'ogc_pa_theme' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'ogc_pa_theme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'ogc_pa_theme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function ogc_pa_theme_scripts() {
    wp_enqueue_style( 'ogc_pa_theme-style', getAssetUrlWithTimestamp('/style.css'), [], null);    
    wp_enqueue_style( 'ogc_pa_theme-style-mq', getAssetUrlWithTimestamp('/style_mq.css'), [], null);
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
            wp_enqueue_script( 'comment-reply' );
    }    
}
add_action( 'wp_enqueue_scripts', 'ogc_pa_theme_scripts' );

function admin_favicon() {
	echo '<link rel="shortcut icon" type="image/x-icon" href="'.get_bloginfo('stylesheet_directory').'/favicon.png" />';
}
add_action('admin_head', 'admin_favicon');

if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
        'page_title' => 'Common fields',
        'menu_title' => 'Common fields',
        'menu_slug' => 'common_fields',
    ));	    
}

function hide_admin_bar_from_front_end(){
    if (is_blog_admin()) {
        return true;
    }
    return false;
}
add_filter( 'show_admin_bar', 'hide_admin_bar_from_front_end' );

add_filter('wp_nav_menu_objects', 'my_wp_nav_menu_objects', 10, 2);


function my_wp_nav_menu_objects( $items, $args ) {
    foreach( $items as $item ){
        $logo = get_field('logo', $item); if(!empty($logo)){ $item->title = ' <img src="'.$logo['url'].'" alt="'.$logo['alt'].'" />'; $item->classes[] = 'logo img_box invest_logo'.setLogosWidth($logo);}
        $dc = get_field('disable_click',$item); if($dc){$item->classes[] = 'prev_def_menu';}
        $size = get_field('size',$item); if($size){$item->classes[] = $size;}
        $menu_cl = implode(",", $item -> classes); $ind = strrpos($menu_cl,'menu-item-has-children');
        if($ind){$item->title .= ' <i class="fal fa-chevron-down"></i>';}
    }
    return $items;
}

add_action('init', 'my_custom_init_reports');
function my_custom_init_reports(){
	register_post_type('ogc-pa-reports', array(
		'labels'             => array(
			'name'               => 'Reports',
			'singular_name'      => 'Report',
			'add_new'            => 'Add new',
			'add_new_item'       => 'Add new report',
			'edit_item'          => 'Edit report',
			'new_item'           => 'New report',
			'view_item'          => 'View report',
			'search_items'       => 'Search report',
			'not_found'          => 'Not found report',
			'not_found_in_trash' => 'Not found report in trash',
			'parent_item_colon'  => '',
			'menu_name'          => 'Reports settings'

		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
                'show_in_nav_menus'  => false,
		'query_var'          => true,
		'rewrite'            => false,
		'capability_type'    => 'post',
		'has_archive'        => false,
		'hierarchical'       => false,
                'menu_icon'          => 'dashicons-analytics',
                'taxonomies'         => array(),
                'show_in_rest'       => true,            
		'menu_position'      => 8,
		'supports'           => array('title')
	) );
}

add_action('init', 'my_custom_init_portfolio');
function my_custom_init_portfolio(){
	register_post_type('ogc-pa-portfolio', array(
		'labels'             => array(
			'name'               => 'Portfolio Companies',
			'singular_name'      => 'Portfolio Company',
			'add_new'            => 'Add new',
			'add_new_item'       => 'Add new company',
			'edit_item'          => 'Edit company',
			'new_item'           => 'New company',
			'view_item'          => 'View company',
			'search_items'       => 'Search company',
			'not_found'          => 'Not found company',
			'not_found_in_trash' => 'Not found company in trash',
			'parent_item_colon'  => '',
			'menu_name'          => 'Portfolio Companies'

		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
                'show_in_nav_menus'  => false,
		'query_var'          => true,
		'rewrite'            => false,
		'capability_type'    => 'post',
		'has_archive'        => false,
		'hierarchical'       => false,
                'menu_icon'          => 'dashicons-chart-area',
                'taxonomies'         => array('ogc-pa-portfolio'),
                'show_in_rest'       => true,            
		'menu_position'      => 4,
		'supports'           => array('title')
	) );
}

add_action( 'init', 'portfolio_taxonomy1' );
function portfolio_taxonomy1() {
    register_taxonomy(
        'portfolio-fund',
        'ogc-pa-portfolio',
        array(
            'label' => __( 'Fund' ),
            'public' => true,
            'show_in_rest' => true,
            'show_admin_column' => true,
            'hierarchical' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'show_in_nav_menus' => false   
        )
    );
}

add_action('init', 'my_custom_init_documents');
function my_custom_init_documents(){
	register_post_type('ogc-pa-documents', array(
		'labels'             => array(
			'name'               => 'Documents',
			'singular_name'      => 'Document',
			'add_new'            => 'Add new',
			'add_new_item'       => 'Add new document',
			'edit_item'          => 'Edit document',
			'new_item'           => 'New document',
			'view_item'          => 'View document',
			'search_items'       => 'Search document',
			'not_found'          => 'Not found document',
			'not_found_in_trash' => 'Not found document in trash',
			'parent_item_colon'  => '',
			'menu_name'          => 'Documents'

		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
                'show_in_nav_menus'  => false,
		'query_var'          => true,
		'rewrite'            => false,
		'capability_type'    => 'post',
		'has_archive'        => false,
		'hierarchical'       => false,
                'menu_icon'          => 'dashicons-media-document',
                'taxonomies'         => array('documents-type','documents-user'),
                'show_in_rest'       => true,            
		'menu_position'      => 6,
		'supports'           => array('title','author')
	) );
}

add_action( 'init', 'documents_taxonomy1' );
function documents_taxonomy1() {
    register_taxonomy(
        'documents-type',
        'ogc-pa-documents',
        array(
            'label' => __( 'Type' ),
            'public' => true,
            'show_in_rest' => true,
            'show_admin_column' => true,
            'hierarchical' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'show_in_nav_menus' => false   
        )
    );
}

add_action( 'init', 'documents_taxonomy2' );
function documents_taxonomy2() {
    register_taxonomy(
        'documents-user',
        'ogc-pa-documents',
        array(
            'label' => __( 'User' ),
            'public' => true,
            'show_in_rest' => true,
            'show_admin_column' => true,
            'hierarchical' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'show_in_nav_menus' => false            
        )
    );
}

add_filter( 'manage_taxonomies_for_activity_columns', 'activity_type_columns' );
function activity_type_columns( $taxonomies ) {
    $taxonomies[] = 'documents-type';
    return $taxonomies;
}

add_action( 'restrict_manage_posts', 'filter_backend_by_taxonomies' , 99, 2);
function filter_backend_by_taxonomies( $post_type, $which) {
    // Apply this to a specific CPT
    if ( 'ogc-pa-documents' !== $post_type )
        return;

    // A list of custom taxonomy slugs to filter by
    $taxonomies = array('documents-type','documents-user');

    foreach ( $taxonomies as $taxonomy_slug ) {

        // Retrieve taxonomy data
        $taxonomy_obj = get_taxonomy( $taxonomy_slug );
        $taxonomy_name = $taxonomy_obj->labels->name;

        // Retrieve taxonomy terms
        $terms = get_terms( $taxonomy_slug );

        // Display filter HTML
        echo "<select name='{$taxonomy_slug}' id='{$taxonomy_slug}' class='postform'>";
        echo '<option value="">' . sprintf( esc_html__( 'Show All %s', 'text_domain' ), $taxonomy_name ) . '</option>';
        foreach ( $terms as $term ) {
            printf(
                '<option value="%1$s" %2$s>%3$s (%4$s)</option>',
                $term->slug,
                ( ( isset( $_GET[$taxonomy_slug] ) && ( $_GET[$taxonomy_slug] == $term->slug ) ) ? ' selected="selected"' : '' ),
                $term->name,
                $term->count
            );
        }
        echo '</select>';
    }
}

function setLogosWidth($a){
    if($a['width']&&$a['height']){
        if($a['width']/$a['height'] >= 8):
            return ' width_option1';
        elseif($a['width']/$a['height'] >= 5):
            return ' width_option2';
        elseif($a['width']/$a['height'] >= 1.7):
            return ' width_option3';
        elseif($a['width']/$a['height'] >= 1.2):
            return ' width_option4';
        else:
            return ' width_option5';    
        endif;
    }
}

add_action( 'show_user_profile', 'extra_user_profile_fields' );
add_action( 'edit_user_profile', 'extra_user_profile_fields' );

add_action( 'personal_options_update', 'save_extra_user_profile_fields' );
add_action( 'edit_user_profile_update', 'save_extra_user_profile_fields' );

function save_extra_user_profile_fields( $user_id ) {
    if ( !current_user_can( 'edit_user', $user_id ) ) { 
        return false; 
    }
    update_user_meta( $user_id, 'organization', $_POST['organization'] );    
    update_user_meta( $user_id, 'title', $_POST['title'] );
    update_user_meta( $user_id, 'city', $_POST['city'] );
    update_user_meta( $user_id, 'state', $_POST['state'] );
    update_user_meta( $user_id, 'country', $_POST['country'] );
    update_user_meta( $user_id, 'phone', $_POST['phone'] ); 
}

function extra_user_profile_fields( $user ) { ?>
    <h3><?php _e("Extra profile information", "blank"); ?></h3>

    <table class="form-table">
    <tr>
        <th><label for="organization"><?php _e("Organization"); ?></label></th>
        <td>
            <input type="text" name="organization" id="organization" value="<?php echo esc_attr( get_the_author_meta( 'organization', $user->ID ) ); ?>" class="regular-text" /><br />
        </td>
    </tr>        
    <tr>
        <th><label for="title"><?php _e("Title"); ?></label></th>
        <td>
            <input type="text" name="title" id="title" value="<?php echo esc_attr( get_the_author_meta( 'title', $user->ID ) ); ?>" class="regular-text" /><br />
        </td>
    </tr>
    <tr>
        <th><label for="city"><?php _e("City"); ?></label></th>
        <td>
            <input type="text" name="city" id="city" value="<?php echo esc_attr( get_the_author_meta( 'city', $user->ID ) ); ?>" class="regular-text" /><br />
        </td>
    </tr>
    <tr>
        <th><label for="state"><?php _e("State"); ?></label></th>
        <td>
            <input type="text" name="state" id="state" value="<?php echo esc_attr( get_the_author_meta( 'state', $user->ID ) ); ?>" class="regular-text" /><br />
        </td>
    </tr>
    <tr>
        <th><label for="country"><?php _e("Country"); ?></label></th>
        <td>
            <input type="text" name="country" id="country" value="<?php echo esc_attr( get_the_author_meta( 'country', $user->ID ) ); ?>" class="regular-text" /><br />
        </td>
    </tr>
    <tr>
        <th><label for="phone"><?php _e("Phone"); ?></label></th>
        <td>
            <input type="text" name="phone" id="phone" value="<?php echo esc_attr( get_the_author_meta( 'phone', $user->ID ) ); ?>" class="regular-text" /><br />
        </td>
    </tr>    
    </table>
<?php }

function change_display_name( $user_id ) {
    $info = get_userdata( $user_id );
    $args = array(
        "ID" => $user_id,
        "display_name" => $info->first_name . " " . $info->last_name
    );
    wp_update_user( $args );
}
add_action("user_register","change_display_name");


// Force First and Last Name as Display Name

add_filter( 'pre_user_display_name', 'um_custom_global_display_name' );
function um_custom_global_display_name( $display_name ){
   if( ! function_exists("um_user") ) return $display_name; 
   return um_user("display_name");
}

// Custom styles for Lost Password page

function tpw_enqueue_custom_admin_style() {
    echo '<link rel="stylesheet" type="text/css" href="' . get_stylesheet_directory_uri() . '/custom-login-styles.css" />';
}
add_action('login_head', 'tpw_enqueue_custom_admin_style');

/*
 * Redirect to custom reset password page
 */
function override_reset_password_form_redirect() {
    $action = isset( $_GET['action'] ) ? $_GET['action'] : '';

    if(($_GET['checkemail']==='confirm' || $_GET['action']==='resetpass') && strpos($_SERVER['REQUEST_URI'],'wp-login.php')) {
        wp_redirect( site_url( '/investor-login/' ));
        exit;
    }
    if(($_GET['loggedout'] === 'true' && strpos($_SERVER['REQUEST_URI'],'wp-login.php'))) {
        wp_redirect(get_home_url());
        exit;
    }    
}
add_action( 'init', 'override_reset_password_form_redirect' );

// Roles changes

function wps_remove_role() {
    remove_role( 'fund-investor' );
}
add_action( 'init', 'wps_remove_role' );
add_role( 'prosp_inv','Prospective Investor',$subscriber -> capabilities );   