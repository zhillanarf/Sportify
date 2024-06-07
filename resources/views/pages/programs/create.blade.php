@extends('layouts.template')
@section('content')

<div class="container mt-5">
    <h1 class="mb-4 text-white">Create Program</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="text-white">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger text-white">{{ session('error') }}</div>
    @endif

    <form action="{{ route('programs.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label text-white">Program Name</label>
            <input type="text" id="title" name="title" class="form-control" value="{{ old('title') }}" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label text-white">Program Description</label>
            <textarea id="description" name="description" class="form-control" rows="3" required>{{ old('description') }}</textarea>
        </div>

        <div class="mb-3">
            <label for="duration" class="form-label text-white">Program Duration</label>
            <input type="number" id="duration" name="duration" class="form-control" value="{{ old('duration') }}" required>
        </div>

        <input type="hidden" value="{{ Auth::user()->id }}" name="user_id">

        <div id="workout-container">
            @if(old('workouts'))
                @foreach(old('workouts') as $index => $workout)
                    <div class="mb-3 workout">
                        <label for="workout-{{ $index }}" class="form-label text-white">Workout {{ $index + 1 }}</label>
                        <select id="workout-{{ $index }}" name="workouts[{{ $index }}][id]" class="form-select" required>
                            @foreach($workouts as $workoutOption)
                                <option value="{{ $workoutOption->id }}" {{ $workoutOption->id == $workout['id'] ? 'selected' : '' }}>{{ $workoutOption->name }}</option>
                            @endforeach
                        </select>
                        <div class="row mt-2">
                            <div class="col">
                                <label for="reps-{{ $index }}" class="form-label text-white">Reps</label>
                                <input type="number" id="reps-{{ $index }}" name="workouts[{{ $index }}][reps]" class="form-control" value="{{ $workout['reps'] }}" required>
                            </div>
                            <div class="col">
                                <label for="sets-{{ $index }}" class="form-label text-white">Sets</label>
                                <input type="number" id="sets-{{ $index }}" name="workouts[{{ $index }}][sets]" class="form-control" value="{{ $workout['sets'] }}" required>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="mb-3 workout">
                    <label for="workout-1" class="form-label text-white">Workout 1</label>
                    <select id="workout-1" name="workouts[0][id]" class="form-select" required>
                        @foreach($workouts as $workout)
                            <option value="{{ $workout->id }}">{{ $workout->name }}</option>
                        @endforeach
                    </select>
                    <div class="row mt-2">
                        <div class="col">
                            <label for="reps-1" class="form-label text-white">Reps</label>
                            <input type="number" id="reps-1" name="workouts[0][reps]" class="form-control" required>
                        </div>
                        <div class="col">
                            <label for="sets-1" class="form-label text-white">Sets</label>
                            <input type="number" id="sets-1" name="workouts[0][sets]" class="form-control" required>
                        </div>
                    </div>
                </div>
            @endif
        </div>

        <button type="button" id="add-workout" class="btn btn-secondary mb-3">Add Workout</button>
        <button type="submit" class="btn btn-primary mb-3">Create Program</button>
    </form>
</div>

<script>
    document.getElementById('add-workout').addEventListener('click', function() {
        var workoutContainer = document.getElementById('workout-container');
        var workoutCount = workoutContainer.getElementsByClassName('workout').length;

        var newWorkout = document.createElement('div');
        newWorkout.className = 'mb-3 workout';

        var newLabel = document.createElement('label');
        newLabel.htmlFor = 'workout-' + (workoutCount + 1);
        newLabel.textContent = 'Workout ' + (workoutCount + 1);
        newLabel.className = 'form-label text-white';

        var newSelect = document.createElement('select');
        newSelect.id = 'workout-' + (workoutCount + 1);
        newSelect.name = 'workouts[' + workoutCount + '][id]';
        newSelect.className = 'form-select';
        newSelect.required = true;

        @foreach($workouts as $workout)
            var option = document.createElement('option');
            option.value = "{{ $workout->id }}";
            option.textContent = "{{ $workout->name }}";
            newSelect.appendChild(option);
        @endforeach

        var repsLabel = document.createElement('label');
        repsLabel.htmlFor = 'reps-' + (workoutCount + 1);
        repsLabel.textContent = 'Reps';
        repsLabel.className = 'form-label text-white';

        var repsInput = document.createElement('input');
        repsInput.type = 'number';
        repsInput.id = 'reps-' + (workoutCount + 1);
        repsInput.name = 'workouts[' + workoutCount + '][reps]';
        repsInput.className = 'form-control text-black';
        repsInput.required = true;

        var setsLabel = document.createElement('label');
        setsLabel.htmlFor = 'sets-' + (workoutCount + 1);
        setsLabel.textContent = 'Sets';
        setsLabel.className = 'form-label text-white';

        var setsInput = document.createElement('input');
        setsInput.type = 'number';
        setsInput.id = 'sets-' + (workoutCount + 1);
        setsInput.name = 'workouts[' + workoutCount + '][sets]';
        setsInput.className = 'form-control text-black';
        setsInput.required = true;

        var rowDiv = document.createElement('div');
        rowDiv.className = 'row mt-2';

        var colDiv1 = document.createElement('div');
        colDiv1.className = 'col';

        var colDiv2 = document.createElement('div');
        colDiv2.className = 'col';

        colDiv1.appendChild(repsLabel);
        colDiv1.appendChild(repsInput);

        colDiv2.appendChild(setsLabel);
        colDiv2.appendChild(setsInput);

        rowDiv.appendChild(colDiv1);
        rowDiv.appendChild(colDiv2);

        newWorkout.appendChild(newLabel);
        newWorkout.appendChild(newSelect);
        newWorkout.appendChild(rowDiv);

        workoutContainer.appendChild(newWorkout);
    });
</script>
@endsection
