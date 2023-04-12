<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="index.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <title>Donate!</title>
  </head>
  <body>
    <div class="container animate__animated animate__backInUp">
      <div class="row justify-content-center">
        <div class="col-sm-6">
          <div
            class="card p-5 rounded"
            style="background-color: rgba(0, 0, 0, 0.7)"
          >
            <h2
              class="text-uppercase text-center fw-bolder"
              style="color: white"
            >
              Every Penny counts
            </h2>
            <form action="script.php" class="row g-3" style="color: white" method="POST">
              <div class="col-md-12">
                <label for="name" class="form-label fw-bold">Full Name:</label>
                <input
                  type="text"
                  class="form-control"
                  id="name"
                  name="name"
                  required
                />
              </div>
              <div class="col-md-12">
                <label for="email" class="form-label fw-bold">Email:</label>
                <input
                  type="email"
                  class="form-control"
                  id="email"
                  name="email"
                  required
                />
              </div>
              <div class="col-md-12">
                <label for="phone" class="form-label fw-bold">Mobile:</label>
                <input
                  type="text"
                  pattern="[1-9]{1}[0-9]{9}"
                  class="form-control"
                  id="phone"
                  name="phone"
                  required
                />
              </div>
              <div class="col-md-12">
                <label for="address" class="form-label fw-bold">Address:</label>
                <input
                  type="text"
                  class="form-control"
                  name="address"
                  required
                />
              </div>
              <div class="col-md-12">
                <label for="amount" class="form-label fw-bold">Amount:</label>
                <input
                  type="number"
                  class="form-control"
                  name="amount"
                  required
                />
              </div>
              <div class="container text-center">
                <button class="btn btn-lg btn-info mb-4 fw-bold" type="submit">
                  Donate
                </button>
              </div>
              <input
                type="hidden"
                value="<?php echo 'OID'.rand(100,1000);?>"
                name="orderid"
              />
            </form>
          </div>
        </div>
      </div>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
