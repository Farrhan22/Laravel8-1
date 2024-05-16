@extends('layout.v_template')

@section('title', 'Guru')

@section('content')
    @if(session('pesan'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4><i class="icon fa fa-check"></i> SUCCESS!</h4>
            {{session('pesan')}}
        </div>
    @endif

    <a href="/guru/add" class="btn btn-sm btn-primary">Tambahkan</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>NO</th>
                <th>NIP</th>
                <th>Nama Guru</th>
                <th>Mata Pelajaran</th>
                <th>Foto Guru</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            @foreach ($guru as $data)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$data->nip}}</td>
                    <td>{{$data->nama_guru}}</td>
                    <td>{{$data->mapel}}</td>
                    <td><img src="{{url('img/' . $data->foto_guru)}}" width="100px"></td>
                    <td>
                        <a href="/guru/detail/{{$data->id_guru}}" class="btn btn-sm btn-success">DETAIL</a>
                        <a href="/guru/edit/{{$data->id_guru}}" class="btn btn-sm btn-warning">EDIT</a>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{$data->id_guru}}">
                            DELETE
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

        @foreach($guru as $data)
        <div class="modal modal-danger fade" id="delete{{$data->id_guru}}">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">{{$data->nama_guru}}</h4>
                    </div>
                    <div class="modal-body">
                        <p>YANG BENER AJAA... RUGI DONG....!!!</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">GA JADI DEH</button>
                        <a href="/guru/delete/{{$data->id_guru}}" class="btn btn-outline">PECAT</a>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        @endforeach
@endsection