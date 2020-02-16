@extends('users.layout')
 
@section('konten')
<div class="card-header">
    List Data
  </div>
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br/>
  @endif
  <br>
  <div>&nbsp;<a href="{{ route('users.create')}}" class="btn btn-success">Tambah</a></div><br>
  <table class="table table-striped border text-center">
    <thead>
        <tr>
          <td>No</td>
          <td>Nama</td>
          <td>Tempat Lahir</td>
          <td>Tanggal Lahir</td>
          <td>Gender</td>
          <td>Alamat</td>
          <td colspan="2">Kelola Data</td>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->nama}}</td>
            <td>{{$user->tempat_lahir}}</td>
            <td>{{$user->tanggal_lahir}}</td>
            <td>{{$user->gender}}</td>
            <td>{{$user->alamat}}</td>
            <td><a href="{{ route('users.edit', $user->id)}}" class="btn btn-primary">Edit</a></td>
            <td><form action="{{ route('users.destroy', $user->id)}}" method="post">
          @csrf
          @method('DELETE')
          <button class="btn btn-danger" type="submit">Delete</button>
        </form>
    </td>
        </tr>
        @endforeach
    </tbody>
  </table>
@endsection