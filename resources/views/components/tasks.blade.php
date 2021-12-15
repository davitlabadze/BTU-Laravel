@extends('layout.app')
@section('content')
<head class="flex">
    <x-create />
</head>
<table>
    @foreach ($tasks as $task)
        <div class="flex w-auto p-2 px-5 text-2xl border-b">
            @if($task->trashed())
                <h1 class="text-gray-600 line-through">{{ $task->title }}</h1>
            @else
                <h1 class="text-green-500">{{ $task->title }}</h1>
            @endif

            <div class="absolute px-80 ml-96">
                @if($task->trashed())
                <form action="{{ route('tasks.edit',['task' => $task->id]) }}" method="get">
                    @csrf
                    <button class="absolute w-8 h-8 bg-transparent focus:ring-opacity-25" type="submit" ></button>
                </form>
                    <input class="w-8 h-8 mr-2 text-green-600 border border-gray-300 rounded focus:bg-green-400 focus:ring-opacity-25" type="checkbox" checked/>
                @else
                <form action="{{ route('tasks.destroy',['task' => $task->id]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="w-8 h-8 mr-2 text-indigo-500 border border-gray-300 rounded focus:ring-indigo-400 focus:ring-opacity-25" type="submit"></button>
                </form>
                @endif
            </div>
        </div>
    @endforeach
    <x-delete />
</table>


@endsection

