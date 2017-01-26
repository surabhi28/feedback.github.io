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
       <select class="btn dropdown-toggle" data-toggle="dropdown">
    <option selected disabled>COURSE</option>
    <option>M.Tech</option>
    <option>MCA</option>
    <option>MBA(MS)</option>
    <option>MBA(TA)</option>
    <option>MBA(APR)</option>
    <option>B.Com</option>
    </select>
  </div>
    </div>

    <div class="form-group">
     <div class="dropdown">
  <select class="btn dropdown-toggle" data-toggle="dropdown">
  <option selected disabled>SELECT SEMESTER</option>  
  <option>FIRST</option>
  <option>SECOND</option>
  <option>THIRD</option>
  <option>FOURTH</option>
  <option>FIFTH</option>
  <option>SIXTH</option>
  <option>SEVENTH</option>
  <option>EIGHTH</option>
  <option>NINTH</option>
  <option>TENTH</option>
  <option>ELEVENTH</option>
  <option>TWELFTH</option>
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