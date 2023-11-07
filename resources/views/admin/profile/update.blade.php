@extends('layouts.admin.app')

@section('title', 'Edit profile')

@section('info', 'active')
@section('profile', 'active')

@section('content')

    <!-- Edit profile -->
    <div class="col-lg-12 col-lg-12 form-wrapper" id="edit-profile">
        <div class="card">
            <div class="card-body">
                @if (auth()->user()->roles_id == 1)
                    <form method="POST" action="{{ route('admin.profile.update', $profile->id) }}"
                        enctype="multipart/form-data">
                @endif
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label class="form-label">Isi Profile</label>
                            <textarea class="form-control @error('isi') is-invalid @enderror" placeholder="isi" name="isi" id="isi" enabled>{{ $profile->isi }}</textarea>
                            @error('isi')
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
    <!-- ./Edit profile -->

@endsection
