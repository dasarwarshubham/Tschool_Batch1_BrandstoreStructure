<!doctype html>
<html lang="en">

<head>
    <?php include('header.php') ?>
    <link rel="stylesheet" href="css/index.css">

    <title>BrandStore</title>
</head>

<body>
    <?php
        include('navbar.php');
    ?>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
        
								
            <div class="carousel-item">
                <div>
                    <img class="img-fluid d-block w-100" src="img/banner/banner-5.jfif" alt="...">
                    <div class="carousel-caption d-none d-md-flex justify-content-center align-items-center h-100">
                        <div>
                            <h5 class="display-2 fw-bolder">Second slide label</h5>
                            <p class="fs-4 fw-light">Some representative placeholder content for the second slide.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div>
                    <img class="img-fluid d-block w-100" src="img/banner/banner-6.jfif" alt="...">
                    <div class="carousel-caption d-none d-md-flex justify-content-center align-items-center h-100">
                        <div>
                            <h5 class="display-2 fw-bolder">Third slide label</h5>
                            <p class="fs-4 fw-light">Some representative placeholder content for the third slide.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="category-container">
        <div class="container">
            <div class="row w-100 mx-0 my-5">
                <div class="col-lg-12 d-flex justify-content-center align-items-center">
                    <div>
                        <h3 class="text-center fs-2 fw-bold text-warning">Choose Your Category</h3>
                    </div>
                </div>
                <div class="col-6 my-3">
                    <div class="card">
                        <img src="img/products/shirts/shirts-banner.jfif" alt="" class="card-img-top category-img">
                        <div class="card-footer border-top-0">
                            <div class="d-flex justify-content-center">
                                <a class="fs-5 stretched-link text-decoration-none text-dark"
                                    href="products.php">Shirts</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 my-3">
                    <div class="card">
                        <img src="img/products/pants/pants-banner.jfif" alt="" class="card-img-top category-img">
                        <div class="card-footer border-top-0">
                            <div class="d-flex justify-content-center">
                                <a class="fs-5 stretched-link text-decoration-none text-dark"
                                    href="products.php">Pants</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 my-3">
                    <div class="card">
                        <img src="img/products/watches/watches-banner.jfif" alt="" class="card-img-top category-img">
                        <div class="card-footer border-top-0">
                            <div class="d-flex justify-content-center">
                                <a class="fs-5 stretched-link text-decoration-none text-dark"
                                    href="products.php">Watches</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 my-3">
                    <div class="card">
                        <img src="img/products/shoes/shoes-banner.jfif" alt="" class="card-img-top category-img">
                        <div class="card-footer border-top-0">
                            <div class="d-flex justify-content-center">
                                <a class="fs-5 stretched-link text-decoration-none text-dark"
                                    href="products.php">Shoes</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="deals-container">
        <div class="container-fluid">
            <div class="row w-100 mx-0 my-5">
                <div class="col-lg-12 d-flex justify-content-center align-items-center">
                    <div>
                        <h3 class="text-center fs-2 fw-bold text-warning">Todays Deals</h3>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 my-2">
                    <div class="card product-card">
                        <img src="img/products/shoes/shoes-1.jpeg" alt="" class="card-img-top product-img">
                        <div class="card-body">
                            <h1 class="fs-4 mb-0">Product Title</h1>
                            <div class="d-flex mb-2">
                                <span>Price:</span>
                                <span class="ms-1">1600 Rs</span>
                                <span class="text-muted ms-3"><del>3200 Rs</del></span>
                            </div>
                            <div class="d-flex justify-content-start">
                                <a href="cart.php" class="btn btn-warning cart-btn">Add to Cart</a>
                                <a href="product-details.php" class="btn btn-info ms-2 details-btn">View Product</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 my-2">
                    <div class="card product-card">
                        <img src="img/products/shoes/shoes-2.jpeg" alt="" class="card-img-top product-img">
                        <div class="card-body">
                            <h1 class="fs-4 mb-0">Product Title</h1>
                            <div class="d-flex mb-2">
                                <span>Price:</span>
                                <span class="ms-1">1600 Rs</span>
                                <span class="text-muted ms-3"><del>3200 Rs</del></span>
                            </div>
                            <div class="d-flex justify-content-start">
                                <a href="cart.php" class="btn btn-warning cart-btn">Add to Cart</a>
                                <a href="product-details.php" class="btn btn-info ms-2 details-btn">View Product</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 my-2">
                    <div class="card product-card">
                        <img src="img/products/shoes/shoes-3.jpeg" alt="" class="card-img-top product-img">
                        <div class="card-body">
                            <h1 class="fs-4 mb-0">Product Title</h1>
                            <div class="d-flex mb-2">
                                <span>Price:</span>
                                <span class="ms-1">1600 Rs</span>
                                <span class="text-muted ms-3"><del>3200 Rs</del></span>
                            </div>
                            <div class="d-flex justify-content-start">
                                <a href="cart.php" class="btn btn-warning cart-btn">Add to Cart</a>
                                <a href="product-details.php" class="btn btn-info ms-2 details-btn">View Product</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 my-2">
                    <div class="card product-card">
                        <img src="img/products/shoes/shoes-4.jpeg" alt="" class="card-img-top product-img">
                        <div class="card-body">
                            <h1 class="fs-4 mb-0">Product Title</h1>
                            <div class="d-flex mb-2">
                                <span>Price:</span>
                                <span class="ms-1">1600 Rs</span>
                                <span class="text-muted ms-3"><del>3200 Rs</del></span>
                            </div>
                            <div class="d-flex justify-content-start">
                                <a href="cart.php" class="btn btn-warning cart-btn">Add to Cart</a>
                                <a href="product-details.php" class="btn btn-info ms-2 details-btn">View Product</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="exclusive-container">
        <div class="container-fluid">
            <div class="row w-100 mx-0 my-5">
                <div class="col-lg-12 d-flex justify-content-center align-items-center">
                    <div>
                        <h3 class="text-center fs-2 fw-bold text-warning">Exclusive Products</h3>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 my-2">
                    <div class="card product-card">
                        <img src="img/products/shoes/shoes-5.jpeg" alt="" class="card-img-top product-img">
                        <div class="card-body">
                            <h1 class="fs-4 mb-0">Product Title</h1>
                            <div class="d-flex mb-2">
                                <span>Price:</span>
                                <span class="ms-1">1600 Rs</span>
                                <span class="text-muted ms-3"><del>3200 Rs</del></span>
                            </div>
                            <div class="d-flex justify-content-start">
                                <a href="cart.php" class="btn btn-warning cart-btn">Add to Cart</a>
                                <a href="product-details.php" class="btn btn-info ms-2 details-btn">View Product</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 my-2">
                    <div class="card product-card">
                        <img src="img/products/shoes/shoes-6.jpeg" alt="" class="card-img-top product-img">
                        <div class="card-body">
                            <h1 class="fs-4 mb-0">Product Title</h1>
                            <div class="d-flex mb-2">
                                <span>Price:</span>
                                <span class="ms-1">1600 Rs</span>
                                <span class="text-muted ms-3"><del>3200 Rs</del></span>
                            </div>
                            <div class="d-flex justify-content-start">
                                <a href="cart.php" class="btn btn-warning cart-btn">Add to Cart</a>
                                <a href="product-details.php" class="btn btn-info ms-2 details-btn">View Product</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 my-2">
                    <div class="card product-card">
                        <img src="img/products/shoes/shoes-7.jpeg" alt="" class="card-img-top product-img">
                        <div class="card-body">
                            <h1 class="fs-4 mb-0">Product Title</h1>
                            <div class="d-flex mb-2">
                                <span>Price:</span>
                                <span class="ms-1">1600 Rs</span>
                                <span class="text-muted ms-3"><del>3200 Rs</del></span>
                            </div>
                            <div class="d-flex justify-content-start">
                                <a href="cart.php" class="btn btn-warning cart-btn">Add to Cart</a>
                                <a href="product-details.php" class="btn btn-info ms-2 details-btn">View Product</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 my-2">
                    <div class="card product-card">
                        <img src="img/products/shoes/shoes-8.jpeg" alt="" class="card-img-top product-img">
                        <div class="card-body">
                            <h1 class="fs-4 mb-0">Product Title</h1>
                            <div class="d-flex mb-2">
                                <span>Price:</span>
                                <span class="ms-1">1600 Rs</span>
                                <span class="text-muted ms-3"><del>3200 Rs</del></span>
                            </div>
                            <div class="d-flex justify-content-start">
                                <a href="cart.php" class="btn btn-warning cart-btn">Add to Cart</a>
                                <a href="product-details.php" class="btn btn-info ms-2 details-btn">View Product</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include('footer.php') ?>
    
</body>
</html>