<?php
require 'vendor/autoload.php';
function generateRandomString($length = 8) {
    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
$bruh = "SP".generateRandomString();
$formatted = implode(' ',str_split($bruh)); 
// This will output the barcode as HTML output to display in the browser
$generator = new Picqer\Barcode\BarcodeGeneratorHTML();
?>
<html>
<head>
<title>Sprite Waterlymon Generator</title>
<meta property="og:image" content="/spret/SPRITE_Grivy_1080_Indomaret_20201106.jpg" />
<link type="text/css" href="https://grivy.app/src/styles/styles.css">
<link rel="stylesheet" href="https://grivy.app/styles.3aa982e8b1e7d561c946.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
</head>
<body>
<app-code _ngcontent-clv-c14="" _nghost-clv-c12="">
<div _ngcontent-clv-c12="" style="background-color: white; text-align: center"><div _ngcontent-clv-c12="" class="timer-icon"><div _ngcontent-clv-c12="" class="code-time-icon"></div><div _ngcontent-clv-c12="" class="code-time-text"><i class="far fa-clock"></i> <span _ngcontent-clv-c12="" class="timer">7 hari</span></div></div><hr style="color: #00A65F;">
<div _ngcontent-clv-c12="" class="ng-star-inserted" style="">
<center>
<?php echo $generator->getBarcode($bruh, $generator::TYPE_CODE_128, 3, 70);
echo '<h1 style="font:35px sans-serif;" style="font: 18px sans-serif" text-anchor="middle" x="116" y="65">'.$formatted.'</h1>';?>
</center>
</div>
</app-code>
</body>
