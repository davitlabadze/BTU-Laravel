<form action="{{route('trash.delete_all')}}" method="POST">
    @csrf
    @method('DELETE')
    <button class="h-10 p-2 px-10 mt-5 mb-10 bg-green-500 rounded ml-96" type="submit">შესრულებული დავალებების წაშლა</button>
</form>
