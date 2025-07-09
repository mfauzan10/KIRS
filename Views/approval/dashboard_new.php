<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard Peneliti</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f3f3f3;
      padding: 2rem;
    }

    .container {
      max-width: 800px;
      margin: auto;
      background-color: #fff;
      padding: 2rem;
      border-radius: 10px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }

    h2 {
      color: #36C0D1;
      text-align: center;
      margin-bottom: 1.5rem;
    }

    .status-box {
      background-color: #f0f9ff;
      border-left: 5px solid #36C0D1;
      padding: 1rem;
      margin-bottom: 2rem;
      border-radius: 5px;
    }

    .status-box strong {
      display: block;
      margin-bottom: 0.5rem;
    }

    .action-button {
      display: inline-block;
      background-color: #36C0D1;
      color: white;
      padding: 0.6rem 1.2rem;
      text-decoration: none;
      border-radius: 5px;
      font-weight: bold;
      transition: background-color 0.2s ease;
    }

    .action-button:hover {
      background-color: #2aa7ba;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 2rem;
    }

    th, td {
      padding: 0.75rem;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    th {
      background-color: #e6f7fb;
    }

    .badge {
      display: inline-block;
      padding: 0.3rem 0.6rem;
      border-radius: 5px;
      font-size: 0.85rem;
      color: white;
    }

    .badge.submitted { background-color: #f1c40f; color: black; }
    .badge.pending { background-color: #f39c12; }
    .badge.siap-unggah { background-color: #2980b9; }
    .badge.dinilai { background-color: #8e44ad; }
    .badge.disetujui { background-color: #27ae60; }
    .badge.ditolak { background-color: #e74c3c; }
    .badge.revisi { background-color: #e67e22; } /* Tambahan warna untuk Revisi */
  </style>
</head>
<body>

  <div class="container">
    <h2>Selamat Datang, Peneliti</h2>

    <div class="status-box">
      <strong>Status Penelitian Terbaru:</strong>
      Judul: <em>Studi Efektivitas Obat ABC</em><br>
      Status: <span class="badge siap-unggah">Menunggu Dokumen Etik</span><br><br>
      <a href="form_etik.php" class="action-button">Unggah Dokumen Etik</a>
    </div>

    <h3>Riwayat Pengajuan</h3>
    <table>
      <thead>
        <tr>
          <th>Judul</th>
          <th>Tanggal</th>
          <th>Status</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Studi Efektivitas Obat ABC</td>
          <td>05 Juli 2025</td>
          <td><span class="badge siap-unggah">Menunggu Dokumen</span></td>
          <td><a href="detil_penelitian.php?id=1" class="action-button">Lihat Detail</a></td>
        </tr>

        <tr>
          <td>Pengaruh Pola Tidur Mahasiswa</td>
          <td>04 Juli 2025</td>
          <td><span class="badge submitted">Submitted</span></td>
          <td><a href="detil_penelitian.php?id=2" class="action-button">Lihat Detail</a></td>
        </tr>

        <tr>
          <td>Evaluasi Kualitas Tidur Pasien Rawat Inap</td>
          <td>03 Juli 2025</td>
          <td><span class="badge dinilai">Menunggu Penilaian</span></td>
          <td><a href="detil_penelitian.php?id=3" class="action-button">Lihat Detail</a></td>
        </tr>

        <tr>
          <td>Analisis Gaya Hidup Pasien Diabetes</td>
          <td>20 Juni 2025</td>
          <td><span class="badge disetujui">Disetujui</span></td>
          <td><a href="detil_penelitian.php?id=4" class="action-button">Lihat Detail</a></td>
        </tr>

        <tr>
          <td>Evaluasi Sistem Pelayanan Gizi di Rumah Sakit</td>
          <td>06 Juli 2025</td>
          <td><span class="badge revisi">Revisi</span></td>
          <td><a href="detil_penelitian.php?id=5" class="action-button">Lihat Detail</a></td>
        </tr>
      </tbody>
    </table>
  </div>

</body>
</html>
