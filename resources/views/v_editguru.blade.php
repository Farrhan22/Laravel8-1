@extends('layout.v_template')

@section('title', 'Edit Guru')

@section('content')
    <form action="/guru/update/{{$guru->id_guru}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="content">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>NIP</label>
                        <input name="nip" class="form-control" value="{{$guru->nip}}" readonly>
                        <div class="text-danger">
                            @error('nip')
                            {{$message}}
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Nama Guru</label>
                        <input name="nama_guru" class="form-control" value="{{$guru->nama_guru}}">
                        <div class="text-danger">
                            @error('nama_guru')
                            {{$message}}
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Mata Pelajaran</label>
                        <input name="mapel" class="form-control" value="{{$guru->mapel}}">
                        <div class="text-danger">
                            @error('mapel')
                            {{$message}}
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Foto Guru</label>
                        <div class="col-sm-12">
                            <div class="col-sm-4">
                                <img src="{{url('img/' . $guru->foto_guru)}}" alt="" width="150px">
                            </div>
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <input name="foto_guru" class="form-control" type="file" value="{{$guru->foto_guru}}">
                                    <div class="text-danger">
                                        @error('foto_guru')
                                        {{$message}}
                                        @enderror
                                    </div>
                                    <div class="form-group" style="margin-top: 20px;">
                                        <button class="btn btn-sm btn-primary">Simpan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection