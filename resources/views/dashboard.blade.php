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
                    <h1 class="text-center my-3" style="font-size: 20px;">Search Employee List</h1>
                    <h1 class=" text-info my-3"><a class="btn btn-info" href="{{ route('create_employee') }}">Add Employee</a></h1>
                    <input type="text" class="form-control" id="search"   placeholder="Search The Employee Name">
                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th class="w-1/4 ...">Name</th>
                            <th class="w-1/4 ...">Designation</th>
                            <th class="w-1/4 ...">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($allEmployee as $employee)
                          <tr>
                            <td>{{ $employee->name }}</td>
                            <td>{{ $employee->designation }}</td>
                            <td><a href="{{ route('update_employee', $employee->id) }}">Select</a></td>
                          </tr>
                        @endforeach
                        </tbody>
                      </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        const searchInput = document.getElementById("search");
        const rows = document.querySelectorAll("tbody tr");

        searchInput.addEventListener("keyup", function (event) {
            //alert(event);
            const q = event.target.value.toLowerCase();
            rows.forEach((row) => {
                row.querySelector('td').textContent.toLowerCase().startsWith(q) ? (row.style.display = "") : row.style.display = "none";
            });
        });
    </script>
</x-app-layout>
