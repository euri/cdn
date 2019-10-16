<?php
    $directory = "completed/";
    $cards = array_filter(glob($directory.'*'), 'is_dir');
    sort($cards);
?>
<p>Total mastercards: <?php echo count($cards); ?></p>
<p><a href="mastercards.php">&laquo; back</a></p>
<?php
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
<div class="item">
    <h2><a href="javascript:void(0);"><?php echo $display_key; ?></a></h2>
    <div class="itemcont">
        <p>
    <?php foreach ($display_value as $display_card) {
        $display_card_code = explode("_", $display_card);
        ?>
        <a href="mastercards.php?c=<?php echo $display_card; ?>"><img src="<?php echo $directory . $display_card . '/x' . $display_card_code[0] . '_MASTERCARD.gif' ?>" alt="" border="0" /></a>
    <?php } ?>
    </p>
    </div>
</div>
<?php
        }
    }
?>