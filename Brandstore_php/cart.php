<!doctype html>
<html lang="en">

<head>
    <?php include('header.php') ?>
    <link rel="stylesheet" href="css/cart.css">

    <title>Cart | BrandStore</title>
</head>

<body>

    <?php include('navbar.php') ?>

    <div class="cart-container">
        <div class="container">
            <div class="row w-100 m-0">
                <div class="col-lg-8 p-1">
                    <div class="card p-0 border-warning">
                        <div class="card-header bg-warning text-white">
                            <div class="d-md-flex align-items-center justify-content-center justify-content-md-start">
                                <h4 class="m-0 text-wrap">Shopping Cart</h4>
                                <span class="ms-md-2 text-nowrap" id="no_of_items">( 4 items )</span>
                            </div>
                        </div>
                        <div class="card-body p-1 cart-body">
                            <div class="row border-bottom border-warning w-100 m-0 py-2">
                                <div class="col-md-5 col-lg-3 col-xl-3 p-1 d-flex justify-content-center align-items-center">
                                    <a href="product-details.html">
                                        <img class="cart-product-img img-fluid w-100" src="img/products/shoes/shoe-1.jfif" alt="">
                                    </a>
                                </div>
                                <div class="col-md-7 col-lg-9 col-xl-9 p-1">
                                    <div class="row w-100 m-0 py-4">
                                        <div class="col-sm-8">
                                            <h1 class="fs-4 fw-bold text-warning">Product Title</h5>
                                        </div>
                                        <div class="col-sm-4" data-id="{{item.id}}">
                                            <div class="d-flex mb-3">
                                                <a class="btn btn-danger minus-btn w-25 fs-5 fw-bold">-</a>
                                                <input id="quantity" class="quantity-num w-50 text-center fw-bold disabled" type="number"
                                                    min="1" max="5" value="1" disabled>
                                                <a class="btn btn-danger plus-btn w-25 fs-5 fw-bold">+</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row w-100 m-0">
                                        <div class="col-md-8">
                                            <a class="text-danger remove_item btn p-0" data-id="{{item.id}}">
                                                <i class="fa fa-trash-o" aria-hidden="true"></i> Remove Item
                                            </a>
                                        </div>
                                        <div class="col-md-4 fs-6 fw-bold text-secondary">
                                            Item total : <i class="fa fa-inr fs-5 fw-bolder" aria-hidden="true">1999</i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row border-bottom border-warning w-100 m-0 py-2">
                                <div class="col-md-5 col-lg-3 col-xl-3 p-1 d-flex justify-content-center align-items-center">
                                    <a href="product-details.html">
                                        <img class="cart-product-img img-fluid w-100" src="img/products/shoes/shoe-3.jfif" alt="">
                                    </a>
                                </div>
                                <div class="col-md-7 col-lg-9 col-xl-9 p-1">
                                    <div class="row w-100 m-0 py-4">
                                        <div class="col-sm-8">
                                            <h1 class="fs-4 fw-bold text-warning">Product Title</h5>
                                        </div>
                                        <div class="col-sm-4" data-id="{{item.id}}">
                                            <div class="d-flex mb-3">
                                                <a class="btn btn-danger minus-btn w-25 fs-5 fw-bold">-</a>
                                                <input id="quantity" class="quantity-num w-50 text-center fw-bold disabled" type="number"
                                                    min="1" max="5" value="1" disabled>
                                                <a class="btn btn-danger plus-btn w-25 fs-5 fw-bold">+</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row w-100 m-0">
                                        <div class="col-md-8">
                                            <a class="text-danger remove_item btn p-0" data-id="{{item.id}}">
                                                <i class="fa fa-trash-o" aria-hidden="true"></i> Remove Item
                                            </a>
                                        </div>
                                        <div class="col-md-4 fs-6 fw-bold text-secondary">
                                            Item total : <i class="fa fa-inr fs-5 fw-bolder" aria-hidden="true">1999</i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row w-100 m-0 py-2 cart-footer">
                                <div class="col-12 p-1">
                                    <button class="btn btn-outline-danger delete_all">Delete All</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 p-1">
                    <div class="card p-0 border-warning">
                        <div class="card-header bg-warning text-white">
                            <div class="d-flex align-items-center">
                                <h4 class="m-0 text-wrap">Shopping Cart Summary</h4>
                            </div>
                        </div>
                        <div class="card-body px-1 pt-4 pb-2">
                            <div class="row w-100 m-0">
                                <div class="col-12 p-0">
                                    <div class="row w-100 m-0 py-2">
                                        <div class="col-8">
                                            Cart Total
                                        </div>
                                        <div class="col-4">
                                            <i class="fa fa-inr cart-total" aria-hidden="true">4998</i>
                                        </div>
                                    </div>

                                    <div class="row border-bottom border-warning w-100 m-0 py-2">
                                        <div class="col-8">
                                            Delivery Charges
                                        </div>
                                        <div class="col-4">
                                            <i class="fa fa-inr delivery" aria-hidden="true">80</i>
                                        </div>
                                    </div>

                                    <div class="row w-100 m-0 py-2">
                                        <div class="col-8 font-weight-bold">
                                            Total
                                        </div>
                                        <div class="col-4">
                                            <i class="fa fa-inr fw-bold total" aria-hidden="true" style="font-size: 17px;">5078</i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-transparent border-top border-warning">
                            <div class="row w-100 m-0">
                                <div class="col-12 p-0">
                                    <a href="checkout.html" class="btn btn-success w-100 checkout_btn disabled">Proceed to Checkout</a>
                                </div>
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