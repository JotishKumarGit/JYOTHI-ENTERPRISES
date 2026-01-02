<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JYOTHI ENTERPRISES - Premium Detergent Manufacturer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/style.css">
</head>

<body>

    <!-- header -->
    <?php include("header.php") ?>


    <!-- Breadcrumb Section -->
    <section class="breadcrumb-section text-white d-flex align-items-center">
        <div class="overlay"></div>

        <div class="container text-center position-relative">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h1 class="page-title">Products</h1>

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item">
                                <a href="#" class="text-white">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#" class="text-white">Pages</a>
                            </li>
                            <li class="breadcrumb-item active text-white" aria-current="page">
                                Products
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <!-- Products Section -->
    <section id="products" class="products-section">
        <div class="container ">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="section-title">Our Products</h2>
                <p class="lead mt-3">Premium Quality Cleaning Solutions for Every Need</p>
            </div>
            <div class="row ">
                <div class="col-lg-3 col-md-6 mb-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="product-card">
                        <div class="product-img">
                            <img src="assets/img/Detergent-Powder.jpg" height="250px" width="100%" alt="">
                        </div>
                        <div class="product-body">
                            <span class="product-badge">Bestseller</span>
                            <h4>Detergent Powder</h4>
                            <p>High-quality loose and packed detergent powder for effective cleaning.</p>
                            <a href="Detergent-Powder.php"><button class="btn btn-primary">View
                                    Details</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4" data-aos="zoom-in" data-aos-delay="200">
                    <div class="product-card">
                        <div class="product-img">
                            <img src="assets/img/Liquid_Detergent.jpg" height="250px" width="100%" alt="">
                        </div>
                        <div class="product-body">
                            <h4>Liquid Detergent</h4>
                            <p>Concentrated liquid formula for deep cleaning and fabric care.</p>
                            <a href="Liquid-Detergent.php"><button class="btn btn-primary">View
                                    Details</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4" data-aos="zoom-in" data-aos-delay="300">
                    <div class="product-card">
                        <div class="product-img">
                            <img src="assets/img/floor-cleaner.avif" height="250px" width="100%" alt="">
                        </div>
                        <div class="product-body">
                            <h4>Floor Cleaner</h4>
                            <p>Powerful floor cleaning solution for sparkling clean surfaces.</p>
                            <a href="Floor-Cleaner.php"><button class="btn btn-primary">View
                                    Details</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4" data-aos="zoom-in" data-aos-delay="400">
                    <div class="product-card">
                        <div class="product-img">
                            <img src="assets/img/handwassh.webp" height="250px" width="100%" alt="">
                        </div>
                        <div class="product-body">
                            <h4>Hand Wash</h4>
                            <p>Gentle yet effective hand wash for hygiene and care.</p>
                            <a href="Hand-Wash.php"><button class="btn btn-primary">View
                                    Details</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5" data-aos="fade-up">
                <div class="alert alert-info">
                    <h5><i class="fas fa-info-circle"></i> Customized Production Available</h5>
                    <p class="mb-0">We offer customized production facility as per customer requirements. Contact us for
                        bulk orders and special requirements.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- footer -->
    <?php include('footer.php') ?>