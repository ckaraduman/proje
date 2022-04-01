@extends('layouts.temp')
@section('title','MakroPort')
@section('content')
<div class="container mt-4">
<h1>Ana Sayfa</h1>
  <hr>

  <!-- <div class="btn-group" role="group" aria-label="Button group with nested dropdown"> -->
    <div class="btn-group" role="group">
      <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
        Kitaplar
      </button>
      <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
        <li><a class="dropdown-item" href="{{route('list')}}">Kitap Listesi</a></li>
        <li><a class="dropdown-item" href="{{route('insert')}}">Kitap Ekle</a></li>
      </ul>
    </div>

    <div class="btn-group" role="group">
      <button id="btnGroupDrop1" type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
        İşlemler
      </button>
      <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
        <li><a class="dropdown-item" href="{{url('http://www.google.com')}}">Google</a></li>
        <li><a class="dropdown-item" href="{{'deneme'}}">Deneme</a></li>
      </ul>
    </div>
  <!-- </div> -->



  <button onclick="location.href='{{url('http://www.google.com')}}'" class="btn btn-primary" type="button" name="button">Google</button>
  <!-- <button onclick="location.href='{{url('http://www.google.com')}}'" class="btn btn-secondary" type="button" name="button">Deneme</button>
  <button onclick="location.href='{{url('http://www.google.com')}}'" class="btn btn-success" type="button" name="button">Deneme</button>
  <button onclick="location.href='{{url('http://www.google.com')}}'" class="btn btn-danger" type="button" name="button">Deneme</button>
  <button onclick="location.href='{{url('http://www.google.com')}}'" class="btn btn-warning" type="button" name="button">Deneme</button>
  <button onclick="location.href='{{url('http://www.google.com')}}'" class="btn btn-info" type="button" name="button">Deneme</button>
  <button onclick="location.href='{{url('http://www.google.com')}}'" class="btn btn-light" type="button" name="button">Deneme</button>
  <button onclick="location.href='{{url('http://www.google.com')}}'" class="btn btn-dark" type="button" name="button">Deneme</button>
  <button onclick="location.href='{{url('http://www.google.com')}}'" class="btn btn-link" type="button" name="button">Deneme</button> -->


  <!-- Hata yakalama kısmı-start -->
  @if($errors->any())
    <ul>
      @foreach($errors->all() as $error)
        <li>{{$error}}</li>
      @endforeach
    </ul>
  @endif
  <!-- Hata yakalama kısmı-end -->
</div>
<br>
