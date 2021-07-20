<!DOCTYPE html>
<html lang="en">
<head>
    <!--Required Meta Tag-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Transfer Money</title>
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

    <div class="container user-select-none transfer-money">
        <h2 class="title pt-4 text-primary fw-bold text-center">Transfer Money</h2>
        <p class="lead text-gray-700 text-center">
            Transfer money seamlessly & securely to anyone across any part of globe.
        </p>
        <div class="row">
            <div class="col">
                <div class="table-responsive">
                    <table class="table table-sm table-hover table-striped table-bordered">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col" class="text-center py-2">ID</th>
                                <th scope="col" class="text-center py-2">Name</th>
                                <th scope="col" class="text-center py-2">Email</th>
                                <th scope="col" class="text-center py-2">Balance (INR)</th>
                                <th scope="col" class="text-center py-2">Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
while ($rows = mysqli_fetch_assoc($result)) {
    ?>
                            <tr>
                                <td class="text-center py-2"><?php echo $rows['id'] ?></td>
                                <td class="text-center fw-bold py-2"><?php echo $rows['user_name'] ?></td>
                                <td class="text-center text-primary py-2"><?php echo $rows['user_email'] ?></td>
                                <td class="text-center text-success fw-bold py-2"><?php echo "Rs. " . $rows['current_bal'] ?></td>
                                <td class="text-center py-2"><a href="selectuserdetail.php?id= <?php echo $rows['id']; ?>"><button type="button" class="transfer-btn btn btn-primary">Transfer</button></a></td>
                            </tr>
                            <?php
}
?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <?php
include 'footer.html';
?>
    <!--My Scripts-->
    <script src="./js/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
