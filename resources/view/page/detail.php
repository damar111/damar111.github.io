<?php
$title = "Detail Product";
$page = "-";
$detail = "detail";
require_once __DIR__ . './../layout/header.php';

$data = $_GET['id'];
$r = QB::table('produk')->where('id', $data)->first();
?>

<nav class="space ms-5 top-detail pt-3" aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="home">Home</a></li>
        <li class="breadcrumb-item" aria-current="page"><?= $r->tipe; ?></li>
    </ol>
</nav>

<div class="container">
    <div class="row mt-1">
        <div class="col-8">
            <div class="card rounded" style="width: 100%;" data-aos="fade-right" data-aos-delay="0" data-aos-duration="1000">
                <img src="resources/images/<?= $r->image; ?>" class="card-img-top rounded" alt="room.png">
                <div class="card-body">
                    <h5 class="card-title mt-3 fs-3 mb-3"><?= $r->tipe; ?></h5>
                    <p class="card-text desk"><?= $r->deskripsi; ?></p>
                    <br>
                </div>
            </div>
        </div>

        <div class="col-4">
            <div class="card shadow rounded ms-4 p-2" data-aos="fade-left" data-aos-delay="500" data-aos-duration="1000">
                <iframe height="250px" src="<?= $r->yt; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                <?php
                $other = QB::table('produk')->get();
                ?>
                <div class="mt-5">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item fs-4">Other Room</li>
                        <?php
                        foreach ($other as $o) :
                        ?>
                            <li class="list-group-item"><a href="detail?id=<?= $o->id; ?>" class="text-decoration-none" style="color: #162938;"><img src="resources/images/<?= $o->image; ?>" class="rounded" style="width: 80px;"> <?= $o->tipe; ?></a></li>
                        <?php
                        endforeach;
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>

<?php
require_once __DIR__ . './../layout/footer.php';
?>