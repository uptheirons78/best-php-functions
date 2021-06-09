<?php
  // 11. preg_match(); Perform a regular expression match
  // first arg: the pattern to find inside a string (regex);
  // second arg: the string where to find the pattern;
  // third arg (optional): an array filled with the results of search;
  echo '<h3>Function 11: preg_match()</h3>';
  $string = 'Pink Floyd really changed the music world!';
  $match = '/pink floyd/i';
  preg_match($match, $string, $array);
  print_r($array);
  echo '<br>';
  $my_url = 'https://www.mulphy.com';
  if (preg_match('/mulphy/i', $my_url)) {
    echo "Yes $my_url contains the word mulphy";
  } else {
    echo "No, I didn't find mulphy inside the string!";
  }

  // 12. sprintf(); It returns a formatted string
  // Attention: An integer followed by a dollar sign $, to specify which number argument
  // to treat in the conversion
  echo '<h3>Function 12: sprintf()</h3>';
  $number = 12;
  $animal = 'monkeys';
  $formatted_string = 'There are %1$d funny %2$s sitting on a tree';
  echo sprintf($formatted_string, $number, $animal) . '<br>';

  // 13. trim(); It returns string removing white spaces in the beginning and at the end of the string
  // Attention: ltrim() remove whitespaces from the beginning
  // Attention: rtrim() remove whitespaces from the end
  echo '<h3>Function 13: trim()</h3>';
  $hello_world = "   Hello World  ";
  $trimmed = trim($hello_world);
  echo $trimmed . "<br>";

?>