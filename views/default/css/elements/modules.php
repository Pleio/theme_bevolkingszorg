<?php 

$graphics = elgg_get_site_url() . 'mod/theme_bevolkingszorg/graphics/';

?>

#elgg-widget-col-1 .elgg-module-widget .elgg-head
{
	background-color: <?php echo COLOR_BLUE; ?>;
	background-image: url(<?php echo $graphics; ?>elgg-widget-head-bg-blue.png);
}

#elgg-widget-col-1 .elgg-widget-content
{
	border: 1px solid <?php echo COLOR_BLUE; ?>;
}

#elgg-widget-col-1 .elgg-widget-edit a
{
	color: <?php echo COLOR_BLUE; ?>;
}

#elgg-widget-col-1 .elgg-widget-content a,
#elgg-widget-col-1 .elgg-widget-content label
{
	color: <?php echo COLOR_BLUE; ?>;
}

.elgg-widget-instance-index_login .elgg-widget-content a,
.elgg-widget-instance-index_login .elgg-widget-content label
{
	color: #FFFFFF !important;
	margin: 0;
}

.elgg-widget-instance-index_login .elgg-widget-content
{
	background-color: <?php echo COLOR_BLUE; ?>;
	height: 255px;
	color: #FFFFFF;
}

.elgg-widget-content, .elgg-widget-edit
{
	border: 1px solid <?php echo COLOR_ORANGE; ?>;
}

#elgg-widget-col-1 .elgg-widget-content, #elgg-widget-col-1 .elgg-widget-edit
{
	border: 1px solid <?php echo COLOR_BLUE; ?>;
}

.elgg-widget-instance-index_login .elgg-widget-content > *
{
	font-size: 11px;
	color: #FFFFFF !important;
}

.elgg-widget-instance-index_login .elgg-head
{
	background-color: <?php echo COLOR_BLUE; ?> !important;
	background-image: url(<?php echo $graphics; ?>elgg-widget-head-bg-blue.png) !important;
}

/* ***************************************
	Modules
*************************************** */
.elgg-module {
	overflow: hidden;
	margin-bottom: 20px;
}

/* Aside */
.elgg-module-aside .elgg-head {
	border-bottom: 1px solid #CCC;
	
	margin-bottom: 5px;
	padding-bottom: 5px;
}

/* Info */
.elgg-module-info > .elgg-head {
	background: #e4e4e4;
	padding: 5px;
	margin-bottom: 10px;
	
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
}
.elgg-module-info > .elgg-head * {
	color: #333;
}

/* Popup */
.elgg-module-popup {
	background-color: white;
	border: 1px solid #ccc;
	
	z-index: 9999;
	margin-bottom: 0;
	padding: 5px;
	-webkit-border-radius: 6px;
	-moz-border-radius: 6px;
	border-radius: 6px;
	
	-webkit-box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.5);
	-moz-box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.5);
	box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.5);
}
.elgg-module-popup > .elgg-head {
	margin-bottom: 5px;
}
.elgg-module-popup > .elgg-head * {
	color: #0054A7;
}

/* Dropdown */
.elgg-module-dropdown {
	background-color:white;
	border:5px solid #CCC;
	
	-webkit-border-radius: 5px 0 5px 5px;
	-moz-border-radius: 5px 0 5px 5px;
	border-radius: 5px 0 5px 5px;
	
	display:none;
	
	width: 210px;
	padding: 12px;
	margin-right: 0px;
	z-index:100;
	
	-webkit-box-shadow: 0 3px 3px rgba(0, 0, 0, 0.45);
	-moz-box-shadow: 0 3px 3px rgba(0, 0, 0, 0.45);
	box-shadow: 0 3px 3px rgba(0, 0, 0, 0.45);
	
	position:absolute;
	right: 0px;
	top: 100%;
}

/* Featured */
.elgg-module-featured {
	border: 1px solid #4690D6;
	
	-webkit-border-radius: 6px;
	-moz-border-radius: 6px;
	border-radius: 6px;
}
.elgg-module-featured > .elgg-head {
	padding: 5px;
	background-color: #4690D6;
}
.elgg-module-featured > .elgg-head * {
	color: white;
}
.elgg-module-featured > .elgg-body {
	padding: 10px;
}

/* ***************************************
	Widgets
*************************************** */
.elgg-widgets {
	float: right;
	min-height: 30px;
}
.elgg-widget-add-control {
	text-align: right;
	margin: 5px 0px 15px;
}
.elgg-widgets-add-panel {
	padding: 10px;
	margin: 0 5px 15px;
	background: #dedede;
	border: 2px solid #ccc;
}
<?php //@todo location-dependent style: make an extension of elgg-gallery ?>
.elgg-widgets-add-panel li {
	float: left;
	margin: 2px 10px;
	width: 200px;
	padding: 4px;
	background-color: #ccc;
	border: 2px solid #b0b0b0;
	font-weight: bold;
}
.elgg-widgets-add-panel li a {
	display: block;
}
.elgg-widgets-add-panel .elgg-state-available {
	color: #333;
	cursor: pointer;
}
.elgg-widgets-add-panel .elgg-state-available:hover {
	background-color: #bcbcbc;
}
.elgg-widgets-add-panel .elgg-state-unavailable {
	color: #888;
}

.elgg-module-widget {
	/*background-color: <?php echo COLOR_ORANGE; ?>;*/
	padding: 1px;
	margin: 0 0px 15px;
	position: relative;
}
.elgg-module-widget:hover {
	/*background-color: #ccc;*/
}
.elgg-module-widget > .elgg-head {
	background-color: <?php echo COLOR_ORANGE; ?>;
	
    background-image: url(<?php echo $graphics;?>elgg-widget-head-bg.png);
    background-repeat: no-repeat;
    background-position: 0 0;
    
	height: 24px;
	overflow: hidden;
}

.elgg-module-widget > .elgg-head h3,
.elgg-module-widget > .elgg-head h3 a {
	color: #FFFFFF;
	font-size: 12px;
    font-weight: bold;
}
.elgg-module-widget > .elgg-head h3 {
	float: right;
	padding: 4px 25px 0 5px;
}
.elgg-module-widget.elgg-state-draggable .elgg-widget-handle {
	cursor: move;
}
a.elgg-widget-collapse-button {
	/*color: #c5c5c5;*/
	color: #ffffff;
}
a.elgg-widget-collapse-button:hover,
a.elgg-widget-collapsed:hover {
	text-decoration: none;
}
a.elgg-widget-collapse-button:before {
	content: "\25BC";
}
a.elgg-widget-collapsed:before {
	content: "\25BA";
}
.elgg-module-widget > .elgg-body {
	background-color: white;
	width: 100%;
	overflow: hidden;
	/*border-top: 1px solid <?php echo COLOR_LIGHT_ORANGE;?>;*/
}
.elgg-widget-edit {
	display: none;
	padding: 10px;
	border-bottom: 2px solid #dedede;
	background-color: #f9f9f9;
}
.elgg-widget-content {
	padding: 10px;
	border: 1px <?php echo COLOR_ORANGE; ?> solid;
	font-size: 11px;
}
.elgg-widget-placeholder {
	border: 2px dashed #dedede;
	margin-bottom: 15px;
}

/* customs */
.elgg-module-widget.widget_manager_disable_widget_content_style .elgg-widget-content {
	border: none !important;
}