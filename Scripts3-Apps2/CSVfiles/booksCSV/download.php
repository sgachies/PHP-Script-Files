<?php
include("includes/connect.php");

//custom URL
//$ticker is same as $tablename
//$filename='books';

function createURL($ticker){

return "http://localhost/collections/CSVfiles/booksCSV/books.csv";
}
//download csv file and convert it to text file
function getCSVFile($url, $outputFile){
	$content = file_get_contents($url);
	$content = str_replace("rating,title,author,type,asin,tags,review","", $content);
	$content = trim($content);
	file_put_contents($outputFile, $content);
	
}

//Gets txt file and insert it to a database
//$tableName=$ticker symbol or compant name
function fileToDatabase($txtFile, $tableName){
	$file = fopen($txtFile,"r");
	while(!feof($file)){
		$line = fgets($file);
		$pieces = explode(",", $line);
		
		$rating = $pieces[0];
		$title = $pieces[1];
		$author = $pieces[2];
		$type = $pieces[3];
		$asin = $pieces[4];
		$tags = $pieces[5];
		$review = $pieces[6];
		
		
		$sql = "SELECT * FROM $tableName";
		$result = mysql_query($sql);
        //if there is no result then a table is created
		if(!$result){
			$sql2 = "CREATE TABLE $tableName (rating INT(10), PRIMARY KEY(rating), title VARCHAR(25), author VARCHAR(25), type VARCHAR(25), asin VARCHAR(25), tags VARCHAR(25), review VARCHAR(25))";
			mysql_query($sql2);
		}
		
		$sql3 = "INSERT INTO $tableName (rating,title,author,type,asin,tags,review) VALUES ('$rating','$title','$author','$type','$asin','$tags','$review')";
		mysql_query($sql3);
	}
	
	
	fclose($file);
}

function main(){
	$mainTickerFile = fopen("tickerMaster.txt","r");
	while(!feof($mainTickerFile)){
		$companyTicker = fgets($mainTickerFile);
		$companyTicker = trim($companyTicker);
		
		$fileURL = createURL($companyTicker);
		$companyTxtFile = "txtFiles/".$companyTicker.".txt";
		getCSVFile($fileURL, $companyTxtFile);
		fileToDatabase($companyTxtFile, $companyTicker);
	}
}

main();
?>