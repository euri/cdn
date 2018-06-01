<?php
    $directory = "trade/";
    $cards = glob($directory."*.gif");
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
$images = glob($directory . "A*.gif");
?>
<h2>A</h2>
<p>
<?php
if($images != "") {
    foreach ($images as $image) {
        echo '    <img src="'.$image.'" alt="" border="0" />
    ';
    }
}
?>
</p>
<h2>B</h2>
<p>
<?php
$images = glob($directory . "B*.gif");

foreach ($images as $image) {
    echo '    <img src="'.$image.'" alt="" border="0" />
';
}
?>
</p>
<h2>C</h2>
<p>
<?php
$images = glob($directory . "C*.gif");

foreach ($images as $image) {
    echo '    <img src="'.$image.'" alt="" border="0" />
';
}
?>
</p>
<h2>D</h2>
<p>
<?php
$images = glob($directory . "D*.gif");

foreach ($images as $image) {
    echo '    <img src="'.$image.'" alt="" border="0" />
';
}
?>
</p>
<h2>E</h2>
<p>
<?php
$images = glob($directory . "E*.gif");

foreach ($images as $image) {
    echo '    <img src="'.$image.'" alt="" border="0" />
';
}
?>
</p>
<h2>F</h2>
<p>
<?php
$images = glob($directory . "F*.gif");

foreach ($images as $image) {
    echo '    <img src="'.$image.'" alt="" border="0" />
';
}
?>
</p>
<h2>G</h2>
<p>
<?php
$images = glob($directory . "G*.gif");

foreach ($images as $image) {
    echo '    <img src="'.$image.'" alt="" border="0" />
';
}
?>
</p>
<h2>H</h2>
<p>
<?php
$images = glob($directory . "H*.gif");

foreach ($images as $image) {
    echo '    <img src="'.$image.'" alt="" border="0" />
';
}
?>
</p>
<h2>I</h2>
<p>
<?php
$images = glob($directory . "I*.gif");

foreach ($images as $image) {
    echo '    <img src="'.$image.'" alt="" border="0" />
';
}
?>
</p>
<h2>J</h2>
<p>
<?php
$images = glob($directory . "J*.gif");

foreach ($images as $image) {
    echo '    <img src="'.$image.'" alt="" border="0" />
';
}
?>
</p>
<h2>K</h2>
<p>
<?php
$images = glob($directory . "K*.gif");

foreach ($images as $image) {
    echo '    <img src="'.$image.'" alt="" border="0" />
';
}
?>
</p>
<h2>L</h2>
<p>
<?php
$images = glob($directory . "L*.gif");

foreach ($images as $image) {
    echo '    <img src="'.$image.'" alt="" border="0" />
';
}
?>
</p>
<h2>M</h2>
<p>
<?php
$images = glob($directory . "M*.gif");

foreach ($images as $image) {
    echo '    <img src="'.$image.'" alt="" border="0" />
';
}
?>
</p>
<h2>N</h2>
<p>
<?php
$images = glob($directory . "N*.gif");

foreach ($images as $image) {
    echo '    <img src="'.$image.'" alt="" border="0" />
';
}
?>
</p>
<h2>O</h2>
<p>
<?php
$images = glob($directory . "O*.gif");

foreach ($images as $image) {
    echo '    <img src="'.$image.'" alt="" border="0" />
';
}
?>
</p>
<h2>P</h2>
<p>
<?php
$images = glob($directory . "P*.gif");

foreach ($images as $image) {
    echo '    <img src="'.$image.'" alt="" border="0" />
';
}
?>
</p>
<h2>S</h2>
<p>
<?php
$images = glob($directory . "S*.gif");

foreach ($images as $image) {
    echo '    <img src="'.$image.'" alt="" border="0" />
';
}
?>
</p>
<h2>T</h2>
<p>
<?php
$images = glob($directory . "T*.gif");

foreach ($images as $image) {
    echo '    <img src="'.$image.'" alt="" border="0" />
';
}
?>
</p>
<h2>V</h2>
<p>
<?php
$images = glob($directory . "V*.gif");

foreach ($images as $image) {
    echo '    <img src="'.$image.'" alt="" border="0" />
';
}
?>
</p>
<h2>W</h2>
<p>
<?php
$images = glob($directory . "W*.gif");

foreach ($images as $image) {
    echo '    <img src="'.$image.'" alt="" border="0" />
';
}
?>
</p>