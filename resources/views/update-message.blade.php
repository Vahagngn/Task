@extends('layouts.app')

@section('title-block')UPDATE @endsection

@section('content')
<h1>Update</h1>

<form action="{{ route('contact-update-submit', $data->id) }}" method="post">
  @csrf

  <div class="form-group">
    <label for="name">Введите имя</label>
    <input type="text" name="name" value="{{$data->name}}" placeholder="Введите имя" id="name" class="form-control">
  </div>

  <div class="form-group">
    <label for="email">Email</label>
    <input type="text" name="email" value="{{$data->email}}" placeholder="Введите email" id="email" class="form-control">
  </div>

  <div class="form-group">
    <label for="subject">Тема сообщения</label>
    <input type="text" name="subject" value="{{$data->subject}}" placeholder="Тема сообщения" id="subject" class="form-control">
  </div>

  <div class="form-group">
    <label for="message">сообщение</label>
    <textarea name="message" id="message" class="form-control">{{$data->message}}</textarea>
  </div>

  <button type="sumbit" class="btn btn-success">Update</button>
</form>
@endsection