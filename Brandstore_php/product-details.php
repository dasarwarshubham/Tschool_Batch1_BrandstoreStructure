<!doctype html>
<html lang="en">

<head>
    <?php include('header.php') ?>
    <link rel="stylesheet" href="css/product-details.css">

    <title>Products | BrandStore</title>
</head>

<body>

    <?php include('navbar.php') ?>

    <div class="product-details-container">
        <div class="container">
            <div class="row w-100 mx-0">
                <div class="col-md-5">
                    <img class="img-fluid" src="img/products/shoes/shoe-1.jfif" alt="">
                </div>
                <div class="col-md-7">
                    <div class="row w-100 mx-0">
                        <div class="col-12">
                            <div>
                                <h1 class="fs-2 fw-bold">Product Title</h1>
                                <p class="fs-6 fw-light">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolor
                                    qui, voluptates dicta sapiente aut eaque minima reiciendis laboriosam cupiditate
                                    corrupti consequatur sequi eligendi quae incidunt unde officia. Dolor, quae sequi!
                                </p>
                                <p class="fs-6 fw-light">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolor
                                    qui, voluptates dicta sapiente aut eaque minima reiciendis laboriosam cupiditate
                                    corrupti consequatur sequi eligendi quae incidunt unde officia. Dolor, quae sequi!
                                </p>
                                <p class="fs-6 fw-light">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolor
                                    qui, voluptates dicta sapiente aut eaque minima reiciendis laboriosam cupiditate
                                    corrupti consequatur sequi eligendi quae incidunt unde officia. Dolor, quae sequi!
                                </p>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="w-100">
                                <h4 class="fs-5 fw-bold">Quantity</h4>
                                <div class="d-flex w-25 mb-3">
                                    <a class="btn btn-danger minus-btn w-25 fs-5 fw-bold">-</a>
                                    <input id="quantity" class="quantity-num w-50 text-center fw-bold disabled" type="number"
                                        min="1" max="5" value="1" disabled>
                                    <a class="btn btn-danger plus-btn w-25 fs-5 fw-bold">+</a>
                                </div>
                                <button class="btn btn-warning text-white"><i class="fa fa-shopping-cart"></i> Add to
                                    cart</button>
                                <button class="btn btn-success text-white"><i class="fa fa-play"></i> Buy Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="similar-products-container">
        <div class="container">
            <div class="row w-100 mx-0 my-5">
                <div class="col-lg-12 d-flex justify-content-center align-items-center">
                    <div>
                        <h3 class="text-center fs-3 fw-bold text-info my-5">Similar Products that you may like</h3>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 my-2">
                    <div class="card">
                        <img src="img/products/shoes/shoe-1.jfif" alt="" class="card-img-top">
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
                    <div class="card">
                        <img src="img/products/shoes/shoe-1.jfif" alt="" class="card-img-top">
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
                    <div class="card">
                        <img src="img/products/shoes/shoe-1.jfif" alt="" class="card-img-top">
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
                    <div class="card">
                        <img src="img/products/shoes/shoe-1.jfif" alt="" class="card-img-top">
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
    <script src="js/quantity-changes.js"></script>
</body>
</html>