@extends('layouts.temp')
@section('title','CIKaraduman')
@section('content')
<div class="container mt-4">
  <div class="col-md-6">
<h1>Kitap Kayıt Formu - Düzenleme</h1>
<div align="right">
  <a href="{{route('list')}}"><button class="btn btn-success">Geri</button></a>
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
  <form action="{{route('DataUpdate', ['id'=>$data1->id])}}" method="post"><br>
  @csrf
  <input type="text" class="form-control" placeholder="Kitap Adı" name="book_name" value="{{$data1->book_name}}"><br>
  <input type="text" class="form-control" placeholder="Yazar" name="author" value="{{$data1->author}}"><br>
  <input type="number" class="form-control" placeholder="Sayfa Sayısı" name="pagenum" value="{{$data1->pagenum}}"><br>
  <!-- <p>Bu form Cem İlker Karaduman tarafından test amaçlı 15 Mart 2022 tarihinde oluşturulmuştur.</p><br>
  <input type="checkbox" name="check1" class="form-check-input" id="check1" > -->
  <!-- <label for="check1" class="form-check-label">Okudum, Onaylıyorum</label><br><br> -->
  <input type="submit" value="Güncelle">
  </form>
  </div>
</div>
