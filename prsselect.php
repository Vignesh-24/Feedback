<?php
require "dbconnect.php";
if(isset($_POST['submit'])){
$subcode=$_POST['subcode'];
$sec=$_POST['sec'];
$staff=$_POST['staff'];
$batch=$_POST['batch'];
$type=$_POST['type'];
$query1="update theory set t1=FLOOR(RAND()*(6-3)+3),t2=FLOOR(RAND()*(6-3)+3),t3=FLOOR(RAND()*(6-3)+3),t4=FLOOR(RAND()*(6-3)+3),t5=FLOOR(RAND()*(6-3)+3),t6=FLOOR(RAND()*(6-3)+3),t7=FLOOR(RAND()*(6-3)+3),t8=FLOOR(RAND()*(6-3)+3),t9=FLOOR(RAND()*(6-3)+3),t10=FLOOR(RAND()*(6-3)+3),t11=FLOOR(RAND()*(6-3)+3),t12=FLOOR(RAND()*(6-3)+3),t13=FLOOR(RAND()*(6-3)+3),t14=FLOOR(RAND()*(6-3)+3),t15=FLOOR(RAND()*(6-3)+3),t16=FLOOR(RAND()*(6-3)+3),t17=FLOOR(RAND()*(6-3)+3),t18=FLOOR(RAND()*(6-3)+3),t19=FLOOR(RAND()*(6-3)+3),t20=FLOOR(RAND()*(6-3)+3) where sub_code='$subcode' AND staff_id='$staff' AND section='$sec' AND batch='$batch' 
";
$query2="update lab set l1=FLOOR(RAND()*(6-3)+3),l2=FLOOR(RAND()*(6-3)+3),l3=FLOOR(RAND()*(6-3)+3),l4=FLOOR(RAND()*(6-3)+3),l5=FLOOR(RAND()*(6-3)+3),l6=FLOOR(RAND()*(6-3)+3),l7=FLOOR(RAND()*(6-3)+3),l8=FLOOR(RAND()*(6-3)+3),l9=FLOOR(RAND()*(6-3)+3),l10=FLOOR(RAND()*(6-3)+3) where sub_code='$subcode' AND staff_id='$staff' AND section='$sec' AND batch='$batch'
";
if($type=='theory')
    mysqli_query($scon,$query1);
else
    mysqli_query($scon,$query2);}
?>
<html>
    <body background="logo.png"/> 
    <form action="prsselect.php" method="post">
        <div style="color:white">
    Staff   :<input type="text" name="staff">
    Subcode :<input type="text" name="subcode">
    Sec     :<input type="text" name="sec">
    Batch   :<input type="text" name="batch">
    Type    :<input type="text" name="type" >
    <input type="submit" name="submit">
            </div>
    </form>
        </html>