<?php require_once "pdo.php";
if(isset($_POST['send'])){
  $email = $_POST['subject'];
  $message = $_POST['text'];

  $stmt = $pdo->prepare("INSERT INTO feedback(email,message) VALUES (:email,:message)");
  $stmt->execute(array(':email'=>$email, ':message'=>$message));

    echo " <script>
    alert('Feedback Recorded');
    window.location.href='index.php'; 
    </script>";
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
    <title>Bank</title>
  </head>

  <body>
    <?php require "nav.php" ?>
    <div class="container">
      <h2 class="text-center text-uppercase">
        BANKING IS NECESSARY, BANKS ARE NOT
      </h2>
      <div class="row">
        <div class="col-md-6 text">
          <p class="lh-base fw-bold fs-5">
            This website allows the users to conduct financial transactions
            privately and easily from any location and on any device with
            internet access(PC, tablet, smartphone, etc.), ensuring all the
            required safety and security.
          </p>
        </div>
        <div class="col-md-6 mb-5">
          <img
            src="images/coverpic.jfif"
            alt="BANKING IS NECESSARY, BANKS ARE NOT"
            class="coverpic p-4"
          />
        </div>
      </div>

      <div
        id="carouselExampleIndicators"
        class="carousel slide"
        data-bs-ride="carousel"
      >
        <div class="carousel-indicators">
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="0"
            class="active"
            aria-current="true"
            aria-label="Slide 1"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="1"
            aria-label="Slide 2"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="2"
            aria-label="Slide 3"
          ></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img
              src="images/bank3.jfif"
              class="d-block w-100 h-100"
              alt="bank3"
            />
          </div>
          <div class="carousel-item">
            <img
              src="images/bank2.jfif"
              class="d-block w-100 h-100"
              alt="bank2"
            />
          </div>
          <div class="carousel-item">
            <img
              src="images/bank1.jfif"
              class="d-block w-100 h-100"
              alt="bank1"
            />
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <div id="contact">
        <h2 class="text-uppercase text-center my-4">Contact us</h2>
        <p class="text-center fw-bold w-responsive mx-2 mb-5 fs-5">
          Do you have any questions? Contact us and our team will be happy to
          help within 2 business days.
        </p>
        <form
          method="post"
          id="email_form"
          class="container"
        >
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label fw-bold"
              >Email address:</label
            >
            <input
              type="email"
              class="form-control"
              name="subject"
              placeholder="abc@example.com"
              required
            />
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label fw-bold"
              >Query/Message:</label
            >
            <textarea
              class="form-control"
              name="text"
              placeholder="Message"
              rows="3"
              required
            ></textarea>
          </div>
          <div class="d-grid gap-2 col-6 mx-auto mb-5">
            <input
              class="btn btn-lg bttn mb-2"
              id="submit_form"
              type="submit"
              name="send"
              value="SEND"
            />
          </div>
        </form>
      </div>
      <footer class="container mb-1">
        <div class="float-end">
          <a
            href="#"
            class="fw-bold"
            style="text-decoration: none; color: black"
            ><svg
              xmlns="http://www.w3.org/2000/svg"
              width="25"
              height="25"
              fill="currentColor"
              class="bi bi-arrow-up-circle-fill"
              viewBox="0 0 16 16"
            >
              <path
                d="M16 8A8 8 0 1 0 0 8a8 8 0 0 0 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z"
              />
            </svg>
            BACK TO TOP</a
          >
        </div>
        <p class="fw-bold">
          <img
            src="images/c.png"
            alt="copyright"
            style="width: 20px; height: 20px"
          />
          Pranith
        </p>
      </footer>
    </div>
  </body>
</html>
