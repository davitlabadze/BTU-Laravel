<div class="flex w-auto p-5 mt-20">
    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <input
            type="text"
            name="title"
            required
            placeholder="ახალი დავალება"
            id=""
            class="h-10 p-2 border border-gray-300 rounded w-96"
        >
        <button class="h-10 p-2 ml-36 bg-neutral-500" type="submit"><strong>+</strong> დავალების დამატება</button>
    </form>
</div>
