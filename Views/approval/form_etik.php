<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Upload Dokumen Etik</title>
  <style>
    body {
      background-color: #f9f9f9;
      font-family: Arial, sans-serif;
      padding: 2rem;
    }

    .container {
      max-width: 600px;
      margin: 0 auto;
      background-color: #fff;
      padding: 2rem;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
      text-align: center;
      color: #36C0D1;
      margin-bottom: 1.5rem;
    }

    .form-group {
      margin-bottom: 1rem;
    }

    label {
      display: block;
      margin-bottom: 0.25rem;
      font-weight: bold;
    }

    input[type="file"] {
      width: 100%;
      padding: 0.4rem;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    button {
      margin-top: 1.5rem;
      width: 100%;
      background-color: #36C0D1;
      color: white;
      border: none;
      padding: 0.75rem;
      font-size: 1rem;
      border-radius: 5px;
      font-weight: bold;
      cursor: pointer;
      transition: background-color 0.2s ease;
    }

    button:hover {
      background-color: #2aa7ba;
    }

    .note {
      font-size: 0.9rem;
      color: #888;
      margin-bottom: 1rem;
      text-align: center;
    }
  </style>
</head>
<body>

  <div class="container">
    <h2>Unggah 9 Dokumen Etik</h2>
    <p class="note">Silakan unggah semua dokumen yang dibutuhkan dalam format PDF.</p>

    <form action="submit_dokumen_etik.php" method="post" enctype="multipart/form-data">
      <?php for ($i = 1; $i <= 9; $i++): ?>
        <div class="form-group">
          <label for="file<?= $i ?>">Dokumen Etik <?= $i ?></label>
          <input type="file" name="file<?= $i ?>" id="file<?= $i ?>" accept=".pdf" required>
        </div>
      <?php endfor; ?>

      <button type="submit">Upload Semua Dokumen</button>
    </form>
  </div>

</body>
</html>
