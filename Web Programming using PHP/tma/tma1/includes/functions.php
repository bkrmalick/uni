<?php
#Web Programming using PHP (P1) - TMA Functions file to be included in TMA web pages

function mmmr($array, $output = 'mean'){ 
    #Provides basic statistical functions - default is mean; other $output parammeters are; 'median', 'mode' and 'range'.
	#Ian Hollender 2016 - adapted from the following, as it was an inacurate solution
	#http://phpsnips.com/45/Mean,-Median,-Mode,-Range-Of-An-Array#tab=snippet
	#Good example of PHP overloading variables with different data types - see the Mode code
	if(!is_array($array)){ 
        echo '<p>Invalid parammeter to mmmr() function: ' . $array . ' is not an array</p>';
		return FALSE; #input parammeter is not an array
    }else{ 
        switch($output){ #determine staistical output required
            case 'mean': #calculate mean or average
                $count = count($array); 
                $sum = array_sum($array); 
                $total = $sum / $count; 
            break; 
            case 'median': #middle value in an ordered list; caters for odd and even lists
                $count = count($array); 
				sort($array); #sort the list of numbers
				if ($count % 2 == 0) { #even list of numbers
					$med1 = $array[$count/2];
					$med2 = $array[($count/2)-1];
					$total = ($med1 + $med2)/2;
				}
				else { #odd list of numbers
					$total = $array[($count-1)/2]; 	
				}				
            break; 
            case 'mode': #most frequent value in a list; N.B. will only find a unique mode or no mode; 
                $v = array_count_values($array); #create associate array; keys are numbers in array, values are counts
                arsort($v); #sort the list of numbers in ascending order				
				
				if (count(array_unique($v)) == 1) { #all frequency counts are the same, as array_unique returns array with all duplicates removed!
					return 'No mode';
				}				
				$i = 0; #used to keep track of count of associative keys processes
                $modes = '';
				foreach($v as $k => $v){ #determine if a unique most frequent number, or return NULL by only looking at first two keys and frequency numbers in the sorted array					
					if ($i == 0) { #first number and frequency in array
						$max1 = $v;	#highest frequency of first number in array
						$modes = $k . ' ';
						$total = $k; #first key is the most frequent number;
					}
					if ($i > 0) { #second number and frequency in array
						$max2 = $v;	#highest frequency of second number in array					
						if ($max1 == $max2) { #two or more numbers with same max frequency; return NULL
							$modes = $modes . $k . ' ';
						}
						else {
							break;  
						}
					}
					$i++; #next item in $v array to be counted
				}
				$total = $modes;				
            break; 
            case 'range': #highest value - lowest value
                sort($array); #find the smallest number
                $sml = $array[0]; 
                rsort($array); #find the largest number
                $lrg = $array[0]; 
                $total = $lrg - $sml; #calculate the range
            break; 
			default :
				echo '<p>Invalid parammeter to mmmr() function: ' . $output . '</p>';
				$total= 0;
				return FALSE;
        } 
        return $total; 
    } 
} 

#function: codeAndTitleMatch
#Desc. :Checks whether module code and title match
#Parameters: String $code, String $title
#Return: Boolean - False if mismatch, otherwise True
function codeAndTitleMatch($code, $title)
{
	
	if($code=="PP" && strcasecmp($title,"Problem Solving for Programming")!=0) #Comparing module code with title (disregarding letter case)
	{
		return false;
	}
	elseif($code=="P1" && strcasecmp($title,"Web Programming using PHP")!=0)
	{
		return false;
	}
	elseif($code=="DT" && strcasecmp($title,"Introduction to Database Technology")!=0)
	{
		return false;
	}
	
	return true;
}


#function: moduleCodeValid
#Desc. :Checks Validity of Module Code 
#Parameters: String $code, String $title 
#Return: String stating reason for invalid code if invalid, otherwise "1"
function moduleCodeValid($code, $title)
{
	$str=""; #string that's going to be returned
	$flag=false;
	
	if(strlen($code)==0)
	{
		$str= "Code Missing";
		return $str;
	}
	elseif(strlen($code)!=8)
	{
		$str= "Incorrect code length";
		$flag=True;
	}
	
	$char_code=substr($code,0,2);
	$yr=substr($code,2,4);
	$term_code=substr($code,6,2);
	
	$valid_codes=array("DT","P1","PP");
	$valid_term_codes=array("T1","T2","T3");
	
	
	if(!in_array($char_code,$valid_codes) )
	{
		if($flag)
		{
			$str .=",";
		}
		
		$str.= " Incorrect char code";
		$flag=True;
	}
	if(!ctype_digit($yr))
	{
		if($flag)
		{
			$str .=",";
		}
		
		$str.=  " Incorrect academic year";
		$flag=True;
	}
	if(!in_array($term_code,$valid_term_codes))
	{
		if($flag)
		{
			$str .=",";
		}
		
		$str.=  " Incorrect term code";
		$flag=True;
	}
	if(!codeAndTitleMatch($char_code,$title))
	{
		if($flag)
		{
			$str .=",";
		}
		
		$str.=  " Code does not match title";
		$flag=True;
	}
	
	if(!$flag)
	{
		return "1";
	}
	else
	{
		return $str;
	}
}

#function: moduleTitleValid
#Desc. :Checks Validity of text in header of data file (could be module title or tutor name)
#Parameters: String $text - text to be checked for validity
#Return: Boolean True or False 
function headerTextValid($text)
{
	if(ctype_space($text) || !ctype_print($text)) #if text is not printable or empty
		{
			return false;
		}
		
	return true;	
}

#function: dateValid
#Desc. :Checks Validity of date in header of data file 
#Parameters: String $date - date to be checked for validity
#Return: Boolean True or False 
function dateValid($date)
{
	
	$date=explode("/",$date);
	
	if(count($date)!=3) #checking if explode not successful 
	{
		return false;
	}
	
	$day=$date[0];
	$month=$date[1];
	$year=$date[2];
	
	if($day>31 || $day<0 || $month <0 || $month>12 || $year<0)
	{
		return false;
	}
	
	return true;
}

#function: studentIDValid
#Desc. :Checks Validity of student id 
#Parameters: String $id - id to be checked for validity
#Return: Boolean True or False 
function studentIDValid($id)
{
	
	
	if(strlen($id)==8 && ctype_digit($id))
	{
		return true;
	}
	return false;
}

#function: marksValid
#Desc. :Checks Validity of marks
#Parameters: String $marks - marks to be checked for validitiy
#Return: Boolean True or False 
function marksValid($marks)
{
	if($marks>=0 && $marks<=100 && ctype_digit($marks) && strlen($marks)!=0)
	{
		return true;
	}
	
	return false;
}

?>

