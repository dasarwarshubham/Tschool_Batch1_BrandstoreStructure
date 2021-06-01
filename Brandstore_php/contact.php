<!doctype html>
<html lang="en">

<head>
    <?php include('header.php') ?>
    <link rel="stylesheet" href="css/about.css">

    <title>Contact Us | BrandStore</title>
</head>

<body>

    <?php include('navbar.php') ?>

    <div class="about-container d-flex justify-content-center align-items-center">
        <div>
            <div class="container">
                <div class="row w-100 mx-0">
                    <div class="col-12 d-flex justify-content-center align-items-center">
                        <div>
                            <h1 class="fw-bold display-6 text-warning text-center">Do you have any questions?</h1>
                            <p class="fs-6 text-center text-muted mb-0">If you have any query regarding any of our product/services, feel free to contact us.</p>
                            <p class="fs-6 text-center text-muted">Fill the form given below and we will get back to you ASAP...</p>
                        </div>
                    </div>
                    <div class="col-md-7 d-flex justify-content-center align-items-center">
                        <div class="w-100">
                            <form action="contact.php" method="POST">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control form-control-sm" id="floatingName" name="name"
                                        placeholder="name" required>
                                    <label for="floatingName">Name</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control form-control-sm" id="floatingEmail" name="email"
                                        placeholder="name@example.com" required>
                                    <label for="floatingEmail">Email address</label>
                                    <div id="email" class="form-text">We'll never share your email with anyone else.</div>
                                </div>
                                <div class="input-group mb-3 d-flex phone-group has-validation">
                                    <select class="form-select form-select-sm input-group-text w-25"
                                        aria-label=".form-select-sm example" required>
                                        <option value="+91" selected>+91</option>
                                        <option value="+1">+1</option>
                                        <option value="+92">+92</option>
                                    </select>
                                    <div class="form-floating w-75">
                                        <input type="number" class="form-control form-control-sm" id="floatingNumber"
                                            name="number" placeholder="Number" maxlength="10" required>
                                        <label for="floatingNumber">Contact Number</label>
                                    </div>
                                    <div class="invalid-feedback">
                                        Please Correct Phone number.
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control form-control-sm" id="floatingSubject"
                                        name="subject" placeholder="Subject" required>
                                    <label for="floatingSubject">Subject</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <textarea class="form-control form-control-sm" placeholder="Leave a comment here"
                                        name="message" id="floatingTextarea" style="min-height: 20vh;" required></textarea>
                                    <label for="floatingTextarea">Message</label>
                                </div>
                                <div class="d-flex justify-content-center align-items-center">
                                    <button type="submit" class="btn btn-primary w-50 btn-lg">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-5 d-flex justify-content-center align-items-center">
                        <img class="img-fluid" src="img/contact_us.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- SignIn/ Login Modal -->
    <div class="login-modal modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Login or Signup</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="w-100 d-flex justify-content-center align-items-center">
                        <form class="w-100">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Email address</label>
                            </div>
                            <div class="form-floating">
                                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                                <label for="floatingPassword">Password</label>
                            </div>
                            <div class="d-flex justify-content-center my-3">
                                <button class="btn btn-success w-100" type="submit">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include('footer.php') ?>
</body>

</html>