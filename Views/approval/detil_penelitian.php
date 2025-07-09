<?php
$id = $_GET['id'] ?? null;

$penelitianList = [
  1 => [
    'judul' => 'Studi Efektivitas Obat ABC',
    'nama' => 'Muhammad Fauzan',
    'file' => '1720000000_proposal_efektivitas_obat_abc.pdf',
    'status' => 'siap-unggah',
  ],
  2 => [
    'judul' => 'Pengaruh Pola Tidur Mahasiswa',
    'nama' => 'Muhammad Fauzan',
    'file' => '1720000001_tidur_mahasiswa.pdf',
    'status' => 'submitted',
  ],
  3 => [
    'judul' => 'Evaluasi Kualitas Tidur Pasien Rawat Inap',
    'nama' => 'Muhammad Fauzan',
    'file' => '1720000002_kualitas_tidur.pdf',
    'status' => 'dinilai',
  ],
  4 => [
    'judul' => 'Analisis Gaya Hidup Pasien Diabetes',
    'nama' => 'Muhammad Fauzan',
    'file' => '1720000003_gaya_hidup.pdf',
    'status' => 'selesai',
  ],
  5 => [
    'judul' => 'Evaluasi Sistem Pelayanan Gizi di Rumah Sakit',
    'nama' => 'Muhammad Fauzan',
    'file' => '1720000003_sistem_pelayanan_gizi.pdf',
    'status' => 'revisi',
  ],
];

if (!isset($penelitianList[$id])) {
  echo "Penelitian tidak ditemukan.";
  exit;
}

$data = $penelitianList[$id];

$stepMap = ['submitted' => 1, 'siap-unggah' => 2, 'dinilai' => 3, 'selesai' => 4, 'revisi' => 5];
$activeStep = $stepMap[$data['status']] ?? 1;
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Detail Penelitian</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f6f8fa;
      padding: 2rem;
    }

    .container {
      max-width: 700px;
      margin: auto;
      background: white;
      padding: 2rem;
      border-radius: 10px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }

    h2 {
      color: #36C0D1;
      margin-bottom: 1rem;
    }

    .info {
      margin-bottom: 2rem;
    }

    .info p {
      margin: 0.5rem 0;
    }

    .info strong {
      display: inline-block;
      width: 150px;
    }

    .timeline {
      display: flex;
      justify-content: space-between;
      position: relative;
      margin-top: 3rem;
    }

    .timeline::before {
      content: '';
      position: absolute;
      top: 25px;
      left: 0;
      right: 0;
      height: 4px;
      background: #ddd;
      z-index: 0;
    }

    .step {
      position: relative;
      z-index: 1;
      text-align: center;
      flex: 1;
    }

    .step-circle {
      width: 30px;
      height: 30px;
      margin: 0 auto;
      border-radius: 50%;
      background: #ddd;
      line-height: 30px;
      color: white;
      font-weight: bold;
    }

    .step.active .step-circle {
      background: #36C0D1;
    }

    .step-label {
      margin-top: 0.5rem;
      font-size: 0.9rem;
    }

    .download-button {
      display: inline-block;
      margin-top: 1rem;
      background: #36C0D1;
      color: white;
      padding: 0.5rem 1rem;
      text-decoration: none;
      border-radius: 5px;
      font-weight: bold;
    }

    .download-button:hover {
      background: #2aa7ba;
    }

    .revisi-box {
      margin-top: 1.5rem;
      background-color: #fff8e1;
      border: 1px solid #f1c40f;
      padding: 1rem;
      border-radius: 5px;
      color: #555;
    }
  </style>
</head>
<body>

  <div class="container">
    <h2>Detail Penelitian</h2>

    <div class="info">
      <p><strong>Nama Peneliti:</strong> <?= htmlspecialchars($data['nama']) ?></p>
      <p><strong>Judul Penelitian:</strong> <?= htmlspecialchars($data['judul']) ?></p>
      <p><strong>File Proposal:</strong> 
        <a class="download-button" href="uploads/proposal/<?= urlencode($data['file']) ?>" download>Unduh Proposal</a>
      </p>

      <?php if ($activeStep == 2) { ?>
        <p><strong>Unggah Dokumen Etik:</strong> 
          <a class="download-button" href="form_etik.php">Unggah Dokumen</a>
        </p>
      <?php } ?>

      <?php if ($activeStep == 4) { ?>
        <p><strong>Unduh Dokumen Etik Clearance:</strong> 
          <a class="download-button" href="">Unduh Dokumen</a>
        </p>
      <?php } ?>

      <?php if ($activeStep == 5) { ?>
        <div class="revisi-box">
          <strong>Catatan Revisi:</strong><br>
          Metode yang dipakai bisa lebih diperjelas lagi.
        </div>

        <a class="download-button" href="">Ajukan Revisi</a>
      <?php } ?>
    </div>

    <h3>Progres Pengajuan</h3>
    <div class="timeline">
      <div class="step <?= $activeStep >= 1 ? 'active' : '' ?>">
        <div class="step-circle">1</div>
        <div class="step-label">Submitted</div>
      </div>
      <div class="step <?= $activeStep >= 2 ? 'active' : '' ?>">
        <div class="step-circle">2</div>
        <div class="step-label">Dokumen Etik</div>
      </div>
      <div class="step <?= $activeStep >= 3 ? 'active' : '' ?>">
        <div class="step-circle">3</div>
        <div class="step-label">Penilaian</div>
      </div>
      <div class="step <?= $activeStep >= 4 ? 'active' : '' ?>">
        <div class="step-circle">4</div>
        <div class="step-label">Selesai</div>
      </div>
    </div>
  </div>

</body>
</html>