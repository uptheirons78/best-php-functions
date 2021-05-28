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

  // 5. explode(); [array]
  echo '<h3>Function 5: explode()</h3>';
  $list = 'red, yellow, orange, green, blue, white, black';
  $list_two = 'red|yellow|orange|green|blue|white|black';
  $result = explode(', ', $list);
  print_r($result);
  echo '<br>';
  $result_two = explode('|', $list_two);
  print_r($result_two);
  echo '<br>';

  // 6. str_replace(); [str]
  echo '<h3>Function 6: str_replace()</h3>';
  $html = '<p>this is a html paragraph</p>';
  $color = 'green';
  echo str_replace('<p>', "<p style='color:{$color};'>", $html);
  $vowels = 'a,e,i,o,u,A,E,I,O,U';
  $vowels_arr = explode(',', $vowels);
  $names_list = 'John, Jack, Jiuliet';
  echo str_replace($vowels_arr, '*', $names_list);

  // 7. implode(); [str]
  echo '<h3>Function 7: implode()</h3>';
  echo implode(', ', $vowels_arr) . '<br>';

  // 8. strlen(); [int]
  echo '<h3>Function 8: strlen()</h3>';
  echo strlen($html) . '<br>';

