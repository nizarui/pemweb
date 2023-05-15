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
    <h4>Registrasi Peserta Didik</h4>
  </div>
  <div id="satusatu" class="border border-secondary">
  <form action="okesimpan.php" method="post" style="margin: 50px;">
    <div class="row">
        <div class="col-xl-3">
          Jenis Pendaftaran
        </div>
        <div class="col-xl-9">
          <div class="form-check-inline">
            <label class="form-check-label" for="radio1">
              <input type="radio" class="form-check-input" id="jp" name="jp" value="siswabaru">Siswa Baru
            </label>
          </div>
          <div class="form-check-inline">
            <label class="form-check-label" for="radio2">
              <input type="radio" class="form-check-input" id="jp" name="jp" value="pindahan">Pindahan
            </label>
          </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-xl-3">
          Tanggal Masuk Sekolah
        </div>
        <div class="col-xl-9">
              <input id="tanggalmasuksekolah" name="tanggalmasuksekolah" type="date" required>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-xl-3">
          NIS
        </div>
        <div class="col-xl-9">
              <input id="nis" name="nis" type="text" required>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-xl-3">
          Nomor Peserta Ujian
        </div>
        <div class="col-xl-9">
              <input id="npu" name="npu" type="text" required>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-xl-3">
          Apakah pernah PAUD
        </div>
        <div class="col-xl-9">
          <div class="form-check-inline">
            <label class="form-check-label" for="radio1">
              <input type="radio" class="form-check-input" id="paud" name="paud" value="Ya">Ya
            </label>
          </div>
          <div class="form-check-inline">
            <label class="form-check-label" for="radio2">
              <input type="radio" class="form-check-input" id="paud" name="paud" value="Tidak">Tidak
            </label>
          </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-xl-3">
          Apakah pernah TK
        </div>
        <div class="col-xl-9">
          <div class="form-check-inline">
            <label class="form-check-label" for="radio1">
              <input type="radio" class="form-check-input" id="tk" name="tk" value="Ya">Ya
            </label>
          </div>
          <div class="form-check-inline">
            <label class="form-check-label" for="radio2">
              <input type="radio" class="form-check-input" id="tk" name="tk" value="Tidak">Tidak
            </label>
          </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-xl-3">
        No. Seri SKHUN Sebelumnya
        </div>
        <div class="col-xl-9">
              <input id="skhun" name="skhun" type="text" required>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-xl-3">
        No. Seri Ijazah Sebelumnya
        </div>
        <div class="col-xl-9">
              <input id="ijazah" name="ijazah" type="text" required>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-xl-3">
          Hobi
        </div>
        <div class="col-xl-9">
          <div class="form-check-inline">
            <label class="form-check-label" for="radio1">
              <input type="radio" class="form-check-input" id="hobi" name="hobi" value="Olahraga">Olahraga
            </label>
          </div>
          <div class="form-check-inline">
            <label class="form-check-label" for="radio2">
              <input type="radio" class="form-check-input" id="hobi" name="hobi" value="Kesenian">Kesenian
            </label>
          </div>
          <div class="form-check-inline">
            <label class="form-check-label" for="radio2">
              <input type="radio" class="form-check-input" id="hobi" name="hobi" value="Membaca">Membaca
            </label>
          </div>
          <div class="form-check-inline">
            <label class="form-check-label" for="radio2">
              <input type="radio" class="form-check-input" id="hobi" name="hobi" value="Menulis">Menulis
            </label>
          </div>
          <div class="form-check-inline">
            <label class="form-check-label" for="radio2">
              <input type="radio" class="form-check-input" id="hobi" name="hobi" value="Traveling">Traveling
            </label>
          </div>
          <div class="form-check-inline">
            <label class="form-check-label" for="radio2">
              <input type="radio" class="form-check-input" id="hobi" name="hobi" value="Lainnya">Lainnya
            </label>
          </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-xl-3">
          Cita-cita
        </div>
        <div class="col-xl-9">
          <div class="form-check-inline">
            <label class="form-check-label" for="radio1">
              <input type="radio" class="form-check-input" id="cita" name="cita" value="PNS">PNS
            </label>
          </div>
          <div class="form-check-inline">
            <label class="form-check-label" for="radio2">
              <input type="radio" class="form-check-input" id="cita" name="cita" value="TNI/POLRI">TNI/POLRI
            </label>
          </div>
          <div class="form-check-inline">
            <label class="form-check-label" for="radio2">
              <input type="radio" class="form-check-input" id="cita" name="cita" value="Guru/Dosen">Guru/Dosen
            </label>
          </div>
          <div class="form-check-inline">
            <label class="form-check-label" for="radio2">
              <input type="radio" class="form-check-input" id="cita" name="cita" value="Dokter">Dokter
            </label>
          </div>
          <div class="form-check-inline">
            <label class="form-check-label" for="radio2">
              <input type="radio" class="form-check-input" id="cita" name="cita" value="Politikus">Politikus
            </label>
          </div>
          <div class="form-check-inline">
            <label class="form-check-label" for="radio2">
              <input type="radio" class="form-check-input" id="cita" name="cita" value="Wiraswasta">Wiraswasta
            </label>
          </div>
          <div class="form-check-inline">
            <label class="form-check-label" for="radio2">
              <input type="radio" class="form-check-input" id="cita" name="cita" value="Seni/Lukis/Artis/Sejenis">Seni/Lukis/Artis/Sejenis
            </label>
          </div>
          <div class="form-check-inline">
            <label class="form-check-label" for="radio2">
              <input type="radio" class="form-check-input" id="cita" name="cita" value="Lainnya">Lainnya
            </label>
          </div>
        </div>
    </div>

    <br>
    <br>
    <button type="submit" id="next1" name="next1" class="btn btn-primary">Next</button>
  </form>
  </div>
  <div id="section1">
    
  </div>
</body>

</html>