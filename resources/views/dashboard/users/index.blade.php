@extends('dashboard.layouts.template')
@section('content')
<div class="content">
  <h2>Users</h2>
  <button>Tambah Program Baru</button>
  <table>
    <thead>
      <tr>
        <th>Nama</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Address</th>
        <th>Role</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($users as $user)
        <tr>
          <td>{{$user->name}}</td>
          <td>{{$user->email}}</td>
          <td>{{$user->phone}}</td>
          <td>{{$user->address}}</td>
          <td>{{$user->role}}</td>
          <td>
            <button>Edit</button>
            <button>Delete</button>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection