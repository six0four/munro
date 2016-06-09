<html>
<head>
</head>
<body>
<img 
src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7c/Facebook_New_Logo_%282015%29.svg/220px-Facebook_New_Logo_%282015%29.svg.png"></img>
<?php
sleep(5);
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
