<?php
/**
 * Group profile summary
 *
 * Icon and profile fields
 *
 * @uses $vars['group']
 */

if (!isset($vars['entity']) || !$vars['entity']) {
	echo elgg_echo('groups:notfound');
	return true;
}

$group = $vars['entity'];
$owner = $group->getOwnerEntity();

if($group->getGUID() == 2186162){
	echo "<div id='theme-bevolkingszorg-kennisbank' class='clearfix'>";
	echo "<div class='float-alt'><a href='#'><img src='/mod/theme_bevolkingszorg/graphics/opleidingsmodule.jpg' /></a></div>";
	echo "<div class='slider'>";
	echo "<img src='/mod/theme_bevolkingszorg/graphics/slider/3.JPG' />";
	echo "</div>";
	
	echo "<div class='body'><label>" . $group->briefdescription . "</label>" . $group->description . "</div>";
	?>
	
	<style type='text/css'>
		.elgg-layout-one-sidebar {
			background: url("/mod/theme_bevolkingszorg/graphics/sidebar_background_kennisbank.png") repeat-y scroll right top transparent
		}
		.elgg-module-widget > .elgg-head {
			background-color: <?php echo COLOR_BLUE; ?>;
			background-image: url("/mod/theme_bevolkingszorg/graphics/elgg-widget-head-bg-blue.png");
		}
		.elgg-widget-edit,
		.elgg-widget-content {
			border-color: <?php echo COLOR_BLUE; ?>;
		}
	</style>
	<?php 
	echo "</div>";
} else {

?>
<style type="text/css">
	.elgg-module-widget > .elgg-head {
		background-color: <?php echo COLOR_BLUE; ?>;
		background-image: url("/mod/theme_bevolkingszorg/graphics/elgg-widget-head-bg-blue.png");
	}
	.elgg-widget-edit,
	.elgg-widget-content {
		border-color: <?php echo COLOR_BLUE; ?>;
	}
</style>
<div class="groups-profile clearfix elgg-image-block">
	<div class="elgg-image">
		<div class="groups-profile-icon">
			<?php echo elgg_view_entity_icon($group, 'large', array('href' => '')); ?>
		</div>
		<div class="groups-stats">
			<p>
				<b><?php echo elgg_echo("groups:owner"); ?>: </b>
				<?php
					echo elgg_view('output/url', array(
						'text' => $owner->name,
						'value' => $owner->getURL(),
						'is_trusted' => true,
					));
				?>
			</p>
			<p>
			<?php
				echo elgg_echo('groups:members') . ": " . $group->getMembers(0, 0, TRUE);
			?>
			</p>
		</div>
	</div>

	<div class="groups-profile-fields elgg-body">
		<?php
			echo elgg_view('groups/profile/fields', $vars);
		?>
	</div>
</div>
<?php
}