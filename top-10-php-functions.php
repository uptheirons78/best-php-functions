<?php
  // 1. count(); [int] {COUNT_NORMAL, COUNT_RECURSIVE}
  echo '<h3>Function 1: count()</h3>';
  $rock_band = array('iron maiden', 'slayer', 'megadeth', 'tool', 'marillion',
  array('genesis', 'pendragon', 'metallica'));
  echo count($rock_band, COUNT_NORMAL) . '<br>';
  echo count($rock_band, COUNT_RECURSIVE) . '<br>';

  // 2. is_array(); [bool]
  echo '<h3>Function 2: is_array()</h3>';
  $band = 'Iron Maiden';

  function myArr($arr) {
    if(is_array($arr)) {
      echo 'yes, it is an array' . '<br>';
    } else {
      echo 'no, not an array' . '<br>';
    }
  }
  myArr($rock_band);
  myArr($band);

  // 3. substr(); [str] {start, length}
  echo '<h3>Function 3: substr()</h3>';
  $tool = 'Tool is probably one of the best band on Planet Rock of al times!';
  $extract = substr($tool, 0, 12);
  $another_extract = substr($tool, -7);
  echo $extract . '<br>';
  echo $another_extract . '<br>';

  // 4. in_array(); [bool] {STRICT: true or false, default is false}
  echo '<h3>Function 4: in_array()</h3>';
  $some_values = array(1.2, 11, 'bazinga', 'sheldon', false);
  // LOOSE SEARCH
  if(in_array("1.2", $some_values)) {
    echo 'Value found !' . '<br>';
  } else {
    echo 'Value not found' . '<br>';
  }
  // STRICT SEARCH
  if(in_array("1.2", $some_values, true)) {
    echo 'Value found !' . '<br>';
  } else {
    echo 'Value not found' . '<br>';
  }
  // STRICT SEARCH
  if(in_array(1.2, $some_values, true)) {
    echo 'Value found !' . '<br>';
  } else {
    echo 'Value not found' . '<br>';
  }
