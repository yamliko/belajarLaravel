<!DOCTYPE html>
<html>
<head>
    <title>Tutorial Membuat CRUD Pada Laravel – www.malasngoding.com</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-color: #f6f7fb;
            color: #2e3a4c;
        }
        .container {
            max-width: 960px;
            margin: 0 auto;
        }
        .content-wrapper {
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }
        h2 {
            margin-top: 0;
            margin-bottom: 20px;
            font-size: 24px;
        }
        h3 {
            margin-top: 20px;
            margin-bottom: 10px;
            font-size: 18px;
        }
        .add-link {
            display: inline-block;
            padding: 8px 16px;
            color: #fff;
            background-color: #5e72e4;
            border-radius: 4px;
            transition: background-color 0.3s;
        }
        .add-link:hover {
            background-color: #324cdd;
            text-decoration: none;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 12px 15px;
            border-bottom: 1px solid #e9ecef;
        }
        th {
            background-color: #f8f9fe;
            text-align: left;
            font-weight: 600;
        }
        td {
            background-color: #fff;
            vertical-align: middle;
        }
        .edit-link, .delete-link {
            display: inline-block;
            padding: 6px 12px;
            color: #fff;
            border-radius: 4px;
            transition: background-color 0.3s;
            text-decoration: none;
        }
        .edit-link {
            background-color: #38d39f;
        }
        .edit-link:hover {
            background-color: #2fb88c;
        }
        .delete-link {
            background-color: #f5365c;
        }
        .delete-link:hover {
            background-color: #ef233c;
        }
        .pagination {
            margin-top: 20px;
            display: flex;
            justify-content: center;
        }
        .pagination .active {
            background-color: #5e72e4;
        }
        .pagination li {
            display: inline-block;
            margin: 0 5px;
            padding: 8px 12px;
            border-radius: 4px;
            background-color: #f8f9fe;
        }
        .pagination li a {
            color: #5e72e4;
            text-decoration: none;
        }
        .pagination li.active a {
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="content-wrapper">
           
            <h1>Data Pegawai</h1>
            <p>Cari Data Pegawai :</p>
            <form action="/pegawai/cari" method="GET">
                <div class="input-group mb-3">
                    <input type="text" name="cari" class="form-control" placeholder="Cari Pegawai ..." value="{{ old('cari') }}">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">CARI</button>
                    </div>
                </div>
            </form> 
            <a href="/pegawai/tambah" class="add-link"> + Tambah Pegawai Baru</a>
            <table class="table mt-3">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Jabatan</th>
                        <th>Umur</th>
                        <th>Alamat</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pegawai as $p)
                    <tr>
                        <td>{{ $p->pegawai_nama }}</td>
                        <td>{{ $p->pegawai_jabatan }}</td>
                        <td>{{ $p->pegawai_umur }}</td>
                        <td>{{ $p->pegawai_alamat }}</td>
                        <td>
                            <a href="/pegawai/edit/{{ $p->pegawai_id }}" class="edit-link btn btn-success">Edit</a>
                            <a href="/pegawai/hapus/{{ $p->pegawai_id }}" class="delete-link btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="pagination">
                {!! $pegawai->links() !!}
            </div>
        </div>
    </div>
</body>
</html>
