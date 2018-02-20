<?php
$filefirst = file("first.txt");
$filesecond = file("second.txt");
foreach($filefirst as $strfirst){
	echo "First file contains:\n".$strfirst."\n";
}
foreach($filesecond as $strsecond){
	echo "Second file contains:\n".$strsecond."\n";
}
similar_text($strfirst, $strsecond, $percent);
echo "\nPercentage of similarity:\n".$percent."%";
echo "\n\nMissing string in the second file, if there is:\n";
if(!in_array($strfirst, $filesecond)){
	echo($strfirst."\n");
    }
?>