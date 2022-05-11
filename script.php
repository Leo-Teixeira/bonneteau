<?php
    $redcard=0;
    extract $_POST;
    function shuffle()
    {
        $allcards = $_POST['card-img'];
        $allcards[$redcards]->setAttribute('src', 'images/black.png');
        $random = rand(0, count($allcards));
        $card = $allcards[$random];
        $card->setAttribute('src', 'images/red.png');
        $redcard = $random;
    }
    function flip($event)
    {
        $element = imagecreatefrompng('src', 'images/dos.png');
        imagepng($element);
        if($redcard == 0)
        {
            $element = imagecreatefrompng('src', 'images/black.png');
            imagepng($element);
        }
    }
?>