<?php require_once "pdo.php";
if(isset($_POST['transfer'])){
  $from = $_GET['id'];
  $to = $_POST['to'];
  $amount = $_POST['amount'];

  $stmt = $pdo->query("SELECT * FROM users where id = $from");
  $sender = $stmt->fetch(PDO::FETCH_ASSOC);

  $stmt = $pdo->query("SELECT * FROM users where id = $to");
  $receiver = $stmt->fetch(PDO::FETCH_ASSOC);

  if($amount < 0){
    echo '<script type="text/javascript">';
    echo ' alert("Please enter a positive value")';
    echo '</script>';
  }
  else if($amount == 0){
    echo '<script type="text/javascript">';
    echo ' alert("Please enter a value greater than 0")';
    echo '</script>';
  }
  else if($amount > $sender['balance']){
    echo '<script type="text/javascript">';
    echo ' alert("Transaction failed. Insufficient balance")';
    echo '</script>';
  }
  else {
    $newbalance = $receiver['balance'] + $amount;
    $stmt = $pdo->prepare("UPDATE users set balance = :newbalance where id = :to");
    $stmt->execute(array(':newbalance'=>$newbalance, ':to'=>$to));

    $newbalance = $sender['balance'] - $amount;
    $stmt = $pdo->prepare("UPDATE users set balance = :newbalance where id = :from");
    $stmt->execute(array(':newbalance'=>$newbalance, ':from'=>$from));

    $sender_name = $sender['name'];
    $receiver_name = $receiver['name'];
    $stmt = $pdo->prepare("INSERT INTO transaction(sender,receiver,amount) VALUES (:sender_name,:receiver_name,:amount)");
    $stmt->execute(array(':sender_name'=>$sender_name, ':receiver_name'=>$receiver_name, ':amount'=>$amount));

    echo " <script>
    alert('Transaction Successfull');
    window.location.href='history.php'; 
    </script>";

    $newbalance = 0;
    $amount = 0;
  }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="index.css" />
    <title>Transaction</title>
  </head>

  <body>
  <?php require "nav.php" ?>
    <div class="container">
      <h2 class="text-center text-uppercase mb-4">Transfer Money</h2>
      <?php
      $id = $_GET['id'];
      $stmt = $pdo->query("SELECT * FROM users where id=$id ");
      while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
      ?>
      <table class="table table-dark table-striped text-center mb-5">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">E-Mail</th>
            <th scope="col">Balance</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row"><?php echo $row['id'] ?></th>
            <td><?php echo $row['name'] ?></td>
            <td><?php echo $row['email'] ?></td>
            <td><?php echo $row['balance'] ?></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>

      <form method="POST">
        <div class="mb-3">
          <label for="transferto" class="form-label">Transfer To:</label>
          <select id="select" name="to" class="form-select" required>
          <option value="" disabled selected>Choose</option>
          <?php 
             $stmt = $pdo->query("SELECT * FROM users where id != $id");
             while ($rows = $stmt->fetch(PDO::FETCH_ASSOC)) { 
          ?>
          <option class="table" value="<?php echo $rows['id'];?>" >   
                <?php echo $rows['name'] ;?> (Balance: 
                <?php echo $rows['balance'] ;?> ) 
          </option>
          
          <?php } ?>
          </select>
        </div>
        <div class="mb-3">
          <label for="amount" class="form-label">Enter Amount:</label>
          <input type="number" name="amount" class="form-control" id="amount" />
        </div>
        <div class="text-center">
          <button type="submit" name="transfer" class="btn btn-dark text-center">
            TRANSFER
          </button>
        </div>
      </form>
    </div>
  </body>
</html>
