<x-filament-panels::page>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <div class="grid grid-cols-12 gap-4 mb-4">
        <div class="col-span-12 p-4 text-center">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Create QR Code</h2>
            <form action="{{ route('qrcode.create') }}" method="POST" class="space-y-4">
                @csrf

                <!-- UUID Input -->
                <div class="grid grid-cols-12 gap-4 mb-4">
                    <div class="col-span-4 text-center">
                        <input type="text" id="uuid" name="uuid" required placeholder="UUID"
                            class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" />
                    </div>
                    <div class="col-span-4 text-center">
                        <input type="text" id="title" name="title" required placeholder="Title"
                            class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" />
                    </div>
                    <div class="col-span-4 text-center">
                        <input type="text" id="target" name="target" required placeholder="Target"
                            class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" />
                    </div>
                    <div class="col-span-12 text-center">
                        <input type="text" id="company" name="company" required placeholder="Company"
                            class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" />
                    </div>
                </div>

                <button type="submit"
                    class="w-full py-2 px-4 bg-blue-600 text-white font-semibold rounded-md shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    Submit
                </button>
            </form>
        </div>
        <div class="col-span-12 p-4 text-center">
            <table class="min-w-full bg-white border border-gray-300">
                <thead>
                    <tr>
                        <th class="px-4 py-2 border">ID</th>
                        <th class="px-4 py-2 border">UUID</th>
                        <th class="px-4 py-2 border">Title</th>
                        <th class="px-4 py-2 border">Company</th>
                        <th class="px-4 py-2 border">Target</th>
                        <th class="px-4 py-2 border">CreatedAt</th>
                        <th class="px-4 py-2 border">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($this->getList() as $item)
                        <tr>
                            <td class="px-4 py-2 border">{{ $item->id }}</td>
                            <td class="px-4 py-2 border">{{ $item->uuid }}</td>
                            <td class="px-4 py-2 border">{{ $item->title }}</td>
                            <td class="px-4 py-2 border">{{ $item->company }}</td>
                            <td class="px-4 py-2 border">{{ $item->target }}</td>
                            <td class="px-4 py-2 border">{{ $item->created_at->format('Y-m-d') }}</td>
                            <td class="px-4 py-2 border">
                                <form action="{{route('qrcode.detail', $item->uuid)}}" method="get">
                                    <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">
                                        Details
                                    </button>
                                </form>
                                <br>
                                <form action="{{ route('qrcode.delete') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $item->id }}">
                                    <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded"
                                        onclick="return confirm('Are you sure you want to delete this user?');">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-filament-panels::page>
