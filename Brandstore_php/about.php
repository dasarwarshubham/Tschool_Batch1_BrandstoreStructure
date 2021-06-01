<!doctype html>
<html lang="en">

<head>
    <?php include('header.php') ?>
    <link rel="stylesheet" href="css/about.css">

    <title>About Us | BrandStore</title>
</head>

<body>

    <?php include('navbar.php') ?>

    <div class="about-container d-flex justify-content-center align-items-center">
        <div>
            <div class="container-fluid">
                <div class="row w-100 mx-0">
                    <div class="col-md-6 d-flex justify-content-center align-items-center">
                        <div>
                            <h1 class="fw-bold display-2 text-warning text-center text-md-start">Our Story</h1>
                            <p class="display-6 text-center text-md-start">We Started as a small offline store and now
                                we have millions of trusted customers all over the world</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img class="img-fluid" src="img/about_banner.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="address-container">
        <div class="container-fluid px-0">
            <div class="row w-100 mx-0">
                <div class="col-md-7 d-flex justify-content-center align-items-center p-0">
                    <iframe width="100%" height="500" frameborder="0" scrolling="no"
                        marginheight="0" marginwidth="0"
                        src="https://maps.google.com/maps?width=100%25&amp;height=400&amp;hl=en&amp;q=223%20Center%20Street,%20Venus,%20New%20York,%2010001+(Ms.%20Belle%20Planet)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                </div>
                <div class="col-md-5 d-flex justify-content-start align-items-center">
                    <div class="address-text">
                        <h1 class="fw-bold display-3 text-warning text-center text-md-start">HQ Address</h1>
                        <ul class="list-unstyled">
                            <li class="my-1">
                                <div class="d-flex fs-4">
                                    <i class="fa fa-lg fa-map-marker fw-bold text-warning me-3 mt-1"
                                        aria-hidden="true"></i>
                                    <ul class="list-unstyled">
                                        <li>Ms. Belle Planet</li>
                                        <li>223 Center Street</li>
                                        <li>Venus, New York 10001</li>
                                    </ul>
                                </div>
                            </li>
                            <li class="my-1 d-flex fs-4"><i class="fa fa-lg fa-envelope fw-bold text-warning me-2"
                                    aria-hidden="true"></i>
                                <p class="m-0"> contact@flipkart.com</p>
                            </li>
                            <li class="my-1 d-flex fs-4"><i class="fa fa-lg fa-phone fw-bold text-warning me-3"
                                    aria-hidden="true"></i>
                                <p class="m-0">022 255789/022 255788</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="team-container">
        <div class="container">
            <div class="d-flex justify-content-center w-100">
                <div>
                    <h1 class="fw-bold display-3 text-warning text-center my-5">Meet Our Team</h1>
                </div>
            </div>
            <div class="row w-100 mx-0">
                <div class="col-md-4">
                    <div class="card border-0">
                        <img class="card-img-top rounded-circle w-75 mx-auto" src="img/about/team-1-cropped.jfif" alt="">
                        <div class="card-body text-center">
                            <h2 class="text-primary fw-bold fs-4">Mark Zuckerburg</h2>
                            <h4 class="text-secondary fw-bold fs-6">CEO</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0">
                        <img class="card-img-top rounded-circle w-75 mx-auto" src="img/about/team-2-cropped.jfif" alt="">
                        <div class="card-body text-center">
                            <h2 class="text-primary fw-bold fs-4">Elon Musk</h2>
                            <h4 class="text-secondary fw-bold fs-6">CTO</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0">
                        <img class="card-img-top rounded-circle w-75 mx-auto" src="img/about/team-3-cropped.jfif" alt="">
                        <div class="card-body text-center">
                            <h2 class="text-primary fw-bold fs-4">Mukesh Ambani</h2>
                            <h4 class="text-secondary fw-bold fs-6">COO</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include('footer.php') ?>
</body>

</html>