<?php
    $directory = "trade/";
    $cards = glob($directory."*.{jpg,gif,png}", GLOB_BRACE);
    $display_cards = new stdClass;
    
    foreach ($cards as $card) {
        $card = substr($card, strlen($directory));
        $letter = $card[0];
        //var_dump($letter);
        //var_dump($card);

        $display_cards[$letter] = array (
            'apple' => 'good',
            'orange' => 'great'
        );

    }

    var_dump($display_cards);

?>