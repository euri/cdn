<?php
    $directory = "wishcards/";
?>
<h1>Wishcards</h1>
<p>
<?php
$images = glob($directory . "*.*", GLOB_BRACE);

foreach ($images as $image) {
    echo '    <img src="'.$image.'" alt="" border="0" />
';
}
?>
</p>