<!--/*str_shuffle*/-->

<?php
$myString = "Khushi Technolabs";
echo str_shuffle($myString);
?>

<br/>
<!-- str_repeat() -->

<?php
$myString = "Khushi Technolabs";
        echo str_repeat("-",10);
        echo str_repeat("*", 10);
        echo str_repeat($myString, 3);
?>
<br/>

<!-- strcmp() -->
<?php
$str1 = "Khushi";
$str2 = "aKassH";
echo strcmp($str1, $str2);
?>

<!-- Wordwrap -->
<?php  
$str = "<br/> welcome to php Khushi  Tchnolabs";
$newtext = wordwrap($str,8,"<br/>");
echo $newtext;
?>

<!<!--Strchar()  -->
<?php
$str1 = "Khushi Technolabs";
echo strchr($str1, "o");
?>
<br/>
<!-- ord()-->
<?php
echo ord("Khushi");
?>
<br/>

<!-- stripos -->
<?php
echo stripos("Khushi Technolabs ","us");
?>

<!-- md5() -->
<?php
echo md5("Khushi");
?>
<br/>

<!-- shal() -->
<?php
$myFile = "myfile.txt";
$encrytedContents = sha1_file($myFile);
echo $encrytedContents;
?>