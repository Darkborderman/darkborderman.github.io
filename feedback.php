
<!DOCTYPE html>
<html>
    <?php
      $sender=htmlspecialchars($_REQUEST['sender']);
      $message=htmlspecialchars($_REQUEST['message']);
      $httpfile=fopen("message.txt","a+");
      fwrite($httpfile,"sender: ");
      fwrite($httpfile,$sender);
      fwrite($httpfile,"\n message: ");
      fwrite($httpfile,$message);
      fwrite($httpfile,"\n");
      fclose($httpfile);

      echo "$sender <br>";
      echo "$message";
    ?>
</html>
