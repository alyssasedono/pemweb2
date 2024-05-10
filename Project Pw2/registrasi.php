<?php
$domisili = [
    'jakarta',
    'Bogor',
    'Depok',
    'Tanggerang',
    'Bekasi',
];

$kecamatan = [
    'Cilendek',
    'Situgede',
    'Menteng',
    'Pasirmulya',
    'Gunung batu',
    'Sukasari',
    'Kebon kelapa',
    'Ciwaringin',
    'Pakuan',
    'Cipaku',
    'Harjasari',
];
include_once('top.php');
include_once('menu.php');
?>
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Daftar</h1>

        <fieldset class="my-5 border p-2">
        <legend class="top">Daftar</legend>

        <!--main-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <form class="hero" action="proses_registrasi.php" method="POST">
            <div class="form-group row">
                <label for="nim" class="col-4 col-form-label">Nama Lengkap</label>
                <div class="col-8">
                    <input id="nama" name="nama" type="text" class="form-control" required="required" placeholder="Nama Lengkap">
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Nik</label>
                <div class="col-8">
                    <input id="nik" name="nik" type="text" class="form-control" required="required" placeholder="Nomor Induk Kependudukan">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">gender</label>
                <div class="col-8">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="gender" id="gender_0" type="radio" class="custom-control-input" value="laki-laki"
                            required="required">
                        <label for="gender_0" class="custom-control-label">Laki-Laki</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="gender" id="gender_1" type="radio" class="custom-control-input" value="perempuan"
                            required="required">
                        <label for="gender_1" class="custom-control-label">Perempuan</label>
                    </div>
                </div>
            </div>
            <!-- <div class="form-group row"> 
                <label for="prodi" class="col-4 col-form-label">Prodi</label>
                <div class="col-8">
                    <select id="prodi" name="prodi" required="required" class="custom-select">
                        <?php foreach($prodi as $key => $value): ?>
                            <option value="<?php echo $key ?>"><?php echo $value ?></option>
                            <?php endforeach; ?>
                    </select>
                </div>
            </div>-->
            <!-- <div class="form-group row"> 
                <label class="col-4">skill web &amp; programing</label>
                <div class="col-8">
                <?php foreach($skills as $key => $value): ?>
                    <div class="custom-control custom-checkbox custom-control-inline">
                    
                        <input name="skill[]" id="skill<?php echo $key ?>" type="checkbox" class="custom-control-input" value="<?php echo $key ?>">
                        <label for="skill<?php echo $key ?>" class="custom-control-label"><?php echo $key ?></label>
                        
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>-->
            <div class="form-group row">
                <label for="domisili" class="col-4 col-form-label">Domisili</label>
                <div class="col-8">
                    <select id="domisili" name="domisili" class="custom-select" required="required">
                        <?php foreach($domisili as $value): ?>
                            <option value="<?php echo $value?>"> <?php echo $value ?></option>
                            <?php endforeach; ?>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="domisili" class="col-4 col-form-label">Kecamatan</label>
                <div class="col-8">
                    <select id="kecamatan" name="kecamatan" class="custom-select" required="required">
                        <?php foreach($kecamatan as $value): ?>
                            <option value="<?php echo $value?>"> <?php echo $value ?></option>
                            <?php endforeach; ?>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="email" class="col-4 col-form-label">Email</label>
                <div class="col-8">
                    <input id="email" name="email" type="text" class="form-control" required="required" placeholder="Email">
                </div>
            </div>

            <div class="form-group row">
                <label for="email" class="col-4 col-form-label">Password</label>
                <div class="col-8">
                    <input id="email" name="email" type="text" class="form-control" required="required" placeholder="Password">
                </div>
            </div>

            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </fieldset>
    </div>
</main>

<?php
include_once('bottom.php');
?>