<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AGE CHECKER</title>
</head>

<body>
    <H3>AGE VERIFICATION</H3>
    <form action="" method="POST">
        <label for="age">Enter Your Age Here :</label>
        <input type="number" name="age" id="age" required>
        <button type="submit">Submit</button>
    </form>

    <?php
    //process form data if submitted
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $age = $_POST['age'];
    }
    ?>

    <?php
    //conditions
    if ($age >= 45) {
        $message = "you are old";
    } elseif ($age >= 18) {
        $message = 'you are adult';
    } elseif ($age >= 13) {
        $message = 'you are teenager';
    } elseif ($age <= 0) {
        $message = "Enter valid age.";
    } else {
        $message = 'you are minor';
    }

    ?>

    <?php if (isset($message)) ?>
    <p><strong>
    <?php echo $message ?>
    </strong></p>

</body>

</html>