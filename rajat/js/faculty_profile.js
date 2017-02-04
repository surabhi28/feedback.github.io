function faculty()
	{
		var name= $("#faculty").attr("name");
		alert(name);
	     if(name=="computer")
		 $("#adder").load("computer_faculty.php");
	else if(name=="management")
		$("#adder").load("management_faculty.php");	
	}
