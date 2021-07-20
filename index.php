<?php
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!--Required Meta Tag-->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Sparks Indian Bank</title>
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
include 'navbar.php';
?>

  <section class="welcome pt-4 pt-md-11" id="welcome">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-12 col-md-5 col-lg-6 order-md-2">

          <!-- Image -->
          <img src="./img/bank.png" class="img-fluid mw-md-150 mw-lg-130 mb-6 mb-md-0" alt="">

        </div>
        <div class="col-12 col-md-7 col-lg-6 order-md-1">

          <!-- Heading -->
          <h1 class="display-3 text-center text-md-start">
            Welcome to <span class="text-primary fw-bold">Sparks Indian Bank</span><br>
            Tranfer anywhere.
          </h1>

          <!-- Text -->
          <p class="lead text-center text-md-start text-muted mb-6 mb-lg-8">
            You'll never struggle to transfer money in secured way.
          </p>

          <!-- Buttons -->
          <div class="text-center text-md-start">
            <a href="#features" class="btn btn-primary shadow lift me-1">
              Our Features <i class="fas fa-arrow-right d-none d-md-inline ms-3"></i>
            </a>
          </div>

        </div>
      </div> <!-- / .row -->
    </div> <!-- / .container -->
  </section>

  <!-- Features -->
  <section class="features mt-2 py-8 py-md-11 border-bottom" id="features">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-md-10 col-lg-8 text-center">

          <!-- Heading -->
          <h1 class="text-primary fw-bold">
            Awesome features for needs
          </h1>

          <!-- Text -->
          <p class="lead text-gray-700">
            Everyone needs access to bank resources, so we give you what you need.
          </p>
        </div>
      </div>
      <div class="row mt-2 justify-content-center">

        <div class="col-10 col-lg-3 mb-4 card rounded-4">
          <!-- pic -->
          <img src="./img/customers.png" class="card-img-top img-fluid  rounded" alt="users">

          <div class="card-body">
            <!-- Heading -->
            <h4 class="card-title">Our Customers</h4>
            <!-- Text -->
            <p class="card-subtitle text-muted">Satisfied customers from across globe.</p>
          </div>
          <div class="card-footer bg-light">
            <a class="link-primary py-1 px-2" href="./customers.php"><small class="text-primary fw-bold">View
                Customers<i class="fas fa-user-circle ms-2"></i></small></a>
          </div>
        </div>

        <div class="col-10 col-lg-3 mb-4 card rounded-4">
          <!-- pic -->
          <img src="./img/transfer_money.png" class="card-img-top img-fluid  rounded" alt="users">

          <div class="card-body">
            <!-- Heading -->
            <h4 class="card-title">Transfer Money</h4>
            <!-- Text -->
            <p class="card-subtitle text-muted">Transfer money seamlessly & securely across any part of globe.</p>
          </div>
          <div class="card-footer bg-light">
            <a class="link-primary py-1 px-2" href="./transfer.php"><small class="text-primary fw-bold">Transfer
                Money<i class="far fa-money-bill-alt ms-2"></i></small></a>
          </div>
        </div>

        <div class="col-10 col-lg-3 mb-4 card rounded-4">
          <!-- pic -->
          <img src="./img/transactions.png" class="card-img-top img-fluid  rounded" alt="users">

          <div class="card-body">
            <!-- Heading -->
            <h4 class="card-title">Transaction History</h4>
            <!-- Text -->
            <p class="card-subtitle text-muted">View every transaction anytime.</p>
          </div>
          <div class="card-footer bg-light">
            <a class="link-primary py-1 px-2" href="./transactionshist.php"><small class="text-primary fw-bold">View
                History<i class="far fa-list-alt ms-2"></i></small></a>
          </div>
        </div>
      </div> <!-- / .row -->
    </div> <!-- / .container -->
  </section>

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