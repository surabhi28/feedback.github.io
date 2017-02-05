function faculty(name)
	{
		 $("#adder").load(name+".php");
	}


function profile(name)
{
	$("#adder").load("./Faculty/"+name+".php");
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