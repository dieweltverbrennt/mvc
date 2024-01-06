@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Добавить студента в группу {{ $group->title }}</h1>

    <!-- Показывать ошибки валидации -->
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <!-- Форма для создания студента -->
    <form method="POST" action="{{ route('groups.students.store', $group->id) }}">
        @csrf

        <div class="form-group">
            <label for="surname">Фамилия:</label>
            <input type="text" class="form-control" id="surname" name="surname" required>
        </div>

        <div class="form-group">
            <label for="name">Имя:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <input type="hidden" name="group_id" value="{{ $group->id }}">

        <button type="submit" class="btn btn-primary">Добавить</button>
    </form>
</div>
@endsection
