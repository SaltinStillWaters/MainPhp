<?php
    require('backend.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    
<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">

    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name" required><br><br>
    <span style="color: red;"> <?php global $ErrMsgs; echo $ErrMsgs['name']; ?> <br><br></span>

    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" required><br><br>

    <input type="submit" value="Submit">

</form>

</body>
</html>