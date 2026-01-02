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
                    <h1 class="page-title">Contact Us</h1>

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item">
                                <a href="#" class="text-white">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#" class="text-white">Pages</a>
                            </li>
                            <li class="breadcrumb-item active text-white" aria-current="page">
                                Contact Us
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="section-title">Contact Us</h2>
                <p class="lead mt-3">Get in Touch - We're Here to Help</p>
            </div>
            <div class="row">
                <div class="col-lg-4 mb-4" data-aos="fade-right" data-aos-delay="100">
                    <div class="contact-card">
                        <h4 class="mb-4">Contact Information</h4>
                        <div class="contact-info-box">
                            <div class="contact-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div>
                                <h6>Office Address</h6>
                                <p class="mb-0">Patalamma Temple Street<br>Bengaluru Urban, Karnataka<br>India - 560017
                                </p>
                            </div>
                        </div>
                        <div class="contact-info-box">
                            <div class="contact-icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div>
                                <h6>Phone Numbers</h6>
                                <p class="mb-0">+91 7090206666<br>+91 7338662605<br>Factory: +91 9480174469</p>
                            </div>
                        </div>
                        <div class="contact-info-box">
                            <div class="contact-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div>
                                <h6>Email Address</h6>
                                <p class="mb-0">hrsomashekar<br />009@gmail.com</p>
                            </div>
                        </div>
                        <div class="contact-info-box">
                            <div class="contact-icon">
                                <i class="fas fa-user-tie"></i>
                            </div>
                            <div>
                                <h6>Contact Person</h6>
                                <p class="mb-0">Hulimangala Ramaiah Somashekar<br><small>Owner</small></p>
                            </div>
                        </div>
                        <div class="contact-info-box">
                            <div class="contact-icon">
                                <i class="fas fa-file-invoice"></i>
                            </div>
                            <div>
                                <h6>GST Number</h6>
                                <p class="mb-0">29CVVPS3268J1ZG</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 mb-4" data-aos="fade-left" data-aos-delay="200">
                    <div class="contact-card">
                        <h4 class="mb-4">Send us a Message</h4>
                        <form id="whatsappForm">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Full Name *</label>
                                    <input type="text" id="name" class="form-control" placeholder="Enter your name"
                                        required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Email Address *</label>
                                    <input type="email" id="email" class="form-control" placeholder="Enter your email"
                                        required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Phone Number *</label>
                                    <input type="tel" id="phone" class="form-control" placeholder="Enter your phone"
                                        required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Subject *</label>
                                    <select id="subject" class="form-control" required>
                                        <option value="">Select Subject</option>
                                        <option>Product Inquiry</option>
                                        <option>Bulk Order</option>
                                        <option>Customized Production</option>
                                        <option>General Inquiry</option>
                                        <option>Partnership</option>
                                    </select>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Message *</label>
                                <textarea id="message" class="form-control" rows="6"
                                    placeholder="Write your message here..." required></textarea>
                            </div>

                            <button type="submit" class="btn btn-custom btn-primary-custom w-100">
                                <i class="fas fa-paper-plane"></i> Send Message
                            </button>
                        </form>
                    </div>
                    <div class="mt-4" data-aos="fade-up">
                        <div class="contact-card">
                            <h5 class="mb-3">Find Us on Map</h5>
                            <div
                                style="width: 100%; height: 400px; background: linear-gradient(135deg, #667eea, #764ba2); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: white;">
                                <div class="text-center">
                                    <!-- <i class="fas fa-map-marked-alt" style="font-size: 60px; margin-bottom: 20px;"></i>
                                    <h4>Bengaluru, Karnataka</h4>
                                    <p>Patalamma Temple Street, Bengaluru Urban - 560017</p> -->
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.5563980728894!2d77.57816357505101!3d12.93620811565333!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae1597a80917b1%3A0x704c17a629fad7ca!2sPattalamma%20Temple%20Rd%2C%20Bengaluru%2C%20Karnataka!5e0!3m2!1sen!2sin!4v1765869515711!5m2!1sen!2sin"
                                        width="150" height="150" style="border:0;" allowfullscreen="" loading="lazy"
                                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- footer -->
    <?php include('footer.php') ?>