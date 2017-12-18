<?php
/**
 * The dependancy class that is used inside the public setup_dependancy function
*/
class adminClass {

	/**
	 *Adding admin-pages in main Dashboard navigation
	*/
	public function my_admin_menu() {
		// Sports Page
		add_submenu_page('edit.php?post_type=page', 'Sports', 'Sports', 'manage_options', 'sports-page', __CLASS__ .'::sports_posts' );
		// Animals Page
		add_submenu_page('edit.php?post_type=page', 'Animals', 'Animals', 'manage_options', 'animals-page', __CLASS__ .'::animals_posts' );
		// Business Page
		add_submenu_page( 'edit.php?post_type=page', 'Business', 'Business', 'manage_options', 'business-page', __CLASS__ .'::business_posts' );
		// Entertainment Page
		add_submenu_page( 'edit.php?post_type=page', 'Entertainment', 'Entertainment', 'manage_options', 'entertainment-page', __CLASS__ .'::entertainment_posts' );
		// World and News
		add_submenu_page( 'edit.php?post_type=page', 'World and News', 'World and News', 'manage_options', 'world-and-news-page', __CLASS__ .'::world_and_news_posts' );
	}

	function sports_posts(){
		//The Query
		$query = new WP_Query( array( 'category_name' => 'sports-page', 'post_per_page' => '25' ) );
			// The Loop
			if ( $query->have_posts() ) {
				echo '<ul>';
				while ( $query->have_posts() ) {
					$query->the_post();
					echo '<li><h2>' . get_the_title() . '</h2></li>';
					echo '<p>' . get_the_content() . '</p>';
				}
				echo '</ul>';
				/* Restore original Post Data */
				wp_reset_postdata();
			} else {
				echo '<p>There are no Sports posts. Check back later</p>';
			}
	}

	function animals_posts(){
		//The Query
		$query = new WP_Query( array( 'category_name' => 'animals-page', 'post_per_page' => '10' ) );
			// The Loop
			if ( $query->have_posts() ) {
				echo '<ul>';
				while ( $query->have_posts() ) {
					$query->the_post();
					echo '<li><h2>' . get_the_title() . '</h2></li>';
					echo '<p>' . get_the_content() . '</p>';
				}
				echo '</ul>';
				/* Restore original Post Data */
				wp_reset_postdata();
			} else {
				echo '<p>There are no Animals posts. Check back later</p>';
			}
	}

	function business_posts(){
		//The Query
		$query = new WP_Query( array( 'category_name' => 'business-page', 'post_per_page' => '12' ) );
			// The Loop
			if ( $query->have_posts() ) {
				echo '<ul>';
				while ( $query->have_posts() ) {
					$query->the_post();
					echo '<li><h2>' . get_the_title() . '</h2></li>';
					echo '<p>' . get_the_content() . '</p>';
				}
				echo '</ul>';
				/* Restore original Post Data */
				wp_reset_postdata();
			} else {
				echo '<p>There are no Business posts. Check back later</p>';
			}
	}

	function entertainment_posts(){
		//The Query
		$query = new WP_Query( array( 'category_name' => 'entertainment-page', 'post_per_page' => '50' ) );
			// The Loop
			if ( $query->have_posts() ) {
				echo '<ul>';
				while ( $query->have_posts() ) {
					$query->the_post();
					echo '<li><h2>' . get_the_title() . '</h2></li>';
					echo '<p>' . get_the_content() . '</p>';
				}
				echo '</ul>';
				/* Restore original Post Data */
				wp_reset_postdata();
			} else {
				echo '<p>There are no Entertainment posts. Check back later</p>';
			}
	}

	function world_and_news_posts(){
		//The Query
		$query = new WP_Query( array( 'category_name' => 'world-and-news-page', 'post_per_page' => '100' ) );
			// The Loop
			if ( $query->have_posts() ) {
				echo '<ul>';
				while ( $query->have_posts() ) {
					$query->the_post();
					echo '<li><h2>' . get_the_title() . '</h2></li>';
					echo '<p>' . get_the_content() . '</p>';
				}
				echo '</ul>';
				/* Restore original Post Data */
				wp_reset_postdata();
			} else {
				echo '<p>There are no World and News posts. Check back later</p>';
			}
	}
}


