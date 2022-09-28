<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title></title>
   </head>
   <body>
      <!-- <form action="functions.php" method="get"> -->
      <form>
         <input type="text" name="num01" placeholder="Number 1">
         <input type="text" name="num02" placeholder="Number 2">
         <select name="operator">
            <label>Choose oparation!</label>
            <option value="">None</option>
            <option value="">Add</option>
            <option value="">Subtract</option>
            <option value="">Multiply</option>
            <option value="">Divide</option>
         </select>
         <br>
         <button type="submit" name="submit" value="submit">Calculate!</button>
      </form>
      <p>The answer is:</p>
      <?php
         if (isset($_GET['submit'])) {
            $result1 = $_GET['num1'];
            $result = $_GET['num2'];
            $operator = $_GET['operator'];
            switch ($operator) {
               case "None": 
                  echo "You need to select a method!";
               break;
               case "Add": 
                  echo $result1 + $result2;
               break;
               case "Subtract": 
                  echo $result1 - $result2;
               break;
               case "Multiply": 
                  echo $result1 * $result2;
               break;
               case "Divide": 
                  echo $result1 / $result2;
               break;
            }
         }
      ?>

   </body>
</html>
