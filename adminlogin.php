<html>
<head>
    <title>Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="quiz-body">
    <div class="container-fluid col-3">
        <div class="position-relative form-container text-center">
            <div class="pb-3">Welcome to admin panel.</div>
            <form method="GET" action="deletequestion.php">
                <button type="submit" class="btn btn-danger" name="submit">Delete questions</button>
            </form>
            <a href="login.php" class="btn btn-secondary my-3 " role="button">Logout</a>
        </div>
    </div>
</body>
</html>