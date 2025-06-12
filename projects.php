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
                <h1>Two Columns</h1>
                <ul class="project-li">
                    <li>Home</li>
                    <hr>
                    <li class="li-style">Two Columns</li>
                </ul>
            </div>
        </div>
    </section>

    <main class="product-index-section">

    <!-- portfolio -->
        <div class="body-div">
            <div class="body-div-in">
                <div class="title-div">
                    <span>GALLARY</span>
                    <h2>Our portfolio</h2>
                </div>

                <div class="portfolio-text-div">
                    <span class="portfolio-text">All</span>
                    <span>Warehouse</span>
                    <span>Transport</span>
                    <span>Logistics</span>
                    <span>Freight</span>
                </div>

                <div class="portfolio-back-div">
                    <div class="portfolio-div">
                        <div class="portfolio-image">
                            <img src="all-images/images/portfolio-01.jpg" alt="about">
                        </div>

                        <div class="portfolio-image-text">
                            <p>Warehouse</p>
                            <h2>Transfox Company</h2>
                        </div>
                    </div>

                    <div class="portfolio-div">
                        <div class="portfolio-image">
                            <img src="all-images/images/portfolio-02.jpg" alt="about">
                        </div>

                        <div class="portfolio-image-text">
                            <p>Transport</p>
                            <h2>Special Transport</h2>
                        </div>
                    </div>

                    <div class="portfolio-div">
                        <div class="portfolio-image">
                            <img src="all-images/images/portfolio-03.jpg" alt="about">
                        </div>

                        <div class="portfolio-image-text">
                            <p>Air</p>
                            <h2>Air Transportation</h2>
                        </div>
                    </div>

                    <div class="portfolio-div">
                        <div class="portfolio-image">
                            <img src="all-images/images/portfolio-04.jpg" alt="about">
                        </div>

                        <div class="portfolio-image-text">
                            <p>Logistics</p>
                            <h2>Logistics services</h2>
                        </div>
                    </div>

                    <div class="portfolio-div">
                        <div class="portfolio-image">
                            <img src="all-images/images/portfolio-05.jpg" alt="about">
                        </div>

                        <div class="portfolio-image-text">
                            <p>Ship</p>
                            <h2>Ship Transportation</h2>
                        </div>
                    </div>

                    <div class="portfolio-div">
                        <div class="portfolio-image">
                            <img src="all-images/images/portfolio-06.jpg" alt="about">
                        </div>

                        <div class="portfolio-image-text">
                            <p>Transport</p>
                            <h2>Ocean Freight</h2>
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