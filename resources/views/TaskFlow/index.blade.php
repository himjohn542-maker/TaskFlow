<x-layout>
<div class="tasks-header text-center mb-5">
    <h2 class="tasks-title">What’s on your list</h2>
</div>

{{-- TASKS --}}
    <div class="container">
        <div class="content">
@forelse ($todo_lists as $todo_list)
    <div class="task-card mb-3" 
         data-bs-toggle="modal" 
         data-bs-target="#taskModal{{ $todo_list->id }}"
         style="cursor: pointer;">
        
        <div class="task-card-body">
            <div class="task-header">
                <h3 class="task-title">{{ $todo_list->title }}</h3>
                <span class="task-status {{ $todo_list->status ? 'status-important' : 'status-casual' }}">
                    {{ $todo_list->status ? 'Important' : 'Casual' }}
                </span>
            </div>

            <div class="task-subject">
                Subject: {{ $todo_list->subject }}
            </div>

            <p class="task-description">
                Description: {{ $todo_list->Description }}
            </p>
        </div>

        

        <div class="task-card-footer">
            <div class="task-actions">
                <a href="{{ route('todo_lists.edit', $todo_list->id) }}" 
                   class="btn-edit"
                   onclick="event.stopPropagation();">
                    Edit
                </a>

                <form action="{{ route('todo_lists.destroy', $todo_list->id) }}" 
                      method="POST"
                      onclick="event.stopPropagation();">
                    @csrf
                    @method('DELETE')
                    <button type="submit" 
                            class="btn-delete" 
                            onclick="event.stopPropagation(); return confirm('Delete this task?')">
                        Delete
                    </button>
                </form>
            </div>
        </div>
    </div>

    {{-- Modal --}}
    <div class="modal fade" id="taskModal{{ $todo_list->id }}" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{ $todo_list->title }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <span class="task-status {{ $todo_list->status ? 'status-important' : 'status-casual' }}">
                            {{ $todo_list->status ? 'Important' : 'Casual' }}
                        </span>
                    </div>

                    <p class="modal-description">{{ $todo_list->description }}</p>

                    <p class="modal-subject">
                        <strong>Subject:</strong> {{ $todo_list->subject }}
                    </p>
                    <p class="modal-subject">
                        <strong>description:</strong> {{ $todo_list->Description }}
                    </p>
                </div>
                <div class="modal-footer">
                    <a href="{{ route('todo_lists.edit', $todo_list->id) }}" class="btn-edit">Edit</a>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@empty
    <div class="empty-state">
        <p>No tasks yet.</p>
    </div>
@endforelse     
</div>
</div>
</x-layout>