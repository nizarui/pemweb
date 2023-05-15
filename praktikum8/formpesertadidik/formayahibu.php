<html lang=en>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<style type="text/css">
    #section1 {
        padding: 25px;
    }

    #body {
        padding-left: 300px;
        padding-right: 300px;
        background-color: #F9C8FF;
    }

    #satusatu {
        background-color: white;
    }
</style>

<body id="body">
    <div id="section1" class="text-center">
        <h2>Formulir Peserta Didik</h2>
    </div>
    <div id="section1">
        <h4>Data Orang Tua</h4>
    </div>
    <div id="satusatu" class="border border-secondary">
        <form action="okesimpan.php" method="post" style="margin: 50px;">
            <div class="row">
                <div class="col-xl-3">
                    <h5>Data Ayah Kandung</h5>
                </div>
                <div class="col-xl-9">
                </div>
            </div>
            
            <div class="row">
                <div class="col-xl-3">
                    Nama Ayah Kandung
                </div>
                <div class="col-xl-9">
                    <input id="namaayah" name="namaayah" type="text" required>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-xl-3">
                    Tahun Lahir
                </div>
                <div class="col-xl-9">
                    <input id="tahunlahirayah" name="tahunlahirayah" type="text" required>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-xl-3">
                    Pendidikan
                </div>
                <div class="col-xl-9">
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio1">
                            <input type="radio" class="form-check-input" id="pendidikanayah" name="pendidikanayah" value="Tidak Sekolah">Tidak Sekolah
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input" id="pendidikanayah" name="pendidikanayah" value="Putus SD">Putus SD
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input" id="pendidikanayah" name="pendidikanayah" value="SD Sederajat">SD Sederajat
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input" id="pendidikanayah" name="pendidikanayah" value="SMP Sederajat">SMP Sederajat
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input" id="pendidikanayah" name="pendidikanayah" value="SMA Sederajat">SMA Sederajat
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input" id="pendidikanayah" name="pendidikanayah" value="D1">D1
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input" id="pendidikanayah" name="pendidikanayah" value="D2">D2
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input" id="pendidikanayah" name="pendidikanayah" value="D3">D3
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input" id="pendidikanayah" name="pendidikanayah" value="D4/S1">D4/S1
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input" id="pendidikanayah" name="pendidikanayah" value="S2">S2
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input" id="pendidikanayah" name="pendidikanayah" value="S3">S3
                        </label>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-xl-3">
                    Pekerjaan
                </div>
                <div class="col-xl-9">
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio1">
                            <input type="radio" class="form-check-input" id="pekerjaanayah" name="pekerjaanayah" value="Tidak Bekerja">Tidak Bekerja
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input" id="pekerjaanayah" name="pekerjaanayah" value="Nelayan">Nelayan
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input" id="pekerjaanayah" name="pekerjaanayah" value="Petani">Petani
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input" id="pekerjaanayah" name="pekerjaanayah" value="Peternak">Peternak
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input" id="pekerjaanayah" name="pekerjaanayah" value="PNS/TNI/POLRI">PNS/TNI/POLRI
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input" id="pekerjaanayah" name="pekerjaanayah" value="Karyawan Swasta">Karyawan Swasta
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input" id="pekerjaanayah" name="pekerjaanayah" value="Pedagang Kecil">Pedagang Kecil
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input" id="pekerjaanayah" name="pekerjaanayah" value="Pedagang Besar">Pedagang Besar
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input" id="pekerjaanayah" name="pekerjaanayah" value="Wiraswasta">Wiraswasta
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input" id="pekerjaanayah" name="pekerjaanayah" value="Wirausaha">Wirausaha
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input" id="pekerjaanayah" name="pekerjaanayah" value="Buruh">Buruh
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input" id="pekerjaanayah" name="pekerjaanayah" value="Pensiunan">Pensiunan
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input" id="pekerjaanayah" name="pekerjaanayah" value="Lain-lain">Lain-lain
                        </label>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-xl-3">
                    Penghasilan Bulanan
                </div>
                <div class="col-xl-9">
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio1">
                            <input type="radio" class="form-check-input" id="penghasilanayah" name="penghasilanayah" value="< 500.000">
                            < 500 rb </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input" id="penghasilanayah" name="penghasilanayah" value="500-999 rb">500 - 999 rb
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input" id="penghasilanayah" name="penghasilanayah" value="1 juta - 2 juta">1 juta - 2 juta
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input" id="penghasilanayah" name="penghasilanayah" value="2 juta - 5 juta">2 juta - 5 juta
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input" id="penghasilanayah" name="penghasilanayah" value="5 juta - 20 juta">5 juta - 20 juta
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input" id="penghasilanayah" name="penghasilanayah" value="> 20 juta">> 20 juta
                        </label>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-xl-3">
                    Berkebutuhan Khusus
                </div>
                <div class="col-xl-9">
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio1">
                            <input type="radio" class="form-check-input" id="bkayah" name="bkayah" value="Tidak">Tidak
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input" id="bkayah" name="bkayah" value="Netra">Netra
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input" id="bkayah" name="bkayah" value="Rungu">Rungu
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input" id="bkayah" name="bkayah" value="Grahita Ringan">Grahita Ringan
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input" id="bkayah" name="bkayah" value="Daksa Ringan">Daksa Ringan
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input" id="bkayah" name="bkayah" value="Daksa Sedang">Daksa Sedang
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input" id="bkayah" name="bkayah" value="Laras">Laras
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input" id="bkayah" name="bkayah" value="Wicara">Wicara
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input" id="bkayah" name="bkayah" value="Tuna Ganda">Tuna Ganda
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input" id="bkayah" name="bkayah" value="Hiper Aktif">Hiper Aktif
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input" id="bkayah" name="bkayah" value="Cerdas Istimewa">Cerdas Istimewa
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input" id="bkayah" name="bkayah" value="Bakat Istimewa">Bakat Istimewa
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input" id="bkayah" name="bkayah" value="Kesulitan Belajar">Kesulitan Belajar
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input" id="bkayah" name="bkayah" value="Narkoba">Narkoba
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input" id="bkayah" name="bkayah" value="Indigo">Indigo
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input" id="bkayah" name="bkayah" value="Down Sindrome">Down Sindrome
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input" id="bkayah" name="bkayah" value="Autis">Autis
                        </label>
                    </div>
                </div>
            </div>

            <br>
            <br>
            <br>

            <div class="row">
                <div class="col-xl-3">
                    <h5>Data Ibu Kandung</h5>
                </div>
                <div class="col-xl-9">
                </div>
            </div>

            <div class="row">
                <div class="col-xl-3">
                    Nama Ibu Kandung
                </div>
                <div class="col-xl-9">
                    <input id="namaibu" name="namaibu" type="text" required>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-xl-3">
                    Tahun Lahir
                </div>
                <div class="col-xl-9">
                    <input id="tahunlahiribu" name="tahunlahiribu" type="text" required>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-xl-3">
                    Pendidikan
                </div>
                <div class="col-xl-9">
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio1">
                            <input type="radio" class="form-check-input" id="pendidikanibu" name="pendidikanibu" value="Tidak Sekolah">Tidak Sekolah
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input" id="pendidikanibu" name="pendidikanibu" value="Putus SD">Putus SD
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input" id="pendidikanibu" name="pendidikanibu" value="SD Sederajat">SD Sederajat
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input" id="pendidikanibu" name="pendidikanibu" value="SMP Sederajat">SMP Sederajat
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input" id="pendidikanibu" name="pendidikanibu" value="SMA Sederajat">SMA Sederajat
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input" id="pendidikanibu" name="pendidikanibu" value="D1">D1
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input" id="pendidikanibu" name="pendidikanibu" value="D2">D2
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input" id="pendidikanibu" name="pendidikanibu" value="D3">D3
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input" id="pendidikanibu" name="pendidikanibu" value="D4/S1">D4/S1
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input" id="pendidikanibu" name="pendidikanibu" value="S2">S2
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input" id="pendidikanibu" name="pendidikanibu" value="S3">S3
                        </label>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-xl-3">
                    Pekerjaan
                </div>
                <div class="col-xl-9">
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio1">
                            <input type="radio" class="form-check-input" id="pekerjaanibu" name="pekerjaanibu" value="Tidak Bekerja">Tidak Bekerja
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input" id="pekerjaanibu" name="pekerjaanibu" value="Nelayan">Nelayan
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input" id="pekerjaanibu" name="pekerjaanibu" value="Petani">Petani
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input" id="pekerjaanibu" name="pekerjaanibu" value="Peternak">Peternak
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input" id="pekerjaanibu" name="pekerjaanibu" value="PNS/TNI/POLRI">PNS/TNI/POLRI
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input" id="pekerjaanibu" name="pekerjaanibu" value="Karyawan Swasta">Karyawan Swasta
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input" id="pekerjaanibu" name="pekerjaanibu" value="Pedagang Kecil">Pedagang Kecil
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input" id="pekerjaanibu" name="pekerjaanibu" value="Pedagang Besar">Pedagang Besar
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input" id="pekerjaanibu" name="pekerjaanibu" value="Wiraswasta">Wiraswasta
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input" id="pekerjaanibu" name="pekerjaanibu" value="Wirausaha">Wirausaha
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input" id="pekerjaanibu" name="pekerjaanibu" value="Buruh">Buruh
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input" id="pekerjaanibu" name="pekerjaanibu" value="Pensiunan">Pensiunan
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input" id="pekerjaanibu" name="pekerjaanibu" value="Lain-lain">Lain-lain
                        </label>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-xl-3">
                    Penghasilan Bulanan
                </div>
                <div class="col-xl-9">
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio1">
                            <input type="radio" class="form-check-input" id="penghasilanibu" name="penghasilanibu" value="< 500.000">
                            < 500 rb </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input" id="penghasilanibu" name="penghasilanibu" value="500-999 rb">500 - 999 rb
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input" id="penghasilanibu" name="penghasilanibu" value="1 juta - 2 juta">1 juta - 2 juta
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input" id="penghasilanibu" name="penghasilanibu" value="2 juta - 5 juta">2 juta - 5 juta
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input" id="penghasilanibu" name="penghasilanibu" value="5 juta - 20 juta">5 juta - 20 juta
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input" id="penghasilanibu" name="penghasilanibu" value="> 20 juta">> 20 juta
                        </label>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-xl-3">
                    Berkebutuhan Khusus
                </div>
                <div class="col-xl-9">
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio1">
                            <input type="radio" class="form-check-input" id="bkibu" name="bkibu" value="Tidak">Tidak
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input" id="bkibu" name="bkibu" value="Netra">Netra
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input" id="bkibu" name="bkibu" value="Rungu">Rungu
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input" id="bkibu" name="bkibu" value="Grahita Ringan">Grahita Ringan
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input" id="bkibu" name="bkibu" value="Daksa Ringan">Daksa Ringan
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input" id="bkibu" name="bkibu" value="Daksa Sedang">Daksa Sedang
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input" id="bkibu" name="bkibu" value="Laras">Laras
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input" id="bkibu" name="bkibu" value="Wicara">Wicara
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input" id="bkibu" name="bkibu" value="Tuna Ganda">Tuna Ganda
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input" id="bkibu" name="bkibu" value="Hiper Aktif">Hiper Aktif
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input" id="bkibu" name="bkibu" value="Cerdas Istimewa">Cerdas Istimewa
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input" id="bkibu" name="bkibu" value="Bakat Istimewa">Bakat Istimewa
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input" id="bkibu" name="bkibu" value="Kesulitan Belajar">Kesulitan Belajar
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input" id="bkibu" name="bkibu" value="Narkoba">Narkoba
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input" id="bkibu" name="bkibu" value="Indigo">Indigo
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input" id="bkibu" name="bkibu" value="Down Sindrome">Down Sindrome
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input" id="bkibu" name="bkibu" value="Autis">Autis
                        </label>
                    </div>
                </div>
            </div>
            <br>

            <button type="submit" id="submit" name="submit" class="btn btn-primary">SIMPAN</button>
        </form>
    </div>
    <div id="section1">

    </div>
</body>

</html>