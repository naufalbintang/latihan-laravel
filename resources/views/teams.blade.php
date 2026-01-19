<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
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
                        <td class="p-4 border border-gray-600">
                            @if ($team->medsoc)
                                <a href="https://instagram.com/{{ $team->medsoc }}">Instagram</a>
                            @else
                                Tidak ada media sosial
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>
