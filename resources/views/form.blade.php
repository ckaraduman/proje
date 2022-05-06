@extends('layouts.temp')
@section('title','CIKaraduman')
@section('content')

<div class="container mt-4">
  <div class="col-md-6">
<h1>Kitap Kayıt Formu</h1>
<div align="right">
  <a href="{{route('list')}}"><button class="btn btn-success">Geri</button></a>   <a href="{{route('main')}}"><button class="btn btn-success">Ana Menü</button></a>
</div>
  <hr>
  @if (session()->has('status'))
  <div class="alert alert-success">
    {{session('status')}}
  </div>
  @endif
  <!-- Hata yakalama kısmı-start -->
  @if($errors->any())
    <ul>
      @foreach($errors->all() as $error)
        <li>{{$error}}</li>
      @endforeach
    </ul>
  @endif
  <!-- Hata yakalama kısmı-end -->
  <form action="{{route('DataInsert')}}" method="post"><br>
  @csrf
  <input type="text" class="form-control" placeholder="Kitap Adı" name="book_name"><br>
  <input type="text" class="form-control" placeholder="Yazar" name="author"><br>
  <input type="number" class="form-control" placeholder="Sayfa Sayısı" name="pagenum"><br>
  <input type="submit" value="Kitap Ekle">
  </form>
  </div>
</div>
