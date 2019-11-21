
<?php
	function mult($n,$n2)
	{
		return $n*$n2;
	}
	

	
	function make_heading($level, $str)
	{
		
		$r="";
		
		
		
		$str=trim(strtolower($str));
		
		
		
		if($level==1 OR $level==2)
		{
			
			$bheading =explode(" ",$str);
			
			
			
			foreach($bheading as $word)
			{
				$r.= " ".ucfirst($word); 
				
			}
			
			
		}
		else
		{	
			
			$r= ucfirst($str);
			
		}
		
		$r=htmlentities($r);
		$r="<h$level>".trim($r);
		$r.="</h$level>";
		
		return $r;
		
	}
	
	function make_menu($arr)
	{
		$str="";
		
		$str.="<ul>";
		foreach($arr as $link=>$name)
		{
			
			$str=$str."<li><a href=\"$link\" >$name</a></li>";
			
			
		}
		$str=$str."</ul>";
		return $str;
	}
	
	function format_title($title)
	{
		return htmlentities(trim(ucwords(strtolower($title))));
	}
	
	function id_valid($idc)
	{
		$delim=array("/",".","-");
		$idc=str_replace($delim, "/",$idc);
			
		$id_brokenc=explode("/",$idc);
		
		$prefix = $id_brokenc[0];
		$suffix = $id_brokenc[1];
		
		if(ctype_alpha($prefix) AND ctype_digit($suffix))
		{
			return $id_brokenc;
		}
		else
		{
			return false;
		}
				
		
	}
	
?>
	