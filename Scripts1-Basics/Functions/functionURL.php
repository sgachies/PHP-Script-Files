
<?php
error_reporting (E_ALL ^ E_NOTICE);
 ?>

<?php
 $submit=$_POST['submit'];

$pastday=strtolower(strip_tags($_POST['pastday']));
$pastmonth=strtolower(strip_tags($_POST['pastmonth']));
$pastyear=strtolower(strip_tags($_POST['pastyear']));
$ticker=strtoupper(strip_tags($_POST['ticker']));

function createURL($ticker,$pastday,$pastmonth,$pastyear){
	
	$currentMonth = date("n");
	$currentMonth = $currentMonth - 1;
	$currentDay = date("j");
	$currentYear = date("Y");
	return "http://ichart.finance.yahoo.com/table.csv?s=$ticker&d=$currentMonth&e=$currentDay&f=$currentYear&g=d&a=$pastmonth&b=$pastday&c=$pastyear&ignore=.csv";
}

echo createURL($ticker,$pastday,$pastmonth,$pastyear);
?>
<form action="functionURL.php" method="post" >
			<div class="well">
		  <h4>Please Specify timeline</h4>
		  
		  <div class="input-prepend input-append ">
			<span class="add-on span1">Day</span>
				<select class="span2" name="ticker">
				<option></option>
				<option>YHOO</option>
				<option>GE</option>
				<option>ADBE</option>
				<option>FE</option>
				<option>NTFLX</option>
				<option>GOOG</option>
				</select>
			</div>
			
		  <div class="input-prepend input-append ">
			<span class="add-on span1">Day</span>
				<select class="span2" name="pastday">

				<option>1</option><option>2</option><option>3</option><option>4</option><option>5</option>
				<option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option>
				<option>12</option><option>13</option><option>14</option><option>15</option><option>16</option><option>17</option>
				<option>18</option><option>19</option><option>20</option><option>21</option><option>22</option><option>23</option>
				<option>24</option><option>25</option><option>26</option><option>27</option><option>28</option><option>29</option>
			    <option>30</option><option>31</option>
				</select>
			</div>
			
		
			<div class="input-prepend input-append ">
			<span class="add-on span1">Month</span>
				<select class="span2" name="pastmonth">
				<option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option>
				<option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option>
				</select>
			</div>
			
			<div class="input-prepend input-append ">
			<span class="add-on span1 ">Year</span>
				<select class="span2" name="pastyear">
				<option>2012</option><option>2011</option><option>2010</option><option>2009</option><option>2008</option><option>2007</option>
				<option>2006</option><option>2005</option><option>2004</option><option>2003</option><option>2002</option><option>2001</option>
<option>2000</option>
				</select>
			</div>
			
			<br>
			
			<div class="control-group">
			<div class="controls">
			<button class="btn btn-primary" name="submit" id="submit" value="submit"><i class="icon-hand-up" ></i>Submit</button>
			</div>
			</div>
		  </div>
		  
		    
		
</form>