<?php
require 'dbconnect.php';
$res=mysqli_query($scon,"Select * from staffdetails where year=2019 and type='LAB' and sem=6 and batch=2017");
while($row1=mysqli_fetch_assoc($res))
{
    $sub=$row1['subcode'];
    $staff=$row1['staffID'];
    $sec=$row1['sec'];
    $dep=$row1['dept'];
    $res1=mysqli_query($scon,"select COUNT(l1),AVG(l1),AVG(l2),AVG(l3),AVG(l4),AVG(l5),AVG(l6),AVG(l7),AVG(l8),AVG(l9),AVG(l10) from lab where sub_code='$sub' and staff_id='$staff' and section='$sec' and (dept='$dep' or dept='1')");
    
    $row=mysqli_fetch_array($res1);
    $percent=($row['AVG(l1)']+$row['AVG(l2)']+$row['AVG(l3)']+$row['AVG(l4)']+$row['AVG(l5)']+$row['AVG(l6)']+$row['AVG(l7)']+$row['AVG(l8)']+$row['AVG(l9)']+$row['AVG(l10)'])*2;

    $upd=mysqli_query($scon,"update staffdetails set performance='$percent' where staffID='$staff' and subcode='$sub' and dept='$dep' and sec='$sec'");
}
?>