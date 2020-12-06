
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Sweet Alert - Example</title>
<link rel="stylesheet" href="dist/sweetalert2.min.css">
</head>
<body>    
    
<button type="button">Click me</button>        

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>       

<script>
$(document).ready(function(){
      /* Call Simple Alert on Button Click  */
     $('button').click(function(){            
          sweetAlert('Simpel Alert');   
          // or can be swal('Simpel Alert');
     });
})
</script>        
</body>
</html>