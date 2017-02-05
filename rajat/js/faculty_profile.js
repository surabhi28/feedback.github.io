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


$('#mymembership').click(function() {
  $('#membership').toggle('slow', function() {
    // Animation complete.
  });
});

$('#myresearch').click(function() {
  $('#research').toggle('slow', function() {
    // Animation complete.
  });
});

$('#myresponsibility').click(function() {
  $('#responsibility').toggle('slow', function() {
    // Animation complete.
  });
});

$('#myproject').click(function() {
  $('#project').toggle('slow', function() {
    // Animation complete.
  });
});

$('#mypresentation').click(function() {
  $('#presentation').toggle('slow', function() {
    // Animation complete.
  });
});

$('#mypublication').click(function() {
  $('#publication').toggle('slow', function() {
    // Animation complete.
  });
});