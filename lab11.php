<!DOCTYPE html> 
<html> 
<head> 
<title>Information</title> 
<style> 
body{ 
background:#eee; 
} 
label{ 
display:block; 
} 
button{ 
padding:15 px; 
} 
</style> 
</head> 
<body> 
<?php 
if($_SERVER["REQUEST_METHOD"]=="POST") 
{ 
$info=$_POST["info"]; 
$info_file=fopen('file.txt','a'); 
fwrite($info_file,$info); 
fclose($info_file); 
} 
?> 
<form method="POST"> 
<label>Information:</label> 
<textarea rows="15" cols="30" name="info">Type here</textarea> 
<div> 
<button type="submit">Submit</button> 
<button type="reset">Reset</button> 
</div> 
<div class="save"> 
<p>Saved infomation:</p> 
<?php 
$file=fopen('file.txt','r'); 
if($file) 
{ 
while(($line=fgets($file))!==false) 
{ 
echo "<p> $line</p>"; 
} 
fclose($file); 
} 
?> 
</div> 
</body> 
</html> 