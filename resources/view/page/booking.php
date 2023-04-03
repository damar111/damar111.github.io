<?php
$title = "Booking";
$page = "booking";
$detail = "-";
require_once __DIR__ . './../layout/header.php';
?>

<div class="bg-booking">
    <div class="container">
        <div class="row">
            <div class="col header-sec">
                <h2 class="text-center" data-aos="zoom-out" data-aos-delay="150" data-aos-duration="1000">Booking Room</h2>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row mt-4 d-flex justify-content-center">
        <div class="col-11 page-title">
            <h2 class="mb-4 text-center" data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000">Booking Form</h2>
            <hr data-aos="fade-right" data-aos-delay="1000" data-aos-duration="1000">
        </div>
    </div>
    <div class="row mt-4 d-flex justify-content-center">
        <div class="col-lg-10">
            <div class="card p-5 shadow" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                <form method="post" action="input">
                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama_pemesan" name="nama_pemesan" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Jenis Kelamin</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jk" id="jk" value="Laki-laki" required>
                            <label class="form-check-label">Laki-laki</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jk" id="jk" value="Perempuan" required>
                            <label class="form-check-label">Perempuan</label>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Nomor Identitas</label>
                        <input type="text" class="form-control" id="nik" name="nik" maxlength="16" minlength="16" required>
                        <div id="nikError" class="form-text" style="color: red;"></div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Tipe Kamar</label>
                        <select type="text" class="form-select" id="tipe" name="tipe" required="true">
                            <option value="-" selected>Pilih Tipe Kamar</option>
                            <?php
                            foreach ($data as $r) :
                            ?>
                                <option value="<?= $r->kategori; ?>"><?= $r->kategori; ?></option>
                            <?php
                            endforeach;
                            ?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Harga</label>
                        <input type="text" readonly class="form-control" id="harga" name="harga">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Tanggal Pesan</label>
                        <input type="text" class="form-control" id="datepicker" name="tgl_pesan" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Durasi Menginap</label>
                        <div class="row">
                            <div class="col-lg-3">
                                <input type="text" class="form-control" id="durasi" name="durasi_menginap" required>
                                <div id="durasiError" class="form-text" style="color: red;"></div>
                            </div>
                            <div class="col-lg-9">
                                <p>hari</p>
                            </div>
                        </div>
                    </div>

                    <div class="mb-5 form-check">
                        <input type="checkbox" class="form-check-input" name="breakfast" value="true" id="breakfast">
                        <label class="form-check-label">Termasuk breakfast</label>
                    </div>

                    <div class="mb-5">
                        <label class="form-label">Total Bayar</label><br>
                        <div class="row">
                            <div class="col-1 pt-2">
                                <p>Rp.</p>
                            </div>
                            <div class="col-5" style="margin-left: -50px;">
                                <input type="text" id="total_bayar" name="total_bayar" readonly class="p-2">
                            </div>
                        </div>
                        <!-- <input type="hidden" id="total" name="total">
                        <input type="hidden" id="potongan_harga" name="potongan_harga"> -->
                    </div>

                    <div class="row">
                        <div class="col-sm-4 d-flex justify-content-center">
                            <button type="button" class="btn btn-primary" id="hitung_total">Hitung total</button>
                        </div>
                        <div class="col-sm-4 d-flex justify-content-center">
                            <button type="submit" class="btn btn-success" name="submit" id="submit">Simpan</button>
                            <!-- <a href="input" type="submit" class="btn btn-primary" id="submit">Simpan</a> -->
                        </div>
                        <div class="col-sm-4 d-flex justify-content-center">
                            <button type="button" class="btn btn-outline-secondary " id="cancel">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
require_once __DIR__ . './../layout/footer.php';
?>