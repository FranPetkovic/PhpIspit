<html>
<head>
<style type="text/css">
    img:hower{
        border-radius:25px;
    }
    </style>
</head>
<body>
<?php
    $myfile = fopen("file.txt", "r") or die("Unable to open file!");

    while(!feof($myfile)){
        $polje=explode(" ", fgets($myfile));

        switch($polje[0]) {
            case 'L': $poz1="left: ".$polje[1]."; "; break;
            case 'R': $poz1="right: ".$polje[1]."; "; break;
        }

        switch($polje[2]) {
            case "B": $poz2="bottom: ".$polje[3].";"; break;
            case "T": $poz2="top: ".$polje[3].";"; break;
        } 

        switch($polje[4]) {
            case "C": $boj="red"; break;
            case "Z": $boj="green"; break;
        }
        $w=$polje[5];
        $h=$polje[6];

        if($polje[5]==0 ){
            $w=rand(1,200);
        }
            

        if($polje[6]==0){
            $h=rand(1,200);
        }


        if($polje[7]=="sli1"){
            $img1="1.jpg";
        }
        else
            $img1="2.jpg";

        print("<img src=$img1 style='position: fixed; $poz1 $poz2 border-color:$boj;' border='5' width= '$w'; height='$h ' />");
    }
    fclose($myfile);
?>

</body>

</html>