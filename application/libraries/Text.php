<?php
/**
 *
 */
class Text
{
  function pemendek($text, $panjang)
  {

    if(strlen($text) > $panjang) {
      return substr($text, 0, $panjang).' ...';
    }
    else {
      return $text;
    }

  }
}

?>
