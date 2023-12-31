@extends('layouts.admin.app')

@section('title', 'Edit galery')

@section('publication', 'active')
@section('galery', 'active')

@section('backlink')
    @if (auth()->user()->roles_id == 1)
        <a href="{{ route('admin.galery.index') }}"><i class="fa small pr-1 fa-arrow-left text-dark"></i></a>
    @endif
@endsection

@section('content')

    <!-- Edit galery -->
    <div class="col-lg-12 col-lg-12 form-wrapper" id="edit-galery">
        <div class="card">
            <div class="card-body">
                @if (auth()->user()->roles_id == 1)
                    <form method="POST" action="{{ route('admin.galery.update', $galery->id) }}"
                        enctype="multipart/form-data">
                @endif
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label class="form-label">Gambar</label><br>
                            <img class="img img-fluid" width="500" src="{{ asset('assets/galery') }}/{{ $galery->gambar }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-3">
                            <input type="file" class="form-control @error('gambar') is-invalid @enderror"
                                placeholder="gambar" name="gambar" id="gambar" value="{{ $galery->gambar }}" enabled>
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
    <!-- ./Edit galery -->

@endsection