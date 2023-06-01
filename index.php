<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <title>Ocean One</title>
    <script type="text/javascript" src="test.js"></script>
</head>
<body>
    <div class="navigation">
        <div class="row align-items-center">
            <div class="col-auto">
                <div class="logo">
                    <span id="webtitle"><img src="assets/g817.png" style="width: 45px; height: 30px; margin-right: 15px;">OCEAN ONE</span>
                </div>
            </div>
            <div class="col d-flex justify-content-end">
                <nav class="navbar navbar-expand-lg">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li><a href="#act">Actions</a></li>
                                <li><a href="#res">Resources</a></li>
                                <li><a href="#proj">Projects</a></li>
                                <li><a href="#expl">Explore</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="container">
            <div class="first-section">
                <!-- <img class="img-responsive" src="assets/beautiful-shot-sea-with-mountain-distance-clear-sky.jpg"> -->
                <div class="row align-items-center">
                    <h1>Turning the Tide!</h1>
                    <p>By caring about the environmental effects of plastic waste, we are not only preserving 
                        the natural beauty of our oceans but also safeguarding the interconnected web of life 
                        that depends on them. It is our responsibility to address this crisis and work towards 
                        innovative solutions to protect our planet's 
                        delicate ecosystems for generations to come.</p>
                    <button class="normal-button" onclick="alert('Lets take action for our ocean!')">TAKE ACTION</button>
                </div>
            </div>
        </div>
    </div>

    <div class="row" id="act">
        <div class="container">
            <div class="second-section">
                <div class="content-wrapper">
                    <div class="section-title">
                        <div class="row">
                            <h1><span id="text-blue">OFFSET YOUR</span><br>
                                PLASTIC FOOTPRINT</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="second-section-wrapper">
                        <?php
                            include("koneksi.php");
                            $content1 = mysqli_query($conn, "select * from section_two where id = 'se2004'");
                            $content1 = mysqli_fetch_assoc($content1);
                            $content2 = mysqli_fetch_assoc(mysqli_query($conn, "select * from section_two where id = 'se2005'"));
                            $content3 = mysqli_fetch_assoc(mysqli_query($conn, "select * from section_two where id = 'se2006'"));
                            echo "
                            <!-- 1 -->
                            <div class='second-section-content'>
                                <h3>".$content1['subtitle']."</h3>
                                <p id='s2-align-content'>". $content1['content'] ."</p>
                                <button class='normal-button'>" . $content1['btn_text'] . "</button>
                                <a style='color: yellow;' onclick='edit_content()'>
                                    EDIT
                                </a>
                            </div>

                            <!-- 2 -->
                            <div class='second-section-content'>
                                <h3>". $content2['subtitle'] ."</h3>
                                <p id='s2-kickstart-content'>". $content2['content'] ."</p>
                                <button class='normal-button'>". $content2['btn_text'] ."</button>
                            </div>

                            <!-- 3 -->
                            <div class='second-section-content'>
                                <h3>". $content3['subtitle'] ."</h3>
                                <p>". $content3['content'] ."</p>
                                <button class='normal-button'>". $content3['btn_text'] ."</button>
                            </div>
                            ";
                        ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row" id="res">
        <div class="container">
            <div class="third-section">
                <div class="content-wrapper">
                    <div class="section-title">
                        <h1 id="font-oswald">MAKE YOUR IMPACT</h1>
                        <!-- <h1 id="font-oswald">MAKE <span id="text-dark-blue">YOUR</span> IMPACT</h1> -->
                    </div>
                    <div class="third-section-wrapper">
                        <div class="third-section-content">
                            <div class="third-section-icon">
                                <img src="assets/HeroIcon_400x.webp" width="100%">
                            </div>
                            <p>COMMIT TO REMOVING A SPECIFIC AMOUNT</p>
                        </div>
                        <div class="third-section-content">
                            <div class="third-section-icon">
                                <img src="assets/HeroIcon_1_400x.webp" width="100%">
                            </div>
                            <p>TIE REMOVAL TO PRODUCT CHANGE</p>
                        </div>
                        <div class="third-section-content">
                            <div class="third-section-icon">
                                <img src="assets/HeroIcon_2_400x.webp" width="100%">
                            </div>
                            <p>INCENTIVIZE COMMUNITY ACTION</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row" id="proj">
        <div class="container">
            <div class="forth-section">
                <div class="title">
                    <h5 id="text-blue">PROJECT 1:</h5>
                    <h1><span id="text-light-blue">OCEANBOUND</span> CLEAN UP</h1>
                </div>
                <div class="row align-items-center">
                    <div class="col-md">
                        <div class="img-wrapper">
                            <img class="img-fluid" id="rounded" src="assets/ocg-saving-the-ocean-xch7jXAaqqo-unsplash.jpg">
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="content-align-left">
                            <h3 id="text-light-blue">PROBLEMS</h3>
                            <p>Plastic recycling generates plastic waste effluent as a standard part of the process. 
                                This dirty discharge known as "Mud" is at risk of being discharged into the wastewater 
                                and, in the best-case, is usually taken to the nearest landfill.</p>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-md">
                        <div class="content-align-right">
                            <h3 id="text-light-blue">SOLUTION</h3>
                            <p>Repurposes the “Mud” into useful building materials. It's composition is perfect for 
                                producing bricks! Unfortunately, these recycled plastic compound bricks are slightly 
                                more expensive than standard building bricks, so Impac+ program incentivizes the reuse 
                                of the “Mud” in the bricks by making them competitive on the open market.</p>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="img-wrapper">
                            <img class="img-fluid" id="rounded" src="assets/jason-dent-CGpHX68OBPY-unsplash.jpg">
                        </div>
                    </div>
                </div>
            </div>
            <div class="forth-section">
                <div class="title">
                    <h5 id="text-blue">PROJECT 2:</h5>
                    <h1><span id="text-light-blue">FISHING NET</span> RECOVERY</h1>
                </div>
                <div class="row align-items-center">
                    <div class="col-md">
                        <div class="img-wrapper">
                            <img class="img-fluid" id="rounded" src="assets/burkhard-kaufhold-Sbx3VC3NX-A-unsplash.jpg">
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="content-align-left">
                            <h3 id="text-light-blue">PROBLEMS</h3>
                            <p>Fishing gear - nets and ropes - pose a significant risk to sea life if cut away in the ocean. 
                                Unfortunately, incentives do not exist to recover this gear so at the end of its life, most 
                                gets landfilled or simply cut away at sea. It's a huge reason for why fishing nets are the 
                                largest ocean plastic polluter.</p>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-md">
                        <div class="content-align-right">
                            <h3 id="text-light-blue">SOLUTION</h3>
                            <p>We provides the funds needed to incentivize collection and recycling of this gear. This program 
                                creates a pathway for the reclamation of end of life fishing gear.</p>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="img-wrapper">
                            <img class="img-fluid" id="rounded" src="assets/katt-yukawa-K0E6E0a0R3A-unsplash.jpg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row" id="expl">
        <div class="container">
            <div class="fifth-section">
                <h1 class="text-center" id="text-light-blue">GET IN <span id="text-blue">TOUCH</span></h1>
                <div class="row align-items-center">
                    <div class="col-md-6 d-flex justify-content-end">
                        <div style="padding-top: 40px; max-width: 100%; overflow: hidden; color:red; width: 450px; height: 450px;">
                            <div id="display-google-map" style="height: 100%; width: 100%; max-width: 100%;">
                                <iframe style="height: 100%; width:100%; border: 2px solid #03256c;border-radius: 30px;" 
                                    frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=Sekolah+Vokasi+UGM,
                                    +Jalan+Persatuan,+Blimbing+Sari,+Caturtunggal,+Sleman+Regency,+Special+Region+of+
                                    Yogyakarta,+Indonesia&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8">
                                </iframe>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 align-self-center d-flex justify-content-start">
                        <form class="form-wrapper">
                            <input type="text" id="form-name" placeholder="Name"><br>
                            <input type="email" id="form-email" placeholder="Email"><br>
                            <textarea id="form-msg" placeholder="Write your message here..."></textarea><br>
                            <input type="button" class="submit-button" value="SEND"
                             onclick="send_response()">
                        </form>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div id="response-output" class="col-md-9"></div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="row align-items-center">
            <div class="col">
                <div class="container-fluid">
                    <span id="webtitle"><img src="assets/g817.png" style="width: 45px; height: 30px; margin-right: 15px;">OCEAN ONE</span>
                </div>
            </div>
            <div class="col d-flex justify-content-end">
                <nav class="navbar">
                    <div class="container-fluid">
                        <ul class="navbar-nav">
                            <li><a href="#">Newsletter</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">FAQs</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </footer>
</body>
</html>