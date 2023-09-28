<?php

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Data Perkulakan</title>
        <style>
 .header-container {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 20px;
    }

    h2 {
        margin: 0;
    }

    .add-link {
        background-color: #007bff;
        color: #fff;
        padding: 5px 14px;
        text-decoration: none;
        border-radius: 4px;
    }
    .btn1 {
        background-color: #ff0000;
        color: #fff;
        padding: 5px 14px;
        text-decoration: none;
        border-radius: 4px;
    }

    .btn {
        background-color: #007bff;
        color: #fff;
        padding: 5px 14px;
        text-decoration: none;
        border-radius: 4px;
    }

    .add-link:hover {
        background-color: #0069d9;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    th, td {
        padding: 10px;
        text-align: left;
        border-bottom: 1px solid #ccc;
    }

    th {
        background-color: #f8f8f8;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    .action-separator {
        margin: 0 5px;
    }

    a {
        color: #007bff;
        text-decoration: none;
    }

    a:hover {
        text-decoration: underline;
    }
        </style>
    </head>
    <body>
    
    <div class="header-container">
        <h2>Data Pegawai</h2>
        <a href="/create" class="add-link">Tambah</a>
    </div>
    @if ($message = Session::get('success'));
        {{$message}}
      @endif

    <table>
        <tr>
            <th>id</th>
            <th>nama</th>
            <th>nim</th>
            <th>foto</th>
            <th>Aksi</th>
        </tr>

        @foreach ($data as $row)
        <tr>
            <td>{{$row->id}}</td>
            <td>{{$row->nama}}</td>
            <td>{{$row->nim}}</td>
            <td>{{$row->foto}}</td>
            <td>
            <a href="" class="btn">Edit</a>
            <a href="" class="btn1">Hapus</a>
            </td>
        </tr>
        @endforeach
        
    </table>
    <br>
</body>
</html>

<?php

?>