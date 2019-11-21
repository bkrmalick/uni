<!DOCTYPE html>

<!-- bkrmalick@hotmail.com -->
<html lang='en'>
	<head>
		<meta charset='utf-8'/>
		<title>TMA</title>
	</head>
	
	<body>
		<h1>TMA</h1>
		<p>by Abu Bakar Naseer (13139991)</p>
		
		<?php
			require 'includes/functions.php';
			
			$dir_handle=opendir('data');
			
			if(!$dir_handle ) #if there's an error opening dir 
			{
				echo '<p>Error: Unable to open dir</p>';
			}
			else #when data dir opens successfully
			{	
				do
				{
					$file_name=readdir($dir_handle);
					$file_path="data/$file_name";
					
				}while(!is_file($file_path) && $file_name); #keep reading dir until a valid file is found or dir ends (to avoid . and ..) 
				
			
				
				while( $file_name && is_readable($file_path) ) #while there's still a valid readable file in data dir
				{
					$line_number=0;	#counter for number of line we're on
					$nDErrors=0; #Number of data errors
					$fileskipflag=false; #flag if file is to be skipped (used later on) 
					
					$studentMarks=array();
					$studentIDs=array();
					
					if(substr($file_name,-4)==".txt") #Checking extension of file to ensure only text files are opened
					{
						$file_handle= fopen($file_path,'r');
					}
					
					echo "<h2>---------------------------------------------------------------------</h2>".PHP_EOL;
					
					if(substr($file_name,-4)!=".txt")
					{
						echo "<h2>$file_name : not text file - Ignored</h2>".PHP_EOL;
					}
					elseif(!$file_handle)
					{
						echo "<p>Error: Unable to open $file_name</p>".PHP_EOL;
					}
					elseif(filesize($file_path)==0 || ctype_space(file_get_contents($file_path)) ) #if size is zero or if file has only whitespace (safe to load into memory because small text files)
					{
						echo "<h2>Error: File $file_name is empty</h2>".PHP_EOL;
						fclose($file_handle);
					}
					else
					{
						echo "<h2>Module Header Data... </h2>".PHP_EOL;
						echo "<p>File Name : ".htmlentities(trim($file_name))."</p>".PHP_EOL;
						
						while(!feof($file_handle)) #running through whole file
						{
							$line=fgets($file_handle);
							
							$line_parts=explode(",",$line);
							
							if($line_number==0) #if this is the header line
							{
								if(count($line_parts)==4) #if the explode was successful and contains 4 data items
								{
									$module_code=trim($line_parts[0]);
									$title=trim($line_parts[1]);
									$tutor=trim($line_parts[2]);
									$date=trim($line_parts[3]);
									
									echo "<p>Module Code : ".htmlentities($module_code); #making sure output html valid and doesnt contain any newlines or whitepsaces
									if(moduleCodeValid($module_code,$title)!="1")
									{
										echo " : ERROR- ".moduleCodeValid($module_code,$title);
										$nDErrors++;
									}
									echo "</p>".PHP_EOL;
									
									echo  "<p>Module Title : ".htmlentities($title);
									if(!headerTextValid($title))
									{
										echo " : ERROR- Missing or Unprintable";
										$nDErrors++;
									}
									echo "</p>".PHP_EOL;
									
									echo  "<p>Tutor : ".htmlentities($tutor);
									if(!headerTextValid($tutor))
									{
										echo " : ERROR- Missing or Unprintable";
										$nDErrors++;
									}
									echo "</p>".PHP_EOL;
									
									echo  "<p>Marked date : ".htmlentities($date);
									if(!headerTextValid($date) )
									{
										echo " : ERROR- Missing or Unprintable";
										$nDErrors++;
									}
									elseif(!dateValid($date))
									{
										echo " : ERROR- Invalid Date";
										$nDErrors++;
									}
									echo "</p>".PHP_EOL;
									
									
								}
								else
								{
									echo "<p>Error: File has an invalid header, file skipped.</p>".PHP_EOL;
									$fileskipflag=true;
								}
							}
							elseif(!$fileskipflag) #if it's a data line and file skip flag is not true
							{
								if($line_number==1)
								{
									echo "<h2>Student ID and Mark data read from file... </h2>".PHP_EOL;
								}
								
								if(count($line_parts)==2) #if the explode was successful and contains two data items 
								{
									$id=trim($line_parts[0]);
									$marks=trim($line_parts[1]);
									
									echo "<p>$id : $marks ";
									if(!headerTextValid($id) && !headerTextValid($marks)) #checking if marks and id are not empty strings
									{
										echo "- Missing student ID and marks : not included";
										$nDErrors++;
									}
									elseif(!headerTextValid($id))
									{
										echo "- Missing student ID : not included";
										$nDErrors++;
									}
									elseif(!headerTextValid($marks))
									{
										echo "- Missing marks : not included";
										$nDErrors++;
									}
									elseif(!studentIDValid($id) && !marksValid($marks)) #validate student id and marks 
									{
										echo "- Incorrect student ID and marks : not included";
										$nDErrors++;
									}
									elseif (!studentIDValid($id))
									{
										echo "- Incorrect student ID : not included";
										$nDErrors++;
									}
									elseif (!marksValid($marks))
									{
										echo "- Incorrect mark : not included" ;
										$nDErrors++;
									}
									else #include in statistical analysis if everything fine
									{
										$studentMarks[]=intval($marks, 10); #converting string to integer type with base 10
										$studentIDs[]=intval($id,10);
									}
									
									echo "</p>".PHP_EOL;
								}
								else
								{
									echo "<p>ERROR: Invalid data entry line : not included</p>".PHP_EOL;
									$nDErrors++;
								}	
								
							}
							
							
							$line_number++;
						}
						
						echo "<b># of Data Errors: $nDErrors</b>".PHP_EOL;
						
						$nDistinctions=0;
						$nMerits=0;
						$nPass=0;
						$nFail=0;
						
						echo "<h2>ID's and module marks to be included...</h2>".PHP_EOL;
						
						for($i=0;$i<count($studentMarks);$i++)  #for loop to print and analyse valid data 
						{
							echo "<p>".$studentIDs[$i]." : ".$studentMarks[$i]."</p>".PHP_EOL;
							
							if($studentMarks[$i]>=70)
							{
								$nDistinctions++;
							}
							elseif($studentMarks[$i]>=60)
							{
								$nMerits++;
							}
							elseif($studentMarks[$i]>=40)
							{
								$nPass++;
							}
							else
							{
								$nFail++;
							}
						}
						
						echo "<h2>Statistical Analysis of module marks...</h2>".PHP_EOL;
						echo "<p>Mean: ".round(mmmr($studentMarks,"mean"),2)."</p>".PHP_EOL;
						echo "<p>Mode: ".round(mmmr($studentMarks,"mode"),2)."</p>".PHP_EOL;
						echo "<p>Range: ".round(mmmr($studentMarks,"range"),2)."</p>".PHP_EOL;
						
						
						echo "<p># of Students: ".count($studentMarks)."<p>".PHP_EOL;
						
						echo "<h2>Grade Distribution of module marks...</h2>".PHP_EOL;
						echo "<p>Dist. : $nDistinctions</p>".PHP_EOL;
						echo "<p>Merit : $nMerits</p>".PHP_EOL;
						echo "<p>Pass  : $nPass</p>".PHP_EOL;
						echo "<p>Fail  : $nFail</p>".PHP_EOL;
						
						fclose($file_handle);
					}
					
					$file_name=readdir($dir_handle);
					$file_path="data/$file_name";   
				}
				closedir($dir_handle);
			}
			
			
		?>
		
	</body>
</html>