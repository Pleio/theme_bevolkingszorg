<?php
/**
 * Elgg header logo
 */

$site = elgg_get_site_entity();
$site_name = $site->name;
$site_url = elgg_get_site_url();
?>

<h1>
	<a class="elgg-heading-site" href="<?php echo $site_url; ?>">
		<?php //echo $site_name; ?>
		<img src="<?php echo $site_url; ?>mod/theme_bevolkingszorg/graphics/logo.png" />
	</a>
</h1>