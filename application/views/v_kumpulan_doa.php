<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/qurankitastyle.css">
</head>
<body>
<div class="container">
    <?php if (!empty($kumpulandoa)): ?>
        <div class="row mt-5">
            <?php foreach ($kumpulandoa as $doa): ?>
                <div class="col-md-4 mb-3">
                    <a style="text-decoration:none;" href="<?= base_url('kumpulan_doa/isiDoa/' . $doa['id']); ?>">
                        <div class="card text-white" style="border-top-right-radius: 20px; border-bottom-left-radius: 20px; padding-bottom:17px;">
                            <div class="card-body" href="#">
                                <p class="card-text"><?= $doa["id"]; ?></p>
                                <h5 class="card-title text-center"><?= $doa["doa"]; ?>.</h5>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    <?php else: ?>
        <p>Tidak ada data doa yang dapat ditampilkan.</p>
    <?php endif; ?>
</div>
</body>
</html>
