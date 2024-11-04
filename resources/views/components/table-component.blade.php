<div class="mb-4 text-lg font-semibold">{{ $title }}</div>

<div class="overflow-x-auto rounded-lg shadow-md">
    <table class="w-full overflow-hidden bg-white border border-gray-300 rounded-lg">
        <thead>
            <tr class="bg-gray-100 border-b">
                @foreach ($headers as $header)
                    <th class="px-4 py-2 font-medium text-left text-gray-600">{{ $header }}</th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            @foreach ($rows as $row)
                <tr class="border-b last:border-none">
                    @foreach ($row as $cell)
                        <td class="px-4 py-3 text-gray-800">{{ $cell }}</td>
                    @endforeach
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
