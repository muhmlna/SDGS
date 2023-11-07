@extends('layouts.admin.app')

@section('title', 'Detail event')

@section('event', 'active')

@section('backlink')
    @if (auth()->user()->roles_id == 1)
        <a href="{{ route('admin.event.index') }}"><i class="fa small pr-1 fa-arrow-left text-dark"></i></a>
    @endif
@endsection

@section('content')

    <!-- Detail event -->
    <div class="col-lg-12 col-lg-12 form-wrapper" id="detail-event">
        <div class="card">
            <div class="card-body">
                @if (auth()->user()->roles_id == 1)
                    <form method="POST" action="{{ route('admin.event.show', $event->id) }}"
                        enctype="multipart/form-data">
                @endif
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label class="form-label">Judul</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                placeholder="nama" name="nama" id="nama" value="{{ $event->nama }}" disabled>
                            @error('nama')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label class="form-label">Isi</label>
                            <input type="text" class="form-control @error('isi') is-invalid @enderror"
                                placeholder="isi" name="isi" id="isi" value="{{ $event->isi }}" disabled>
                            @error('isi')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label class="form-label">Link</label>
                            <input type="text" class="form-control @error('link') is-invalid @enderror"
                                placeholder="https://google.com" name="link" id="link" value="{{ $event->link }}" disabled>
                            @error('link')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-3">
                            <img class="img img-fluid py-3" width="500" src="{{ asset('assets/event') }}/{{ $event->gambar }}" alt="">
                            @error('gambar')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label class="form-label">Status</label>
                            <select class="form-control @error('status') is-invalid @enderror" name="status" id="status" disabled>
                                <option value="{{ $event->status }}">{{ $event->status }}</option>
                            </select>
                            @error('status')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="text-right">
                        <a href="{{ route('admin.event.edit', $event->id) }}" class="btn btn-primary">Edit</a>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- ./Detail event -->

@endsection
