@extends('layouts.temp')
@section('title','CIKaraduman')
@section('content')
<div class="container mt-4">
<h1>Book List</h1>
<div align="right">
  <a href="{{route('insert')}}"><button class="btn btn-success">Yeni Ekle</button></a>
</div>
  <hr>
  <!-- Hata yakalama kısmı-start -->
  @if($errors->any())
    <ul>
      @foreach($errors->all() as $error)
        <li>{{$error}}</li>
      @endforeach
    </ul>
  @endif


<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Id</th>
      <th scope="col">Book Name</th>
      <th scope="col">Author</th>
      <th scope="col">PageNum</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    @foreach ($data as $key)
    <tr>
      <!-- <th scope="row">{{$key->id}}</th> -->
      <td>{{$loop->iteration}}</td>
      <td>{{$key->id}}</td>
      <td>{{$key->book_name}}</td>
      <td>{{$key->author}}</td>
      <td>{{$key->pagenum}}</td>
      <td width="10"><a href="{{route('update',['id'=>$key->id])}}"><button class="btn btn-primary">Düzenle</button></a></td>
      <td width="10"><a href="#"></a><button class="btn btn-primary">Sil</button></td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
