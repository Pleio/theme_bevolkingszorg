<?php
	$title = $vars["title"];
	$message = nl2br($vars["message"]);
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<base target="_blank" />
		
		<?php
			if(!empty($title)){
				echo "<title>" . $title . "</title>\n";
			}
		?>
	</head>
	<body>
		<style type="text/css">
			body {
				font: 12px/17px "Lucida Grande", Verdana, sans-serif;
				color: #333333;
			}
			
			a {
				color: <?php echo COLOR_BLUE; ?>;
			}
			
			#notification_container {
				width: 600px;
				margin: 0 auto;
			}
		
			#notification_header {
				text-align: left;
				padding: 0 0 10px;
			}
			
			#notification_header a {
				text-decoration: none;
				font-weight: bold;
				color: #0054A7;
				font-size: 18px;
			}
		
			#notification_wrapper {
				background: <?php echo COLOR_ORANGE; ?>;
				padding: 1px;
				position: relative;
			}
			
			#notification_wrapper img {
				position: absolute;
				top: 0px;
				left: 0px;
			}
			
			#notification_wrapper h2 {
				margin: 0;
				color: #FFFFFF;
				font-size: 16px;
				line-height: 35px;
				height: 35px;
				text-align: right;
				padding-right: 10px;
			}

			#notification_content p {
				margin: 0px;
			}
			
			#notification_content {
				background: #FFFFFF;
				padding: 10px;
			}
			
			#notification_footer {
				
				margin: 10px 0 0;
				background: #F4F5F7;
				padding: 10px;
				text-align: right;
				border-top: 1px solid #DEDEDE;
			}
			
			#notification_footer_logo {
				float: left;
			}
			
			#notification_footer_logo img {
				border: none;
			}
			
			.clearfloat {
				clear:both;
				height:0;
				font-size: 1px;
				line-height: 0px;
			}
			
		</style>
	
		<div id="notification_container">
			<div id="notification_header">
				<?php
					$logo_img = '<img src="' . $vars["url"] . 'mod/theme_bevolkingszorg/graphics/logo.png" />';
					$site_url = elgg_view("output/url", array("href" => $vars["config"]->site->url, "text" => $logo_img));
					echo $site_url;
				?>
			</div>
			<div id="notification_wrapper">
				<?php
				echo $head_img = '<img src="' . $vars["url"] . 'mod/theme_bevolkingszorg/graphics/elgg-site-menu-default-container-bg.png" />';
				
				if(!empty($title)) echo elgg_view_title($title); ?>
			
				<div id="notification_content">
					<?php echo $message; ?>
				</div>
			</div>
			
			<div id="notification_footer">
				<a href="http://www.elgg.org/" id="notification_footer_logo">
					<img src="<?php echo $vars["url"]; ?>_graphics/powered_by_elgg_badge_drk_bckgnd.gif" />
				</a>
				
				<?php
					if(elgg_is_logged_in()){
						$settings_url = $vars["url"] . "settings";
						if(elgg_is_active_plugin("notifications")){
							$settings_url = $vars["url"] . "notifications/personal";
						}
						echo elgg_echo("html_email_handler:notification:footer:settings", array("<a href='" . $settings_url . "'>", "</a>"));
					}
				?>
				<div class="clearfloat"></div>
			</div>
		</div>
	</body>
</html>