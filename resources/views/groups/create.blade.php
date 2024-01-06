@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Создание новой группы</h1>

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

    <!-- Форма для создания группы -->
    <form method="POST" action="{{ route('groups.store') }}">
        @csrf

        <div class="form-group">
            <label for="title">Название группы:</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>

        <div class="form-group">
            <label for="start_from">Дата начала обучения:</label>
            <input type="date" class="form-control" id="start_from" name="start_from" required>
        </div>

        <div class="form-group">
            <label for="is_active">Статус группы:</label>
            <select class="form-control" id="is_active" name="is_active">
                <option value="1">Активна</option>
                <option value="0">Неактивна</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Создать</button>
    </form>
</div>
@endsection
