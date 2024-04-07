@extends('dashboard.template')
@section('content')
<div class="content">
  <h2>Workouts</h2>
  <button>Tambah Workout Baru</button>
  <table>
    <thead>
      <tr>
        <th>Nama Workout</th>
        <th>Deskripsi Singkat</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Workout 1</td>
        <td>Deskripsi singkat untuk Workout 1</td>
        <td>
          <button>Edit</button>
          <button>Delete</button>
        </td>
      </tr>
      <tr>
        <td>Workout 2</td>
        <td>Deskripsi singkat untuk Workout 2</td>
        <td>
          <button>Edit</button>
          <button>Delete</button>
        </td>
      </tr>
      <!-- Tambahkan baris tambahan sesuai kebutuhan -->
    </tbody>
  </table>
</div>
@endsection