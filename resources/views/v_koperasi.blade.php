@extends('layout.v_template')

@section('title', 'Koperasi')

@section('content')
    <a href="/koperasi/print" target="_blank" class="btn btn-primary">Print to Printer</a>
    <a href="/koperasi/printpdf" target="_blank" class="btn btn-success">Print to PDF</a>

    <h1>DATA PENJUALAN KOPERASI</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>NO</th>
                <th>NO FAKTUR</th>
                <th>PELANGGAN</th>
                <th>TANGGAL</th>
                <th>TOTAL</th>
            </tr>
        </thead>

        <tbody>
            <?php $no = 1; ?>
            @foreach ($koperasi as $data)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$data->no_faktur}}</td>
                    <td>{{$data->pelanggan}}</td>
                    <td>{{$data->tanggal}}</td>
                    <td>{{$data->total}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection