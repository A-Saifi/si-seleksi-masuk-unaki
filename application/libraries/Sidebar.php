<?php
/**
 *
 */
class Sidebar
{

  function active($num_sidebar, $number)
  {
    if ($num_sidebar==$number) { return "active"; }
  }

  function active_tree($num_sidebar, $number1, $number2)
  {
    if ($num_sidebar>$number1 && $num_sidebar<$number2) { return "active"; }
  }

}

?>
