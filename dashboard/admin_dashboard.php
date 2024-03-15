<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="dashboard.css">
    <script src="https://unpkg.com/feather-icons"></script>
</head>

<body>
    <?php
    include '../connect.php';
   ?>

    <div class="main-container">
        <div class="container">
            <div class="left">
            
                <div class="dashboard">
                    
                    <i data-feather="grid" class="grid-icon"></i>
                    <a href="#">  
                    <p>Dashboard</p>
                    </a>
                </div>
            
                <div class="navbar">
                    <div class="nav-child1 nav-child dash-items">
                        <div class="hover">
                            <i data-feather="users"></i>
                            <a href="#">All Vehical</a>
                        </div>
                    </div>
                    <div class="nav-child2 nav-child dash-items">
                        <div class="hover">
                            <i data-feather="slack"></i>
                            <a href="#">Update Vehical</a>
                        </div>
                    </div>
                    <div class="nav-child3 nav-child dash-items">
                        <div class="hover">
                            <i data-feather="file-text"></i>
                            <a href="#">Rented</a>
                        </div>
                    </div>
                    <div class="nav-child4 nav-child dash-items">
                        <div class="hover">
                            <i data-feather="message-circle"></i>
                            <a href="#">Feedback</a>
                        </div>
                    </div>

                    <div class="logout">
                        <i data-feather="log-out" class="log-out"></i>
                        <a href="#">Log out</a>

                    </div>

                </div>
            </div>
        </div>
        <div>
            <div class="main ">
                <div class="main-content">
                        <div class="heading-date">
                            <i data-feather="calendar"></i>
                            <?php 
                          echo " ".date("d M Y");
                          ?>
                        </div>
                        <div class="heading-content">
                            <div class="content-data content-data1">
                                <a href="#">
                                    <div class="feth-icon">
                                        <i data-feather="users" class="icon"></i><br>
                                    </div>
                                    <p class="content-value1">All Collection</p>
                                    <p class="content-value2">
                                        
                                    </p>
                                </a>
                            </div>

                            <div class="content-data content-data2">
                                <a href="#">
                                    <div class="feth-icon">
                                        <i data-feather="slack" class="icon"></i><br>
                                    </div>
                                    <p class="content-value1">Feedback Collection</p>
                                    <p class="content-value2">
                                       
                                    </p>
                                </a>
                            </div>

                            <div class="content-data content-data3">
                                <a href="#">
                                    <div class="feth-icon">
                                        <i data-feather="file-text" class="icon"></i><br>
                                    </div>
                                    <p class="content-value1">Total Appointment</p>
                                    <p class="content-value2">
                                        
                                    </p>
                                </a>
                            </div>

                        </div>
                        <div class="recent-request">
                            <p class="recent-request-p1">Recent Request </p>
                        </div>


                    <section class="">

                        <marquee direction="left" class="section2">
                            <img class="maruqee-img" src="../../img/honda-512.png" alt="">
                            <img class="maruqee-img" src="../../img/kia-512.png" alt="">
                            <img class="maruqee-img" src="../../img/toyota-512.png" alt="">
                            <img class="maruqee-img" src="../../img/audi-512.png" alt="">
                            <img class="maruqee-img" src="../../img/bmw.png" alt="">
                            <img class="maruqee-img" src="../../img/ford-512.png" alt="">
                            <img class="maruqee-img" src="../../img/chevrolet-512.png" alt="">
                            <img class="maruqee-img" src="../../img/mercedes-benz-512.png" alt="">
                            <img class="maruqee-img" src="../../img/jeep.png" alt="">
                            <img class="maruqee-img" src="../../img/mitsubishi-512.png" alt="">
                            <img class="maruqee-img" src="../../img/volkswagen-512.png" alt="">
                        </marquee>

                    </section>

                </div>


            </div>
            <div class="third-container">

            </div>
        </div>

</body>
<script>
    feather.replace();
</script>
</html>