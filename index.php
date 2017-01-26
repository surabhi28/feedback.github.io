<!DOCTYPE html>
<html>

<head>
    <title>IIPS Feedback</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="js/common.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">

    <script> 
    $(document).ready(function(){
    
        $('h1').animate({fontSize: '4em'}, "slow");
        
        $("#course").change(function(){
     var selectedVal = $(this).val();

    if(selectedVal == "B.Com")
    {
     $(".x").hide();
     $(".y").show();
    }
    else
    {
      $(".y , .x").show();
    }
    
  });
       
   
     });
</script> 



</head>

<body>
<h1 style="margin-top:130px; font-family:cursive; color:#663300;"><b>FEEDBACK SYSTEM</b></h1>
</br>
</br>
</br>

<div class="container"  style="text-align: center";>
  
  <form class="form-inline">
    <div class="form-group">
      <label for="Enrollment No.">Enrollment No:</label>
      <input type="text" class="form-control" id="enroll_no" placeholder="Enter Enrollment No">
    </div>

    <div class="form-group ">
       <div class="dropdown">
       <select class="btn dropdown-toggle" data-toggle="dropdown" id="course">
    <option selected disabled>COURSE</option>
    <option value="M.TECH">M.Tech</option>
    <option value="MCA">MCA</option>
    <option value="MBA(MS)">MBA(MS)</option>
    <option value="MBA(TA)">MBA(TA)</option>
    <option value="MBA(APR)">MBA(APR)</option>
    <option value="B.Com">B.Com</option>
    </select>
  </div>
    </div>

    <div class="form-group">
     <div class="dropdown">
  <select class="btn dropdown-toggle" data-toggle="dropdown" id="sem">
  <option selected disabled>SELECT SEMESTER</option>  
  <option class="y">FIRST</option>
  <option class="y">SECOND</option>
  <option class="y">THIRD</option>
  <option class="y">FOURTH</option>
  <option class="y">FIFTH</option>
  <option class="y">SIXTH</option>
  <option class="x">SEVENTH</option>
  <option class="x">EIGHTH</option>
  <option class="x">NINTH</option>
  <option class="x">TENTH</option>
  <option class="x">ELEVENTH</option>
  <option class="x">TWELFTH</option>
</select> 
</div>
    </div>
  
  </br>
  </br>
  <button type="submit" class="btn btn-submit" style="background-color:#663300; color:white;">Submit</button>
</form>
</div>

</body>
</html> 