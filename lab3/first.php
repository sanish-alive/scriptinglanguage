<?php

if(isset($_POST['submit'])){
  include "second.php";

  $n1 = $_POST['a'];
  $n2 = $_POST['b'];
  $ch = $_POST['c'];
  switch ($ch) {
    case '1':
      $result = addition($n1,$n2);
      break;

    case '2':
      $result = subtraction($n1,$n2);
      break;

    case '3':
      $result = multiplication($n1,$n2);
      break;

    case '4':
      $result = division($n1,$n2);
      break;
    
    
  }
}


?>



<html>
  <body>
    <form action="#" method="POST">
      <table border="1">
        <tr>
          <td>Enter first number :</td>
          <td>
            <input type=text name=a>
          </td>
        </tr>
        <tr>
          <td>Enter second number:</td>
          <td>
            <input type=text name=b>
          </td>
        </tr>
        <tr>
          <td> Operation::</td>
          <td>
            <input type=radio name=c value=1>Addition.
          </td>
          <td>
            <input type=radio name=c value=2>Subtraction.
          </td>
          <td>
            <input type=radio name=c value=3>Multiplication.
          </td>
          <td>
            <input type=radio name=c value=4>Division.
          </td>
        </tr>
        <tr>
          <td>
            <input type=submit name=submit>
          </td>
          <td>
            <input type=reset value=clear>
          </td>
        </tr>
      </table>
    </form>
    <span>Result:</span><?php echo "$result" ?>
  </body>
</html>