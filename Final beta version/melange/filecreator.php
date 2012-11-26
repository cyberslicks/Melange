<?php
session_start();	

function recurse_copy($src,$dst) { 
    $dir = opendir($src); 
    @mkdir($dst); 
    while(false !== ( $file = readdir($dir)) ) { 
        if (( $file != '.' ) && ( $file != '..' )) { 
            if ( is_dir($src . '/' . $file) ) { 
                recurse_copy($src . '/' . $file,$dst . '/' . $file); 
            } 
            else { 
                copy($src . '/' . $file,$dst . '/' . $file); 
            } 
        } 
    } 
    closedir($dir); 
} 


if(!isset($_SESSION['user_name']) || empty($_SESSION['user_name']))
{
	
	header('Location:Front.php');
	
	
}


if(isset($_POST['title']) && !empty($_POST['title']) && isset($_POST['html']) && !empty($_POST['html'])  && isset($_POST['css']) && !empty($_POST['css']))
	
{
	//mkdir("./user_content/".$_SESSION['user_name']."/user_content");
	
	//recurse_copy("./user_content/".$_SESSION['user_name'],"./user_content/".$_SESSION['user_name']."/user_content");	
	
	
	$title= $_POST['title'];
	$html = $_POST['html'];
	$css = $_POST['css'];
	$html = str_replace("\\", "", $html);
	
	$htmlFileContents = '<html> <head><title>'.$title.' </title>   <link rel="stylesheet" type="text/css" href="./style.css">  </head>  <body> '.$html.' </body> </html>';
	
	$fh = fopen("./user_content/".$_SESSION['user_name']."/"."index.html", 'w');
	fwrite($fh,$htmlFileContents);
	fclose($fh);
	
	$fh = fopen("./user_content/".$_SESSION['user_name']."/"."style.css", 'w');
	fwrite($fh,$css);
	fclose($fh);
	
	$path="./user_content/".$_SESSION['user_name'];
	$zip = new ZipArchive;
	$zip->open($_SESSION['user_name'].'.zip', ZipArchive::CREATE);
	if (false !== ($dir = opendir($path)))
	     {
	         while (false !== ($file = readdir($dir)))
	         {
	             if ($file != '.' && $file != '..')
	             {
	                       $zip->addFile($path.DIRECTORY_SEPARATOR.$file);
                       
	             }
	         }
	     }
	     else
	     {
	         die('Can\'t read dir');
	     }
	$zip->close();
	copy($_SESSION['user_name'].'.zip', "./user_content/".$_SESSION['user_name'].'.zip');
	unlink($_SESSION['user_name'].'.zip');
	echo "./user_content/".$_SESSION['user_name'].".zip";
	
	
	
	
	
	
}

else
{
	echo "sorry";
}








?>
