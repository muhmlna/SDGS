@extends('layouts.admin.app')

@section('title', 'Detail galery')

@section('publication', 'active')
@section('galery', 'active')

@section('backlink')
    @if (auth()->user()->roles_id == 1)
        <a href="{{ route('admin.galery.index') }}"><i class="fa small pr-1 fa-arrow-left text-dark"></i></a>
    @endif
@endsection

@section('content')

    <!-- Detail galery -->
    <div class="col-lg-12 col-lg-12 form-wrapper" id="detail-galery">
        <div class="card">
            <div class="card-body">
                @if (auth()->user()->roles_id == 1)
                    <form method="POST" action="{{ route('admin.galery.show', $galery->id) }}"
                        enctype="multipart/form-data">
                @endif
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label class="form-label">Gambar Galery</label>
                            <input type="file" class="form-control @error('gambar') is-invalid @enderror"
                                placeholder="gambar" name="gambar" id="gambar" value="{{ $galery->gambar }}" disabled>
                            @error('gambar')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="text-right">
                        <a href="{{ route('admin.galery.edit', $galery->id) }}" class="btn btn-primary">Edit</a>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- ./Detail galery -->

@endsection
