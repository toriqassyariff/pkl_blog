@extends('template_backend.home')
@section('sub-judul','Edit Kategori Postingan Profil')
@section('content')
@if(count($errors)>0)
    @foreach($errors->all() as $errors)
    <div class="alert alert-danger" role="alert">
        {{ $errors}}
    </div>
    @endforeach
@endif
@if(Session::has('success'))
    <div class="alert alert-success" role="alert">
    {{ Session('success')}}
    </div>
@endif
<form action="{{ route('profilcategory.update', $profilcategory->id) }}" method="POST">
@csrf
@method('patch')
    <div class="form-group">
        <label>Nama Kategori Postingan Profil :</label>
        <input type="text" class="form-control" name="profilnamec" value="{{ $profilcategory->profilnamec}}">
    </div>
    <div class="form-group">
        <button class="btn btn-primary ">Simpan</button>
    </div>
</form>
@endsection