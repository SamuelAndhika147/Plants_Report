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
        </di8v>
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
            <select name="type" style="padding: 5px">
                <option value="Obat" @if($plant['type'] == 'Obat') selected @endif>Tanaman Obat</option>
                <option value="Hias" @if($plant['type'] == 'Hias') selected @endif>Tanaman Hias</option>
                <option value="Pangan" @if($plant['type'] == 'Pangan') selected @endif>Tanaman Pangan</option>
            </select>
            <label for="">Notes</label>
            <textarea name="note" cols="30" rows="10" placeholder="Notes" style="padding: 5px">
                {{$plant['note']}}
            </textarea>
        </div>

        <div class="type">
            <label for="">Growth</label>
            <select name="growth" style="padding: 5px">
                <option value="Benih" @if($plant['growth'] == 'Benih') selected @endif>Masih Benih</option>
                <option value="Bertunas" @if($plant['growth'] == 'Bertunas') selected @endif>Bertunas</option>
                <option value="Tumbuh Batang" @if($plant['growth'] == 'Tumbuh Batang') selected @endif>Tumbuh Batang</option>
                <option value="Tumbuh Daun" @if($plant['growth'] == 'Tumbuh Daun') selected @endif>Tumbuh Daun</option>
                <option value="Tumbuh Bunga" @if($plant['growth'] == 'Tumbuh Bunga') selected @endif>Tumbuh Bunga</option>
                <option value="Berbuah" @if($plant['growth'] == 'Berbuah') selected @endif>Berbuah</option>
                <option value="Layu" @if($plant['growth'] == 'Layu') selected @endif>Sudah Layu</option>
                <option value="Mati" @if($plant['growth'] == 'Mati') selected @endif>Sudah Mati</option>
            </select>
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
