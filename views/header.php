<!-- Header Views-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Crud system">
    <meta name="author" content="Arsenii Zima">
    <title>CRUD</title>
    <link rel="stylesheet" type="text/css" href="/resources/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--<<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>-->
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet/less" type="text/css" href="/resources/css/styles.less">
    <script src="/resources/js/less.js" type="text/javascript"></script>-->

    <!--Add for pop-up window-->
    <link href='http://fonts.googleapis.com/css?family=Varela+Round|Open+Sans:400,300,600' rel='stylesheet'
          type='text/css'>

    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#LLink").click(function (event) {
                event.preventDefault();
                $(".overlay").fadeToggle("fast");
            });


            $(".close").click(function () {
                $(".overlay").fadeToggle("fast");
            });

            $(document).keyup(function (e) {
                if (e.keyCode == 27 && $(".overlay").css("display") != "none") {
                    event.preventDefault();
                    $(".overlay").fadeToggle("fast");
                }
            });
        });
    </script>
    <!-- END pop-up-->
</head>
<body>
<!-- Fixed navbar -->
<nav class="navbar navbar-dark bg-primary justify-content-center">
    <a class="navbar-brand" href="#">Crud system for Webince</a>
    <a class="navbar-brand" href="../index.php?page=show">View</a>
    <a class="navbar-brand" href="../index.php?page=create" id="LLink">Add</a>
</nav>



            <!--Pop-up window-->
            <div class="overlay" style="display: none;">
                <div class="login-wrapper">
                    <div class="login-content" id="loginTarget">
                        <a class="close">x</a>
                        <h3>Add Record</h3>
                        <form action="/index.php?page=create" method="post"> <!-- form handler-->
                            <div class="form-group">
                                <label for="name">Name: </label>
                                <input type="text" name="name" class="form-control" id="name" placeholder="Name"
                                       required>
                            </div>
                            <div class="form-group">
                                <label for="birth_year">Birthyear: </label>
                                <input type="text" name="birth_year" class="form-control" id="birth_year"
                                       placeholder="Birthyear" required>
                            </div>
                            <div class="form-group">
                                <label for="nationality">Nationality: </label>
                                <input type="text" name="nationality" class="form-control" id="nationality"
                                       placeholder="Nationality" required>
                            </div>
                            <button type="submit" class="btn btn-success" name="insert_record" id="insert_record">Send
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <!--End pop-up-->

<!-- Page content -->
<div class="container">