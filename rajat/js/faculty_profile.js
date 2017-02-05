function computer()
	{
		var name= $("#comp").attr("name");
		 $("#adder").load("computer_faculty.php");
	
	}

function management()
	{
		var name= $("#mgt").attr("name");
		$("#adder").load("management_faculty.php");	
	}

function profile()
{
	//var name= $("#kk").attr("name");
	//alert(name);
	$("#adder").load("kirti_mathur.php");
}


$('#myButton').click(function() {
  $('#myDiv').toggle('slow', function() {
    // Animation complete.
  });
});