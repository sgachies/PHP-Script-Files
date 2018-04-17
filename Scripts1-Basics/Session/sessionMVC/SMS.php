<? $_permissions->_allowOnlyUsergroup(ADMIN)?>
<? $_includes->showHeader() ?>
<? $_includes->showNav() ?>
	<div id="page-wrapper">
		<div class="page">
			<? =$_includes->showSidebar()?>
			<div id="page-content">
				<div id="page-header">
					<h1>Dashboard</h1>
				</div>
				<? =$this->_printMessages() ?>
				
				<!-- CONTENT STARTS HERE -->
		<?php
				$types = $thid->_queryMulti(SELECT * FROM subscription_type);
				foreach($types as $type) : 
		?>
		
		<div class='box-header'><?=$type['name']?>
			<span class="fr"><a
				class='addNewLink dialog'
				href="message/addNew/<?=$type['id']?>/1">
			Add New <? =$type['name']?>Message</a></span>
			<span class='fr'><?=$this->_makeSelect("language","id","name","langauge_id")?>
			</div>
			<table id="<?=$type['name']?>Grid" class="grid" action="message/doList/<?=$type?>">
	
		
		
		
		
		
		
		?>