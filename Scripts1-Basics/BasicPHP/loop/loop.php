<html>
	<head>
			<title><?php echo "Printing Numbers"?></title>
	</head>
<body>
	<?php
		//type casting string to an interger (int)
		$countTo =(int)$_REQUEST['countTo'];
		$initNum = 1;
		
		
		//while looping
		while($initNum <=$countTo)
		{
			if($initNum % 2 !=0)
			{
				echo $initNum, "," ;
			}
			else if ($initNum >=1000)
			{
				break;
				echo "Limit has been reached";
			}
			else
			{
				$initNum++;
				continue;
			}
			$initNum++;
		}
		echo "<br /><br />";
		
		
		
		//fibonacci sequence
		$maxFib = $_REQUEST['fibonacci'];
		$firSeqNum =0;
		$secSeqNum =1;
		
		for ($i = 0; $i<$maxFib; $i++)
		{
			echo $firSeqNum=$firSeqNum,",";
			$sum = $firSeqNum+$secSeqNum;
			$firSeqNum = $secSeqNum;
			$secSeqNum = $sum;
			
		}
	
	?>
		
</body>
</html>