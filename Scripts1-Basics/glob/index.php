<?php

include("GlobClass.php");
$class = new GlobClass();


	/*
	*	= = = = = = = = = = = = = = = = = = = = = = =
	*	Get all files in all user's TN folders
	*	= = = = = = = = = = = = = = = = = = = = = = =
	*/

echo '<h2>Getting all files in all users TN folder</h2>';

// Regular glob() way
echo '<b>Glob way:</b> <br />';
$pattern = 'userImages/*/TN/*';
foreach(glob($pattern) as $file)
{
	
	echo "Filename: " . $file . "<br />";
	
}

// GlobClass way
echo '<b>GlobClass way:</b> <br />';
$pattern = 'userImages/*/TN/';
$class->addPattern($pattern);
foreach($class->getFiles() as $file)
{
	
	echo "Filename: " . $file . "<br />";
	
}

	/*
	*	= = = = = = = = = = = = = = = = = = = = = = =
	*	Get all files in all user's TN folders that
	*	ends with .jpg or .gif
	*	= = = = = = = = = = = = = = = = = = = = = = =
	*/

echo '<h2>Getting all files in all users TN folder that ends with .jpg or .gif</h2>';
$pattern = 'userImages/*/TN/';

// Regular glob() way
echo '<b>Glob way:</b> <br />';
foreach(glob($pattern . '{*.jpg,*.gif}', GLOB_BRACE) as $image) 
{
	
	echo "Filename: " . $image . "<br />";
	
}

// GlobClass way
echo '<b>GlobClass way:</b> <br />';
$class->addPattern($pattern);
$class->addFilters('*.jpg', '*.gif'); // <- addFilters supports unlimited arguments
$class->addFlags(GLOB_BRACE);         // <- addFlags   supports unlimited arguments

// You can also link all of these like so:
// $class->addPattern($pattern)->addFilters('*.jpg', '*.gif')->addFlags(GLOB_BRACE);
// Or add them 1 at a time:
// $class->addPattern($pattern)->addFilter('*.jpg')->addFilter('*.gif')->addFlag(GLOB_BRACE);

foreach($class->getFiles() as $image)
{
	
	echo "Filename: " . $image . "<br />";
	
}


	/*
	*	= = = = = = = = = = = = = = = = = = = = = = =
	*	Get all files in user "username1" and 
	*	"username2" TN folders that ends with .jpg 
	*	or .gif
	*	= = = = = = = = = = = = = = = = = = = = = = =
	*/

echo '<h2>Getting all files in "username1" and "username2" TN folders that ends with .jpg or .gif</h2>';

// Regular glob() way
echo '<b>Glob way:</b> <br />';
$globpattern = '{userImages/username1/TN/{*.jpg,*.gif},userImages/username2/TN/{*.jpg,*.gif}}';
foreach(glob($globpattern, GLOB_BRACE) as $image)
{
	
	echo "Filename: " . $image . "<br />";
	
}

// GlobClass way
echo '<b>GlobClass way:</b> <br />';
// I'm using sprintf to in an easier way get the paths I want, then split the result via "," and so get 2 entries
// in the $pattern which will be an array since I have 2 paths in my sprintf.
// You can read about sprintf here: http://se.php.net/manual/en/function.sprintf.php
$pattern = split(',', sprintf('%1$s/%3$s/%2$s/,%1$s/%4$s/%2$s/', "userImages", "TN", "username1", "username2"));


$class->addPatterns($pattern[0], $pattern[1]); 	// <- addPatterns supports unlimited arguments
$class->addFilters('*.jpg', '*.gif'); 			// <- addFilters supports unlimited arguments
$class->addFlags(GLOB_BRACE);         			// <- addFlags supports unlimited arguments

// You can also link all of these like so:
// $class->addPatterns($pattern[0], $pattern[1])->addFilters('*.jpg', '*.gif')->addFlags(GLOB_BRACE);
// Or add them 1 at a time:
// $class->addPattern($pattern[0])->addPattern($pattern[1])->addFilter('*.jpg')->addFilter('*.gif')->addFlag(GLOB_BRACE);

foreach($class->getFiles() as $image)
{
	
	echo "Filename: " . $image . "<br />";
	
}


	/*
	*	= = = = = = = = = = = = = = = = = = = = = = =
	*	Getting an error
	*	Only GlobClass sends you a nice error
	*	glob() doesn't do this even with GLOB_ERR on
	*	= = = = = = = = = = = = = = = = = = = = = = =
	*/

echo '<h2>Getting an error</h2>';
$pattern = 'userImages/*/TN/';

// Regular glob() way
echo '<b>Glob way:</b> <br />';
// Here's the error!						 v
foreach(glob($pattern . '{*.jpg,*.gif}', GLOB_BRCE) as $image)
{
	
	echo "Filename: " . $image . "<br />";
	
}

// GlobClass way
echo '<b>GlobClass way:</b> <br />';
$class->addPattern($pattern)->addFilters('*.jpg', '*.gif');
// Here's the error! v
$class->addFlag(GLOB_BRCE);

foreach($class->getFiles() as $image)
{
	
	echo "Filename: " . $image . "<br />";
	
}