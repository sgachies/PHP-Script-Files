<?php
if(isset($_POST['submit'])){
	include('inc/dbConnect.inc.php');
	
	/*CSV FILE Validation Start*/
	
	if (!empty($_FILES['excelFile']['name'])) {
		$errFlg=0;
		$errMsg='';
		$valid_document_formats = array("csv");  // Only JPG,PNG and DOC Document formate allowed in this script
		$valid_document_size=524288; // 512 KB

		$documentName = $_FILES['excelFile']['name'];    // Actual Document Name
		$documentSize = $_FILES['excelFile']['size'];    // Actual Document Size

		list($txt, $ext) = explode(".", $documentName);       // Get Actual Document Formate
		if (in_array($ext, $valid_document_formats)) {    // Check Document Formate
			if ($documentSize < $valid_document_size) {      // Check Document Size
				$new_doc_name = time() . "." . $ext;    // Document New Name
				$tmpDoc = $_FILES['excelFile']['tmp_name'];
			}else{
				$errMsg= "Document size max 512 KB";       // Error Message for max size
				$errFlg=1;
			}
		}else{
			$errMsg= "Invalid Document format";           // Error Message for Invalid format size4
			$errFlg=1;
		}
	} else{
		$errMsg= "Please select an Document";
		$errFlg=1;
	}
	/*CSV FILE Validation End*/
	
	
	
	/*CSV FILE Import Start*/
	if(!$errFlg){
		$uploadedDocPath='excel_file/';        // folder name  for document upload
		if(move_uploaded_file($tmpDoc, $uploadedDocPath.$new_doc_name)){
			if(($handle = fopen("excel_file/".$new_doc_name , "r")) !== FALSE) 
			{
				$fileAdded=true;
				while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) 
				{
					$num = count($data);
					$query="INSERT INTO csv_data(name,phone,city) values('".$data[0]."','".$data[1]."','".$data[2]."')";
					mysql_query($query);
				}
				fclose($handle);
			}
		}else{
			$errMsg= "Please Try after some time";
			$errFlg=1;
		}
	}
	/*CSV FILE Import End*/
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CSV Export Import with PHP and MySql | 91 Web Lessons</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>
<div id="container">
    <!--top section start-->
    <div id='top'>
         <a href="http://www.91weblessons.com" title="91 Web Lessons" target="blank">
             <img src="image/logo.png" alt="91 Web Lessons" title="91 Web Lessons" border="0"/>
         </a>
    </div>

    <div id='tutorialHead'>
         <div class="tutorialTitle"><h1>CSV Export Import with PHP and MySql</h1></div>
         <div class="tutorialLink"><a href="http://91weblessons.com/csv-export-import-with-php-and-mysql/" title="CSV Export Import with PHP and MySql"><h1>Tutorial Link</h1></a></div>

    </div>

    <div id="wrapper">
          <form method="post" id="frmCsvImport" name="frmCsvImport" enctype="multipart/form-data">
                <span id="responseMessage">
				<?php
				if(isset($errFlg)){
					echo '<h1>'.$errMsg.'</h1>';
				}
				?>
				</span><br/>
                <fieldset class="formClass" id="formClass">
                     	 <p>
                           <label>Document: </label>
      			   <input type="file" name="excelFile"><br/><br/>
      			   <span class="docFormate">Only CSV allowed with less than 512 KB size.</span>
	                </p>
	                <p>
                           <span id="submitBtn">
                               <input type="submit" name="submit" value="Submit" class="button marL114">
                               <input type="reset" name="reset" value="Reset" class="button">
                           </span>
                           <span id="flashShow"></span>
	                </p>
                </fieldset>
      	  </form>
		  <?php
		  if(isset($fileAdded)){
			$sql="select * from csv_data";
			$res=mysql_query($sql);
			$num=mysql_num_rows($res);
			if($num > 0){
				?>
				<table border='1' cellpadding="3" cellspacing="4" class="grayFont" align="center" width="30%">
					<tr><td colspan="3" align="right"><h1><a href="csv_export.php" class="grayFont">Export</a></h1></td></tr>
					<tr>
						<th>Name</th>
						<th>Phone</th>
						<th>City</th>
					</tr>
					<?php
					while($row=mysql_fetch_array($res)){
					?>
					<tr>
						<td><?php echo $row['name'];?></td>
						<td><?php echo $row['phone'];?></td>
						<td><?php echo $row['city'];?></td>
					</tr>
					<?php
					}
					?>
					
					
				</table>
				
				<?php
			}else{
				echo '<h2>No Data Found</h2>';
			}
		  }
		  ?>
    </div>

    <!--fotter section start-->
    <div id="fotter">
         <p>Copyright &copy; 2012 
              <a href="http://www.91weblessons.com" title="91 Web Lessons" target="blank">91 Web Lessons</a>. 
              All rights reserved.
         </p>
    </div>
</div>
</body>
</html>
