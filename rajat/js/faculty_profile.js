function faculty(name)
	{
		 $("#adder").load(name+".php");
	}


function profile(name)
{
  $.ajax({
data: {name:name},
success: function()
  { 
  $("#adder").load("./Faculty/"+name+".php"); 
  }
});
}


$('#mymembership').click(function() {
	$('#research, #responsibility ,#project , #presentation , #publication').hide();
  $('#membership').toggle('slow', function() {
	  
    // Animation complete.
  });
});

$('#myresearch').click(function() {
	$('#membership, #responsibility ,#project , #presentation ,#publication').hide();
  $('#research').toggle('slow', function() {
    // Animation complete.
  });
});

$('#myresponsibility').click(function() {
	$('#research, #membership ,#project , #presentation ,#publication').hide();
  $('#responsibility').toggle('slow', function() {
    // Animation complete.
  });
});

$('#myproject').click(function() {
	$('#research, #responsibility ,#membership , #presentation #publication').hide();
  $('#project').toggle('slow', function() {
    // Animation complete.
  });
});

$('#mypresentation').click(function() {
	$('#research, #responsibility ,#project , #membership ,#publication').hide();
  $('#presentation').toggle('slow', function() {
    // Animation complete.
  });
});

$('#mypublication').click(function() {
	$('#research, #responsibility ,#membership , #presentation ,#project').hide();
  $('#publication').toggle('slow', function() {
    // Animation complete.
  });
});