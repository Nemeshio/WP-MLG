<?php
if($_POST['console']=="clear"){
$fp = fopen('msg.list', 'w+');
$fp;
fclose($fp);
echo "Cleared!";
}
else if($_POST['console']!=""){
$msg = $_POST['console'];
$msg = eregi_replace("[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*","<a href=\"mailto:\\0\" target=_blank>\\0</a>",$msg);
$msg = eregi_replace("^http://([^ ,\r\n]*)","<a href='http://\\1' target=_blank>http://\\1</a>", $msg);
$msg = eregi_replace("([ \r\n])http://([^ ,\r\n]*)","\\1<a href='http://\\2' target=_blank>http://\\2</a>",$msg);
$msg = eregi_replace("([ \r\n])www\\.([^ ,\r\n]*)","\\1<a href='http://www.\\2'target=_blank>http://www.\\2</a>",$msg);
$msg = eregi_replace("^www\\.([^ ,\r\n]*)","<a href='http://www.\\1' target=_blank>http://www.\\1</a>",$msg);
//Смайлики
$msg = eregi_replace("-1-","<img src=smiles/1.gif>",$msg);
$msg = eregi_replace("-2-","<img src=smiles/2.gif>",$msg);
$msg = eregi_replace("-3-","<img src=smiles/3.gif>",$msg);
$msg = eregi_replace("-4-","<img src=smiles/4.gif>",$msg);
$msg = eregi_replace("-5-","<img src=smiles/5.gif>",$msg);
$msg = eregi_replace("-6-","<img src=smiles/6.gif>",$msg);
$msg = eregi_replace("-7-","<img src=smiles/7.gif>",$msg);
$msg = eregi_replace("-8-","<img src=smiles/8.gif>",$msg);
$msg = eregi_replace("-9-","<img src=smiles/9.gif>",$msg);
$msg = eregi_replace("-10-","<img src=smiles/10.gif>",$msg);
$msg = eregi_replace("-11-","<img src=smiles/11.gif>",$msg);
$msg = eregi_replace("-12-","<img src=smiles/12.gif>",$msg);
$msg = eregi_replace("-13-","<img src=smiles/13.gif>",$msg);
$msg = eregi_replace("-14-","<img src=smiles/14.gif>",$msg);
$msg = eregi_replace("-15-","<img src=smiles/15.gif>",$msg);
$msg = eregi_replace("-16-","<img src=smiles/16.gif>",$msg);
$msg = eregi_replace("-17-","<img src=smiles/17.gif>",$msg);
$msg = eregi_replace("-18-","<img src=smiles/18.gif>",$msg);
$fp = fopen('msg.list', 'a+');
$mytext = "<font color='red'><b>{SERVER} - </b></font><font color='yellow'>".$msg."</font><br>\n";
$send = fwrite($fp, $mytext);
$send;
fclose($fp);
echo "Message sended!";
}
?>
<?php 
session_start();
if(!isset($_SESSION['access']) || $_SESSION['access']!=true){
header("location:admin.php");}
else{ ?>
 <form method="POST">
 CONSOLE:
 <input name="console">
 <input type="submit" value="Send!"><br>
 Some commands:<br>
 clear - Clears chat
 </form>
<?php } ?>