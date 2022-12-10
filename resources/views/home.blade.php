{{-- This Project Pure Created By Samuel Andhika Prasetyo --}}
{{-- The Style is Pure CSS --}}
{{-- If You Want To Copy This Project, You Should Contact Me First --}}
{{-- If This Project Have Error/Bug Dont Hestitate To Contact Me --}}
{{-- Instagram: samuel.andhika --}}

{{-- ------------------------------------------------------------ --}}



@extends('layouts.layout')

@section('style')
<link rel="stylesheet" href="/css/home.css">
@endsection

@section('title')
<title>Data</title>
@endsection

@section('content')
<div class="content">
    <div class="header">
        <div class="title">
            <h2>Plants Report</h2>
            <h3>all of plants report</h3>
        </div>
        <div class="button">
            <button><a href="/create" style="text-decoration: none; color: white;">Create</a></button>
        </div>
    </div>

    <div class="middle">
        <div class="title">
            <h1>Counts</h2>
                <h4>Total Plants</h4>
        </div>

        
        <div class="id">       
            <h3>{{$plants->count()}}</h3>
        </div>
    </div>

    <div class="bottom">
        <table class="tabel">
            <tr>
                <th>Kode</th>
                <th>Name</th>
                <th style="color: white">block</th>
                <th>Type</th>
                <th>Growth</th>
                <th>Action</th>
            </tr>
            @foreach ($plants as $plant)
            <tr>
                <td>{{ $plant['kode'] }}</td>
                <td>{{ $plant['name_plant'] }}</td>
                <td></td>
                <td>{{ $plant['type'] }}</td>
                <td>{{ $plant['note'] }}</td>
                <td>
                    <div class="action">
                    <a href="/edit/{{$plant['id']}}"><img src="/img/edit.png" alt=""></a>
                    <form action="/destroy/{{$plant['id']}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit"><img src="/img/delete.png" alt=""></button>
                    </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection
