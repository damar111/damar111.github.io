<?php
$title = "Price List";
$detail = "-";
$page = "price";
require_once __DIR__ . './../layout/header.php';
?>

<div class="bg-price">
    <div class="container">
        <div class="row">
            <div class="col header-sec">
                <h2 class="text-center" data-aos="zoom-out" data-aos-delay="150" data-aos-duration="1000">Price List</h2>
            </div>
        </div>
    </div>
</div>

<div class="container my-5">
    <div class="row">
        <div class="col page-title text-center">
            <h2 data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000">Aston Hotel Room</h2>
            <hr data-aos="slide-right" data-aos-delay="1000" data-aos-duration="1000">
        </div>
    </div>
    <div class="row mt-2 d-flex justify-content-center">
        <div class="col-11">
            <div class="card p-2 shadow" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                <table class="table table-hover price-table">
                    <thead class="table-light">
                        <tr class="fs-5 text-center">
                            <th scope="col">No</th>
                            <th scope="col">Room Type</th>
                            <th scope="col">Picture</th>
                            <th scope="col">Price</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php
                        $num = 1;
                        foreach ($data as $r) :
                        ?>
                            <tr class="align-middle">
                                <th><?= $num++; ?></th>
                                <td><?= $r->tipe; ?></td>
                                <td><img src="resources/images/<?= $r->image; ?>" alt="room.png" style="width: 200px;"></td>
                                <td><?= $r->harga; ?></td>
                            </tr>
                        <?php
                        endforeach;
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php
require_once __DIR__ . './../layout/footer.php';
?>