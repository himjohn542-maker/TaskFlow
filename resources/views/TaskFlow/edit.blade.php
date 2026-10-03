{{-- UPDATE TASK FORM --}}
<x-layout>
    <section class="form-intro">
        <div class="container text-center">
            <h1 class="form-intro-title">Edit task</h1>
            <p class="form-intro-text">
                Update the details and keep everything clear.
            </p>
        </div>
    </section>

    <section class="form-section">
        <div class="container">
            <div class="form-card mx-auto">
                <form method="POST" action="{{ route('todo_lists.update', $todo_list->id) }}">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" 
                            name="title" 
                            id="title" 
                            class="form-control" 
                            value="{{ old('title', $todo_list->title) }}"
                            placeholder="What needs to be done?" 
                            required>
                    </div>

                    <div class="mb-4">
                        <label for="subject" class="form-label">Subject</label>
                        <input type="text" 
                            name="subject" 
                            id="subject" 
                            class="form-control" 
                            value="{{ old('subject', $todo_list->subject) }}"
                            placeholder="Optional subject">
                    </div>

                    <div class="mb-4">
                        <label for="description" class="form-label">Description</label>
                        <textarea name="description" 
                                id="description" 
                                class="form-control" 
                                rows="5" 
                                placeholder="Add more details..." 
                                required>{{ old('description', $todo_list->description) }}</textarea>
                    </div>

                    <div class="mb-4">
                        <label class="form-label d-block mb-2">Priority</label>
                        
                        <div class="priority-options">
                            <label class="priority-option">
                                <input type="radio" 
                                       name="status" 
                                       value="1"
                                       {{ old('status', $todo_list->status) == 1 ? 'checked' : '' }}>
                                <span>Important</span>
                            </label>

                            <label class="priority-option">
                                <input type="radio" 
                                       name="status" 
                                       value="0"
                                       {{ old('status', $todo_list->status) == 0 ? 'checked' : '' }}>
                                <span>casual</span>
                            </label>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-submit w-100">
                        Update Task
                    </button>
                </form>
            </div>
        </div>
    </section>
</x-layout>