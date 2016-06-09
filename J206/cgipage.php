<html>
<head>
</head>
 <body onload="JavaScript:timedRefresh(1000);"> // time : 1000= 1 secs
<?php
echo "The time is " . date("h:i:sa");
?>

<script>
function timedRefresh(timeoutPeriod) {
    setTimeout("location.reload(true);",timeoutPeriod);
}
</script>

<!-- <img src="http://munro.humber.ca/~mdrk0011/cgi-bin/count.sh"> --!>

<script type="text/javascript" language="JavaScript" 
src="http://munro.humber.ca/~mdrk0011/cgi-bin/perlcgi.sh">
</script>


</body>
<html>
