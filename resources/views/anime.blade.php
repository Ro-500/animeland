@php
    use App\anime;
    use App\episode;
    $anime = anime::where('name', $name)->first();
    $episodes = episode::where('aid', $anime->id )->get();
@endphp
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-12 card p-3">
        <img style="width:100%;border:none;height:500px;background-image:url('/img/{{ $anime->img }}');background-size:cover;background-position:center;">
        <h2 class="mt-2">{{ $anime->name }}</h2>
        <hr>
        <h4>Synopsis</h4>
        <p class="paragraph">{{ $anime->synosis }}</p>
        <hr>
        <h4>Tag</h4>
        <p class="paragraph">{{ $anime->tag }}</p>
        <hr>
        <h4>Watch</h4>
        <p class="paragraph"></p>
        <table class="col-12">
            @foreach($episodes as $episode)
            <tr class="col-12 row mx-auto"><td class="col-3 mx-auto">Episode {{ $episode->eps }}</td><td class="col-3 mx-auto"><a target="_blank" class="btn btn-primary col-12" href="{{ $episode->link }}">Watch</a></td></tr>

            @endforeach
        </table>
        <hr>
    </div>
    
</div>

@endsection
