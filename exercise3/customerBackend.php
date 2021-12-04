<html>

<head>
  <link rel="stylesheet" type="text/css" href="style.css" >

 <title>PHP Quiz</title>

</head>

<body>



<?php

    $username = $_POST['username'];
    $password = $_POST['password'];
    $item1 = $_POST['item1'];
    $item2 = $_POST['item2'];
    $item3 = $_POST['item3'];
    $item1Quantity = $_POST['item1Quantity'];
    $item2Quantity = $_POST['item2Quantity'];
    $item3Quantity = $_POST['item3Quantity'];
    $shippingOption = $_POST['shippingOption'];

    echo "<h1> Food Store </h1> ";
    echo "<div id='heading'> </div> ";
    echo "<h2>Welcome to the store! Your password is: $password</h2><br>";

    echo "Receipt:<br>";
    echo "--------------------------------------------------------<br>";

    if ($item1=='yes')
    {
      echo "Chocolate quantity: $item1Quantity<br>";
      echo "Cost per Chocolate: 5 dollars";
      $subtotalItem1 = $item1Quantity*5;
      echo "<br>";
      echo "Subtotal for Chocolate: $subtotalItem1<br>";
      echo "---------------<br>";
    }

    if ($item2=='yes')
    {
      echo "Bananas quantity: $item1Quantity<br>";
      echo "Cost per Banana: 2 dollars";
      $subtotalItem2 = $item2Quantity*2;
      echo "<br>";
      echo "Subtotal for Banana: $subtotalItem2<br>";
      echo "---------------<br>";
    }

    if ($item3=='yes')
    {
      echo "Drink quantity: $item3Quantity<br>";
      echo "Cost per Drink: 3 dollars";
      $subtotalItem3 = $item3Quantity*3;
      echo "<br>";
      echo "Subtotal for Drink: $subtotalItem3<br>";
      echo "---------------";
    }

    $TotalCost= $subtotalItem1 + $subtotalItem2 + $subtotalItem3;
    echo "<br>";
    echo "Total Cost: $TotalCost<br>";

    echo "Shipping Service: $shippingOption<br>";

    echo "----------------------------------------------------------------<br>";






?>


</div>

</body>

</html>
