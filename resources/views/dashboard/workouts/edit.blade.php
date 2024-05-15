@extends('dashboard.layouts.template')

@section('content')
    <div class="container">
      <div class="admin-workout-form-container">
        <form action="{{route('workouts.update', $workout)}}" method="post" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <h3>Edit workout</h3>
          <label for="name">
            <input
            type="text"
            placeholder="Title"
            value="{{$workout->name}}"
            name="name"
            class="box"
          />
          </label>
          <label for="description">
            <input
            type="text"
            placeholder="Description"
            value="{{$workout->description}}"
            name="description"
            class="box"
          />
          </label>

          <label for="image">
            <input
            type="file"
            accept="image/png, image/jpeg, image/jpg"
            name="image"
            class="box"
          />
          </label>
          
          <input
            type="submit"
            class="btn"
            value="Update Workout"
          />
        </form>
    </div>
@endsection