<?
	
	$today = date('d.m.Y');
	//$NY = '28.04';
	$NY = date('d.m');
	$now = strtotime($today);
	$y = date('Y');
	
	
	

		         
	if ($NY != '31.12'  &&  $NY != '01.01'  &&  $NY != '02.01'  &&  $NY != '03.01'  &&  $NY != '04.01'  &&  $NY != '05.01'  &&  $NY != '06.01'  &&  $NY != '07.01'  &&  $NY != '08.01')
	{
		
		
		
		
		
		
		
	
	    if ( strtotime($NY.'.'.$y) >= strtotime('09.01.'.$y)   &&   strtotime($NY.'.'.$y) <= strtotime('18.01.'.$y) )
	    {
	    $source = mysql_query("SELECT * FROM seasons WHERE id='2' ");
        while($rowx = mysql_fetch_array($source)){
        $standard_p = $rowx['standard'];
        $family_p = $rowx['family'];
        }
        }
        
        
        elseif ( strtotime($NY.'.'.$y) >= strtotime('19.01.'.$y)   &&   strtotime($NY.'.'.$y) <= strtotime('09.03.'.$y) )
	    {
	    $source = mysql_query("SELECT * FROM seasons WHERE id='3' ");
        while($rowx = mysql_fetch_array($source)){
        $standard_p = $rowx['standard'];
        $family_p = $rowx['family'];
        }
        }
        
        
        elseif ( strtotime($NY.'.'.$y) >= strtotime('10.03.'.$y)   &&   strtotime($NY.'.'.$y) <= strtotime('31.03.'.$y) )
	    {
	    $source = mysql_query("SELECT * FROM seasons WHERE id='4' ");
        while($rowx = mysql_fetch_array($source)){
        $standard_p = $rowx['standard'];
        $family_p = $rowx['family'];
        }
        }
        
        
        elseif ( strtotime($NY.'.'.$y) >= strtotime('01.04.'.$y)   &&   strtotime($NY.'.'.$y) <= strtotime('30.04.'.$y) )
	    {
	    $source = mysql_query("SELECT * FROM seasons WHERE id='5' ");
        while($rowx = mysql_fetch_array($source)){
        $standard_p = $rowx['standard'];
        $family_p = $rowx['family'];
        }
        }
        
        
        
        elseif ( strtotime($NY.'.'.$y) >= strtotime('01.05.'.$y)   &&   strtotime($NY.'.'.$y) <= strtotime('11.05.'.$y) )
	    {
	    $source = mysql_query("SELECT * FROM seasons WHERE id='6' ");
        while($rowx = mysql_fetch_array($source)){
        $standard_p = $rowx['standard'];
        $family_p = $rowx['family'];
        }
        }
        
        
        
        elseif ( strtotime($NY.'.'.$y) >= strtotime('12.05.'.$y)   &&   strtotime($NY.'.'.$y) <= strtotime('30.06.'.$y) )
	    {
	    $source = mysql_query("SELECT * FROM seasons WHERE id='7' ");
        while($rowx = mysql_fetch_array($source)){
        $standard_p = $rowx['standard'];
        $family_p = $rowx['family'];
        }
        }
        
        
        
        
        
        elseif ( strtotime($NY.'.'.$y) >= strtotime('01.07.'.$y)   &&   strtotime($NY.'.'.$y) <= strtotime('30.10.'.$y) )
	    {
	    $source = mysql_query("SELECT * FROM seasons WHERE id='8' ");
        while($rowx = mysql_fetch_array($source)){
        $standard_p = $rowx['standard'];
        $family_p = $rowx['family'];
        }
        }
        
        
        elseif ( strtotime($NY.'.'.$y) >= strtotime('01.11.'.$y)   &&   strtotime($NY.'.'.$y) <= strtotime('30.11.'.$y) )
	    {
	    $source = mysql_query("SELECT * FROM seasons WHERE id='9' ");
        while($rowx = mysql_fetch_array($source)){
        $standard_p = $rowx['standard'];
        $family_p = $rowx['family'];
        }
        }
        
         elseif ( strtotime($NY.'.'.$y) >= strtotime('19.12.'.$y)   &&   strtotime($NY.'.'.$y) <= strtotime('30.12.'.$y) )
	    {
	    $source = mysql_query("SELECT * FROM seasons WHERE id='10' ");
        while($rowx = mysql_fetch_array($source)){
        $standard_p = $rowx['standard'];
        $family_p = $rowx['family'];
        }
        }
        
        
        else
	    {
	    $source = mysql_query("SELECT * FROM seasons WHERE id='11' ");
        while($rowx = mysql_fetch_array($source)){
        $standard_p = $rowx['standard'];
        $family_p = $rowx['family'];
        }
        }
		
		
	
	
	
	
	
	

	}
	else
	{
	
	$source = mysql_query("SELECT * FROM seasons WHERE id = '1' ");
    while($rowx = mysql_fetch_array($source)){
    $standard_p = $rowx['standard'];
    $family_p = $rowx['family'];
    }
	
	}
	
	 
	
?>