@props(['for', 'as', 'emptyMessage', '$emptySpan', 'data', 'component', 'arguments', 'deleteMethod'])
<tbody>
    @forelse($for as $as)
        <tr wire:key="{{ $as->id }}" class="bg-[#F6F7F7] border-b hover:bg-gray-50">
            @foreach($data as $item)
                @if($item === 'id')
                <x-admin.table.row-item :value="$as->$item" type="checkbox"/>
                @elseif($item === 'name')
                        <x-admin.table.row-item
                            type="name"
                            :value="$as->$item"
                            :component="$component"
                            :arguments="$arguments . $as->id"
                            :delete-method="$deleteMethod . '(' . $as->id . ')'"

                        />
                @else
                        <x-admin.table.row-item :value="$as->$item"/>
                @endif
            @endforeach
            {{ $slot }}
        </tr>
    @empty
        <tr class="bg-white border-b hover:bg-gray-50">
            <th colspan="{{ $emptySpan }}" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap text-center">
                {{ $emptyMessage }}
            </th>
        </tr>
    @endforelse
</tbody>
