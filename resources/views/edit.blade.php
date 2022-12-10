@extends('layouts.layout')

@section('style')
<link rel="stylesheet" href="/css/edit.css">
@endsection

@section('title')
<title>Edit</title>
@endsection

@section('content')
<div class="container">
    <form action="/update/{{$plant['id']}}" method="post">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul style="list-style-type: none;">
                @foreach ($errors->all() as $error)
                <li style="color: red;">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        @csrf
        @method('PATCH')
        <h2>Create New Plant</h2>

        <div class="row">
            <div class="kode">
                <label for="">Kode Plant</label>
                <input type="text" name="kode" value="{{$plant['kode']}}" placeholder="B001" style="padding: 5px">
            </div>
            <div class="plant">
                <label for="">Name Plant</label>
                <input type="text" name="name_plant" value="{{$plant['name_plant']}}" placeholder="Mawar" style="padding: 5px">
            </div>
        </div>

        <div class="type">
            <label for="">Type</label>
            <select name="type" value="{{$plant['type']}}" style="padding: 5px">
                <option value="obat">Tanaman Obat</option>
                <option value="hias">Tanaman Hias</option>
                <option value="pangan">Tanaman Pangan</option>
            </select>
            <label for="">Notes</label>
            <textarea name="note" cols="30" rows="10" placeholder="Notes" style="padding: 5px">{{$plant['note']}}</textarea>
        </div>

        <div class="buttons">
            <div id="save">
                <button type="submit"><a>Save</a></button>
            </div>
            <div id="cancel">
                <button><a href="/">Cancel</a></button>
            </div>
        </div>

        <div class="bottom">
            <div class="teks">
                <h4>Plants</h4>
                <p>see all plants data</p>
            </div>
            <button><a href="/">Go to Home</a></button>
        </div>
    </form>
</div>
@endsection
