<footer>
    <div class="container">

        <?php
        foreach ($kontak as $r) :
        ?>
            <div class="row">
                <div class="col-md-4">
                    <h3>Short Cut</h3>
                    <hr>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="home" class="text-decoration-none">Home</a></li>
                        <li class="mb-2"><a href="price" class="text-decoration-none">Price List</a></li>
                        <li class="mb-2"><a href="booking" class="text-decoration-none">Booking Room</a></li>
                        <li class="mb-2"><a href="contact" class="text-decoration-none">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h3>Contact Us</h3>
                    <hr>
                    <ul class="list-unstyled">
                        <li class="mb-2 pe-5"><?= $r->alamat; ?></li>
                        <li class="mb-2">Phone: <?= $r->telepon; ?></li>
                        <li class="mb-2">Email: <?= $r->email; ?></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h3>Aston Hotel</h3>
                    <div class="mapouter">
                        <div class="gmap_canvas">
                            <iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=ASTON Bogor Hotel & Resort, Jalan Indigo Raya Jalan Pahlawan, RT.05/RW.12, Mulyaharja, Kota Bogor, Jawa Barat&t=&z=10&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 copyright">
                    <hr class="mt-5">
                    <p class="text-center pt-1">Copyright©2023</p>
                </div>
            </div>
    </div>
</footer>

<script src="public/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<?php
        endforeach;
        if ($detail != "detail") {
            echo "<script src='public/js/script.js' type='text/javascript'></script>";
        }
?>
</body>

</html>