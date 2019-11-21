<!DOCTYPE html>

<html lang='en'>
	<head>
		<meta charset='utf-8'/>
		<title>TMA</title>
	</head>
	
	<body>
		<?php
			require 'includes/functions.php';
			
			$dir_handle=opendir('data');
			
			
			if(!$dir_handle ) #if there's an error opening dir 
			{
				echo '<p>Error: Unable to open dir</p>';
			}
			else #when data dir opens sucessfully
			{	
				do
				{
					$file_name=readdir($dir_handle);
					$file_path="data/$file_name";
					
				}while(!is_file($file_path) && $file_name); #keep reading dir until a valid file is found or dir ends (to avoid . and ..) 
				
			
				
				while( $file_name && is_readable($file_path) ) #while there's still a valid readable file in data dir
				{
					$line_number=0;	#counts which line number we're on
					$file_handle= fopen($file_path,'r');
					
					if(!$file_handle)
					{
						echo "<p>Error: Unable to open $file_name</p>";
					}
					elseif(filesize($file_path)==0 || ctype_space(file_get_contents($file_path)) ) #if size is zero or if file has only whitespace
					{
						echo "<p>Error: File $file_name is empty</p>";
						fclose($file_handle);
					}
					else
					{
						while(!feof($file_handle)) #running through whole file
						{
							$line=fgets($file_handle);
							
							$line_parts=explode(",",$line);
							
							if($line_number==0)
							{
								if(count($line_parts)==4) #if the explode was sucessful 
								{
									$module_code=$line_parts[0];
									$title=$line_parts[1];
									$tutor=$line_parts[2];
									$date=$line_parts[3];
								}
								else
								{
									echo "<p>Error: File $file_name has an invalid header</p>";
								}
							}
							else
							{
								
								if(count($line_parts)==2) #if the explode was sucessful 
								{
									$id=$line_parts[0];
									$marks=$line_parts[1];
								}
								else
								{
									echo "<p>Error: File $file_name has an invalid data entry line</p>";
								}	
							}
							
							
							echo "<pre>";
							print_r($line_parts);
							echo "<pre>".PHP_EOL;
							
							$line_number++;
						}
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