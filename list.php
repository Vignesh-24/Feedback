<?php
require 'dbconnect.php';
require 'fpdf.php';
class list1 extends FPDF
{
    function content($scon)
    {
         $this->setFont('Arial','B',16);
        $this->cell(0,10,'II Semester',0,1,'C');
                $this->setFont('Arial','B',12);
             $this->cell(27,10,'Staff Depart',1,0,'L');
        $this->cell(15,10,'StaffID',1,0,'L');
        $this->cell(50,10,'Staff Name',1,0,'L');
        $this->cell(60,10,'Subject name',1,0,'L');
        $this->cell(30,10,'Handling Dept',1,0,'L');
        $this->cell(15,10,'Marks',1,1,'L');
        $this->setFont('Arial','',8);
            $res1=mysqli_query($scon,"select * from staffdetails where performance<75 and sem=2 and type='THEORY' and performance>0");
            while($row1=mysqli_fetch_array($res1))
            {
                $hdep=$row1['dept'];
                $staffid=$row1['staffID'];
                $per=$row1['performance'];
                $code=$row1['subcode'];
             $res2=mysqli_query($scon,"select staff_name,dept from admin where staff_id='$staffid'");
                $row2=mysqli_fetch_array($res2);
                $name=$row2['staff_name'];
                $dept=$row2['dept'];
                $res3=mysqli_query($scon,"select subname from subdetails where subcode='$code'");
                $row3=mysqli_fetch_array($res3);
                $subname=$row3['subname'];
                        
                   $this->cell(27,10,$dept,1,0,'L');
        $this->cell(15,10,$staffid,1,0,'L');
        $this->cell(50,10,$name,1,0,'L');
        $this->cell(60,10,$subname,1,0,'L');
        $this->cell(30,10,$hdep,1,0,'L');
        $this->cell(15,10,number_format($per,2),1,1,'L');
                
            }
    }
}
$page=new list1('P','mm','A4');
$page->SetLeftMargin(5);
$page->aliasNbPages();
          $page->Addpage();
         $page->content($scon);
$page->output();
