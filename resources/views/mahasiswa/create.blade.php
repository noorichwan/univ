@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header"><center>
                Input Data Mahasiswa</center>
                </div>

                <div class="card-body">   
                    <form action="{{ route('simpan.mahasiswa') }}" method="post" class="form-item">
                    @csrf
                    <div class="form-group">
                    <label for="name">Nama Mahasiswa</label>
                    <select name="user_id" id="user_id" class="form-control col-md-10">
                        <option value="" disabled selected>--Pilih User--</option>
                        @foreach ($user as $u)
                            <option value="{{ $u->id }}">{{ $u->name }}</option>
                        @endforeach
                    </select>
                    </div>

                    <div class="form-group">
                    <label for="npm">NPM</label>
                    <input type="number" name="npm" class="form-control col-md-6" placeholder="Masukkan NPM" maxlength="8">
                    </div>

                    <div class="form-group">
                    <label for="tempat_lahir">Tempat Lahir</label>
                    <input type="text" name="tempat_lahir" class="form-control col-md-6" placeholder="Masukkan Tempat Lahir">
                    </div>

                    <div class="form-group">
                    <label for="tgl_lahir">Tanggal Lahir</label>
                    <input type="date" name="tgl_lahir" class="form-control col-md-6" placeholder="Masukkan Tanggal Lahir">
                    </div>

                    <div class="form-group">
                    <label for="gender">Jenis Kelamin</label>
                    <select name="gender" id="gender" class="form-control col-md-6">
                        <option value="" disabled selected>--Pilih Jenis Kelamin--</option>
                        <option value="L">Laki-laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                    </div>
                    <div class="form-group">
                    <label for="telepon">Telepon</label>
                    <input type="number" name="telepon" class="form-control col-md-8" placeholder="Masukkan Nomor Telepon" maxlength="13">
                    </div>
                    <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea name="alamat" id="alamat" cols="2" rows="3" class="form-control" placeholder="Masukkan Alamat" style="resize: none;"></textarea>
                    </div>
                <button type="submit" class="btn btn-md btn-primary">Simpan</button>
                <a href="{{route('mahasiswa')}}" class="btn btn-md btn-danger" >Batal</a>
                
                

                </form>

                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
