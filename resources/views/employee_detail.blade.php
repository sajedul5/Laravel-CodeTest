<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                  <h1 class="text-center my-3" style="font-size: 20px;">Selected Employee List</h1>
                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th class="w-1/4 ...">Name</th>
                            <th class="w-1/4 ...">Address</th>
                            <th class="w-1/4 ...">Phone</th>
                            <th class="w-1/4 ...">Email</th>
                            <th class="w-1/4 ...">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($allEmployee as $employee)
                          <tr>
                            <td>{{ $employee['employee']['name'] }}</td>
                            <td>{{ $employee->address }}</td>
                            <td>{{ $employee->phone }}</td>
                            <td>{{ $employee->email }}</td>
                            <td class="bg-danger"><a href="{{ route('remove', $employee->employee_id) }}">remove</a></td>
                          </tr>
                        @endforeach
                        </tbody>
                      </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
