<?php require_once 'pdo.php' ?>

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
    <title>All Transctions</title>
  </head>

  <body>
  <?php require "nav.php" ?>
    <div class="container">
      <h2 class="text-center text-uppercase mb-4">Transfer Money</h2>
      <div class="table-responsive">
        <table class="table table-responsive table-dark border-white text-center">
          <thead>
            <tr>
              <th scope="col">Transaction Id</th>
              <th scope="col">Sender</th>
              <th scope="col">Receiver</th>
              <th scope="col">Amount</th>
              <th scope="col">Date & Amount</th>
            </tr>
          </thead>
          <?php 
          $stmt = $pdo->query("SELECT * FROM transaction");
          while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
          ?>
          <tbody>
            <tr>
              <th scope="row"><?php echo $row['tid'] ?></th>
              <td><?php echo $row['sender'] ?></td>
              <td><?php echo $row['receiver'] ?></td>
              <td><?php echo $row['amount'] ?></td>
              <td><?php echo $row['datetime'] ?></td>
            </tr>
          </tbody>
          <?php } ?>
        </table>
      </div>
    </div> 
  </body>
</html>
