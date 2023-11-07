@extends('layouts.admin.app')

@section('title', 'Edit ourteam')

@section('info', 'active')
@section('ourteam', 'active')

@section('content')

    <!-- Edit ourteam -->
    <div class="col-lg-12 col-lg-12 form-wrapper" id="edit-ourteam">
        <div class="card">
            <div class="card-body">
                @if (auth()->user()->roles_id == 1)
                    <form method="POST" action="{{ route('admin.ourteam.update', $ourteam->id) }}"
                        enctype="multipart/form-data">
                @endif
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label class="form-label">Gambar</label><br>
                            <img class="img img-fluid" width="500" src="{{ asset('assets/ourteam') }}/{{ $ourteam->gambar }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-3">
                            <input type="file" class="form-control @error('gambar') is-invalid @enderror"
                                placeholder="gambar" name="gambar" id="gambar" value="{{ $ourteam->gambar }}" enabled>
                            @error('gambar')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 text-right">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- ./Edit ourteam -->

@endsection
