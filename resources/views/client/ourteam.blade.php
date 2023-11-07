@extends('layouts.client.app')

@section('title', 'Our Team')

@section('textHome', 'text-success')

@section('content')

<main id="main">
    <section id="ourteam" class="ourteam">
        <div class="entry-content">
        @foreach ($ourteams as $ourteam)
            <img class="img img-fluid" width="100%" src="{{ asset('assets/ourteam') }}/{{ $ourteam->gambar }}" alt="">
        @endforeach
        </div>
        <!-- .entry-content -->    
    </section>
      </main>

@endsection
