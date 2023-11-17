<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/qurankitastyle.css">
</head>
<body>
<div class="container text-center container-search mt-5">
    <h1 class="title-search">اَلسَّلَامُ عَلَيْكُمْ</h1>
    <form action="<?= base_url('asmaul_husna/searchAH'); ?>" method="post">
        <div class="input-group mb-3 wrapper-search">
            <input type="text" class="form-control" id="search-input" name="searchAH" placeholder="Asmaul Husna..." aria-label="Cari..." aria-describedby="basic-addon">
            <button class="btn btn-outline-secondary button-search" type="submit">Cari</button>
        </div>
    </form>
</div>
<div class="container">
    <?php if (!empty($asmaulhusna)): ?>
        <div class="row mt-5">
            <?php foreach ($asmaulhusna as $item): ?>
                <div class="col-md-4 mb-3">
                    <div class="card text-white" style="border-top-right-radius: 20px; border-bottom-left-radius: 20px; padding-bottom:17px;">
                        <div class="card-body">
                            <p class="card-text"><?= $item["urutan"]; ?></p>
                            <h5 class="card-title text-center"><?= $item["latin"]; ?>.</h5>
                            <h5 class="card-title text-center"><?= $item["arab"]; ?></h5>
                            <p class="card-text text-center"><?= $item["arti"]; ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php else: ?>
        <p>Tidak ada data Asmaul Husna yang dapat ditampilkan.</p>
    <?php endif; ?>
</div>
</body>
</html>
