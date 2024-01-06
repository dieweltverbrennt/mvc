@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Группа: {{ $group->title }}</h1>
    <p>Дата начала: {{ $group->start_from }}</p>
    <p>Статус: {{ $group->is_active ? 'Активна' : 'Неактивна' }}</p>

    <a href="{{ route('groups.students.create', $group->id) }}" class="btn btn-primary">Добавить студента</a>

    <h2>Студенты группы</h2>
    @if($group->students->isEmpty())
        <p>В этой группе пока нет студентов.</p>
    @else
        <ul>
            @foreach ($group->students as $student)
                <li>
                    <a href="{{ route('groups.students.show', ['group' => $group->id, 'student' => $student->id]) }}">
                        {{ $student->surname }} {{ $student->name }}
                    </a>
                </li>
            @endforeach
        </ul>
    @endif

    <a href="{{ route('groups.index') }}" class="btn btn-secondary">Назад ко всем группам</a>
</div>
@endsection
