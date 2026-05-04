@extends('admin.layout.layout')

@section('content')
<main class="flex-1 overflow-y-auto p-4 md:p-6">

    <!-- Header -->
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Contact Message Details</h1>

        <a href="{{ route('admin.contact.list') }}"
           class="px-4 py-2 bg-gray-500 text-white rounded">
            ← Back
        </a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

        <!-- LEFT SIDE -->
        <div class="md:col-span-2 bg-white shadow rounded">

            <!-- Header -->
            <div class="px-6 py-4 border-b bg-blue-500 text-white rounded-t">
                <h2 class="text-lg font-semibold">
                    Message from {{ $contact->name }}
                </h2>
            </div>

            <!-- Body -->
            <div class="p-6">

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-4">

                    <div>
                        <p class="text-sm text-gray-500 mb-1">Full Name</p>
                        <p class="font-medium">{{ $contact->name }}</p>
                    </div>

                    <div>
                        <p class="text-sm text-gray-500 mb-1">Email</p>
                        <a href="mailto:{{ $contact->email }}"
                           class="text-blue-600 hover:underline">
                            {{ $contact->email }}
                        </a>
                    </div>

                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-4">

                    <div>
                        <p class="text-sm text-gray-500 mb-1">Phone</p>
                        @if($contact->phone)
                            <a href="tel:{{ $contact->phone }}"
                               class="text-gray-700">
                                {{ $contact->phone }}
                            </a>
                        @else
                            <span class="text-gray-400">Not provided</span>
                        @endif
                    </div>

                    <div>
                        <p class="text-sm text-gray-500 mb-1">Received</p>
                        <p class="text-gray-600">
                            {{ $contact->created_at->format('d M Y H:i') }}
                        </p>
                    </div>

                </div>

                <div>
                    <p class="text-sm text-gray-500 mb-2">Message</p>
                    <div class="p-4 bg-gray-50 border rounded min-h-[200px]">
                        {{ $contact->message }}
                    </div>
                </div>

            </div>
        </div>

        <!-- RIGHT SIDE -->
        <div class="space-y-4">

            <!-- Actions -->
            <div class="bg-white shadow rounded">
                <div class="px-4 py-3 border-b bg-gray-800 text-white rounded-t">
                    <h3 class="font-semibold">Actions</h3>
                </div>

                <div class="p-4 space-y-2">

                    <a href="mailto:{{ $contact->email }}"
                       class="block w-full text-center px-4 py-2 bg-blue-500 text-white rounded">
                        Reply via Email
                    </a>

                    @if($contact->phone)
                        <a href="tel:{{ $contact->phone }}"
                           class="block w-full text-center px-4 py-2 bg-green-500 text-white rounded">
                            Call
                        </a>
                    @endif

                    <button onclick="deleteContact()"
                            class="w-full px-4 py-2 bg-red-500 text-white rounded">
                        Delete
                    </button>

                </div>
            </div>

            <!-- Info -->
            <div class="bg-white shadow rounded">
                <div class="px-4 py-3 border-b bg-gray-500 text-white rounded-t">
                    <h3 class="font-semibold">Information</h3>
                </div>

                <div class="p-4 text-sm text-gray-700 space-y-2">
                    <p><strong>ID:</strong> {{ $contact->id }}</p>
                    <p><strong>Created:</strong> {{ $contact->created_at->diffForHumans() }}</p>
                    <p>
                        <strong>Status:</strong>
                        <span class="px-2 py-1 text-xs bg-green-100 text-green-700 rounded">
                            New
                        </span>
                    </p>
                </div>
            </div>

        </div>

    </div>

</main>

<script>
function deleteContact() {
    if(confirm('Delete this contact message?')) {
        fetch('{{ route("admin.contact.destroy", $contact->id) }}', {
            method: 'DELETE',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
            }
        }).then(res => {
            if(res.ok) {
                window.location.href = '{{ route("admin.contact.list") }}';
            }
        });
    }
}
</script>

@endsection