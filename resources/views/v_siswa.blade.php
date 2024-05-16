@extends('layout.v_template')

@section('title', 'Siswa')

@section('content')
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>NO</th>
                <th>NISN</th>
                <th>Nama Siswa</th>
                <th>Kelas</th>
                <th>Mapel</th>
            </tr>
        </thead>

        <tbody>
            <?php $no = 1; ?>
            @foreach ($siswa as $data)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$data->nisn}}</td>
                    <td>{{$data->nama_siswa}}</td>
                    <td>{{$data->kelas}}</td>
                    <td>{{$data->mapel}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection