<?php
    $directory = "wishcards/";
    $cdn_url = "https://cdn.beyondeternal.com/tcg/cards/";
?>
<h1>Wishcards</h1>
<p>
<?php
$images = glob($directory . "*.*", GLOB_BRACE);

foreach ($images as $image) {
    echo '    <img src="'.$cdn_url.$image.'" alt="" border="0" />
';
}
?>
</p>