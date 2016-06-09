<html>
<head>
</head>
<body>
<?php
//$flag=0;
//$flag=1;
sleep(2);
//$myfile = fopen("../cgi-bin/state.txt", "r") or die("Unable to open 
//file!");
$myfile = fopen("state.txt", "r") or die("Unable to open file!");
//$state= fread($myfile,filesize("../cgi-bin/state.txt"));
$state= fread($myfile,filesize("state.txt"));
//echo $state;
//    if($flag == 1) {
    if($state == 1) {
     echo "<meta http-equiv=\"refresh\" 
content=\"0;URL=http://humber.zone\">";
    } else {
     echo "<meta http-equiv=\"refresh\" content=\"0;URL=page.php\">";
    }
fclose($myfile);
?>
</body>
</html>
