<?php
/*
Template Name: Search Page
*/
?>

<?php get_header(); ?>
<?php
global $query_string;

$query_args = explode("&", $query_string);
$search_query = array();

if( strlen($query_string) > 0 ) {
	foreach($query_args as $key => $string) {
		$query_split = explode("=", $string);
		$search_query[$query_split[0]] = urldecode($query_split[1]);
	} // foreach
} //if

$search = new WP_Query($search_query);
?>
<section class="hero">
	<div class="row">
		<div class="small-12 columns">
			<div class="title-box">
				<h1>Search Thrive/Strive</h1>
			</div>
		</div>
	</div>
</section>
<section class="search">
	<div class="row">
		<div class="small-12 large-6 large-offset-3 columns end">
			<form role="search" method="get" id="searchform" class="searchform" action="/">
				<div class="input-group">
					<input type="text" value="" name="s" id="s" />
					<div class="input-group-button">
						<button type="submit" class="button">Search</button>
					</div>
				</div>
			</form>	
		</div>
	</div>
</section>
<section class="content">
	<div class="row">
		<div class="small-12 columns">
			<h2 class="text-center">Results</h2>
		</div>
	</div>
</section>
<?php get_footer(); ?>