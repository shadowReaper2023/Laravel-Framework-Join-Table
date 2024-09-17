<link rel="stylesheet" href="app/css/style.css">
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Employees') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="employee">
                <table class="employeesTable" id="datatables">
                    <thead>
                        <tr>
                            <th>Employee Number </th>
                            <th>Last Name</th>
                            <th>First Line</th>
                            <th>Extension</th>
                            <th>Email</th>
                            <th>Office Code</th>
                            <th>Reports To</th>
                            <th>Job Title</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($employees as $employees)
                        <tr>
                            <td>{{$employees->employeeNumber}}</td>
                            <td>{{$employees->lastName}}</td>
                            <td>{{$employees->firstName}}</td>
                            <td>{{$employees->extension}}</td>
                            <td>{{$employees->email}}</td>
                            <td>{{$employees->officeCode }}</td>
                            <td>{{$employees->reportsTo }}</td>
                            <td>{{$employees->jobTitle}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
