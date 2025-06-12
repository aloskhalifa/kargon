<?php include 'config/config.php'; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo $appName ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="ROBOTS" content="ALL" />
    <meta name="Engine" content="all" />
    <meta name="distribution" content="global" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="keywords" content="ABCC parent portal, Advanced Breed Group Of Schools parent portal, Advanced Breed Group Of Schools portal" />
    <meta name="description" content="Your Child's Education is at Your Fingertips!" />

    <link href="<?php echo $websiteUrl ?>/all-images/images/icon.fw.png?v=<?php echo $codeVersion ?>" rel="shortcut icon" type="image-png" />
    <link href="<?php echo $websiteUrl ?>/styles/styles.css?v=<?php echo $codeVersion ?>" type="text/css" rel="stylesheet" />
</head>

<body>
    <!-- header -->
    <?php include 'header.php'; ?>
    <!-- slide section -->

    <section class="other-pages-slide-section">
        <div class="others-slide-inner-div">
            <div class="text-div">
                <h1>Contacts Us</h1>
                <ul>
                    <li>Home</li>
                    <hr>
                    <li class="li-style">Contacts Us</li>
                </ul>
            </div>
        </div>
    </section>

    <main class="services-index-section">

        <!-- technology -->
        <div class="body-div">
            <div class="body-div-in">

                <div class="technology-back-div contack-back-div">

                    <div class="technology-contact contact-div">
                        <div class="text-div">
                            <span>Contact us</span>
                            <h2>Get In Touch</h2>
                        </div>

                        <div class="text-field-information">
                            <div class="text-field">
                                <label for="">Your Name</label>
                                <input type="text" placeholder="your name here"></input>
                            </div>

                            <div class="text-field">
                                <label for="">Your Email</label>
                                <input type="text" placeholder="your email here"></input>
                            </div>


                            <div class="text-field">
                                <label for="">Your Subject</label>
                                <input type="text" placeholder="your subject here"></input>
                            </div>

                            <div class="text-field">
                                <label for="">Your Contact</label>
                                <input type="text" placeholder="your contact here"></input>
                            </div>

                            <div class="text-field inputFull">
                                <textarea name="" id="" placeholder="Tell us a few words"></textarea>
                            </div>

                            <div class="text-field inputFull">
                                <input type="text" placeholder="Tell us a few words"></input>
                            </div>

                            <div class="technology-btn">
                                <span>CATCH</span>
                                <button class="btn">SEND MESSAGE</button>
                            </div>

                        </div>
                    </div>

                    <div class="contact-details-div">

                        <div class="contact-text">
                            <h2>Our contact detail</h2>
                            <p>Need any consultations contact with us</p>
                        </div>

                        <div class="contact-details">
                            <h3>Phone Number</h3>
                            <span>+1 (888) 123-5678</span>
                            <span>(+44)123 456 789</span>
                        </div>

                        <div class="contact-details">
                            <h3>Email Address</h3>
                            <span>info@example.com</span>
                            <span>contact@example.com</span>
                        </div>

                        <div class="contact-details">
                            <h3>Loaction</h3>
                            <span>Guild Street 51, North Town, London-06192, UK</span>
                        </div>
                        
                    </div>

                </div>
            </div>
        </div>
        <!-- footer -->
        <?php include 'footer.php'; ?>
    </main>
</body>

</html>