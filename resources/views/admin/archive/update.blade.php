@extends('layouts.admin.app')

@section('title', 'Edit archive')

@section('archive', 'active')

@section('backlink')
    @if (auth()->user()->roles_id == 1)
        <a href="{{ route('admin.archive.index') }}"><i class="fa small pr-1 fa-arrow-left text-dark"></i></a>
    @endif
@endsection

@section('content')

    <!-- Edit archive -->
    <div class="col-lg-12 col-lg-12 form-wrapper" id="edit-archive">
        <div class="card">
            <div class="card-body">
                @if (auth()->user()->roles_id == 1)
                    <form method="POST" action="{{ route('admin.archive.update', $archive->id) }}"
                        enctype="multipart/form-data">
                @endif
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Tahun</label>
                            <input type="number" class="form-control @error('tahun') is-invalid @enderror"
                                placeholder="2023" name="tahun" id="tahun" value="{{ $archive->tahun }}" required>
                            @error('tahun')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Link Archive</label>
                            <input type="text" class="form-control @error('link') is-invalid @enderror"
                                placeholder="https://google.com" name="link" id="link" value="{{ $archive->link }}" required>
                            @error('link')
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
    <!-- ./Edit archive -->

@endsection
