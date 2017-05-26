<!DOCTYPE html>

<html>
<head>
</head>

<body>
	<?php
	//product details
	
	
	
<<<<<<< HEAD
	?>
=======
?>
		
	});
	var howMany = 1;
	var price = <?php echo $row['itemPrice']?>;
	$('#more').click(function(){
		if(howMany < $(".stock").text())
		{
			howMany += 1;
			$("#info").text(howMany);
			$("#price").text(howMany*price);
		}
	});
	$('#less').click(function(){
		if(howMany > 1)
		{
			howMany -= 1;
			$("#info").text(howMany);
			$("#price").text(howMany*price);
		}
	});
	$("#info").text(howMany);
	var total=howMany*price;
	$(".add-to-cart").click(function(){
					$.ajax({
						type: 'POST',
						url: 'add-to-cart.php',
						data: { id: <?php echo $_GET['id'] ?>, name: $(".image-header h1").text(),
								totals: total, qty: howMany},
						success: function(response){
							$('#feedback').html(response);
						}
					});
		
	});
  </script>
>>>>>>> Test-new-updates
</body>


</html>

