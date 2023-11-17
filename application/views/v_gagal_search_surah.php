

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/qurankitastyle.css">
    <link rel="preconnect" href="<?= base_url(); ?>https://fonts.googleapis.com">
<link rel="preconnect" href="<?= base_url(); ?>https://fonts.gstatic.com" crossorigin>
<link href="<?= base_url(); ?>https://fonts.googleapis.com/css2?family=Tilt+Neon&display=swap" rel="stylesheet">
</head>


<body>
<div class="container text-center container-search mt-5">
    <h1 class="title-search">اَلسَّلَامُ عَلَيْكُمْ</h1>
    <form action="<?= base_url('beranda/search'); ?>" method="post">
        <div class="input-group mb-3 wrapper-search">
            <input type="text" class="form-control" id="search-input" name="search" placeholder="Surah..." aria-label="Cari..." aria-describedby="basic-addon">
            <button class="btn btn-outline-secondary button-search" type="submit">Cari</button>
        </div>
    </form>
</div>


<div class="container text-center">
   Surah tidak ditemukan 😡 
   <br>
   pastikan jangan typo mwehehe 🐣
   <br>
   cth search : al fatihah
   
</div>
</body>
</html>
