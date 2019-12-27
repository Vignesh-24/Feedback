<html>
    <script>
        var subvalues={
            2016:['A','B','C','D'],
            2017:['A','B','C']
        }
//        var subval={
//            2017:['select year','1','2','3','4'],
//            2018:['select year','1','2','3','4'],
//            2019:['select year','1','2','3','4'],
//        }
        var academyear; 
        var year;
        var batch;
        var sem;
//        var secoptions="";
//        var sec="D";
        function acyear(value)
        {
            
            academyear=value;
//             alert(academyear);
//             document.getElementById("batch").innerHTML="";
            
//            var yearoptions = "";
////             document.getElementById("sam").innerHTML =yearoptions; 
//            document.getElementById("year").innerHTML = yearoptions;
//            for (categoryId in subval[academyear]) {
//                yearoptions += "<option>" + subval[academyear][categoryId] + "</option>";
//                    }
//                        document.getElementById("year").innerHTML = yearoptions;
        }

        function yearfn(value)
        {
            year=value;
//            alert(value);
            if(academyear=="2019")
              {
               if(year=="1")
                   {
                   batch="2017";
                       var secoptions = "";
            for (categoryId in subvalues[batch]) {
                secoptions += "<option>" + subvalues[batch][categoryId] + "</option>";
                    }
                       var semval="1";
                       var semval1="2";
                        document.getElementById("sec").innerHTML = secoptions;
                       var semOptions = "";
                semOptions += "<option>" + semval + "</option>";
                semOptions += "<option>" + semval1 + "</option>";
            document.getElementById("sem").innerHTML = semOptions;
                        document.getElementById("sec").innerHTML = secoptions;
                   }
                if(year=="2")
                   {
                   batch="2017";
                       var secoptions = "";
            for (categoryId in subvalues[batch]) {
                secoptions += "<option>" + subvalues[batch][categoryId] + "</option>";
                    }
                       var semval="3";
                       var semval1="4";
                        document.getElementById("sec").innerHTML = secoptions;
                       var semOptions = "";
                semOptions += "<option>" + semval + "</option>";
                semOptions += "<option>" + semval1 + "</option>";
            document.getElementById("sem").innerHTML = semOptions;
                        document.getElementById("sec").innerHTML = secoptions;
                   }
                if(year=="3")
                   {
                   batch="2017";
                       var secoptions = "";
            for (categoryId in subvalues[batch]) {
                secoptions += "<option>" + subvalues[batch][categoryId] + "</option>";
                    }
                       var semval="5";
                       var semval1="6";
                        document.getElementById("sec").innerHTML = secoptions;
                       var semOptions = "";
                semOptions += "<option>" + semval + "</option>";
                semOptions += "<option>" + semval1 + "</option>";
            document.getElementById("sem").innerHTML = semOptions;
                        document.getElementById("sec").innerHTML = secoptions;
                   }
                if(year=="4")
                   {
                   batch="2016";
                        var secoptions = "";
            for (categoryId in subvalues[batch]) {
                secoptions += "<option>" + subvalues[batch][categoryId] + "</option>";
                    }
                       var semval="7";
                       var semval1="8";
                        document.getElementById("sec").innerHTML = secoptions;
                       var semOptions = "";
                semOptions += "<option>" + semval + "</option>";
                semOptions += "<option>" + semval1 + "</option>";
            document.getElementById("sem").innerHTML = semOptions;
                        document.getElementById("sec").innerHTML = secoptions;
                    }
               }
            
             var catOptions = "";
                catOptions += "<option>" + batch + "</option>";
            document.getElementById("batch").innerHTML = catOptions;
        }
//        function batfn(value)
//        {
//            
//        
    </script>
<body>
<form method="post" action="class1.php">
    <div align="center">
    <img src="college.jpg" width="1000px" height="140px"></div>
      <a href="open.php" style="float:right; text-decoration:none; font-size:20px;">Home</a><br>
<fieldset>
    <legend style="text-align:center; margin-left:100px; font-size:30px;">CLASS DETAILS</legend>
    <div align="center">
        <br><br>
        <strong>Academic Year</strong>
   <select name="acayear" id="acayear" onChange="acyear(this.value);">
    <option value="" disabled selected>Select Academic Year</option>
    <option value="2019">2019</option>
    </select><br><br>
        <strong>Year</strong>
    <select name="year" id="year" onChange="yearfn(this.value);">
    <option value="" disabled selected>Select Year</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
</select><br><br>
        <strong>Semester</strong>
           <select name="sem" id="sem" onChange="semfn(this.value);">
    <option value="" disabled selected>Select semester</option>
</select><br><br>
        <strong>Batch</strong>
    <select name="batch" id="batch" onChange="batfn(this.value);">
    <option value="" disabled selected>Select Batch</option>
</select><br><br>
        <strong>Section</strong>
<select name="sec" id="sec">
     <option value="sec" disabled selected>Select Section</option>
    </select><br><br>
        <strong>Type</strong>
        <select name="type" id="type">
     <option value="theory">Theory</option>
      <option value="lab" >Practicals</option>
    </select><br><br>

        <strong>Department</strong>
<select name="dept" id="dept">
    <option value="" disabled selected>Select Department</option>
    <option value="CSE">CSE</option>
    <option value="MECH">MECH</option>
    <option value="ECE">ECE</option>
    <option value="EEE">EEE</option>
    <option value="IT">IT</option>
    <option value="CHEMICAL">CHEM</option>
    <option value="CIVIL">CIVIL</option>
    <option value="ICE">ICE</option>
    <option value="EIE">EIE</option>
    <option value="BIO">BIOTECH</option>
<option value="M.C.A">M.C.A</option>
<option value="M.B.A">M.B.A</option>
<option value='CI'>CI</option>
<option value='PS'>PS</option>
<option value='SE'>SE</option>
<option value='CS'>CS</option>
<option value='ME'>ME</option>
<option value='PE'>PE</option>
<option value='AE'>AE</option>
        <option value='MBA-INT'>MBA-INT</option>
        </select>
        <br>
        <br>
        <br>
        <br>
    <input type="submit" name="submit"><br><br>
        </div>
</fieldset>
</form>
</body>
</html>
