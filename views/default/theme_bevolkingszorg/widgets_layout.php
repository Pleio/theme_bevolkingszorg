<?php 
	// set custom index width on widgets
	if(elgg_in_context("index")){
?>
<style type="text/css">
	#elgg-widget-col-1 {
	    width: 230px;
	}
	
	#elgg-widget-col-2 {
	    margin-right: 15px;
	    width: 365px;
	}
	
	#elgg-widget-col-3 {
	    margin-right: 15px;
	    width: 365px;
	}
</style>
<?php 
	}
