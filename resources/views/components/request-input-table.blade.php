<table class="bg-gray-800 p-4 overflow-hidden text-gray-100 w-full">
    <thead>
        <tr class="bg-gray-500">
            <th class="py-2 text-sm text-left text-gray-800 px-4 text-sm font-normal">Input</th>
            <th class="py-2 text-sm text-left text-gray-800 px-4 text-sm font-normal">Value</th>
        </tr>
    </thead>
    <tbody>
        @foreach($input as $name => $value)
            <tr>
                <td class="px-4 py-2 font-thin text-gray-200">{{ $name }}</td>
                <td class="px-4 py-2 font-thin text-teal-300 break-all">{{ $value }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
