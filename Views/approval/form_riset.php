<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Form Pengajuan Penelitian</title>
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
    input[type="file"] {
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
    <h2>Ajukan Penelitian</h2>
    <form action="Controller/submit_penelitian.php" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" id="nama" name="nama" required />
      </div>
      <div class="form-group">
        <label for="judul">Judul Penelitian</label>
        <input type="text" id="judul" name="judul" required />
      </div>
      <div class="form-group">
        <label for="file">File Permohonan (PDF)</label>
        <input type="file" id="file_permohonan" name="file_permohonan" accept=".pdf" required />
      </div>
      <div class="form-group">
        <label for="file">File Proposal (PDF)</label>
        <input type="file" id="file_proposal" name="file_proposal" accept=".pdf" required />
      </div>
      <button type="submit">Kirim</button>
    </form>
  </div>

</body>
</html>