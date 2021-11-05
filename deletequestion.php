<?php
include 'db.php';
?>

<?php

$query = "SELECT * FROM questions";
$result = mysqli_query($connection, $query);

?>

<html>

<head>
    <title>Delete Question</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body class="container form-container">
    <?php
    while ($row = mysqli_fetch_assoc($result)) {
    ?> <div class="p-0 m-1">

            <div class="d-flex">
                <div class="pt-3">
                    <?php
                    echo ($row['question_number']);
                    echo (". ");
                    echo ($row['question_description']);

                    ?>
                </div>
                <div class="p-2">
                    <form method="POST" action="delete.php">
                        <button type="submit" class="btn btn-danger" >Delete this question</button>
                        <input type="hidden" name="number" value="<?php echo ($row['question_number']); ?>">
                    </form>
                </div>

            </div>
        </div>
    <?php
    }
    ?>
    <a href="adminlogin.php" class="btn btn-secondary my-3 " role="button">Back</a>
</body>


</html>