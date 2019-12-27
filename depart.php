<html>
    <script>
        function prr()
        {
            window.print();
        }
    </script>
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
    <title>Report</title>
    <div align="center">
        <br>
        <h2>Report</h2><br><br>
    <table cellspacing="2px">
    <tr>
        <th>Department</th>
        <th>batch</th>
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
        require 'dbconnect.php';
        $res1=mysqli_query($scon,"select distinct dept from staffdetails");
        $count1=0;
            while($row=mysqli_fetch_assoc($res1))
            {
                $dept=$row['dept'];?>
        <tr>
            <td rowspan="5"><?php echo $dept;?></td>
            <tr>
                <td>2016</td>
            <?php 
            
                $count1=0;
                $percent=100;
                //echo $dept;echo "<br>";
                
            
                while($percent > 10){
            $res=mysqli_query($scon,"select count(*) as ct from staffdetails where dept='$dept'  and subcode in (select subcode from subdetails where type='THEORY') and batch=2016 and performance >= '$percent'-10 and performance < '$percent'");
                    $row5=mysqli_fetch_array($res);
                    $count=$row5['ct'];
                    $count1+=$count;
//                    echo $count;echo "<br>";
                    $percent-=10;
                        ?>
        <td><?php echo $count;?></td>
        
        <?php 
                    
                }?><td><?php echo $count1; ?></td></tr>
        <tr>
            <td>2017</td>
<!--                 <td>2017</td>-->
            <?php
                $count1=0;
                $percent=100;
                while($percent > 10){
            $res=mysqli_query($scon,"select count(*) as ct from staffdetails where dept='$dept' and subcode in (select subcode from subdetails where type='THEORY') and batch=2017 and performance >= '$percent'-10 and performance < '$percent'");
                    $row5=mysqli_fetch_array($res);
                    $count=$row5['ct'];
                    $count1+=$count;
                    //echo $count;echo "<br>";
                    $percent-=10;?>
                <td><?php echo $count;?></td>
        
        <?php 
                    
                }?><td><?php echo $count1; ?></td></tr><tr>
                 <td>2018</td>
            <?php
                $count1=0;
                  $percent=100;
                while($percent > 10){
            $res=mysqli_query($scon,"select count(*) as ct from staffdetails where dept='$dept' and subcode in (select subcode from subdetails where type='THEORY') and batch=2018 and performance >= '$percent'-10 and performance < '$percent'");
                    $row5=mysqli_fetch_array($res);
                    $count=$row5['ct'];
                    $count1+=$count;
                    //echo $count;echo "<br>";
                    $percent-=10;?>
                <td><?php echo $count;?></td>
        
        <?php 
                    
                }?><td><?php echo $count1; ?></td></tr>
        
        
        
        
        
        <tr>
                <td>2019</td>
            <?php 
            
                $count1=0;
                $percent=100;
                //echo $dept;echo "<br>";
                
            
                while($percent > 10){
            $res=mysqli_query($scon,"select count(*) as ct from staffdetails where dept='$dept'  and subcode in (select subcode from subdetails where type='THEORY') and batch=2019 and performance >= '$percent'-10 and performance < '$percent'");
                    $row5=mysqli_fetch_array($res);
                    $count=$row5['ct'];
                    $count1+=$count;
//                    echo $count;echo "<br>";
                    $percent-=10;
                        ?>
        <td><?php echo $count;?></td>
        
        <?php 
                    
                }?><td><?php echo $count1; ?></td></tr>
        
        
        
        
        
        
        
        </tr><?php
        }
        ?>
    </table><br>
    <button onclick="prr()">Save as PDF</button>
    </div>
</html>