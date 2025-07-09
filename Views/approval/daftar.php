<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Form Pendaftaran</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f9f9f9;
      padding: 2rem;
    }

    .form-container {
      max-width: 500px;
      margin: 0 auto;
      background-color: #fff;
      padding: 2rem;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .form-container h2 {
      text-align: center;
      margin-bottom: 1.5rem;
      color: #36C0D1;
    }

    .form-group {
      margin-bottom: 1rem;
    }

    label {
      display: block;
      margin-bottom: 0.5rem;
      font-weight: bold;
    }

    input[type="text"],
    input[type="email"],
    input[type="date"],
    select {
      width: 100%;
      padding: 0.5rem;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    button {
      width: 100%;
      padding: 0.75rem;
      background-color: #36C0D1;
      color: white;
      border: none;
      border-radius: 5px;
      font-weight: bold;
      cursor: pointer;
      transition: background-color 0.2s ease;
    }

    button:hover {
      background-color: #2aa7ba;
    }
  </style>
</head>
<body>

  <div class="form-container">
    <h2>Form Pendaftaran</h2>
    <form action="Controller/submit_pendaftaran.php" method="post">
      <div class="form-group">
        <label for="nik">NIK</label>
        <input type="text" id="nik" name="nik" pattern="[0-9]{16}" maxlength="16" required />
      </div>

      <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" id="nama" name="nama" required />
      </div>

      <div class="form-group">
        <label for="ttl">Tempat Lahir</label>
        <input type="text" id="tempat_lahir" name="tempat_lahir" required />
      </div>

      <div class="form-group">
        <label for="tgl_lahir">Tanggal Lahir</label>
        <input type="date" id="tgl_lahir" name="tgl_lahir" required />
      </div>

      <div class="form-group">
        <label for="alamat">Alamat</label>
        <input type="text" id="alamat" name="alamat" required />
      </div>

      <div class="form-group">
        <label for="jk">Jenis Kelamin</label>
        <select id="jk" name="jk" required>
          <option value="">-- Pilih --</option>
          <option value="Laki-laki">Laki-laki</option>
          <option value="Perempuan">Perempuan</option>
        </select>
      </div>

      <div class="form-group">
        <label for="agama">Agama</label>
        <select id="agama" name="agama" required>
          <option value="">-- Pilih --</option>
          <option value="Islam">Islam</option>
          <option value="Katolik">Katolik</option>
          <option value="Kristen">Kristen</option>
          <option value="Hindu">Hindu</option>
          <option value="Budha">Budha</option>
          <option value="Konghucu">Konghucu</option>
        </select>
      </div>

      <div class="form-group">
        <label for="pekerjaan">Pekerjaan</label>
        <input type="text" id="pekerjaan" name="pekerjaan" required />
      </div>

      <div class="form-group">
        <label for="instansi">Instansi</label>
        <input type="text" id="instansi" name="instansi" required />
      </div>

      <div class="form-group">
        <label for="nohp">Nomor HP</label>
        <input type="text" id="nohp" name="nohp" pattern="0[0-9]{8,11}" maxlength="12" required
          title="Nomor HP harus diawali dengan 0 dan terdiri dari 9 sampai 12 digit angka" />
      </div>

      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required
          title="Email harus mengandung karakter @" />
      </div>

      <button type="submit">Daftar</button>
    </form>
  </div>

</body>
</html>
