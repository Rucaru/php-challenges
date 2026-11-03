<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>How Did You Hear About Us?</title>
</head>
<body>
     <form action="challenge2_28.php" method="post">
        <div>
        <label for="name">Full Name:</label>
        <input type="text" name="fullName">
        </div>
       <fieldset>
  <legend>How Did You Hear About Us?</legend>

  <label>
    <input type="checkbox" name="hower[]" value="Search Engine">
    Search engine
  </label>

  <label>
    <input type="checkbox" name="hower[]" value="Social Media">
    Social media
  </label>

  <label>
    <input type="checkbox" name="hower[]" value="Friends">
    Friends or Family
  </label>

  <label>
    <input type="checkbox" name="hower[]" value="AI">
    AI
  </label>

  <label>
    <input type="checkbox" name="hower[]" value="Other">
    Other
  </label>
    </fieldset>
    <button type="submit">Submit</button>


    </form>
    <?php if (isset($_POST["hower"]) && isset($_POST["fullName"])) {
      echo $_POST["fullName"] . " heard about us through: <br>";
      $answers = $_POST["hower"];
      foreach ($answers as $answer) {
        echo "$answer <br>";
      }
    } else {
      echo "You have not selected any check";
    } ?>
</body>
</html>