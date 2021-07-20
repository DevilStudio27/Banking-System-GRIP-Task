<!DOCTYPE html>
<html lang="en">

<head>
    <!--Required Meta Tag-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Our Customers</title>
    <!--MY CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="scss/style.css">
</head>

<body>
    <?php
include 'config.php';
include 'navbar.php';
$sql = "select * from users";
$result = mysqli_query($conn, $sql);
?>

    <div class="container user-select-none customers mt-6">
        <div class="row justify-content-center align-items-center">
            <img src="./img/view_customer.png" alt="" class="img-fluid hero-img w-50">
            <h2 class="title pt-1 text-primary fw-bold text-center">Our Customers</h2>
            <p class="lead text-gray-700 text-center">
                People Connected with us from overall globe.
            </p>
        </div>
        <hr class="my-4 bg-primary">
        <div class="cust-row row row-cols-1 row-cols-sm-auto justify-content-flex-start align-items-center">
            <?php
while ($rows = mysqli_fetch_assoc($result)) {
    ?>
            <div class="col card border-primary shadow-sm mx-2 my-2 p-0">
                <div class="card-header border-primary text-primary">
                    <h3>
                        <?php echo "ID: " . $rows['id'] ?>
                    </h3>
                </div>
                <div class="card-body">
                    <p class="card-title fw-bold text-primary">
                        <?php echo "Name: " . $rows['user_name'] ?>
                    </p>
                    <p class="card-subtitle text-primary fst-italic">
                        <?php echo "Email: " . $rows['user_email'] ?>
                    </p>
                </div>
                <div class="card-footer border-success">
                    <p class="text-success fw-bold">
                        <?php echo "Balance: Rs." . $rows['current_bal'] ?>
                    </p>
                </div>
            </div>
            <?php
}
?>
        </div>
    </div>
    <?php
include 'footer.html';
?>
    <!--My Scripts-->
    <script src="./js/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
</body>

</html>