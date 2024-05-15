@extends('dashboard.layouts.template')
@section('content')
<div class="content">
  <h2>Programs</h2>
  <button>Tambah Program Baru</button>
  <table>
    <thead>
      <tr>
        <th>Image</th>
        <th>Nama Program</th>
        <th>Deskripsi Program</th>
        <th>Created at</th>
        <th>Updated at</th>
        <th>Id Workout</th>
        <th>Durasi (Hari)</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($programs as $program)
      <tr>
        <td><img src="{{asset('assets/images/'.$program->image)}}" alt="{{$program->name}}" width="100"></td>
        <td>{{$program->title}}</td>
        <td>{{$program->description}}</td>
        <td>{{$program->created_at}}</td>
        <td>{{$program->updated_at}}</td>
        <td>{{$program->workout_id}}</td>
        <td>{{$program->durasi}}</td>
        <td>
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

@endsection