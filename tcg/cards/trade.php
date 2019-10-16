<h1>Want to Trade</h1>
<?php
    $directory = "trade/";
    $cards = glob($directory."*.{jpg,gif,png}", GLOB_BRACE);
    $display_cards = array();

    foreach ($cards as $card) {
        $card = substr($card, strlen($directory));
        $letter = strtoupper($card[0]);

        if(empty($display_cards[$letter])) {
            $display_cards[$letter] = array();
        }

        array_push($display_cards[$letter], $card);
    }

    if(!empty($display_cards)) {
        foreach ($display_cards as  $display_key => $display_value) { ?>
<h2><?php echo $display_key; ?></h2>
<p>
<?php foreach ($display_value as $display_card) { ?>
    <img src="<?php echo $directory . $display_card; ?>" alt="" width="55" height="70" border="0" />
<?php } ?>
</p>
<?php
        }
    }
?>