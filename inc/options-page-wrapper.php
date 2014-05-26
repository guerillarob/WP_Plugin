<div class="wrap">

	<div id="icon-options-general" class="icon32"></div>
	<h2>Raw Log Parser</h2>
	
	<div id="poststuff">
	
		<div id="post-body" class="metabox-holder columns-2">
		
			<!-- main content -->
			<div id="post-body-content">
				
				<div class="meta-box-sortables ui-sortable">
					
					<div class="postbox">
					
						<h3><span>Lets get started</span></h3>
						<div class="inside">
							<form method="post" action="">
							<select name="serv" id="">
								<option selected="selected" value="">Raw Log</option>
									<?php
									if ($handle = opendir('/var/www/html/wp-content/list')) {
									    while (false !== ($entry = readdir($handle))) {
									        if ($entry != "." && $entry != "..") {
									            //echo "\t<option >\n";
									            echo "<option value='$entry'>$entry</option>\n";

									        }
									    }
									    closedir($handle);
									}

									?>						    								    								
							</select>
							<p>
								<input class="button-primary" type="submit" name="Example" value="<?php _e( 'submit' ); ?>" /> 
							</p> 
							
							</form>	
						
						</div> <!-- .inside -->
							
					</div> <!-- .postbox -->
						<h1><p>
							<?php 
    							$serv=$_POST["serv"];
    							if (isset($_POST["serv"]) && !empty($_POST["serv"])) {
    							$homepage = file_get_contents("/var/www/html/wp-content/list/".$serv);
								echo $homepage;
								}else{  
    							echo "$serv";
								}
							?>
						<h1></p>
				</div> <!-- .meta-box-sortables .ui-sortable -->
				
			</div> <!-- post-body-content -->
			
			<!-- sidebar -->
			<div id="postbox-container-1" class="postbox-container">
				
				<div class="meta-box-sortables">
					
					<div class="postbox">
					
						<h3><span>Sidebar Content Header</span></h3>
						<div class="inside">
							
						</div> <!-- .inside -->
						
					</div> <!-- .postbox -->
					
				</div> <!-- .meta-box-sortables -->					
				   
			</div> <!-- #postbox-container-1 .postbox-container -->
			
		</div> <!-- #post-body .metabox-holder .columns-2 -->
		
		<br class="clear">
	</div> <!-- #poststuff -->
	
</div> <!-- .wrap -->

Read this tutorial for details.	

<hr />