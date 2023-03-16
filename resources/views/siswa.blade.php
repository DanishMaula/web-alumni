@extends('layouts.app')

@section('content')
    <style>
        .images-default {
            width: 100px;
            height: 100px;
            margin-bottom: 8px;
        }

        .photo-siswa {
            width: 100px;
            height: 100px;
            margin-bottom: 8px;
        }
    </style>

    <!-- Button trigger modal -->
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Table Of Siswas') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="col-md-12">
                            @if (session('berhasil'))
                                <div class="alert alert-success">
                                    {{ session('berhasil') }}
                                </div>
                            @endif

                            @if (session('gagal'))
                                <div class="alert alert-success">
                                    {{ session('gagal') }}
                                </div>
                            @endif
                        </div>

                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            Create
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Create Siswa</h1>
                                    </div>
                                    <form method="post" action="{{ route('siswa.store') }}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Name</label>
                                                        <input type="text" name="name"
                                                            class="form-control @error('name') is-invalid @enderror"
                                                            placeholder="Please insert your name" required>
                                                        @error('name')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </div>

                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>NIK</label>
                                                        <input type="number"
                                                            class="form-control @error('nik') is-invalid @enderror"
                                                            name="nik" placeholder="Please insert your NIK" required>
                                                        @error('nik')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </div>



                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Kelas</label>
                                                        <input type="number"
                                                            class="form-control @error('kelas') is-invalid @enderror"
                                                            name="kelas" placeholder="Please insert your Kelas" required>
                                                        @error('kelas')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </div>



                                                </div>

                                                <div class="col-md-6 ">
                                                    <div class="form-group">
                                                        <label>Genders</label>
                                                        <select id="id_gender" name="id_gender"
                                                            class="form-select @error('id_gender') is-invalid @enderror"
                                                            required>
                                                            <option> Select Gender </option>
                                                            @foreach ($genders as $gender)
                                                                <option value="{{ $gender->id }}">{{ $gender->jenkel }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        @error('id_gender')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </div>

                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Jurusan</label>
                                                        <input type="text"
                                                            class="form-control  @error('jurusan') is-invalid @enderror"
                                                            name="jurusan" placeholder="Please insert jurusan" required>
                                                        @error('jurusan')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </div>

                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Angkatan</label>
                                                        <input type="number"
                                                            class="form-control @error('angkatan') is-invalid @enderror"
                                                            name="angkatan" placeholder="Please insert Angkatan" required>
                                                        @error('angkatan')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </div>

                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Tanggal Lahir</label>
                                                        <input type="date"
                                                            class="form-control @error('tgl_lahir') is-invalid @enderror"
                                                            name="tgl_lahir" placeholder="Please insert your birth date"
                                                            required>
                                                        @error('tgl_lahir')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </div>

                                                </div>

                                                <div class="form-group">
                                                    <div>
                                                        <label for="formFileLg" class="form-label">Photo</label>
                                                        </br>
                                                        <img id="imgPreview" src="{{ asset('img/avatar.jpeg') }}"
                                                            class="images-default">

                                                        <input name="photo" class="form-control uploads" id="formFileLg"
                                                            type="file">
                                                    </div>

                                                    @error('alamat')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>


                                                <div class="form-group">
                                                    <label>Alamat</label>
                                                    <textarea cols="20" rows="5" class="form-control @error('alamat') is-invalid @enderror" name="alamat"
                                                        placeholder="Please insert alamat" required>
                                                    </textarea>
                                                    @error('alamat')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>


                                            </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Create</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <br> </br>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Photo</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Kelas</th>
                                        <th scope="col">Jurusan</th>
                                        <th scope="col">Gender</th>
                                        <th scope="col">Action</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($siswa as $item)
                                        <tr>
                                            <th scope="row">{{ $loop->index + 1 }}</th>
                                            <td>
                                                <img class="photo-siswa"
                                                    src="{{ $item->photo == null ? asset('img/avatar.jpeg') : asset('uploads/' . $item->photo) }}"
                                                    alt="photo">
                                            </td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->kelas }}</td>
                                            <td>{{ $item->jurusan }}</td>
                                            <td>{{ $item->id_gender == 1 ? 'Laki Laki' : 'Perempuan' }}</td>

                                            <td class="text-center">

                                                <div class="dropdown">
                                                    <button class="btn btn-secondary dropdown-toggle" type="button"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        Action
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><button data-name="{{ $item->name }}"
                                                                data-id="{{ $item->id }}"
                                                                class="dropdown-item deleteSiswa">Delete</button>
                                                        </li>
                                                        <li><button 
                                                                data-bs-target="#modalEdit_{{ $item->id }}"
                                                                data-bs-toggle="modal"
                                                                class="dropdown-item ">Edit</button></li>
                                                    </ul>
                                                </div>






                                            </td>

                                        </tr>
                                        
                                        {{-- edit and update --}}

                                        <div class="modal fade" id="modalEdit_{{ $item->id }}" tabindex="-1"
                                            role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>

                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="post"
                                                            action="{{ route('siswa.update', $item->id) }}" enctype="multipart/form-data">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Name</label>
                                                                        <input type="text" value="{{ $item->name }}"
                                                                            class="form-control @error('name') is-invalid @enderror"
                                                                            name="name">
                                                                        @error('name')
                                                                            <div class="invalid-feedback">{{ $message }}
                                                                            </div>
                                                                        @enderror
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>NIK</label>
                                                                        <input type="number" value="{{ $item->nik }}"
                                                                            class="form-control @error('nik') is-invalid @enderror"
                                                                            name="nik"
                                                                            placeholder="Please insert your NIK" required>
                                                                        @error('nik')
                                                                            <div class="invalid-feedback">{{ $message }}
                                                                            </div>
                                                                        @enderror
                                                                    </div>



                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Kelas</label>
                                                                        <input type="text" value="{{ $item->kelas }}"
                                                                            class="form-control @error('kelas') is-invalid @enderror"
                                                                            name="kelas"
                                                                            placeholder="Please insert your Kelas"
                                                                            required>
                                                                        @error('kelas')
                                                                            <div class="invalid-feedback">{{ $message }}
                                                                            </div>
                                                                        @enderror
                                                                    </div>

                                                                </div>

                                                                <div class="col-md-6 ">
                                                                    <div class="form-group">
                                                                        <label>Genders</label>
                                                                        <select id="id_gender" name="id_gender"
                                                                            class="form-select @error('id_gender') is-invalid @enderror"
                                                                            required>
                                                                            <option> Select Gender </option>
                                                                            @foreach ($genders as $gender)
                                                                                <option value="{{ $gender->id }}"
                                                                                    {{ $item->id_gender == $gender->id ? 'selected' : '' }}>
                                                                                    {{ $gender->jenkel }}
                                                                                </option>
                                                                            @endforeach
                                                                        </select>
                                                                        @error('id_gender')
                                                                            <div class="invalid-feedback">{{ $message }}
                                                                            </div>
                                                                        @enderror
                                                                    </div>

                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Jurusan</label>
                                                                        <input type="text"
                                                                            value="{{ $item->jurusan }}"
                                                                            class="form-control  @error('jurusan') is-invalid @enderror"
                                                                            name="jurusan"
                                                                            placeholder="Please insert jurusan" required>
                                                                        @error('jurusan')
                                                                            <div class="invalid-feedback">{{ $message }}
                                                                            </div>
                                                                        @enderror
                                                                    </div>

                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Angkatan</label>
                                                                        <input type="number"
                                                                            value="{{ $item->angkatan }}"
                                                                            class="form-control @error('angkatan') is-invalid @enderror"
                                                                            name="angkatan"
                                                                            placeholder="Please insert Angkatan" required>
                                                                        @error('angkatan')
                                                                            <div class="invalid-feedback">{{ $message }}
                                                                            </div>
                                                                        @enderror
                                                                    </div>

                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Tanggal Lahir</label>
                                                                        <input type="date"
                                                                            value="{{ $item->tgl_lahir }}"
                                                                            class="form-control @error('tgl_lahir') is-invalid @enderror"
                                                                            name="tgl_lahir"
                                                                            placeholder="Please insert your birth date"
                                                                            required>
                                                                        @error('tgl_lahir')
                                                                            <div class="invalid-feedback">{{ $message }}
                                                                            </div>
                                                                        @enderror
                                                                    </div>

                                                                </div>
                                                                
                                                                <div class="form-group">
                                                                    <div>
                                                                        <label for="formFileLg" class="form-label">Photo</label>
                                                                        </br>
                                                                        <img id="imgPreview" src="{{ asset('img/avatar.jpeg') }}"
                                                                            class="images-default">
                
                                                                        <input  name="photo" class="form-control uploads" id="formFileLg"
                                                                            type="file">
                                                                    </div>
                
                                                                    @error('photo')
                                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                                    @enderror
                                                                </div>


                                                                <div class="form-group">
                                                                    <label>Alamat</label>
                                                                    <input type="text" value="{{ $item->alamat }}"
                                                                        class="form-control @error('alamat') is-invalid @enderror"
                                                                        name="alamat" placeholder="Please insert alamat"
                                                                        required>
                                                                    @error('alamat')
                                                                        <div class="invalid-feedback">{{ $message }}
                                                                        </div>
                                                                    @enderror
                                                                </div>


                                                            </div>
                                                            <div class="modal-footer">
                                                               
                                                                <button type="submit" class="btn btn-primary">Save
                                                                    changes</button>
                                                            </div>


                                                    </div>

                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </tbody>
                            </table>
                            <div class="float-end">
                                {{ $siswa->render() }}
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.js')
@endsection
