@extends('dashboard.layouts.template')
@section('content')
<div class="content">
  <h2>Programs</h2>
  <button onclick="window.location.href='{{route('programs.create')}}'">Tambah Program Baru</button>
  <table>
    <thead>
      <tr>
        <th>Nama Program</th>
        <th>Deskripsi Program</th>
        <th>Pembuat Program</th>
        <th>Durasi (Hari)</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($programs as $program)
      <tr>
        <td>{{$program->title}}</td>
        <td>{{$program->description}}</td>
        <td>{{$program->user->name}}</td>
        <td>{{$program->duration}}</td>
        <td class="d-flex justify-content-center">
          <button onclick="window.location.href='{{route('programs.show', $program->id)}}'">Show</button>
          <button onclick="window.location.href='{{route('programs.edit', $program->id)}}'">Edit</button>
          <form action="{{ route('programs.destroy', $program->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
          </form>
        </td>    
      </tr>  

      @endforeach
      <!-- Tambahkan baris tambahan sesuai kebutuhan -->
    </tbody>
  </table>
</div>

@endsectionp