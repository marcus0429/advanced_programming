<!DOCTYPE html>
<?
  // Creator : Marcus Kim Vibal Manuel
  // Date Created : November 1, 2020
  // Subject : Advance Programming
  // Professor : Ms. Blances Sanchez
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <style media="screen">
    h1{
      position: relative; left:70px; top:150px;
      color: black;
    }
    #form1{
      position: relative; left: 500px;
    }
    #form2{
      position: relative; left: 800px; top:-290px;
    }
    </style>
  </head>
  <body>
    <h1>Marcus Kim Manuel</h1>
    <form class="form" id="form1" method="post">
      <h2>Calculator</h2>
      Input first number<br><br>
      <input type="text" name="num1" id="num1" >
      <br><br>Input Second number<br><br>
      <input type="text" name="num2" id="num2" ><br><br>
      <input type="submit" name="add" value="+">
      <input type="submit" name="minus" value="-">
      <input type="submit" name="multiply" value="*">
      <input type="submit" name="divide" value="/">
      <br><br>Answer
      <textarea name="name" onfocus="this.value=''" rows="1" cols="20">
        <?php
        if(isset($_POST['add'])){
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $add = $num1 + $num2;
            echo $add;
        }
        if(isset($_POST['minus'])){
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $minus = $num1 - $num2;
            echo $minus;
        }
        if(isset($_POST['multiply'])){
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $multiply = $num1 * $num2;
            echo $multiply;
        }
        if(isset($_POST['divide'])){
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $divide = $num1 / $num2;
            echo $divide;
        }
         ?>

      </textarea>
    </form>
    <form action="#" id="form2" method="post">
      <h2>Finding GCD</h2>
      Input first number<br><br>
      <input type="text" name="number1" >
      <br><br>Input second number<br><br>
      <input type="text" name="number2" ><br><br>
      <input type="submit" name="gcd" value="Submit">
      <br><br>Answer
      <textarea name="name1" onfocus="this.value=''" rows="1" cols="40">
        <?php
        if(isset($_POST['gcd'])){
            $number1 = $_POST['number1'];
            $number2 = $_POST['number2'];
            $gcd = $_POST['gcd'];
            if($number1 > $number2){
                $temp = $number1;
                $number1 = $number2;
                $number2 = $temp;
            }
            for($i = 1; $i < ($number1+1); $i++ ){
                if ($number1%$i == 0 and $number2%$i == 0)
                   $gcd = $i;
            }
            echo "The GCD of $number1 & $number2 is: ".$gcd;
        }
         ?>
      </textarea>
    </form>
  </body>
</html>
