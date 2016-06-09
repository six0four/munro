<html>
<head>
</head>
<body>
<?php
$myfile = fopen("number.txt", "r") or die("Unable to open 
file for reading!");
echo reading;
$state= fread($myfile,filesize("state.txt"));
fclose($myfile);
echo $state;
    if($state == 1) {
     $state=0;
     echo state;
    } else {
     $state=1;
     echo state;
    }
$myfile = fopen("state.txt", "w") or die("Unable to open 
file for writing!");
fwrite($myfile, $state);
fclose($myfile);
?>
</body>
</html>
