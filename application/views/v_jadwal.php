<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/qurankitastyle.css">
</head>
<body>
    <div class="container">
        <?php if (!empty($jadwalKota)): ?>
            <h1>Daftar Kota</h1>
            <div class="row mt-5">
                <?php foreach ($jadwalKota as $kota): ?>
                    <div class="col-md-4 mb-3">
                        <a style="text-decoration:none;" href="<?= base_url('jadwal/sholat/' . $kota['id']);  ?>">
                            <div class="card text-white">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $kota["id"]; ?>.</h5>
                                    <h5 class="card-title text-center"><?= $kota["lokasi"]; ?></h5>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <p>Tidak ada data kota yang dapat ditampilkan.</p>
        <?php endif; ?>
    </div>
</body>
</html>
