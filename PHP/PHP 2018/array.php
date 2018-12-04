<!doctype html>
<head>
  <title>Array</title>
</head>


<body>
  <?php

  //sample of an associative Aray:
  $customer['firstname'] = 'John';
  $customer['lastname'] = 'Kay';
  $customer['city'] = 'New York';
  $customer['state'] = 'New York';

  echo "My first name " .$customer['firstname'];
  echo '<br>';

  //Sample of an indexed Array:
  $Scars[0] = 'Ferrari';
  $Scars[1] = 'Porshe';
  $Scars[2] = 'Mustang';
  $Scars[3] = 'Jaguar';
  $Scars[4] = 'Audi';

  echo "My other car is a $Scars[0]\n";
  echo "My other car is a $Scars[3]";
  echo '<br>';

  // Creating asciative array using shorthand:
  $resturant = [
    [
      'name'=> 'Nbu',
      'type'=> 'sushi',
      'price'=> 'Expensive'
    ],

    [
      'name'=> 'Burger King',
      'type'=> 'Fast Food',
      'price'=> 'Cheap'
    ]
  ];

  echo $resturant [0] ['name']. 'is very ' .$resturant [0] ['price'];
  echo '<br>';
  echo $resturant [1] ['name']. 'is very ' .$resturant [1] ['price'];

  ?>
</body>
