<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Live Ajax Username Availability Check with PHP | 91 Web Lessons</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<script type="text/javascript" src="js/jquery-1.4.1.min.js"></script>
<script type="text/javascript">
$(function()
{
  $('.username').keyup(function()
  {
  var username=$(this).val();
  username=trim(username);
  if(username!=''){
  $('.check').show();
  $('.check').fadeIn(400).html('<img src="image/ajax-loading.gif" /> ');

  var dataString = 'username='+ username;
  $.ajax({
          type: "POST",
          url: "checkuser.php",
          data: dataString,
          cache: false,
          success: function(result){
               var result=trim(result);
               if(result==''){
                       $('.check').html(username+' Avaliable');
                       $('#submit').attr('disabled', '');
                       $('#submit').attr('value', 'Active');
                       $(".username").removeClass("red");
                       $(".username").addClass("white");
               }else{
                       $('.check').html(username+' '+result);
                       $('#submit').attr('disabled', 'disabled');
                       $('#submit').attr('value', 'Deactive');
                       $(".username").removeClass("white");
                       $(".username").addClass("red");
               }
          }
      });
   }else{
       $('.check').html('');
       $('#submit').attr('disabled', 'disabled');
       $('#submit').attr('value', 'Deactive');
   }
  });
});

function trim(str){
     var str=str.replace(/^\s+|\s+$/,'');
     return str;
}
</script>
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
         <div class="tutorialTitle"><h1>Live Ajax Username Availability Check with PHP</h1></div>
         <div class="tutorialLink"><a href="http://www.91weblessons.com/live-username-availability-check-with-ajax-and-php" title="Live Ajax Username Availability Check with PHP"><h1>Tutorial Link</h1></a></div>

    </div>

    <div id="wrapper">
         <div id="frmBox">
             <div class="try_option">Check with admin</div><br/>
             Username:- <input type="text" name="username" class="username" autocomplete="off">
             <span class="check" style="color:red;" ></span> <br/><br/>
             <input type="button" name="submit" id="submit" value="Deactive" disabled="disabled">
         </div>
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
