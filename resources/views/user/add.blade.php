@extends('template.index')

@section('title', 'User')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Data User</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Input User</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <form action="/users/{{ @$data->id }}" method="POST" enctype="multipart/form-data">
            <section class="content">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-4">
                            <div class="card card-primary">
                                <div class="card-body">
                                    <div class="form-group">
                                        <input type="file" id="file" name="file">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Data User</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->

                                @if (@$data)
                                    @method('PUT')
                                @endif

                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="id">ID User</label>
                                        <input type="text" class="form-control" name="id" placeholder="ID User"
                                            value="{{ @$data->id }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Nama</label>
                                        <input type="text" class="form-control" name="name" placeholder="Nama"
                                            value="{{ @$data->name }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="text" class="form-control" name="email" placeholder="Email"
                                            value="{{ @$data->email }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" name="password" placeholder="Password"
                                            value="{{ @$data->password }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleSelectRounded0">Level</label>
                                        <select name="level" class="custom-select rounded-0">
                                            <option value="1" {{ @$data->level == 1 ? 'selected' : '' }}>Aktif</option>
                                            <option value="0" {{ @$data->level == 0 ? 'selected' : '' }}>Tidak Aktif
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
        </form>
    </div>
    </div>
    </div>
    </div>
    </section>

@endsection
