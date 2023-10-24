<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List Barang</title>
    <link href="{{ asset('boot/css/bootstrap.min.css') }}" rel="stylesheet"
     integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="{{ asset('css.style.css') }}" rel="stylesheet">
</head>
<body>
    <h2 class="warna">List Barang</h2>
    <table border="1" class="table table-striped table-hover">
        <thead>
            <tr>
                <td>No</td>
                <td>Nama</td>
                <td>Jumlah</td>
                <td>Harga</td>
                <td>Aksi</td>
            </tr>
        </thead>
        <tbody>
        @if (!empty($datas))
            @php
            $no=1;
            @endphp
                @foreach ($datas as $row)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $row['nama'] }}</td>
                    <td>{{ $row['jumlah'] }}</td>
                    <td>{{ $row['harga'] }}</td>
                    <td>
                        <button class="btn btn-danger" onclick="hapusData('{{ $row['nama'] }}')">Hapus Data</button>
                    </td>
                </tr>
            @endforeach   
        @endif
        </tbody>
    </table>

    <script src="{{ asset('js/function.js') }}">
        function hapusData(){
            alert=("Data telah dihapus");
        }
    </script>

    <script src="{{ asset('boot/js/bootstrap.bundle.min.js') }}" 
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    
</body>
</html>