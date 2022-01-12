<!DOCTYPE html>
<html lang="en">
<?php 
    include('./php/bucles.php');
    ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto Marco</title>

    <!-- boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <!-- CSS -->
    <link rel="stylesheet" href="./css/styles.css">

</head>


<body>
    <div class="btn-group">
        <div class="btn">1</div>
        <div class="btn">2</div>
        <div class="btn">3</div>
        <div class="btn"><?php echo $nombreVariable?></div>
    </div>



    <footer class="mt-5">
        <div class="row bg-black p-3 justify-content-center align-items-center">
            <div class="col">
                <p class=" d-block text-white text-center ">Create for Marco Vinicio Yanchapanta </p>

            </div>
        </div>
    </footer>







</body>

</html>