@extends('dashboard.layouts.template')

@section('content')
    <div class="container">
      <div class="admin-workout-form-container">
        <form action="{{route('workouts.store')}}" method="post" enctype="multipart/form-data">
          @csrf
          <h3>add a new workout</h3>
          <label for="name">
            <input
            type="text"
            placeholder="Title"
            name="name"
            class="box"
          />
          </label>
          <label for="description">
            <input
            type="text"
            placeholder="Description"
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
            value="Add Workout"
          />
        </form>
    </div>
@endsection
