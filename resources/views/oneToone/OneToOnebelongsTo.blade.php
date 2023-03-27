<x-app-layout>
    <x-slot name="title">| Has One </x-slot>

    <x-slot name="maincontent">
        <div class="col-12">
            <h1 class="text-center my-3">One To One (belongsTo)</h1>
            <hr>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">SL</th>
                        <th scope="col">Phone</th>
                        <th scope="col">User</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($phones as $key => $phone)
                        <tr>
                            <th>{{ $key + 1 }}</th>
                            <td>{{ $phone->name }}</td>
                            <td>{{ $phone->user->name }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </x-slot>
</x-app-layout>
