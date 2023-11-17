


<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/qurankitastyle.css">
</head>
<body>
<div class="container">
        <?php if (!empty($surahData)): ?>
            <div class="row mt-5">
              <?php foreach ($surahData as $surahData): ?>
                <div class="col-md-12">
                    <p class="container"><?= $surahData["nomor"]; ?></p>
                    <h1 class="text-center"><?= $surahData["ar"]; ?></h1>
                    <p class="text-surah text-center"><?= $surahData["tr"]; ?></p>
                    <div class="card text-white">
                        <div class="card-body">
                        <p class="card-text text-center"><?= $surahData["id"]; ?></p>
                        </div>
                    </div>
                    <br><br>
                </div>
              <?php endforeach; ?>
            </div>
        <?php else: ?>
            <p>data surah ga ada.</p>
        <?php endif; ?>
</div>

