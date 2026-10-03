<x-layout>
    {{-- Captivating top section (not full height) --}}
<section class="form-intro">
    <div class="container text-center">
        <h1 class="form-intro-title">Create a new task</h1>
        <p class="form-intro-text">
            Give it a clear title, set the priority, and move forward.
        </p>
    </div>
</section>

{{-- Form Section --}}
<section class="form-section">
    <div class="container">
        <div class="form-card mx-auto">
            <form method="POST" action="{{ route('todo_lists.store') }}">
                @csrf

                <div class="mb-4">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" 
                        name="title" 
                        id="title" 
                        class="form-control" 
                        placeholder="What needs to be done?" 
                        required>
                </div>

                <div class="mb-4">
                    <label for="subject" class="form-label">Subject</label>
                    <input type="text" 
                        name="subject" 
                        id="subject" 
                        class="form-control" 
                        placeholder="Optional subject">
                </div>

                <div class="mb-4">
                    <label for="description" class="form-label">Objective</label>
                    <textarea name="description" 
                              id="description" 
                              class="form-control" 
                              rows="5" 
                              placeholder="Add more details..." 
                              required></textarea>
                </div>

                <div class="mb-4">
                    <label class="form-label d-block mb-2">Priority</label>
                    
                    <div class="priority-options">
                        <label class="priority-option">
                            <input type="radio" name="status" value="1">
                            <span>Important</span>
                        </label>

                        <label class="priority-option">
                            <input type="radio" name="status" value="0">
                            <span>Casual</span>
                        </label>
                    </div>
                </div>

                <button type="submit" class="btn btn-submit w-100">
                    Create Todo
                </button>
            </form>
        </div>
    </div>
</section>
</x-layout>