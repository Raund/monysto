<?
						$strSQL = "SELECT status FROM hot WHERE id=1";
                        $rs = mysql_query($strSQL);
                        while($row = mysql_fetch_array($rs)) {
	                        
	                        if ($row['status'] == 'on' ){
		                     
		                     
		                     
		                     ?>
		                     <script>  
(function($) {  
$(function() {  
  
  // check cookie 
  if (!$.cookie('was')) {  
  
  
  setTimeout(function() {
              $('body').addClass('noflow');
              $('.popup').removeClass('off');
              $('.ov2').fadeIn(400);
              $('.popup').addClass('fadeTop');
}, 5000);
  
   //show popup
             
  
  } 
  else{
	  
  } 
  
  $.cookie('was', true, {  
    expires: 0.000000000000000001,  
    path: '/'  
  });  
  
})  
})(jQuery)  
</script> <!--POPUP COOKIES--> 
		                     <?  
	                        }
                        
                        }
					?>