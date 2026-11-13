<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting in the elections</title>
</head>
<body>
    <form action="challenge2_34_A.php" method="post">
    <label for="">What party do you want to vote for?</label>
    <input type="text" name="choice">
    <button type="submit">Send</button>
    </form>
    <?php
    $parties = [
      "A" => "the cool pary",
      "B" => "the angry party",
      "C" => "the supercrazy party",
    ];
    $message = "You have voted for ";
    if (isset($_POST["choice"])) {
      $input = $_POST["choice"];

      switch ($input) {
        case "A":
          echo $message . $parties["A"];
          break;
        case "B":
          echo $message . $parties["B"];
          break;

        case "C":
          echo $message . $parties["C"];
          break;

        default:
          echo "Invalid option.";
          break;
      }
    }
    ?>
</body>
</html>