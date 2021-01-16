<?php


global $post;

?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <!-- Windows 8 Apps -->
    <meta name="application-name" content="e-Acapulco.com"/>
    <meta name="msapplication-TileColor" content="#00189e"/>
    <meta name="msapplication-square70x70logo" content="<?php bloginfo('template_directory'); ?>/ie/tiny.png"/>
    <meta name="msapplication-square150x150logo" content="<?php bloginfo('template_directory'); ?>/ie/square.png"/>
    <meta name="msapplication-wide310x150logo" content="<?php bloginfo('template_directory'); ?>/ie/wide.png"/>
    <meta name="msapplication-square310x310logo" content="<?php bloginfo('template_directory'); ?>/ie/large.png"/>
    <meta name="msapplication-notification" content="frequency=30;polling-uri=http://notifications.buildmypinnedsite.com/?feed=http://e-acapulco.com/eventos/feed&amp;id=1;polling-uri2=http://notifications.buildmypinnedsite.com/?feed=http://e-acapulco.com/acapulco/noticias/feed&amp;id=2;polling-uri3=http://notifications.buildmypinnedsite.com/?feed=http://e-acapulco.com/feed&amp;id=3; cycle=1"/>

    <meta name="msapplication-TileColor" content="#2b5797">
    <meta name="msapplication-TileImage" content="<?php echo $theme_url ?>/favicons/mstile-144x144.png">
    <meta name="msapplication-config" content="<?php echo $theme_url ?>/favicons/browserconfig.xml">

    <meta name="DC.title" content="<?php wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 ) {
		echo ' | ' . sprintf( __( 'Página %s', 'jab' ), max( $paged, $page ) );
        }
    ?>" />
    <meta name="geo.region" content="MX-GRO" />
    <meta name="geo.placename" content="Acapulco" />
    <meta name="geo.position" content="16.856463;-99.856796" />
    <meta name="ICBM" content="16.856463, -99.856796" />

<?php if (is_single()): ?>
    <?php

    $foto_id = get_post_thumbnail_id( $post->ID );
    $foto = '';

    if ($foto_id > 0) {
        $foto = wp_get_attachment_image_src($foto_id, 'large');
    }

    $terms = get_the_terms($post->ID, 'category');

    if (is_array($terms) && sizeof($terms) > 0) {
        foreach ($terms as $term) {
            $seccion = $term;
            break;
        }
    }

    unset($terms);
    ?>

    <?php if (empty($foto)): ?>
    <meta name="twitter:card" content="summary">
    <meta name="twitter:image:src" content="http://e-acapulco.com/wp-content/themes/eaca2009/images/logo.png">
    <?php else: ?>
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:image:src" content="<?php echo $foto[0] ?>">
    <?php endif ?>
    <meta name="twitter:site" content="@eacapulcocom">
    <meta name="twitter:creator" content="@eacapulcocom">
    <meta name="twitter:title" content="<?php echo $post->post_title ?>">
    <meta name="twitter:description" content="<?php echo $post->post_excerpt ?>">
    <?php if (is_single() && in_category('eventos')): ?>
    <meta property="og:type" content="e-acapulco:evento">
    <?php else: ?>
    <meta property="og:type"            content="article" />
    <?php endif ?>
    <meta property="og:site_name"       content="<?php  bloginfo('name') ?>" />
    <meta property="og:url"             content="<?php echo get_permalink($post->ID) ?>" />
    <meta property="og:title"           content="<?php echo $post->post_title ?>" />
    <meta property="og:image"           content="<?php echo $foto[0] ?>" />
    <meta property="og:description"     content="<?php echo $post->post_excerpt ?>">
    <meta property="article:published_time"     content="<?php echo $post->post_date ?>">
    <meta property="article:publisher"  content="https://www.facebook.com/e.acapulcocom" />
    <?php if (is_object($seccion)): ?>
    <meta property="article:section"    content="<?php echo $seccion->name ?>" />
    <?php endif ?>
    <meta property="article:tag"        content="<?php //echo get_the_tag_list('', ', ') ?>" />
<?php endif ?>

    <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="http://feedproxy.google.com/E-acapulco" />

    <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory') ?>/icons/favicone-16x16.png">
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo $theme_url ?>/favicons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo $theme_url ?>/favicons/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo $theme_url ?>/favicons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo $theme_url ?>/favicons/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo $theme_url ?>/favicons/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo $theme_url ?>/favicons/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo $theme_url ?>/favicons/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo $theme_url ?>/favicons/apple-touch-icon-152x152.png">
    <link rel="icon" type="image/png" href="<?php echo $theme_url ?>/favicons/favicon-196x196.png" sizes="196x196">
    <link rel="icon" type="image/png" href="<?php echo $theme_url ?>/favicons/favicon-160x160.png" sizes="160x160">
    <link rel="icon" type="image/png" href="<?php echo $theme_url ?>/favicons/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="<?php echo $theme_url ?>/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="<?php echo $theme_url ?>/favicons/favicon-32x32.png" sizes="32x32">
