<?php
	define("INSTALLMODE",true);
	include("../lib/startup.php");
	
	// check PHP version
	$versionOK = false;
	if (version_compare(PHP_VERSION, '5.0.0') >= 0) {
    	$versionOK = true;
    }
	
	// check mysql
	$mysqlOK = false;
	if (function_exists('mysql_connect')){
		$mysqlOK = true;
	}
	
	// check command
	$commandLineOK = false;
	exec(PHP_COMMAND . " --version", $output);
	if(preg_match("/PHP/",$output[0])){
		$commandLineOK = true;
	}
	
	include('../admin/header.php');
?>
	
	
			<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1>PushSrv Installer</h1>
					</div>
				</div>
				<div class="row-fluid">
				
										
							<div class="alert alert-warn">
								<strong>Required environment</strong> <br />
								<ul>
									<li> PHP 5.0 or higher </li>
									<li> MySQL 4.0 or higher</li>
									<li> Linux </li>
									<li> Permission to run command from PHP  </li>
									<li> Permission to run command from PHP  </li>									
								</ul>
							</div>




					<div class="span12">
						<div class="box">
							<div class="box-title">
								<h3><i class="icon-ok"></i> Checking...OK</h3>
							</div>
							<div class="box-content">
								<form action="#" method="POST" class='form-horizontal'>
									<div class="control-group">
										<label for="textfield" class="control-label">PHP version</label>
										<div class="controls">
											<?php if ($versionOK) { ?>
												<span class="label label-success">success</span>
											<?php } else { ?>
												<span class="label label-important">failed!</span>
												Please use PHP5.0 or higher.
											<?php } ?>
										</div>
									</div>


									<div class="control-group">
										<label for="textfield" class="control-label">MySQL Support</label>
										<div class="controls">
											<?php if ($mysqlOK) { ?>
												<span class="label label-success">success</span>
											<?php } else { ?>
												<span class="label label-important">failed!</span>
											<?php }Ê?>
										</div>
									</div>


									<div class="control-group">
										<label for="textfield" class="control-label">Permission</label>
										<div class="controls">
											<?php if ($commandLineOK) { ?>
												<span class="label label-success">success</span>
											<?php } else { ?>
												<span class="label label-important">failed!</span>
											<?php }Ê?>
										</div>
									</div>

								</form>
							</div>
						</div>
					</div>
					
					<div class="span12">
						<div class="box">
							<div class="box-title">
								<h3><i class=" icon-download-alt"></i> Please input database settings</h3>
							</div>
							<div class="box-content">
								<form action="#" method="POST" class='form-horizontal'>
									<div class="control-group">
										<label for="textfield" class="control-label">Host</label>
										<div class="controls">
											<input type="text" name="textfield" id="textfield" class="input-xlarge">
										</div>
									</div>


									<div class="control-group">
										<label for="textfield" class="control-label">Database name</label>
										<div class="controls">
											<input type="text" name="textfield" id="textfield" class="input-xlarge">
										</div>
									</div>


									<div class="control-group">
										<label for="textfield" class="control-label">Database user name</label>
										<div class="controls">
											<input type="text" name="textfield" id="textfield" class="input-xlarge">
										</div>
									</div>


									<div class="control-group">
										<label for="textfield" class="control-label">Password</label>
										<div class="controls">
											<input type="text" name="textfield" id="textfield" class="input-xlarge">
										</div>
									</div>



									<div class="control-group">
										<label for="textfield" class="control-label"></label>
										<div class="controls">
											<button type="submit" class="btn btn-primary">Create tables</button>
										</div>
									</div>


								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			
<?php include('../admin/footer.php') ?>