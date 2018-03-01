
<!DOCTYPE html>
<html>
  <body>
    <?php
      $name=$_REQUEST['Name'];
      $year=$_REQUEST['Year'];
      $year=2017-(int)$year;
      echo "$name is $year years old!";
    ?>
  </body>
</html>
