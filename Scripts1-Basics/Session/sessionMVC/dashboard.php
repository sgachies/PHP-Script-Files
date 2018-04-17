<?php

?>
	<div id="page-wrapper">
		<div class="page">
			<?=$_includes->showSidebar()?>
			<div id="page-content">
				<div id="page-header">
				<h1>User Home</h1>
				</div>
			</div>
			
	
			<?=$this->_printMessage()?>
			
			<!-- CONTENT STARTS HERE -->
			
			<div class="box">
				<form method="post" action="">
				
				<div class="row">
					<label>Full name:</label><input name="email" type="text" value="<?=$u['fullname']?>" />
				</div>
				
				<div class="row">
					<label>Email:</label><input name="email" type="text" value="<?=$u['email']?>" />
				</div>
				
				<div class="row">
					<label>Password:</label><input name="password" type="password" value="" />
				</div>
				
				<div class="row">
					<label>Phone:</label><input name="Phone" type="text" value="<?=$u['email']?>" />
				</div>
				
				
				
					
				</form>