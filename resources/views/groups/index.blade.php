@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Группы</h1>
    <a href="{{ route('groups.create') }}" class="btn btn-primary">Создать новую группу</a>

    <ul>
        @forelse ($groups as $group)
            <li>
                <a href="{{ route('groups.show', $group->id) }}">{{ $group->title }}</a>
            </li>
        @empty
            <li>Группы пока отсутствуют.</li>
        @endforelse
    </ul>
</div>
@endsection
