<p>&nbsp;<p>

<?php

$beatles = array(
  'John Lennon',
  'Paul McCartney',
  'George Harrison',
  'Ringo Starr',
  'Pete Best',
  'Stuart Sutcliffe'
);

//move Ringo to the front of the array
foreach ($beatles as $v) {

    if ($v === "Ringo Starr") {

      //search for Ringo
      $key = array_search('Ringo Starr', $beatles);

      //grab Ringo's position in array
      $moveRingo = $beatles[$key];

      //move Ringo to front of beatles array 
      unset($beatles[$key]);
      array_unshift($beatles, $moveRingo);
      print_r($beatles);
    }
}
?>
<p>&nbsp;</p>

<!-- JS -->

<script>
const js_beatles = [
  'John Lennon',
  'Paul McCartney',
  'George Harrison',
  'Ringo Starr',
  'Pete Best',
  'Stuart Sutcliffe'
];

const moveFirst = "Ringo Starr";
js_beatles.sort(function(x,y){
  return x == moveFirst ? -1 : y == moveFirst ? 1 : 0;
});

console.log(js_beatles);

</script>
