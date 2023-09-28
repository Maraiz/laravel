<!DOCTYPE html>
<html>
<head>
    <title>tambah data </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6bY/iJTQUOhwMh4nFfdYL6s1uxH+q" crossorigin="anonymous">
  
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        
        h2 {
            text-align: center;
        }
        
        form {
            max-width: 400px;
            margin: 0 auto;
        }
        
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        
        input[type="text"],
        input[type="password"],
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        
        button[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        
        button[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h2>Tambah Data</h2>
    <form method="POST" action="/insertdata" enctype="multipart/form-data">
        @csrf
        <label>Nama Lengkap:</label>
        <input type="text" name="nama" required><br><br>
        <label>NIM :</label>
        <input type="text" name="nim" required><br><br>
        <label>Masukan Foto</label>
        <input type="file" name="foto">
        <button type="submit">Submit</button>
    </form>
</body>
</html>

