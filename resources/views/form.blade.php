@extends('layouts.temp')
@section('title','CIKaraduman')
@section('content')
<!--Deneme-update için yazıldı, işlevi yoktur.
<div class="container mt-4">
  <div class="col-md-6">
<h1>Kitap Kayıt Formu</h1>
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
  <!-- <p>Bu form Cem İlker Karaduman tarafından test amaçlı 15 Mart 2022 tarihinde oluşturulmuştur.</p><br>
  <input type="checkbox" name="check1" class="form-check-input" id="check1" > -->
  <!-- <label for="check1" class="form-check-label">Okudum, Onaylıyorum</label><br><br> -->
  <input type="submit" value="Kitap Ekle">
  </form>
  </div>
</div>
