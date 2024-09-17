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
                            <th>Customer Number </th>
                            <th>Customer Name</th>
                            <th>Last Name</th>
                            <th>First Name</th>
                            <th>Check Number</th>
                            <th>Email</th>
                            <th>City</th>
                            <th>Country</th>
                            <th>State</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($customer as $customers)
                        <tr>
                            <td>{{$customers->customerNumber}}</td>
                            <td>{{$customers->customerName}}</td>
                            <td>{{$customers->contactLastName}}</td>
                            <td>{{$customers->contactFirstName}}</td>
                            <td>{{$customers->checkNumber}}</td>
                            <td>{{$customers->email}}</td>
                            <td>{{$customers->city}}</td>
                            <td>{{$customers->country}}</td>
                            <td>{{$customers->state}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
