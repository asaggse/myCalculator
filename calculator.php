<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="UTF-8">
      <title>My Calculator</title>
   </head>
   <body>
      <form>
         <input type="text" name="num01" placeholder="Number 1">
         <input type="text" name="num02" placeholder="Number 2">
         <select name="operator">
            <option value="None">None</option>
            <option value="Add">Add</option>
            <option value="Subtract">Subtract</option>
            <option value="Multiply">Multiply</option>
            <option value="Divide">Divide</option>
         </select>
         <br>
         <button type="submit" name="submit" value="submit">Calculate!</button>
      </form>

      <p>The answer is:</p>
      
      <?php
         if (isset($_GET['submit'])) {
            $result1 = $_GET['num01'];
            $result2 = $_GET['num02'];
            $operator = $_GET['operator'];
            switch ($operator) {
               case "None": 
                  echo "You need to select an operation!";
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
