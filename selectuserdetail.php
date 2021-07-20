<?php
include 'config.php';

if (isset($_POST['submit'])) {
    $from = $_GET['id'];
    $to = $_POST['pay-to'];
    $amount = $_POST['amount'];

    $sql = "SELECT * from users where id=$from";
    $query = mysqli_query($conn, $sql);
    $sql1 = mysqli_fetch_array($query);

    $sql = "SELECT * from users where id=$to";
    $query = mysqli_query($conn, $sql);
    $sql2 = mysqli_fetch_array($query);

    if (($amount) < 0) {
        echo '<script type="text/javascript">alert("Oops! Negative values cannot be transferred")</script>';
    } else if ($amount > $sql1['current_bal']) {
        echo '<script type="text/javascript">alert("Bad luck! Insufficient Balance")</script>';
    } else if ($amount == 0) {
        echo '<script type="text/javascript">alert("Oops! Zero value cannot be transferred")</script>';
    } else {
        $newbalance = $sql1['current_bal'] - $amount;
        $sql = "UPDATE users set current_bal=$newbalance where id=$from";
        mysqli_query($conn, $sql);

        $newbalance = $sql2['current_bal'] + $amount;
        $sql = "UPDATE users set current_bal=$newbalance where id=$to";
        mysqli_query($conn, $sql);

        $sender = $sql1['user_name'];
        $receiver = $sql2['user_name'];
        $sqli = "INSERT INTO transactions (`sender`,`receiver`,`amount`) VALUES('$sender','$receiver','$amount')";
        $query = mysqli_query($conn, $sqli);

        if ($query) {
            echo '<script type="text/javascript">alert("Transaction Successful");window.location.href = "./transactionshist.php";</script>';
        }
        $newbalance = 0;
        $amount = 0;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!--Required Meta Tag-->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Select User</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!--MY CSS-->
  <link rel="stylesheet" href="scss/style.css">
</head>

<body>
  <!-- Tranfer -->
  <div class="trans-container container user-select-none ">
    <h2 class="title pt-5 text-primary fw-bold text-center">Transfer Money</h2>
    <p class="lead text-gray-700 text-center">
      Transfer money seamlessly & securely to anyone across any part of globe.
    </p>
    <?php
include 'config.php';
$sid = $_GET['id'];
$sql = "SELECT * FROM  users where id=$sid";
$result = mysqli_query($conn, $sql);
if (!$result) {
    echo "Error : " . $sql . "<br>" . mysqli_error($conn);
}
$rows = mysqli_fetch_assoc($result);
?>
    <div
      class="trans-content row g-4 my-2  px-2 pb-4 border border-2 border-muted rounded-3 bg-light bg-darken-xs shadow">
      <h2 class="text-primary text-center fw-bold">Sparks Payment Service</h2>
      <div class="col-md-6 col-lg-5 order-md-last">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-primary">Your info</span>
        </h4>
        <ul class="list-group mb-3  border border-1 border-info rounded-3">
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0 fw-bolder text-primary">Your Id</h6>
              <small class="text-muted">Unique user id</small>
            </div>
            <span class="text-muted">
              <?php echo $rows['id'] ?>
            </span>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0 fw-bold">Name</h6>
              <small class="text-muted">eg: John</small>
            </div>
            <span class="text-muted fw-bold">
              <?php echo $rows['user_name'] ?>
            </span>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0 fw-bold">Email</h6>
              <small class="text-muted">eg: johnsmith11@gmail.com</small>
            </div>
            <span class="text-muted fw-bold fst-italic">
              <?php echo $rows['user_email'] ?>
            </span>
          </li>
          <li class="list-group-item d-flex justify-content-between text-success fw-bolder">
            <span class="text-primary">Balance (INR)</span>
            <span>
              <?php echo "Rs. " . $rows['current_bal'] ?>
            </span>
          </li>
        </ul>
      </div>
      <div class="col-md-6 col-lg-7">
        <h4 class="mb-3 fw-bold">Transfer To :</h4>
        <form class="needs-validation" novalidate="" method="post" name="tcredit">
          <div class="row g-3">
            <div class="col-12">
              <label for="username" class="form-label fw-bold text-primary">Username</label>
              <div class="input-group has-validation">
                <span class="input-group-text">@</span>
                <select class="form-select fw-bold" name="pay-to" id="username" placeholder="Select name to transfer"
                  required>
                  <option disabled selected>Select Name...</option>
                  <?php
include 'config.php';
$sid = $_GET['id'];
$sql = "SELECT * FROM users where id!=$sid";
$result = mysqli_query($conn, $sql);
if (!$result) {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
while ($rows = mysqli_fetch_assoc($result)) {
    ?>
                  <option value="<?php echo $rows['id']; ?>">

                    <?php echo $rows['user_name']; ?>
                    <!-- <?php echo $rows['user_name']; ?> (Balance:
                    <?php echo "Rs. " . $rows['current_bal']; ?> ) -->

                  </option>
                  <?php
}
?>
                </select>
                <div class="invalid-feedback">
                  Please select desired name.
                </div>
              </div>
            </div>
            <div class="col-md-5">
              <label for="amount" class="form-label fw-bold text-primary">Amount</label>
              <div class="input-group mb-1">
                <span class="input-group-text text-success">INR</span>
                <span class="input-group-text text-success">Rs.</span>
                <input type="text" class="form-control" id="amount" name="amount" placeholder="Enter Amount" required>
              </div>
              <div class="invalid-feedback">
                Please enter valid amount.
              </div>
            </div>
          </div>
          <hr class="my-4">

          <div class="d-flex justify-content-evenly">
            <button class="btn btn-primary btn-mg" name="submit" type="submit" id="myBtn">Transfer</button>
            <button class="btn btn-primary btn-mg" name="reset" type="reset" id="rcBtn" onclick="resetFn()">Cancel</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!--My Scripts-->
  <script src="./js/app.js"></script>
  <script>
    function resetFn(){
      window.location.href = "./transfer.php";
    }
  </script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>

</body>

</html>