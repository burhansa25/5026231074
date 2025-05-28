<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>New Age - Start Bootstrap Theme</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,600;1,600&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,500;0,600;0,700;1,300;1,500;1,600;1,700&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400&amp;display=swap" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <script
            src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script>

            function validasi() {
                var nrp = document.getElementById("nrp").value;
                var nama = document.getElementById("nama").value;
                var email = document.getElementById("phone").value;

                if (nrp.length < 10) {
                    //alert("NRP harus 10 digit!");
                    swal("Pesan!", "NRP Anda baru memiliki " + nrp.length + " digit!", "error");
                    document.getElementById("nrp").focus();
                    return false;
                } else if (nrp.length > 10) {
                    //alert("NRP tidak boleh lebih dari 10 digit!");
                    swal("Pesan!", "NRP Anda melebihi 10 digit, memiliki " + nrp.length + " digit!", "error");
                    document.getElementById("nrp").focus();
                    return false;
                } else {
                    //alert("Data berhasil dikirim!");
                    swal("Pesan!", "Data berhasil dikirim!", "success");
                    return true;
                }

                if (nrp.length == 0) {
                    //alert("NRP tidak boleh kosong!");
                    swal("Pesan!", "NRP tidak boleh kosong!", "error");
                    document.getElementById("nrp").focus();
                    return false;
                } else if (isNaN(nrp)) {
                    swal("Pesan!", "NRP harus berupa angka!", "error");
                    document.getElementById("nrp").focus();
                    return false;
                }

                if (nama.length == 0) {
                    //alert("Nama tidak boleh kosong!");
                    swal("Pesan!", "Nama tidak boleh kosong!", "error");
                    document.getElementById("nama").focus();
                    return false;
                }

                if (phone.length == 0) {
                    //alert("Nama tidak boleh kosong!");
                    swal("Pesan!", "Nomor telepon tidak boleh kosong!", "error");
                    document.getElementById("nama").focus();
                    return false;
                }

                if (email.length == 0) {
                    //alert("Nama tidak boleh kosong!");
                    swal("Pesan!", "Email tidak boleh kosong!", "error");
                    document.getElementById("nama").focus();
                    return false;
                }


            }
        </script>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" style="background-color: black; color: white;" id="mainNav">
            <div class="container px-5">
                <a class="navbar-brand fw-bold" style="color: white;" href="#page-top">GeForce NOW</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="bi-list"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
                        <li class="nav-item"><a class="nav-link me-lg-3" href="#features">Features</a></li>
                        <li class="nav-item"><a class="nav-link me-lg-3" href="#download">Download</a></li>
                    </ul>
                    <button class="btn btn-primary rounded-pill px-3 mb-2 mb-lg-0" data-bs-toggle="modal" data-bs-target="#feedbackModal">
                        <span class="d-flex align-items-center">
                            <i class="bi-chat-text-fill me-2"></i>
                            <span class="small">Send Feedback</span>
                        </span>
                    </button>
                </div>
            </div>
        </nav>
        <!-- Mashead header-->
        <header class="masthead" style="background-image: url('assetsets/img/1st/gfn-generic-hero-nv-carousel-1024-t@2x.jpg');">
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6">
                        <!-- Mashead text and app badges-->
                        <div class="mb-5 mb-lg-0 text-center text-lg-start">
                            <h1 class="display-1 lh-1 mb-3" style="font-size: 4rem">Play to Your Ultimate Potential</h1>
                            <p class="lead mb-5" style="color: white; font-weight: bold;">Experience GeForce RTX-powered cloud gaming</p>
                            <div class="d-flex flex-column flex-lg-row align-items-center">
                                <button style="margin-top: -25px; height: 50px; width: 100px; background-color: rgb(118, 185, 0); font-weight: bold; border: none;">Join Today</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!-- Masthead device mockup feature-->
                    </div>
                </div>
            </div>
        </header>
        <!-- Quote/testimonial aside-->
        <aside class="text-center bg-black">
            <div class="container px-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-xl-8">
                        <p class="lead mb-5" style="color: white; font-weight: bold;">Experience GeForce RTX-powered cloud gaming</p>
                        <div class="h2 fs-1 text-white mb-4" style="margin-top: -20px;">Your Games, Your Devices, RTX On</div>
                    </div>
                </div>
                <div class="row gx-5 justify-content-center" style="margin-top: 25px;">
                    <div class="card" style="width: 25%; background-color: black; color: white; align-items: center;">
                        <img src="assetsets/img/2nd/m48-controller-ffffff.svg" alt="Avatar" style="height: 6rem;">
                        <div class="container">
                          <h4><b>2000+ Games</b></h4>
                          <p>GeForce NOW connects to digital PC game stores so you can stream the games you already own. Plus, game purchases you make on your personal store accounts will always stay with you.</p>
                        </div>
                    </div>
                    <div class="card" style="width: 25%; background-color: black; color: white; align-items: center;">
                        <img src="assetsets/img/2nd/All Your Device.svg" alt="Avatar" style="height: 6rem;">
                        <div class="container">
                          <h4><b>All Your Devices</b></h4>
                          <p>GeForce NOW instantly transforms your laptop, desktop, Mac, TV, Android device, iPhone, or iPad into the powerful PC gaming rig you’ve always dreamed of.​</p>
                        </div>
                    </div>
                    <div class="card" style="width: 25%; background-color: black; color: white; align-items: center;">
                        <img src="assetsets/img/2nd/Lighting.svg" alt="Avatar" style="height: 6rem;">
                        <div class="container">
                          <h4><b>GeForce Performance</b></h4>
                          <p>Our premium membership plans offer you fastest access to the highest performance GeForce RTX rigs for a high-resolution, ultra-low latency, and competitive experience.</p>
                        </div>
                    </div>
                    <div class="card" style="width: 25%; background-color: black; color: white; align-items: center;">
                        <img src="assetsets/img/2nd/Checkmark.png" alt="Avatar" style="height: 6rem;">
                        <div class="container">
                          <h4><b>No Game Download</b></h4>
                          <p>Say goodbye to large game downloads, updates, and patches. All GeForce NOW games are always up to date, so you can spend less time waiting and more time gaming.</p>
                        </div>
                    </div>
                </div>
                <div class="row gx-5 justify-content-center align-items-center" style="margin-top: 50px;">
                    <div class="col-xl-8">
                        <button style="margin-top: -25px; height: 50px; width: 100px; background-color: rgb(118, 185, 0); font-weight: bold; border: none;">Join Today</button>
                    </div>
                </div>
            </div>
        </aside>
        <!-- App features section-->
        <section id="features" style="background-color: black">
            <div class="container">
                <div class="row align-items-center">
                    <img src="assetsets/img/3rd/1st.png" style="margin-bottom: 10px;" alt="">
                </div>
                <div class="row align-items-center">
                    <img src="assetsets/img/3rd/2nd.png" style="margin-bottom: 10px;" alt="">
                </div>
                <div class="row align-items-center">
                    <img src="assetsets/img/3rd/3rd.png" alt="">
                </div>
            </div>
        </section>
        <!-- Basic features section-->
        <aside class="text-center bg-black">
            <div class="container px-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-xl-8">
                        <div class="h2 fs-1 text-white mb-4" style="margin-top: -20px;">Get Started</div>
                    </div>
                </div>
                <div class="row gx-5 justify-content-center" style="margin-top: 25px;">
                    <div class="card" style="width: 30%; background-color: black; color: white; align-items: center;">
                        <img src="assetsets/img/4th/membership.svg" alt="Avatar" style="height: 6rem;">
                        <div class="container">
                          <h4 style="margin-top: 30px;"><b>Select Membership</b></h4>
                          <h4 style="margin-top: 20px;"><b>Join Now <i class="bi bi-chevron-right" style="color: rgb(118, 185, 0);"></i></b></h4>
                        </div>
                    </div>
                    <div class="card" style="width: 30%; background-color: black; color: white; align-items: center;">
                        <img src="assetsets/img/4th/get geforce.svg" alt="Avatar" style="height: 6rem;">
                        <div class="container">
                          <h4 style="margin-top: 30px;"><b>Get GeForce Now</b></h4>
                          <h4 style="margin-top: 20px;"><b>Download <i class="bi bi-chevron-right" style="color: rgb(118, 185, 0);"></i></b></h4>
                        </div>
                    </div>
                    <div class="card" style="width: 30%; background-color: black; color: white; align-items: center;">
                        <img src="assetsets/img/4th/cloud.svg" alt="Avatar" style="height: 6rem;">
                        <div class="container">
                          <h4 style="margin-top: 30px;"><b>Connect Your Game Library</b></h4>
                          <h4 style="margin-top: 20px;"><b>See Games <i class="bi bi-chevron-right" style="color: rgb(118, 185, 0);"></i></b></h4>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
        <!-- Call to action section-->
        <!-- App badge section-->
        <section class="bg-black" id="download">
            <div class="container px-5">
                <h2 class="text-center text-white font-alt mb-4">Get notified when GeForce NOW becomes available in your region.</h2>
                <div class="container" style="width: 50%; color: white;">
                    <p>
                        <form id="formDaftar" method="get"
                            action="#" target="_blank"
                            onsubmit="return validasi()" style="font-weight: bold; margin-bottom: 20px; color: white">


                            <div class="wrapper">
                                <div class="input-data" style="border: none;">
                                    <input type="text" class="form-contol" name="nama" id="nama">
                                    <div class="underline"></div>
                                    <label>Name</label>
                                </div>
                            </div>

                            <div class="wrapper">
                                <div class="input-data" style="border: none;">
                                    <input type="text" class="form-contol" name="nrp" id="nrp">
                                    <div class="underline"></div>
                                    <label>NRP</label>
                                </div>
                            </div>

                            <div class="wrapper">
                                <div class="input-data" style="border: none;">
                                    <input type="email" class="form-contol" name="email" id="email">
                                    <div class="underline"></div>
                                    <label>Email</label>
                                </div>
                            </div>

                            <div class="wrapper">
                                <div class="input-data" style="border: none;">
                                    <input type="text" class="form-contol" name="phone" id="phone">
                                    <div class="underline"></div>
                                    <label>Phone</label>
                                </div>
                            </div>

                            <input type="submit" class="btn btn-success"
                                onsubmit="validasi()" value="Daftar">
                        </form>
                    </p>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="bg-black text-center py-5">
            <div class="container px-5">
                <div class="text-white-50 small">
                    <div class="mb-2">&copy; Your Website 2023. All Rights Reserved.</div>
                    <a href="#!">Privacy</a>
                    <span class="mx-1">&middot;</span>
                    <a href="#!">Terms</a>
                    <span class="mx-1">&middot;</span>
                    <a href="#!">FAQ</a>
                </div>
            </div>
        </footer>
        <!-- Feedback Modal-->
        <div class="modal fade" id="feedbackModal" tabindex="-1" aria-labelledby="feedbackModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header bg-gradient-primary-to-secondary p-4">
                        <h5 class="modal-title font-alt text-white" id="feedbackModalLabel">Send feedback</h5>
                        <button class="btn-close btn-close-white" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body border-0 p-4">
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                        <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                <label for="name">Full name</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                                <label for="email">Email address</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <!-- Phone number input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                                <label for="phone">Phone number</label>
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>
                            <!-- Message input-->
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                                <label for="message">Message</label>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                            </div>
                            <!-- Submit success message-->
                            <!---->
                            <!-- This is what your users will see when the form-->
                            <!-- has successfully submitted-->
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Form submission successful!</div>
                                    To activate this form, sign up at
                                    <br />
                                    <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                </div>
                            </div>
                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                            <!-- Submit Button-->
                            <div class="d-grid"><button class="btn btn-primary rounded-pill btn-lg disabled" id="submitButton" type="submit">Submit</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
