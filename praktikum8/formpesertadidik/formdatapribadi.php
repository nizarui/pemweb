<html lang=en>

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <script src="bootstrap/js/jquery-3.6.3.min.js"></script>
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
    <h4>Data Pribadi</h4>
  </div>
  <div id="satusatu" class="border border-secondary">
    <form action="okesimpan.php" method="post" style="margin: 50px;">
      <div class="row">
        <div class="col-xl-3">
          Nama Lengkap
        </div>
        <div class="col-xl-9">
          <input id="namalengkappribadi" name="namalengkappribadi" type="text" required>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-xl-3">
          Jenis Kelamin
        </div>
        <div class="col-xl-9">
          <div class="form-check-inline">
            <label class="form-check-label" for="radio1">
              <input type="radio" class="form-check-input" id="jk" name="jk" value="Laki">Laki-laki
            </label>
          </div>
          <div class="form-check-inline">
            <label class="form-check-label" for="radio2">
              <input type="radio" class="form-check-input" id="jk" name="jk" value="Perempuan">Perempuan
            </label>
          </div>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-xl-3">
          NISN
        </div>
        <div class="col-xl-9">
          <input id="nisn" name="nisn" type="text" required>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-xl-3">
          NIK
        </div>
        <div class="col-xl-9">
          <input id="nik" name="nik" type="text" required>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-xl-3">
          Tanggal Lahir
        </div>
        <div class="col-xl-9">
          <input name="tanggallahir" type="date" required>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-xl-3">
          Tempat Lahir
        </div>
        <div class="col-xl-9">
          <input id="tempatlahir" name="tempatlahir" type="text" required>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-xl-3">
          Agama
        </div>
        <div class="col-xl-9">
          <div class="form-check-inline">
            <label class="form-check-label" for="radio1">
              <input type="radio" class="form-check-input" id="agama" name="agama" value="Islam">Islam
            </label>
          </div>
          <div class="form-check-inline">
            <label class="form-check-label" for="radio2">
              <input type="radio" class="form-check-input" id="agama" name="agama" value="Kristen/Protestan">Kristen/Protestan
            </label>
          </div>
          <div class="form-check-inline">
            <label class="form-check-label" for="radio2">
              <input type="radio" class="form-check-input" id="agama" name="agama" value="Katholik">Katholik
            </label>
          </div>
          <div class="form-check-inline">
            <label class="form-check-label" for="radio2">
              <input type="radio" class="form-check-input" id="agama" name="agama" value="Hindu">Hindu
            </label>
          </div>
          <div class="form-check-inline">
            <label class="form-check-label" for="radio2">
              <input type="radio" class="form-check-input" id="agama" name="agama" value="Budha">Budha
            </label>
          </div>
          <div class="form-check-inline">
            <label class="form-check-label" for="radio2">
              <input type="radio" class="form-check-input" id="agama" name="agama" value="Khonghucu">Khonghucu
            </label>
          </div>
          <div class="form-check-inline">
            <label class="form-check-label" for="radio2">
              <input type="radio" class="form-check-input" id="agama" name="agama" value="Lainnya">Lainnya
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
              <input type="radio" class="form-check-input" id="bk" name="bk" value="Tidak">Tidak
            </label>
          </div>
          <div class="form-check-inline">
            <label class="form-check-label" for="radio2">
              <input type="radio" class="form-check-input" id="bk" name="bk" value="Netra">Netra
            </label>
          </div>
          <div class="form-check-inline">
            <label class="form-check-label" for="radio2">
              <input type="radio" class="form-check-input" id="bk" name="bk" value="Rungu">Rungu
            </label>
          </div>
          <div class="form-check-inline">
            <label class="form-check-label" for="radio2">
              <input type="radio" class="form-check-input" id="bk" name="bk" value="Grahita Ringan">Grahita Ringan
            </label>
          </div>
          <div class="form-check-inline">
            <label class="form-check-label" for="radio2">
              <input type="radio" class="form-check-input" id="bk" name="bk" value="Daksa Ringan">Daksa Ringan
            </label>
          </div>
          <div class="form-check-inline">
            <label class="form-check-label" for="radio2">
              <input type="radio" class="form-check-input" id="bk" name="bk" value="Daksa Sedang">Daksa Sedang
            </label>
          </div>
          <div class="form-check-inline">
            <label class="form-check-label" for="radio2">
              <input type="radio" class="form-check-input" id="bk" name="bk" value="Laras">Laras
            </label>
          </div>
          <div class="form-check-inline">
            <label class="form-check-label" for="radio2">
              <input type="radio" class="form-check-input" id="bk" name="bk" value="Wicara">Wicara
            </label>
          </div>
          <div class="form-check-inline">
            <label class="form-check-label" for="radio2">
              <input type="radio" class="form-check-input" id="bk" name="bk" value="Tuna Ganda">Tuna Ganda
            </label>
          </div>
          <div class="form-check-inline">
            <label class="form-check-label" for="radio2">
              <input type="radio" class="form-check-input" id="bk" name="bk" value="Hiper Aktif">Hiper Aktif
            </label>
          </div>
          <div class="form-check-inline">
            <label class="form-check-label" for="radio2">
              <input type="radio" class="form-check-input" id="bk" name="bk" value="Cerdas Istimewa">Cerdas Istimewa
            </label>
          </div>
          <div class="form-check-inline">
            <label class="form-check-label" for="radio2">
              <input type="radio" class="form-check-input" id="bk" name="bk" value="Bakat Istimewa">Bakat Istimewa
            </label>
          </div>
          <div class="form-check-inline">
            <label class="form-check-label" for="radio2">
              <input type="radio" class="form-check-input" id="bk" name="bk" value="Kesulitan Belajar">Kesulitan Belajar
            </label>
          </div>
          <div class="form-check-inline">
            <label class="form-check-label" for="radio2">
              <input type="radio" class="form-check-input" id="bk" name="bk" value="Narkoba">Narkoba
            </label>
          </div>
          <div class="form-check-inline">
            <label class="form-check-label" for="radio2">
              <input type="radio" class="form-check-input" id="bk" name="bk" value="Indigo">Indigo
            </label>
          </div>
          <div class="form-check-inline">
            <label class="form-check-label" for="radio2">
              <input type="radio" class="form-check-input" id="bk" name="bk" value="Down Sindrome">Down Sindrome
            </label>
          </div>
          <div class="form-check-inline">
            <label class="form-check-label" for="radio2">
              <input type="radio" class="form-check-input" id="bk" name="bk" value="Autis">Autis
            </label>
          </div>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-xl-3">
          Alamat Jalan
        </div>
        <div class="col-xl-9">
          <input id="alamatjalan" name="alamatjalan" type="text" required>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-xl-3">
          RT
        </div>
        <div class="col-xl-9">
          <input id="rt" name="rt" type="text" required>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-xl-3">
          RW
        </div>
        <div class="col-xl-9">
          <input id="rw" name="rw" type="text" required>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-xl-3">
          Nama Dusun
        </div>
        <div class="col-xl-9">
          <input id="namadusun" name="namadusun" type="text" required>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-xl-3">
          Nama Kelurahan/Desa
        </div>
        <div class="col-xl-9">
          <input id="kelurahan" name="kelurahan" type="text" required>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-xl-3">
          Kecamatan
        </div>
        <div class="col-xl-9">
          <input id="kecamatan" name="kecamatan" type="text" required>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-xl-3">
          Kode Pos
        </div>
        <div class="col-xl-9">
          <input id="kodepos" name="kodepos" type="text" required>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-xl-3">
          Tempat Tinggal
        </div>
        <div class="col-xl-9">
          <div class="form-check-inline">
            <label class="form-check-label" for="radio1">
              <input type="radio" class="form-check-input" id="tt" name="tt" value="Bersama Orang Tua">Bersama Orang Tua
            </label>
          </div>
          <div class="form-check-inline">
            <label class="form-check-label" for="radio2">
              <input type="radio" class="form-check-input" id="tt" name="tt" value="Wali">Wali
            </label>
          </div>
          <div class="form-check-inline">
            <label class="form-check-label" for="radio2">
              <input type="radio" class="form-check-input" id="tt" name="tt" value="Kos">Kos
            </label>
          </div>
          <div class="form-check-inline">
            <label class="form-check-label" for="radio2">
              <input type="radio" class="form-check-input" id="tt" name="tt" value="Asrama">Asrama
            </label>
          </div>
          <div class="form-check-inline">
            <label class="form-check-label" for="radio2">
              <input type="radio" class="form-check-input" id="tt" name="tt" value="Panti Asuhan">Panti Asuhan
            </label>
          </div>
          <div class="form-check-inline">
            <label class="form-check-label" for="radio2">
              <input type="radio" class="form-check-input" id="tt" name="tt" value="Lainnya">Lainnya
            </label>
          </div>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-xl-3">
          Moda Transportasi
        </div>
        <div class="col-xl-9">
          <div class="form-check-inline">
            <label class="form-check-label" for="radio1">
              <input type="radio" class="form-check-input" id="mt" name="mt" value="Jalan Kaki">Jalan Kaki
            </label>
          </div>
          <div class="form-check-inline">
            <label class="form-check-label" for="radio2">
              <input type="radio" class="form-check-input" id="mt" name="mt" value="Kendaraan Pribadi">Kendaraan Pribadi
            </label>
          </div>
          <div class="form-check-inline">
            <label class="form-check-label" for="radio2">
              <input type="radio" class="form-check-input" id="mt" name="mt" value="Kendaraan Umum/Angkot">Kendaraan Umum/Angkot
            </label>
          </div>
          <div class="form-check-inline">
            <label class="form-check-label" for="radio2">
              <input type="radio" class="form-check-input" id="mt" name="mt" value="Jemputan Sekolah">Jemputan Sekolah
            </label>
          </div>
          <div class="form-check-inline">
            <label class="form-check-label" for="radio2">
              <input type="radio" class="form-check-input" id="mt" name="mt" value="Kereta Api">Kereta Api
            </label>
          </div>
          <div class="form-check-inline">
            <label class="form-check-label" for="radio2">
              <input type="radio" class="form-check-input" id="mt" name="mt" value="Ojek">Ojek
            </label>
          </div>
          <div class="form-check-inline">
            <label class="form-check-label" for="radio2">
              <input type="radio" class="form-check-input" id="mt" name="mt" value="Andong/Bendi/Sado/Dokar/Delman/Becak">Andong/Bendi/Sado/Dokar/Delman/Becak
            </label>
          </div>
          <div class="form-check-inline">
            <label class="form-check-label" for="radio2">
              <input type="radio" class="form-check-input" id="mt" name="mt" value="Perahu penyebrangan/Rakit/Getek">Perahu penyebrangan/Rakit/Getek
            </label>
          </div>
          <div class="form-check-inline">
            <label class="form-check-label" for="radio2">
              <input type="radio" class="form-check-input" id="mt" name="mt" value="Lainnya">Lainnya
            </label>
          </div>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-xl-3">
          No HP
        </div>
        <div class="col-xl-9">
          <input id="hp" name="hp" type="text" required>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-xl-3">
          No Telepon
        </div>
        <div class="col-xl-9">
          <input id="telepon" name="telepon" type="text" required>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-xl-3">
          Email Pribadi
        </div>
        <div class="col-xl-9">
          <input id="emailpribadi" name="emailpribadi" type="text" required>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-xl-3">
          Penerima KPS/PKH/KIP
        </div>
        <div class="col-xl-9">
          <div class="form-check-inline">
            <label class="form-check-label" for="radio1">
              <input type="radio" class="form-check-input" id="kip" name="kip" value="Ya">Ya
            </label>
          </div>
          <div class="form-check-inline">
            <label class="form-check-label" for="radio2">
              <input type="radio" class="form-check-input" id="kip" name="kip" value="Tidak">Tidak
            </label>
          </div>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-xl-3">
          No. KPS/KKS/PKH/KIP
        </div>
        <div class="col-xl-9">
          <input id="nokip" name="nokip" type="text">
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-xl-3">
          Kewarganegaraan
        </div>
        <div class="col-xl-9">
          <div class="form-check-inline">
            <label class="form-check-label" for="radio1">
              <input type="radio" class="form-check-input" id="kewarganegaraan" name="kewarganegaraan" value="WNI">Indonesia (WNI)
            </label>
          </div>
          <div class="form-check-inline">
            <label class="form-check-label" for="radio2">
              <input type="radio" class="form-check-input" id="kewarganegaraan" name="kewarganegaraan" value="WNA">Asing (WNA)
            </label>
          </div>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-xl-3">
          Nama Negara Asing (Optional)
        </div>
        <div class="col-xl-9">
          <input id="asing" name="asing" type="text">
        </div>
      </div>

      <br>
      <br>
      <button id="next2" name="next2" type="submit" class="btn btn-primary">Lanjut</button>
    </form>
  </div>
  <div id="section1">
    
  </div>
</body>

</html>