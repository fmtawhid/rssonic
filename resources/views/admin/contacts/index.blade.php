@extends('admin.layout.layout')

@section('content')
<main class="flex-1 overflow-y-auto p-4 md:p-6">

    <!-- Header -->
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Contact Messages</h1>

        <span class="px-4 py-2 bg-blue-100 text-blue-700 rounded text-sm">
            {{ $contacts->total() }} Messages
        </span>
    </div>

    @if($contacts->count() > 0)

    <div class="bg-white shadow rounded overflow-x-auto">

        <table class="w-full">
            <thead>
                <tr class="border-b bg-gray-50">
                    <th class="p-3 text-left">
                        <input type="checkbox" id="selectAll">
                    </th>
                    <th class="p-3 text-left">Name</th>
                    <th class="p-3 text-left">Email</th>
                    <th class="p-3 text-left">Phone</th>
                    <th class="p-3 text-left">Date</th>
                    <th class="p-3 text-right">Actions</th>
                </tr>
            </thead>

            <tbody>
                @foreach($contacts as $contact)
                    <tr class="border-b hover:bg-gray-50">
                        <td class="p-3">
                            <input type="checkbox" class="contact-checkbox" value="{{ $contact->id }}">
                        </td>

                        <td class="p-3 font-medium">
                            {{ $contact->name }}
                        </td>

                        <td class="p-3">
                            <a href="mailto:{{ $contact->email }}" class="text-blue-600 hover:underline">
                                {{ $contact->email }}
                            </a>
                        </td>

                        <td class="p-3">
                            @if($contact->phone)
                                <a href="tel:{{ $contact->phone }}" class="text-gray-700">
                                    {{ $contact->phone }}
                                </a>
                            @else
                                <span class="text-gray-400">-</span>
                            @endif
                        </td>

                        <td class="p-3 text-gray-500 text-sm">
                            {{ $contact->created_at->format('d M Y H:i') }}
                        </td>

                        <td class="p-3 text-right space-x-2">

                            <a href="{{ route('admin.contact.show', $contact->id) }}"
                               class="px-3 py-1 bg-blue-500 text-white rounded text-sm">
                                View
                            </a>

                            <button class="delete-contact px-3 py-1 bg-red-500 text-white rounded text-sm"
                                    data-id="{{ $contact->id }}">
                                Delete
                            </button>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>

    <!-- Pagination -->
    <div class="mt-4">
        {{ $contacts->links() }}
    </div>

    <!-- Bulk Delete -->
    <div class="mt-4">
        <button id="bulkDelete"
                class="px-4 py-2 bg-red-500 text-white rounded hidden">
            Delete Selected
        </button>
    </div>

    @else
        <div class="bg-white shadow rounded p-6 text-center text-gray-500">
            No contact messages yet.
        </div>
    @endif

</main>

<!-- JS -->
<script>

// Select All
document.getElementById('selectAll')?.addEventListener('change', function() {
    document.querySelectorAll('.contact-checkbox').forEach(cb => {
        cb.checked = this.checked;
    });
    toggleBulkDelete();
});

// Individual
document.querySelectorAll('.contact-checkbox').forEach(cb => {
    cb.addEventListener('change', toggleBulkDelete);
});

function toggleBulkDelete() {
    const count = document.querySelectorAll('.contact-checkbox:checked').length;
    document.getElementById('bulkDelete').classList.toggle('hidden', count === 0);
}

// Single Delete
document.querySelectorAll('.delete-contact').forEach(btn => {
    btn.addEventListener('click', function() {
        if(confirm('Delete this contact?')) {
            fetch(`{{ route('admin.contact.destroy', '__id__') }}`.replace('__id__', this.dataset.id), {
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                }
            }).then(res => {
                if(res.ok) location.reload();
            });
        }
    });
});

// Bulk Delete
document.getElementById('bulkDelete')?.addEventListener('click', function() {
    const ids = Array.from(document.querySelectorAll('.contact-checkbox:checked')).map(cb => cb.value);

    if(ids.length && confirm(`Delete ${ids.length} contacts?`)) {
        fetch('{{ route("admin.contact.delete-multiple") }}', {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ ids })
        }).then(res => res.json())
          .then(data => {
              if(data.success) location.reload();
          });
    }
});

</script>

@endsection