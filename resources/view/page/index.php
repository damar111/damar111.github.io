<?php
$detail = "-";
$title = "Home";
$page = "home";
require_once __DIR__ . './../layout/header.php';
?>

<div class="bg-home">
    <div class="container">
        <div class="row">
            <div class="col-6 hom-margin header-sec">
                <h2 class="fw-bold" data-aos="fade-right" data-aos-delay="150" data-aos-duration="2000">Aston Hotel</h2>
                <p data-aos="fade-right" data-aos-delay="500" data-aos-duration="2000">WHERE TRUST IS A HISTORY OF KEPT PROMISES</p>
                <a href="booking">
                    <button class="btncustom-home bg-transparent shadow" data-aos="fade-right" data-aos-delay="500" data-aos-duration="2s">Booking Now</button>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="container room-page">
    <div class="row">
        <div class="col ms-4 room">
            <h2 class="text-center" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">Our Room</h2>
            <hr data-aos="fade-right" data-aos-delay="1000" data-aos-duration="1000">
        </div>
    </div>
    <div class="row">

        <?php
        $anim = 5;
        foreach ($data as $r) :
        ?>

            <div class="col-4" data-aos="fade-up" data-aos-delay="<?= $anim++; ?>50" data-aos-duration="1000">
                <div class="card card-hover bg-dark shadow text-white ms-4 mt-5" style="width: 390px;">
                    <a href="detail?id=<?= $r->id; ?>" class="text-decoration-none card-a">
                        <img src="resources/images/<?= $r->image; ?>" class="card-img" alt="gambar_hotel">
                        <div class="card-img-overlay">
                            <br><br><br><br><br><br><br><br>
                            <h5 class="card-title text-center"><?= $r->tipe; ?></h5>
                        </div>
                    </a>
                </div>
            </div>

        <?php
        endforeach;
        ?>

    </div>
</div>


<?php
require_once __DIR__ . './../layout/footer.php';
?>