<?php

function junk() { return 2; }
function bar() {
  $x = array('y' => junk());
  $x['x'] += 1;
  $val = $x['x'];
  var_dump(is_null($val));
  var_dump(is_array($val));
}
bar();