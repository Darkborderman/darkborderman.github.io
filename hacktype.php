
<!DOCTYPE html>
<html>
    <?php
      $place=htmlspecialchars($_REQUEST['place']);
      $text=file_get_contents('./test.txt');
      $comp1="{";
      $comp2="}";
      $comp3=";";
      $comp4=">";
      $comp5=" ";
      echo $text[$place];
      if($text[$place]==$comp1)
      {
                    echo "<br/>";
      }
      if($text[$place]==$comp2)
      {
                    echo "<br/>";
      }
      if($text[$place]==$comp3)
      {
                    echo "<br/>";
      }
      if($text[$place]==$comp4)
      {
                    echo "<br/>";
      }
      if($text[$place]==$comp5)
      {
          echo "&nbsp;";
      }
      else
      {
      }
    ?>
</html>
