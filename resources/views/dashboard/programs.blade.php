@extends('dashboard.template')
@section('content')
<div class="content">
  <h2>Programs</h2>
  <button>Tambah Program Baru</button>
  <table>
    <thead>
      <tr>
        <th>Nama Program</th>
        <th>Id Workout</th>
        <th>Durasi (Hari)</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Program 1</td>
        <td>aaa</td>
        <td>30</td>
        <td>
          <button>Edit</button>
          <button>Delete</button>
        </td>
      </tr>
      <tr>
        <td>Program 2</td>
        <td>bbb</td>
        <td>30</td>
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