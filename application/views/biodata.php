<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=<?= base_url('asset/css/bootstrap.css')?>>
    <title>Biodata Mahasiswa</title>
    <style>
        * {
            box-sizing: border-box;
        }
        body {
            font-family: Times new roman, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"],
        input[type="email"],
        input[type="number"],
        input[type="date"],
        textarea,
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            box-sizing: border-box;
        }
        input[type="submit"],
        input[type="reset"] {
            background-color: #4CAF50;
            color: white;
            padding: 15px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1 align="center"> Biodata Mahasiswa</h1>
    <form class="row g-3">
  <div class="col-md-6">
    <label for="Nama" class="form-label">Nama</label>
    <input type="Nama" class="form-control" id="Nama" name="Nama" required>
  </div>
  <div class="col-md-8">
    <label for="Nim" class="form-label">NIM</label>
    <input type="Nim" class="form-control" id="Nim" name="Nim" required>
  </div>
  <div class="col-12">
    <label for="Universitas" class="form-label">Nama Universitas</label>
    <input type="text" class="form-control" id="Universitas" name="Universitas" required>
  </div>

  <div class="col-md-4">
  <label for="nohp">Nomor HP:</label>
            <input type="number" id="nohp" name="nohp" required>
  </div>
  <div class="col-5">
  <label for="tgl_lahir">Tanggal Lahir :</label>
            <input type="date" id="tgl_lahir" name="tgl_lahir" required>
    </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Kirim</button>
  </div>
</form>
    </table>
</body>
</html>