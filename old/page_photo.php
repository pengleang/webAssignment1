<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<style>
    .banner_part{
        background-image: url("img/portPic.jpg");
    }
    .main_menu {
        background-color: white;
    }
</style>

<body>
    <?php include('html/template/header.html') ?>

    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="banner_slider owl-carousel">
                        <div class="single_banner_slider">
                            <div class="row blahblah1">
                                <div class="col-lg-5 col-md-8">
                                    <div class="banner_text">
                                        <div class="banner_text_iner">
                                            <h1>Wood & Cloth
                                                Sofa</h1>
                                            <p>Incididunt ut labore et dolore magna aliqua quis ipsum
                                                suspendisse ultrices gravida. Risus commodo viverra</p>
                                            <a href="#" class="btn_2">Learn More</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="banner_img d-none d-lg-block">
                                    <img src="img/banner_img.png" alt="">
                                </div> -->
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="fake_container">
        superblah
    </div>

    <?php include('html/template/footer.html') ?>
</body>

</html>