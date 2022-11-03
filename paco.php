<html>
    <body>
    
<?php
$myfile = fopen("test.txt", "r") or die("Unable to open file!");
while(!feof($myfile)) {
$string= explode(" ",fgets($myfile));   
switch($string[0]){
    case "L":
        $p1 = "left";
        break;
    case "R":
        $p1 = "right";
        break;
}

if(intval($string[1])==0){
$p1v = rand(0,200);
}
else{
    $p1v=intval($string[1]);
}

switch($string[2]){
    case "T":
        $p2 = "top";
        break;
    case "B":
        $p2 = "bottom";
        break;
}
if(intval($string[3])==0){
$p2v = rand(0,200);
}
else{
    $p2v=intval($string[3]);
}

switch($string[4]){
    case "C":
        $c1 = "red";
        break;
    case "Z":
        $c1 = "green";
        break;
}

if(intval($string[5])==0){
$h = rand(0,200);
}
else{
    $h=intval($string[5]);
}

if(intval($string[6])==0){
    $w = rand(0,200);
    }
    else{
        $w=intval($string[6]);
    }

if($string[7]=="sl1"){
    $slika="https://cdn.vox-cdn.com/thumbor/FUMWSscTuHqe7d4brVEFZHRlSvw=/0x0:1250x694/1200x800/filters:focal(525x247:725x447)/cdn.vox-cdn.com/uploads/chorus_image/image/71303062/Big_Chungus.0.png";
}
else{
    $slika="https://i.kym-cdn.com/entries/icons/original/000/027/843/chungcover.jpg";
}

print("<img src='$slika' style='position: fixed; $p1: $p1v; $p2: $p2v; border-color: $c1; height: $h; widht: $w; border-width: 10px; border-style: solid;'> \n </br>");

            }
            fclose($myfile);            
        ?>


    </body>
</html>