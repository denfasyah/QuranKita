<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/qurankitastyle.css">
</head>
<body>
<div class="container">
    <?php if(isset($jadwal['status']) && $jadwal['status'] == 1): ?>
        <div class="col-md-12">
            <br>
            <br>
            <h1 class="text-center"><?=$jadwal['data']['lokasi'];?></h1>
            <h1 class="text-center"><?=$jadwal['data']['jadwal']['tanggal']; ?></h1>
            <h2 class="text-center">Waktu Sholat</h2>
            <ul>
                <li>Imsak:<?=$jadwal['data']['jadwal']['imsak'];?></li>
                <li>Subuh:<?=$jadwal['data']['jadwal']['subuh'];?></li>
                <li>Terbit:<?=$jadwal['data']['jadwal']['terbit'];?></li>
                <li>Dhuha:<?=$jadwal['data']['jadwal']['dhuha'];?></li>
                <li>Dzuhur:<?=$jadwal['data']['jadwal']['dzuhur'];?></li>
                <li>Ashar:<?=$jadwal['data']['jadwal']['ashar'];?></li>
                <li>Maghrib:<?=$jadwal['data']['jadwal']['maghrib'];?></li>
                <li>Isya:<?=$jadwal['data']['jadwal']['isya'];?></li>
            </ul>
        </div>
    <?php else: ?>
        <p>memek</p>
    <?php endif; ?>
</div>

</body>
</html>
