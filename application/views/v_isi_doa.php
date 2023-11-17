<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/qurankitastyle.css">
</head>
<body>
    <br>
<div class="container">
    <?php if (!empty($isiDoa)): ?>
        <div class="row mt-5">
            <?php foreach ($isiDoa as $isiDoa): ?>
                <div class="col-md-12">
                    <h1 class="doa text-center"><?= $isiDoa["doa"]; ?></h1>
                    <br><br>
                    <p class="ayat text-center"><?= $isiDoa["ayat"]; ?></p>
                    <p class="latin text-center"><?= $isiDoa["latin"]; ?></p>
                    <br>
                    <div class="card text-white" style="border-top-right-radius: 20px; border-bottom-left-radius: 20px; padding-bottom:17px;">
                        <div class="card-body">
                            <p class="card-text text-center"><?= $isiDoa["artinya"]; ?></p>
                        </div>
                    </div>
                    <br><br>
                </div>
            <?php endforeach; ?>
        </div>
    <?php else: ?>
        <p>Data doa tidak ada.</p>
    <?php endif; ?>
</div>
</body>
</html>
