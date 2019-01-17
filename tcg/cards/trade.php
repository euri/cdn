<?php
    $directory = "trade/";
    $cards = glob($directory."*.{jpg,gif,png}", GLOB_BRACE);
    $display_cards = array();
    
    foreach ($cards as $card) {
        $card = substr($card, strlen($directory));
        $letter = $card[0];
        //var_dump($letter);
        //var_dump($card);

        if(isset($display_cards[$letter])) {
            var_dump("no display");
            array_push($display_cards, 'tarrer');
        }

        //array_push($display_cards[$letter], $cards);

    }
    var_dump($display_cards);

?>
<h1>Want to Trade</h1>
<?php
$images = glob($directory . "[Aa]*.{jpg,gif,png}", GLOB_BRACE);
?>
<h2>A</h2>
<p>
<?php
if($images != "") {
foreach ($images as $image) {
    echo '    <img src="'.$image.'" alt="" width="55" height="70" border="0" />
';
}
}
?>
</p>
<h2>B</h2>
<p>
<?php
$images = glob($directory . "[Bb]*.{jpg,gif,png}", GLOB_BRACE);

foreach ($images as $image) {
    echo '    <img src="'.$image.'" alt="" width="55" height="70" border="0" />
';
}
?>
</p>
<h2>C</h2>
<p>
<?php
$images = glob($directory . "[Cc]*.{jpg,gif,png}", GLOB_BRACE);

foreach ($images as $image) {
    echo '    <img src="'.$image.'" alt="" width="55" height="70" border="0" />
';
}
?>
</p>
<h2>D</h2>
<p>
<?php
$images = glob($directory . "[Dd]*.{jpg,gif,png}", GLOB_BRACE);

foreach ($images as $image) {
    echo '    <img src="'.$image.'" alt="" width="55" height="70" border="0" />
';
}
?>
</p>
<h2>E</h2>
<p>
<?php
$images = glob($directory . "[Ee]*.{jpg,gif,png}", GLOB_BRACE);

foreach ($images as $image) {
    echo '    <img src="'.$image.'" alt="" width="55" height="70" border="0" />
';
}
?>
</p>
<h2>F</h2>
<p>
<?php
$images = glob($directory . "[Ff]*.{jpg,gif,png}", GLOB_BRACE);

foreach ($images as $image) {
    echo '    <img src="'.$image.'" alt="" width="55" height="70" border="0" />
';
}
?>
</p>
<h2>G</h2>
<p>
<?php
$images = glob($directory . "[Gg]*.{jpg,gif,png}", GLOB_BRACE);

foreach ($images as $image) {
    echo '    <img src="'.$image.'" alt="" width="55" height="70" border="0" />
';
}
?>
</p>
<h2>H</h2>
<p>
<?php
$images = glob($directory . "[Hh]*.{jpg,gif,png}", GLOB_BRACE);

foreach ($images as $image) {
    echo '    <img src="'.$image.'" alt="" width="55" height="70" border="0" />
';
}
?>
</p>
<h2>I</h2>
<p>
<?php
$images = glob($directory . "[Ii]*.{jpg,gif,png}", GLOB_BRACE);

foreach ($images as $image) {
    echo '    <img src="'.$image.'" alt="" width="55" height="70" border="0" />
';
}
?>
</p>
<h2>J</h2>
<p>
<?php
$images = glob($directory . "[Jj]*.{jpg,gif,png}", GLOB_BRACE);

foreach ($images as $image) {
    echo '    <img src="'.$image.'" alt="" width="55" height="70" border="0" />
';
}
?>
</p>
<h2>K</h2>
<p>
<?php
$images = glob($directory . "[Kk]*.{jpg,gif,png}", GLOB_BRACE);

foreach ($images as $image) {
    echo '    <img src="'.$image.'" alt="" width="55" height="70" border="0" />
';
}
?>
</p>
<h2>L</h2>
<p>
<?php
$images = glob($directory . "[Ll]*.{jpg,gif,png}", GLOB_BRACE);

foreach ($images as $image) {
    echo '    <img src="'.$image.'" alt="" width="55" height="70" border="0" />
';
}
?>
</p>
<h2>M</h2>
<p>
<?php
$images = glob($directory . "[Mm]*.{jpg,gif,png}", GLOB_BRACE);

foreach ($images as $image) {
    echo '    <img src="'.$image.'" alt="" width="55" height="70" border="0" />
';
}
?>
</p>
<h2>N</h2>
<p>
<?php
$images = glob($directory . "[Nn]*.{jpg,gif,png}", GLOB_BRACE);

foreach ($images as $image) {
    echo '    <img src="'.$image.'" alt="" width="55" height="70" border="0" />
';
}
?>
</p>
<h2>O</h2>
<p>
<?php
$images = glob($directory . "[Oo]*.{jpg,gif,png}", GLOB_BRACE);

foreach ($images as $image) {
    echo '    <img src="'.$image.'" alt="" width="55" height="70" border="0" />
';
}
?>
</p>
<h2>P</h2>
<p>
<?php
$images = glob($directory . "[Pp]*.{jpg,gif,png}", GLOB_BRACE);

foreach ($images as $image) {
    echo '    <img src="'.$image.'" alt="" width="55" height="70" border="0" />
';
}
?>
</p>
<h2>S</h2>
<p>
<?php
$images = glob($directory . "[Ss]*.{jpg,gif,png}", GLOB_BRACE);

foreach ($images as $image) {
    echo '    <img src="'.$image.'" alt="" width="55" height="70" border="0" />
';
}
?>
</p>
<h2>T</h2>
<p>
<?php
$images = glob($directory . "[Tt]*.{jpg,gif,png}", GLOB_BRACE);

foreach ($images as $image) {
    echo '    <img src="'.$image.'" alt="" width="55" height="70" border="0" />
';
}
?>
</p>
<h2>V</h2>
<p>
<?php
$images = glob($directory . "[Vv]*.{jpg,gif,png}", GLOB_BRACE);

foreach ($images as $image) {
    echo '    <img src="'.$image.'" alt="" width="55" height="70" border="0" />
';
}
?>
</p>
<h2>W</h2>
<p>
<?php
$images = glob($directory . "[Ww]*.{jpg,gif,png}", GLOB_BRACE);

foreach ($images as $image) {
    echo '    <img src="'.$image.'" alt="" width="55" height="70" border="0" />
';
}
?>
</p>