<html>
<head>
</head>
 <body onload="JavaScript:timedRefresh(5000);"> // time : 5000= 5 secs
<?php
echo "The time is " . date("h:i:sa");
?>

<script>
function timedRefresh(timeoutPeriod) {
    setTimeout("location.reload(true);",timeoutPeriod);
}
</script>

</body>
<html>
