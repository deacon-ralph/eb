<?php

$text = "";

include("config.php");

if ($_GET['ref'] == "done") {
	
	$text .= "Thanks for using " . getName() . "'s email bomber!<br><br>";
	
}
	
?>

<br />
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="style.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><? echo getName(); ?>'s Email Bomber</title>



</head>

<body>
<center>
<table border="0" width="750">
<tr>
<td>
<div id="header"><table border="0" width="10"></table><h1 class="headerText" align="center" ><font face="Arial, Helvetica, sans-serif"><? echo getName(); ?>'s Email Bomber</font></h1></div>
</td>
</tr>
<tr>
<td><br />
<div id="body"><center><table border="0" width="10"></table><br /><br />
	<?php echo $text; ?>
	<FORM action="emailHandler.php" method="post">
    <table border="0"><tr><td align="right"><LABEL for="fromname">From Name <b>*</b> : </LABEL></td><td>
              <INPUT type="text" id="fromname" name="fromname" class="field" ></td></tr><tr><td align="right">
    <LABEL for="frommail">From E-mail <b>*</b> : </LABEL></td><td>
              <INPUT type="text" name="frommail" id="frommail" class="field" ></td></tr><tr><td align="right">
        <LABEL for="replyfrom">Reply To : </LABEL></td><td>
              <INPUT type="text" name="replyfrom" id="replyfrom" class="field" ></td></tr><tr><td align="right">
    <LABEL for="toemail">To E-mail <b>*</b> : </LABEL></td><td>
              <INPUT type="text" name="toemail" id="toemail" class="field" ></td></tr><tr><td align="right">
    <LABEL for="subject">Subject <b>*</b> : </LABEL></td><td>
              <INPUT type="text" name="subject" id="subject" class="field" ></td></tr><tr><td align="right">
    <LABEL for="cc">CC : </LABEL></td><td>
              <INPUT type="text" name="cc" id="cc" class="field" ></td></tr><tr><td align="right">
    <LABEL for="bcc">BCC : </LABEL></td><td>
              <INPUT type="text" name="bcc" id="bcc" class="field" ></td></tr><tr><td align="right">
              <LABEL for="bombBody">Body (Requires HTML) <b>*</b> : </LABEL></td><td>
              <Textarea rows="3" cols="20" id="bombBody" name="bombBody" class="bigfield"></Textarea></td></tr><tr><td align="right">
              <label for='amount'>Amount of emails to send (accepts numbers only) <b>*</b> :</label></td><td>
<input type="text" name="amount" name="amount" id="amount" class="field"></td></tr><tr><td align="right" colspan="2">
	<br /></td></tr><tr><td align="right">
    <INPUT type="submit" value="Send" class="btn" ></td><td align="left"><INPUT type="reset" class="btn" >
 </FORM>
</td></tr></table></center>

</div>
</td>
</tr>
<tr>
<td><br /><center>
<div id="footer"><table border="0" width="10"></table><font face="Arial, Helvetica, sans-serif"><? echo getName(); ?>'s Email Bomber | Created by SpeedyApoc | Copyright 2011</font></div></center>
</td>
</tr>
</table>
</center>


</body>
</html>