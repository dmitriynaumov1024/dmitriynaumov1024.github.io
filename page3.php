<html>
<?php
$myfile = fopen("newfile.txt","w");
$txt = "Hello there!";
fwrite($myfile,$txt);
fclose($myfile);
?>

<body>
<p>
I guess that something may happen...
</p>
</body>
</html>
