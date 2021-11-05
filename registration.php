<? include 'db.php' ?>

<html>

<head>
    <title>Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body class="quiz-body">
    <div class="container-fluid col-3">


        <div class="position-relative form-container">
            <form method="POST" action="create.php">
                <div class="form-group p-2">
                    <label for="username" class="p-1">Username</label>
                    <input type="text" class="form-control" name="username" placeholder="Enter Username" required>

                </div>
                <div class="form-group p-2">
                    <label for="password" class="p-1">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                </div>
                <div class="text-center">
                    <small id="emailHelp" class="form-text text-muted p-2">Never share your login credentials with anyone else.</small><br>
                </div>
                <div class="text-center mt-3">
                    <button type="submit" class="btn btn-primary btn-block px-4" name="submit">Create Account</button>
                </div>

            </form>



        </div>

    </div>


</body>

</html>