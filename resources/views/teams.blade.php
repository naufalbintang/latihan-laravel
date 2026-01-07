<x-layout>
    <x-slot:title>Teams Page</x-slot:title>
    <div class="w-full flex justify-center">
        <table class="table-auto border border-gray-600 min-w-1/2">
            <thead>
                <tr>
                    <th class="text-left p-4 border border-gray-600">Nama</th>
                    <th class="text-left p-4 border border-gray-600">Role</th>
                    <th class="text-left p-4 border border-gray-600">Media Sosial</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($teams as $team)
                    <tr>
                        <td class="p-4 border border-gray-600">{{ $team['name'] }}</td>
                        <td class="p-4 border border-gray-600">{{ $team['role'] }}</td>
                        @if ($team['medsoc'])
                            <td class="p-4 border border-gray-600">
                                <a href="{{ $team['medsoc'] }}" target="_blank">Instagram</a>
                            </td>
                        @else
                            <td class="p-4 border border-gray-600">Tidak ada Media Sosial</td>
                        @endif
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>
