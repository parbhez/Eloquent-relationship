<x-app-layout>




    <x-slot name="title">| Has One </x-slot>

    <x-slot name="maincontent">

        <div class="col-12">
            <h1 class="text-center my-3">One To One (Has One)</h1>
            <hr>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">SL</th>
                        <th scope="col">Name</th>
                        <th scope="col">Phone</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $key => $user)
                        <tr>
                            <th>{{ $key + 1 }}</th>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->phone->name }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </x-slot>


</x-app-layout>
