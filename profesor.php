<html>
<head>
<style type="text/css">
    img:hover {
        border-radius: 25px;
    }
</style>
</head>
<body>
    <?php
        $myfile = fopen("file.txt", "r") or die("Unable to open file!");
        while(!feof($myfile)) {
            $polje = explode(" ", fgets($myfile));
            switch($polje[0]) {
                case 'L': $pos1 = "left: ".$polje[1]."; "; break;
                case 'R': $pos1 = "right: ".$polje[1]."; "; break;
            }
            switch($polje[2]) {
                case 'B': $pos2 = "bottom: ".$polje[3]."; "; break;
                case 'T': $pos2 = "top: ".$polje[3]."; "; break;
            }
            switch($polje[4]) {         
                case 'C': $colO = "red"; break;
                case 'Z': $colO = "green"; break;
                case 'P': $colO = "blue"; break;
                case 'B': $colO = "white"; break;
            }
            if($polje[7]=='sl1') $sli = "student.jpg";
                else $sli = "nastavnik.jpg";
            $w = $polje[5]; $h = $polje[6];
            if($w==0 || $h==0) { 
                $w = rand(0, 200); $h = rand(0, 200);
            }
            echo "<img style='position: fixed; $pos1 $pos2 border-color: $colO;' border='5' width='$w' height='$h' src='$sli' /> ";
        }
        fclose($myfile);
    ?>
</body>
</html>