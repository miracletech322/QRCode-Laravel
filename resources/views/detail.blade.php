<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

<div class="grid grid-cols-12 gap-4 mb-4">
    <div class="col-span-12 p-4 text-center">
        <div class="grid grid-cols-12 gap-4 mb-4">
            <div class="col-span-8 p-4 text-center">
                <div class="grid grid-cols-12 gap-4 mb-4">
                    <div class="col-span-12 p-4 text-center">
                        <div class="col-span-8 p-4 text-center">
                            <input type="text" value="{{$data[0]->uuid}}" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" />
                        </div>
                        <div class="col-span-8 p-4 text-center">
                            <input type="text" value="{{$data[0]->title}}" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" />
                        </div>
                        <div class="col-span-8 p-4 text-center">
                            <input type="text" value="{{$data[0]->company}}" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" />
                        </div>
                        <div class="col-span-8 p-4 text-center">
                            <input type="text" value="{{$data[0]->target}}" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" />
                        </div>
                        <div class="col-span-8 p-4 text-center">
                            <input type="text" value="{{$data[0]->created_at}}" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" />
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-span-4 p-4 text-center">
                <div class="grid grid-cols-12 gap-4 mb-4">
                    <div class="col-span-12 p-4 text-center mt-5">
                        {{$qrCode}}
                    </div>
                </div>
            </div>

            <div class="col-span-12 p-4 text-left">
                <a href="{{route('filament.admin.pages.qrcode.overview')}}"
                        class="w-full py-2 px-4 bg-blue-600 text-white font-semibold rounded-md shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        Back
                </a>
            </div>
        </div>
    </div>
</div>