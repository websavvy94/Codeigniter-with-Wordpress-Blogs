<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to Blog page</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<header>
	<nav>
		<ul>
			<li><a href="<?= base_url() ?>">Home</a></li>
			<li><a href="<?= base_url('about') ?>">About</a></li>
			<li><a href="<?= base_url('blog') ?>">Blog</a></li>
			<li><a href="<?= base_url('contact') ?>">Contact</a></li>
		</ul>
	</nav>
</header>

<div id="container">
	<h1>Welcome to Blog Page!</h1>

	<?php
		$post_type = '';
	    if (!empty($post_type) && !empty($post_type)) {
	    	$count_posts = wp_count_posts( $post_type );
	    } else {
	    	$count_posts = wp_count_posts();
	    }

	    $total_posts = (int)$count_posts->publish;

	    if (isset($_GET['page'])) {
		    $page = $_GET['page'];
		} else {
		    $page = 1;
		}

		$default_posts_per_page = get_option( 'posts_per_page' );

		query_posts('posts_per_page='.$default_posts_per_page.'&paged='.$page);
	    
	    while (have_posts()) : the_post(); // Loop
			// get excerpt
			$excerpt = get_the_excerpt();
			$excerpt_x = strlen($excerpt) > 200 ? substr($excerpt,0,200)."..." : $excerpt;
			$post_slug = get_post_field( 'post_name', get_post() );
	?>
			<h1><?php the_title(); ?></h1>
            <label><?=$excerpt_x; ?></label>
	<?php
		endwhile; // End Loop
	?>
</div>

</body>
</html>
