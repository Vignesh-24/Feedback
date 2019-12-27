<html>
    <style>
  
    table td{
  border: 3px solid black;
}
        table th{
  border: 3px solid black;
}

table {
  border-collapse: collapse;
  border-spacing: 10px;  
}      
    </style>
    <div align="center">
 <table>
    

    <?php
    $count=0;
    require 'dbconnect.php';
    $res=mysqli_query($scon,"select distinct dept as dep from staffdetails where subcode in(select subcode from subdetails where ugpg='UG')");
    while($row=mysqli_fetch_array($res))
    {
        $count1=0;
        $dept=$row['dep'];?>
        <tr><td colspan="12" height="50" align="center"><b><?php echo $dept;?></b></td></tr>
        <tr>
    <th>Batch</th>
    <th>Dept</th>
    <th>90-99</th>
    <th>80-89</th>
    <th>70-79</th>
    <th>60-69</th>
    <th>50-59</th>
    <th>40-49</th>
    <th>30-39</th>
    <th>20-29</th>
    <th>10-19</th>
    <th>Total Count</th>
    </tr>
     <?php
        $res1=mysqli_query($scon,"SELECT DISTINCT dept from admin where staff_id in (select staffID from staffdetails where dept='$dept' and batch=2016 and subcode IN (select subcode from subdetails where type='THEORY'))");
        $res3=mysqli_query($scon,"SELECT count(DISTINCT dept) as ctt from admin where staff_id in (select staffID from staffdetails where dept='$dept' and batch=2016 and subcode IN (select subcode from subdetails where type='THEORY'))");
        $roww=mysqli_fetch_array($res3);
        $deptcount=$roww['ctt'];?>
        <tr> 
        <td rowspan="<?php echo $deptcount ?>">2016</td>
        <?php while($row1=mysqli_fetch_assoc($res1))
        {
            $count++;
            $dept1=$row1['dept'];?>
            
            <td><?php echo $dept1; ?></td>
           <?php $percent=100;
            $count1=0;
            while($percent > 10)
            {
            $res2=mysqli_query($scon,"select count(*) as ct from staffdetails WHERE staffID in (SELECT DISTINCT staff_id from admin where dept='$dept1' and staff_id in (select staffID from staffdetails where dept='$dept')) and dept='$dept' and subcode IN (select subcode from subdetails where type='THEORY')and batch=2016 and performance < '$percent' and performance >='$percent'-10");
                $percent-=10;
               
                $row4=mysqli_fetch_array($res2);
                $c=$row4['ct']; $count1+=$c;?>
                <td><?php echo $c; ?></td>
            <?php } ?><td><?php echo $count1; ?></td>
           </tr>
       <?php } ?>
        <?php
        $res1=mysqli_query($scon,"SELECT DISTINCT dept from admin where staff_id in (select staffID from staffdetails where dept='$dept' and batch=2017 and subcode IN (select subcode from subdetails where type='THEORY'))");
        $res3=mysqli_query($scon,"SELECT count(DISTINCT dept) as ctt from admin where staff_id in (select staffID from staffdetails where dept='$dept' and batch=2017 and subcode IN (select subcode from subdetails where type='THEORY'))");
        $roww=mysqli_fetch_array($res3);
        $deptcount=$roww['ctt'];?>
        <tr> 
        <td rowspan="<?php echo $deptcount ?>">2017</td>
        <?php while($row1=mysqli_fetch_assoc($res1))
        {
            $count++;
            $dept1=$row1['dept'];?>
            
            <td><?php echo $dept1; ?></td>
           <?php $percent=100;
            $count1=0;
            while($percent > 10)
            {
            $res2=mysqli_query($scon,"select count(*) as ct from staffdetails WHERE staffID in (SELECT DISTINCT staff_id from admin where dept='$dept1' and staff_id in (select staffID from staffdetails where dept='$dept')) and dept='$dept' and subcode IN (select subcode from subdetails where type='THEORY')and batch=2017 and performance < '$percent' and performance >='$percent'-10");
                $percent-=10;
               
                $row4=mysqli_fetch_array($res2);
                $c=$row4['ct']; $count1+=$c;?>
                <td><?php echo $c; ?></td>
            <?php } ?><td><?php echo $count1; ?></td>
           </tr>
     
     
            
        





       <?php } ?>
        <?php
        $res1=mysqli_query($scon,"SELECT DISTINCT dept from admin where staff_id in (select staffID from staffdetails where dept='$dept' and batch=2018 and subcode IN (select subcode from subdetails where type='THEORY'))");
        $res3=mysqli_query($scon,"SELECT count(DISTINCT dept) as ctt from admin where staff_id in (select staffID from staffdetails where dept='$dept' and batch=2018 and subcode IN (select subcode from subdetails where type='THEORY'))");
        $roww=mysqli_fetch_array($res3);
        $deptcount=$roww['ctt'];?>
        <tr> 
            <td rowspan="<?php echo $deptcount ?>">2018</td>
        <?php while($row1=mysqli_fetch_assoc($res1))
        {
            $count++;
            $dept1=$row1['dept'];?>
            
            <td><?php echo $dept1; ?></td>
           <?php $percent=100;
            $count1=0;
            while($percent > 10)
            {
            $res2=mysqli_query($scon,"select count(*) as ct from staffdetails WHERE staffID in (SELECT DISTINCT staff_id from admin where dept='$dept1' and staff_id in (select staffID from staffdetails where dept='$dept')) and dept='$dept' and subcode IN (select subcode from subdetails where type='THEORY')and batch=2018 and performance < '$percent' and performance >='$percent'-10");
                $percent-=10;
               
                $row4=mysqli_fetch_array($res2);
                $c=$row4['ct']; $count1+=$c;?>
                <td><?php echo $c; ?></td>
            <?php } ?><td><?php echo $count1; ?></td>
           </tr>
     <?php 
            }?>
       <?php
        $res1=mysqli_query($scon,"SELECT DISTINCT dept from admin where staff_id in (select staffID from staffdetails where dept='$dept' and batch=2019 and subcode IN (select subcode from subdetails where type='THEORY'))");
        $res3=mysqli_query($scon,"SELECT count(DISTINCT dept) as ctt from admin where staff_id in (select staffID from staffdetails where dept='$dept' and batch=2019 and subcode IN (select subcode from subdetails where type='THEORY'))");
        $roww=mysqli_fetch_array($res3);
        $deptcount=$roww['ctt'];?>
        <tr> 
            <td rowspan="<?php echo $deptcount ?>">2019</td>
        <?php while($row1=mysqli_fetch_assoc($res1))
        {
            $count++;
            $dept1=$row1['dept'];?>
            
            <td><?php echo $dept1; ?></td>
           <?php $percent=100;
            $count1=0;
            while($percent > 10)
            {
            $res2=mysqli_query($scon,"select count(*) as ct from staffdetails WHERE staffID in (SELECT DISTINCT staff_id from admin where dept='$dept1' and staff_id in (select staffID from staffdetails where dept='$dept')) and dept='$dept' and subcode IN (select subcode from subdetails where type='THEORY')and batch=2019 and performance < '$percent' and performance >='$percent'-10");
                $percent-=10;
               
                $row4=mysqli_fetch_array($res2);
                $c=$row4['ct']; $count1+=$c;?>
                <td><?php echo $c; ?></td>
            <?php } ?><td><?php echo $count1; ?></td>
           </tr>
     <?php 
            }
     
        }
     ?>
     </table>
        </div>
</html>