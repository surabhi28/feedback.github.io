<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="shortcut icon" href="images/favicon.jpg">
    <title>Faculty Profile | International Institute of Professional Studies, Devi Ahilya Vishwavidhalay</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/newfile.css" rel="stylesheet">
	<link href="css/profile.css" rel="stylesheet">
	
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/sidebar-menu.css">
    <link href="yamm/yamm.css" rel="stylesheet">
    <link href="css/footer.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
  </head>
  <body>
<?php include 'header.php';?>
</br>
</br>
<div class="container">
  <div class="row">
    <div class="col-md-3" >
      <ul class="sidebar-menu">
      <li class="sidebar-header" style="background-color:#0b3262; border:1px solid black;"><b>FACULTY PROFILE</b></li>
        
      <li  style="border:1px solid black;">
        <a href="#" onclick="faculty('<?php echo 'computer_faculty';?>')"> <!--computer_faculty -->
          <i class="fa fa-laptop" ></i> <span>Computer Faculty</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu" style="overflow-y:scroll; overflow-x:hidden; height:285px; background-color:#0b3262">
          <li><a href="#" onclick="profile('<?php echo 'Ramesh_Thakur';?>')"><img src="./images/male.jpg" img src="./images/male.jpg" class="icon">Dr. Ramesh Thakur</a></li>
          <li><a href="#" onclick="profile('<?php echo 'Kirti_Mathur';?>')"><img src="./images/female.jpg" class="icon"></i>Dr. Kirti Mathur</a></li>
          <li><a href="#" onclick="profile('<?php echo 'Jugendra_Dongre';?>')"><img src="./images/male.jpg" class="icon"></i>Mr. Jugendra Dongre</a></li>
          <li><a href="#" onclick="profile('<?php echo 'Manju_Suchdev';?>')"><img src="./images/female.jpg" class="icon"></i>Ms. Manju Suchdeo</a></li>
          <li><a href="#" onclick="profile('<?php echo 'Shaligram_Prajapat';?>')"><img src="./images/male.jpg" class="icon"></i>Dr. Shaligram Prajapat</a></li>
          <li><a href="#" onclick="profile('<?php echo 'Poonam_Mangwani';?>')"><img src="./images/female.jpg" class="icon"></i>Ms. Poonam Mangwani</a></li>
          <li><a href="#" onclick="profile('<?php echo 'Shailvi_Verma';?>')"><img src="./images/female.jpg" class="icon"></i>Ms. Shailvi Verma</a></li>
          <li><a href="#" onclick="profile('<?php echo 'Yasmin_Shaikh';?>')"><img src="./images/female.jpg" class="icon"></i>Dr. Yasmin Shaikh</a></li>
          <li><a href="#" onclick="profile('<?php echo 'Rajesh_Verma';?>')"><img src="./images/male.jpg" class="icon"></i>Mr. Rajesh Verma</a></li>
          <li><a href="#" onclick="profile('<?php echo 'Rahul_Singhai';?>')"><img src="./images/male.jpg" class="icon"></i>Dr. Rahul Singhai</a></li>
          <li><a href="#" onclick="profile('<?php echo 'Basant_Namdeo';?>')"><img src="./images/male.jpg" class="icon"></i>Mr. Basant Namdeo</a></li>
          <li><a href="#" onclick="profile('<?php echo 'Nitin_Nagar';?>')"><img src="./images/male.jpg" class="icon"></i>Mr. Nitin Nagar</a></li>
          <li><a href="#" onclick="profile('<?php echo 'Rupesh_Sendre';?>')"><img src="./images/male.jpg" class="icon"></i>Mr. Rupesh Sendre</a></li>
          <li><a href="#" onclick="profile('<?php echo 'Shraddha_Soni';?>')"><img src="./images/female.jpg" class="icon"></i>Ms. Shraddha Soni</a></li>
          <li><a href="#" onclick="profile('<?php echo 'Kirti_Vijayawargiya';?>')"><img src="./images/female.jpg" class="icon"></i>Ms. Kirti Vijayvargiya</a></li>
          <li><a href="#" onclick="profile('<?php echo 'Vivek_Shrivastava';?>')"><img src="./images/male.jpg" class="icon"></i>Dr. Vivek Shrivastava  </a></li>
          <li><a href="#" onclick="profile('<?php echo 'Pradeep_Jatav';?>')"><img src="./images/male.jpg" class="icon"></i>Mr. Pradeep K. Jatav</a></li>
       
        </ul>
      </li><!--end-->

      <li style=" border:1px solid black;">
        <a href="#" onclick="faculty('<?php echo 'management_faculty';?>')"><!--management_faculty -->
          <i class="fa fa-edit"></i> <span>Management Faculty</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu" style="overflow-y: scroll;overflow-x:hidden; height:285px;  background-color:#0b3262;">
          <li><a href="#" onclick="profile('<?php echo 'Bk_Tripathi';?>')"><img src="./images/male.jpg" class="icon"></i>Dr. B.K.Tripathi</a></li>
          <li><a href="#" onclick="profile('<?php echo 'Anand_Sapre';?>')"><img src="./images/male.jpg" class="icon"></i>Dr.  Anand K. Sapre</a></li>
          <li><a href="#" onclick="profile('<?php echo 'Yamini_Karmarkar';?>')"><img src="./images/female.jpg" class="icon"></i>Dr. Yamini Karmarkar</a></li>
          <li><a href="#" onclick="profile('<?php echo 'Geeta_Sharma';?>')"><img src="./images/female.jpg" class="icon"></i>Dr. Geeta Sharma</a></li>
          <li><a href="#" onclick="profile('<?php echo 'Geeta_Neema';?>')"><img src="./images/female.jpg" class="icon"></i>Dr. Geeta Nema</a></li>
          <li><a href="#" onclick="profile('<?php echo 'Jyoti_Sharma';?>')"><img src="./images/female.jpg" class="icon"></i>Dr. Jyoti Sharma</a></li>
          <li><a href="#" onclick="profile('<?php echo 'Manish_Sitlani';?>')"><img src="./images/male.jpg" class="icon"></i>Dr. Manish Sitlani</a></li>
          <li><a href="#" onclick="profile('<?php echo 'Preeti_Singh';?>')"><img src="./images/female.jpg" class="icon"></i>Dr. Preeti Singh</a></li>
          <li><a href="#" onclick="profile('<?php echo 'Suresh_Patidar';?>')"><img src="./images/male.jpg" class="icon"></i>Dr. Suresh Patidar</a></li>
          <li><a href="#" onclick="profile('<?php echo 'Ravindra_Yadav';?>')"><img src="./images/male.jpg" class="icon"></i>Dr. Ravindra Yadav</a></li>
          <li><a href="#" onclick="profile('<?php echo 'Ms_Saluja';?>')"><img src="./images/male.jpg" class="icon"></i>Dr.  Manminder Singh Saluja</a></li>
          <li><a href="#" onclick="profile('<?php echo 'Anshu_Bhati';?>')"><img src="./images/female.jpg" class="icon"></i>Dr.  Anshu Bhati</a></li>
          <li><a href="#" onclick="profile('<?php echo 'Pooja_Jain';?>')"><img src="./images/female.jpg" class="icon"></i>Dr. Pooja Jain</a></li>
          <li><a href="#" onclick="profile('<?php echo 'Sujata_Parwani';?>')"><img src="./images/female.jpg" class="icon"></i>Dr. Sujata Parwani</a></li>
          <li><a href="#" onclick="profile('<?php echo 'Gaurav_Purohit';?>')"><img src="./images/male.jpg" class="icon"></i>Dr. Gaurav Purohit</a></li>
          <li><a href="#" onclick="profile('<?php echo 'Anil_Goray';?>')"><img src="./images/male.jpg" class="icon"></i>Dr. Anil S. Goray</a></li>
          <li><a href="#" onclick="profile('<?php echo 'Muskan_Karamchandani';?>')"><img src="./images/female.jpg" class="icon"></i>Dr. Muskan Karamchandani</a></li>
          <li><a href="#" onclick="profile('<?php echo 'Surendra_Malviya';?>')"><img src="./images/male.jpg" class="icon"></i>Dr. Surendra Malviya</a></li>
          <li><a href="#" onclick="profile('<?php echo 'Kapil_Jain';?>')"><img src="./images/male.jpg" class="icon"></i>Dr. Kapil Jain</a></li>
          <li><a href="#" onclick="profile('<?php echo 'Nirmala_Sawan';?>')"><img src="./images/female.jpg" class="icon"></i>Dr. Nirmala Sawan</a></li>
          <li><a href="#" onclick="profile('<?php echo 'Shilpa_Bagdare';?>')"><img src="./images/female.jpg" class="icon"></i>Dr. Shilpa Bagdare</a></li>
          <li><a href="#" onclick="profile('<?php echo 'Navneet_Bhatia';?>')"><img src="./images/female.jpg" class="icon"></i>Dr. Navneet Bhatia</a></li>
          <li><a href="#" onclick="profile('<?php echo 'Prerna_Kumar';?>')"><img src="./images/female.jpg" class="icon"></i>Dr. Prerna Kumar</a></li>
          <li><a href="#" onclick="profile('<?php echo 'Naresh_Dembla';?>')"><img src="./images/male.jpg" class="icon"></i>Mr. Naresh Dembla</a></li>
          <li><a href="#" onclick="profile('<?php echo 'Shikha_Chaturvedi';?>')"><img src="./images/female.jpg" class="icon"></i>Dr. Shikha Chaturvedi</a></li>
          <li><a href="#" onclick="profile('<?php echo 'Ravi_Bunkar';?>')"><img src="./images/male.jpg" class="icon"></i>Mr. Ravi Bunkar</a></li>
          <li><a href="#" onclick="profile('<?php echo 'Chetan_Raikwar';?>')"><img src="./images/male.jpg" class="icon"></i>Dr. Mr. Chetan Raikwar</a></li>
          <li><a href="#" onclick="profile('<?php echo 'Neha_Chouhan';?>')"><img src="./images/female.jpg" class="icon"></i>Ms. Neha Chouhan</a></li>
          <li><a href="#" onclick="profile('<?php echo 'Jyoti_Jain';?>')"><img src="./images/female.jpg" class="icon"></i>Dr. Jyoti Jain</a></li>
        </ul>
      </li>
     
   
    </ul>
    </div>

    <div id="adder" class="col-md-9">
      <?php include_once("computer_faculty.php") ?>
       <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="tab1">
            </div>
      </div>
      <!-- Table Ends> -->
    <br>
    </div><!--Col-md-9 End> -->

  </div>

</div>
</br>
</br>

  <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
  <script src="./js/faculty_profile.js"></script>
  <script src="./js/sidebar-menu.js"></script>
  <script>
    $.sidebarMenu($('.sidebar-menu'))
  </script>

<?php include 'footer.php';?>
