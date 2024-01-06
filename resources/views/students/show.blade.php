@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $student->name }} {{ $student->surname }}</h1>
    <p>Группа: {{ $student->group->title }}</p>
    <a href="{{ route('groups.show', $student->group_id) }}">Назад к группе</a>
</div>
@endsection
