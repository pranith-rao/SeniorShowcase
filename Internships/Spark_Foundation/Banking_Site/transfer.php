<?php require_once "pdo.php" ?>

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
    <title>Accounts</title>
  </head>

  <body>
  <?php require "nav.php" ?>
    <div class="container">
      <h2 class="text-center text-uppercase mb-4">Transfer Money</h2>
      <div class="table-responsive">
        <table class="table table-dark border-white text-center">
        <thead>
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Name</th>
              <th scope="col">E-Mail</th>
              <th scope="col">Balance</th>
              <th scope="col">Operation</th>
            </tr>
          </thead>
          <?php
          $stmt = $pdo->query("SELECT * FROM users");
          while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
          ?>
          <tbody>
          <tr>
          <td scope="row"><?php echo $row['id'] ?></td>
          <td scope="row"><?php echo $row['name'] ?></td>
          <td scope="row"><?php echo $row['email'] ?></td>
          <td scope="row"><?php echo $row['balance'] ?></td>
          <td><a href="transaction.php?id=<?php echo $row['id'];?>"><button type="submit" class="btn btn-light">Transfer</button></a></td>
          </tr>
          </tbody>
          <?php } ?>
        </table>
      </div>
    </div>
  </body>
</html>
