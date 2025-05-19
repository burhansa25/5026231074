<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Bootstrap Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

        <script
            src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
        <script
            src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

        <style>

            h6 {
            font-size: 1.8vmin;
            text-align: left;
            }

            p {
                font-size: 1.6vmin;
                text-align: left;
                color: rgb(152, 152, 152);
            }

            .center {
            display: block;
            width: 50%;
            }

            .card {
            line-height: 1;
            padding: 0;
            margin: 0;
            width: 100%;
            min-height: 14vh;
            max-height: 300px;
            overflow: hidden;
            white-space: normal;
            text-align: center;
            border-radius: 10px;
            border-color: black;
            }

            .card-body {
            font-size: 0.9rem;
            }

            .card-header-custom {
            background-color: #1854a7;
            margin: 5px;
            width: 25%;
            }
  
            .nav-pills .nav-link {
                color: #84aec3; 
                font-size: 14px;
                padding: 10px 0;
                display: flex;
                flex-direction: column;
                align-items: center;
            }

            .nav-pills .nav-link.active {
                color: #0057FF;
                font-weight: bold;
                background-color: transparent !important; 
                outline: none; 
                box-shadow: none;
            }

            .nav-pills .nav-link.active::after {
            content: "";
            display: block;
            width: 100%;
            height: 3px;
            background-color: #0057FF; 
            margin-top: 3px;
            border-radius: 2px;
            }

            .icon-nav {
                font-size: 24px;
                margin-bottom: 5px;
                color: #84aec3;
            }

            .nav-pills .nav-link.active .icon-nav {
                color: #0057FF; 
            }

            .shadow-lg {
                box-shadow: 0px -2px 10px rgba(0, 0, 0, 0.1); /* Light top shadow */
            }
        
          </style>
    </head>
    <body>

        <span class="logo">
            <img
                style="border: 2px solid black; padding: 3px; width: 10vh; margin-top: 10px; margin-bottom: 10px; margin-left: 20px;"
                src="C:\Users\arras\Visual Studio Code\FEC5026231074\needs\Logo CekDong 1.png"
                class="rounded-circle"
                alt="Choices">
        </span>
        <nav
            class="navbar navbar-expand-sm bg-secondary navbar-dark sticky-top">
            <div class="container-fluid">
                <span class="navbar-text text-white">
                    <h4>Equipment</h4>
                </span>
                <form class="d-flex" action="/action_page.php">
                    <input class="form-control mr-sm-2" type="text"
                        placeholder="Search">
                    <button class="btn btn-success"
                        type="submit">Search</button>
                </form>
            </nav>
            <br>

            <div class="container-fluid">
                <p style="font-size: 3vmin;">All list of goods, please tap the goods for start
                    booking</p>
            </div>

            <div class="container-fluid">

                <div class="row">
                    <div class="col"
                        style="padding: 5px; width: 25%;"><div
                            class="card mx-auto d-block">
                            <div class="card-header"
                                style="padding: 5px;
                                font-size: 1.2vw; background-color: #1854a7; color: white; font-weight: bold; max-height: 3vh; width: 60%; border-bottom-right-radius: 5px;">
                                Mostly Borrowed
                            </div>
                            <img class="card-img-top"
                                style="width: 75%; height: 60%;"
                                src="C:\Users\arras\Visual Studio Code\FEC5026231074\needs\Godox H160-B Lighting Kit.jpg"
                                alt="Card image">
                            <div class="card-body"
                            style="padding: 5px; padding-bottom: 0px;">
                                <h6 style="font-size: 1.8vmin; text-align: left;">Godox
                                    H160-B Lighting
                                    Kit</h6>
                                <p style="text-align: left;">🔴 20 November 2024</p></div>

                            <a href="https://www.google.com"
                                class="stretched-link"></a>

                        </div></div>
                    <div class="col"
                        style="padding: 5px; width: 25%;"><div
                            class="card mx-auto d-block">
                            <div class="card-header"
                                style="padding: 5px;
                                font-size: 1.2vw; background-color: #1854a7; color: white; font-weight: bold; max-height: 3vh; width: 60%; border-bottom-right-radius: 5px;">
                                Mostly Borrowed
                            </div>
                            <img class="card-img-top"
                                style="width: 80%; height: 60%;"
                                src="C:\Users\arras\Visual Studio Code\FEC5026231074\needs\Nikon AF 80-200mm f-2.8D.jpg"
                                alt="Card image">
                            <div class="card-body"
                            style="padding: 5px; padding-bottom: 0px;">
                                <h6>Nikon AF 80-200mm
                                    f-2.8D</h6>
                                <p style="text-align: left;">🔴 20 November 2024</p></div>

                            <a href="https://www.tokopedia.com"
                                class="stretched-link"></a>

                        </div></div>
                    <div class="col"
                        style="padding: 5px; width: 25%;"><div
                            class="card mx-auto d-block">
                            
                            <img class="card-img-top"
                                style="width: 60%; height: 60%; margin-top: 15px;"
                                src="C:\Users\arras\Visual Studio Code\FEC5026231074\needs\Instax mini11.png"
                                alt="Card image">
                            <div class="card-body"
                            style="padding: 5px; padding-bottom: 0px;"><h6>Instax mini11</h6>
                                <p>🔴 19 November 2024</p></div>

                            <a href="https://www.google.com"
                                class="stretched-link"></a>

                        </div></div>
                    <div class="col"
                        style="padding: 5px; width: 25%;"><div
                            class="card mx-auto d-block">
                            <div class="card-header"
                                style="padding: 5px;
                                font-size: 1.2vw; background-color: #1854a7; color: white; font-weight: bold; max-height: 3vh; width: 60%; border-bottom-right-radius: 5px;">
                                Mostly Borrowed
                            </div>
                            <img class="card-img-top"
                                style="width: 60%; height: 60%;"
                                src="C:\Users\arras\Visual Studio Code\FEC5026231074\needs\Canon EOS 80D (1).png"
                                alt="Card image">
                            <div class="card-body"
                            style="padding: 5px; padding-bottom: 0px;"><h6>Canon EOS 80D</h6>
                                <p>🔴 20 November 2024</p></div>

                            <a href="https://www.google.com"
                                class="stretched-link"></a>

                        </div></div>
                </div>
                <div class="row">
                    <div class="col"
                        style="padding: 5px; margin-top: 20px; width: 25%;">
                        <div
                            class="card mx-auto d-block">
                            <div class="card-header"
                                style="padding: 5px;
                                font-size: 1.2vw; background-color: #1854a7; color: white; font-weight: bold; max-height: 3vh; width: 60%; border-bottom-right-radius: 5px;">
                                Mostly Borrowed
                            </div>
                            <img class="card-img-top"
                                style="width: 80%; height: 60%;"
                                src="C:\Users\arras\Visual Studio Code\FEC5026231074\needs\White Backdrop kit Cloth 200x300cm.jpg"
                                alt="Card image">
                            <div class="card-body"
                            style="padding: 5px; padding-bottom: 0px;"><h6>White Backdrop kit Cloth
                                    200x300cm</h6>
                                <p>🔴 20 November 2024</p></div>

                            <a href="https://www.google.com"
                                class="stretched-link"></a>
                        </div></div>

                    <div class="col"
                        style="padding: 5px; margin-top: 20px; width: 25%;">
                        <div
                            class="card mx-auto d-block">
                            <div class="card-header"
                                style="padding: 5px;
                                font-size: 1.2vw; background-color: #1854a7; color: white; font-weight: bold; max-height: 3vh; width: 60%; border-bottom-right-radius: 5px;">
                                Mostly Borrowed
                            </div>
                            <img class="card-img-top"
                                style="width: 80%; height: 60%;"
                                src="C:\Users\arras\Visual Studio Code\FEC5026231074\needs\Studio Accessories kit.jpg"
                                alt="Card image">
                            <div class="card-body"
                            style="padding: 5px;"><h6>Studio Accessories
                                    Kit</h6>
                                <p>🔴 20 November 2024</p></div>

                            <a href="https://www.kompas.com"
                                class="stretched-link"></a>
                        </div>
                    </div>

                    <div class="col"
                        style="padding: 5px; margin-top: 20px; width: 25%;"></div>
                    <div class="col"
                        style="padding: 5px; margin-top: 20px; width: 25%;"></div>
                </div>
            </div>

            <div class="d-flex justify-content-center mt-4">
                <button
                    style="box-shadow: 5px 5px 7px rgba(0, 0, 0, 0.6); border-radius: 20px; font-weight: bold;"
                    type="button"
                    class="btn btn-outline-dark">Book Now!</button>
            </div>

            <div style="height: 200px;">

            </div>
            <nav
                class="navbar navbar-expand-sm bg-white fixed-bottom shadow-lg justify-content-center">
                <ul class="nav nav-pills w-75 justify-content-between"
                    role="tablist">
                    <li class="nav-item">
                        <a
                            class="nav-link d-flex flex-column align-items-center"
                            data-toggle="pill"
                            href="#home"><i class="fas fa-user icon-nav"></i>
                            <span class="text-nav">Profile</span></a>
                    </li>
                    <li class="nav-item">
                        <a
                            class="nav-link d-flex flex-column align-items-center"
                            data-toggle="pill"
                            href="#menu1"><i
                                class="fas fa-th-large icon-nav"></i>
                            <span class="text-nav">Menu</span></a>
                    </li>
                    <li class="nav-item">
                        <a
                            class="nav-link d-flex flex-column align-items-center"
                            data-toggle="pill"
                            href="#menu2"><i
                                class="fas fa-history icon-nav"></i>
                            <span class="text-nav">Riwayat</span></a>
                    </li>
                    <li class="nav-item">
                        <a
                            class="nav-link active d-flex flex-column align-items-center"
                            data-toggle="pill"
                            href="#menu2"><i
                                class="fas fa-shopping-basket icon-nav"></i>
                            <span class="text-nav">Equipment</span></a>
                    </li>
                </ul>
            </nav>

        </body>
    </html>