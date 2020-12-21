<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Todo list</title>
    <link rel="stylesheet" href="./css/bootstrap.css">
</head>

<body>

    <div class="container">
        <div class="row justify-content-center pt-5">
            <div class="col-11 col-sm-10 col-md-6 col-lg-5 col-xl-5">
              <!-- require list -->
              <?php require './templates/list.php';  ?>
            </div>
            <div class="col-11 col-sm-10 col-md-6 col-lg-7 col-xl-7 mt-4 mt-sm-4 mt-md-0 mt-lg-0 mt-xl-0">
                <div class="row">
                    <div class="col-12">
                        <div class="jumbotron bg-warning p-5">
                            <h2><b>Enter todo item</b></h2>
                        </div>
                    </div>
                    <div class="col-12">
                        <!-- require form -->
                        <?php require './templates/form.php';  ?>
                    </div>
                </div>

            </div>
        </div>
    </div>


</body>

</html>