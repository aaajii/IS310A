<!DOCTYPE html>
	<html>
		<head>
			
			<title>Sell</title>
			<style>
			    

                div {
				     border-radius: 5px;
                     float: left;
                     margin-left: 90px;
					 margin-top: 50px;
					 border-style: solid;
					 border-width: 1px;
                   }
			    table {
                       border-collapse: collapse;
                       
                      }
			   html
			   {
				   transition: 2s;
				   background-image: url('Game.jpg');
			   }
			   html:hover
			   {
				   background-image: url('psppaint.png');
			   }
    
        </style>
		</head>
		<body>
	
          <div id="datainput" align="center">
            <table height="400px">
			<br>
			
            <tr>
              <th>What are you selling?</th>
              <td><input type="text" id ="name"></td>
            </tr>
			<tr>
              <th>Description:</th>
              <td><textarea cols="50" rows="4" name="comment"></textarea></td>
            </tr>
			<tr>
              <th>How much is this?</th>
              <td><input type="text" id="price"></td>
            </tr>
			<tr>
              <th>Brand</th>
              <td><input type="text" id="brand" name = "brand" value=""></td>
            </tr>
			
		    <tr>
              <th>Upload photo:</th>
              <td><input type="text" id="image" value=""> </br></td>
            </tr>
        </table>

        <button id="button" name = "button"> Sell!</button>
        <br>
        <br>
        </div>
	
        </div>
		
		
<div id="feedback"></div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script> 
	$('#button').click(function(){
		var name = $('#name').val();
		var desc = $('#dsc').val();
		var prce = $('#price').val();
		var brnd = $('#brand').val();
		var imge = $('#image').val();
		if (imge == "")
			imge = "No image."
		
		
		if (
			name == "" ||
			desc== "" ||
			prce== "" ||
			brnd == "" ||
			desc == ""
			)
		{
			alert("Please input all the required data (optional picture)");
		  
		}else
		{
			$.ajax({
						type: 'POST',
						url: 'redirect-sell.php',
						data: { name: name, dsc: desc,
								price: prce, brand: brnd,
								image: imge},
						success: function(response){
							$('#feedback').html(response);
						}
					});
		}
	
	});
</script>


</body>
</html>