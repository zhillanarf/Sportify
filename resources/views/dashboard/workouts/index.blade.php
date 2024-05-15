@extends('dashboard.layouts.template')
@section('content')
<div class="content">
  <h2>Workouts</h2>
  <button onclick="window.location.href='{{route('workouts.create')}}'">Tambah Workout Baru</button>
  <table>
    <thead>
      <tr>
        <th>Image</th>
        <th>Nama Workout</th>
        <th>Deskripsi Singkat</th>
        <th>Created at</th>
        <th>Updated at</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($workouts as $workout)
      <tr>
        <td><img src="{{asset('assets/images/'.$workout->image)}}" alt="{{$workout->name}}" width="100"></td>
        <td>{{$workout->name}}</td>
        <td>{{$workout->description}}</td>
        <td>{{$workout->created_at}}</td>
        <td>{{$workout->updated_at}}</td>
        <td>
          <button onclick="window.location.href='{{route('workouts.edit', $workout->id)}}'">Edit</button>
          <form action="{{ route('workouts.destroy', $workout->id) }}" method="POST">
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