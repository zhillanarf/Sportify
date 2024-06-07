@extends('dashboard.layouts.template')
@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<style>
  .comment {
    display: flex;
    align-items: flex-start;
}

.profile-picture {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    margin-right: 10px;
}

.comment-content {
    flex-grow: 1;
}

.comment-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.comment-author {
    margin: 0;
}

.comment-date {
    margin: 0;
    font-size: 0.8em;
    color: #888;
}

.comment-text {
    margin-top: 5px;
}
</style>
<div class="container mt-5">
    <h1 class="mb-4 text-white">Program Details</h1>

    <div class="mb-3">
        <a href="{{ route('programs.index') }}" class="btn btn-primary">Back</a>
    </div>



    <div class="card">
        <div class="card-header ">
            <h2>{{ $program->title }}</h2>
        </div>
        <div class="card-body ">
            <h5 class="card-title ">Description</h5>
            <p class="card-text ">{{ $program->description }}</p>

            <h5 class="card-title ">Duration</h5>
            <p class="card-text ">{{ $program->duration }} minutes</p>

            <h5 class="card-title ">Created by</h5>
            <p class="card-text ">{{ $program->user->name }} ({{ $program->user->email }})</p>

            <h5 class="card-title ">Created at</h5>
            <p class="card-text ">{{ $program->created_at->format('d M Y H:i') }}</p>
        </div>
    </div>

    <div class="mt-4">
        <h3 class="text-white">Workouts in this Program</h3>
        <div class="list-group">
            @foreach($program->program_workouts as $programWorkout)
                <div class="list-group-item">
                    <h5>{{ $programWorkout->workout->name }}</h5>
                    <p>{{ $programWorkout->workout->description }}</p>
                    <p><strong>Reps:</strong> {{ $programWorkout->reps }}</p>
                    <p><strong>Sets:</strong> {{ $programWorkout->sets }}</p>
                </div>
            @endforeach
        </div>
    </div>

    {{-- tolong tambahkan section untuk comment dibawah ini --}}
<div class="mt-4">
    <h3 class="text-white">All Comments</h3>
    <div class="list-group">
        @foreach($program->comments as $comment)
            <div class="list-group-item comment">
              @if ($comment->user->image)
                <img src="{{ asset('assets/images/'.$comment->user->image) }}" alt="Profile Picture" class="profile-picture">
              @else
                <img src="{{ asset('assets/images/default.png') }}" alt="Profile Picture" class="profile-picture">                
              @endif
                <div class="comment-content">
                    <div class="comment-header">
                        <h5 class="comment-author">{{ $comment->user->name }}</h5>
                        <p class="comment-date">{{ $comment->created_at->format('d M Y H:i') }}</p>
                    </div>
                    <p class="comment-text">{{ $comment->content }}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


</div>
@endsectionp