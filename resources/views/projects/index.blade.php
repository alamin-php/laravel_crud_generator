<x-layout>
    <div class="container mx-auto py-8">
        <h1 class="text-2xl font-bold mb-4">Project List</h1>

        <table class="w-full table-auto border-collapse border border-gray-300">
            <thead>
                <tr class="bg-gray-100">
                    <th class="border px-4 py-2">Name</th>
                    <th class="border px-4 py-2">Status</th>
                    <th class="border px-4 py-2">Actions</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <td class="border px-4 py-2">{{ $project->name }}</td>
                        <td class="border px-4 py-2">{{ $project->status }}</td>
                        <td class="border px-4 py-2 flex gap-2">
                            <a href="{{ route('projects.edit', $project) }}" class="text-blue-500 hover:underline">Edit</a>

                            <form action="{{ route('projects.destroy', $project) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:underline" onclick="return confirm('Are you sure?')">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>
