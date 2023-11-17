<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/qurankitastyle.css">
    <link rel="preconnect" href="<?= base_url(); ?>https://fonts.googleapis.com">
    <link rel="preconnect" href="<?= base_url(); ?>https://fonts.gstatic.com" crossorigin>
    <link href="<?= base_url(); ?>https://fonts.googleapis.com/css2?family=Tilt+Neon&display=swap" rel="stylesheet">
    <title><?= $title; ?></title>
</head>
<body>

<div class="container text-center container-search mt-5">
    <form action="<?= base_url('beranda/search'); ?>" method="post">
        <div class="input-group mb-3 wrapper-search">
            <input type="text" class="form-control" id="search-input" name="search" placeholder="Surah..." aria-label="Cari..." aria-describedby="basic-addon">
            <button class="btn btn-outline-secondary button-search" type="submit">Cari</button>
        </div>
    </form>
</div>

<div class="container">
    <?php if (!empty($quranlist)): ?>
        <div class="row mt-5">
            <?php foreach ($quranlist as $surah): ?>
                <div class="col-md-4 mb-3">
                    <a style="text-decoration:none;" href="<?= base_url('beranda/surah/' . $surah['nomor']); ?>">
                        <div class="card text-white">
                            <div class="card-body" href="#">
                                <h5 class="card-title"><?= $surah["nomor"]; ?>.</h5>
                                <h5 class="card-title text-center"><?= $surah["nama"]; ?></h5>
                                <p class="card-text text-center"><?= $surah["asma"]; ?></p>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    <?php else: ?>
        <p>Tidak ada hasil pencarian.</p>
    <?php endif; ?>
</div>

</body>
</html>
