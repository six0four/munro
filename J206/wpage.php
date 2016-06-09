<html>
<head>
</head>
<body>
<?php
sleep(2);
$myfile = fopen("number.txt", "r") or die("Unable to open file!");
$state= fread($myfile,filesize("number.txt"));
echo $state;
    if($state > 20) {
     echo "<meta http-equiv=\"refresh\" content=\"0;URL=reddit.php\">";
    } else {
     echo "<meta http-equiv=\"refresh\" content=\"0;URL=wpage.php\">";
    }
fclose($myfile);
?>
</body>
</html>
