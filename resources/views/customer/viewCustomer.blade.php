<link rel="stylesheet" href="app/css/style.css">
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Employees') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div>
                <table id="customerTable">
                    <thead>
                        <tr>
                            <th>Customer Number </th>
                            <th>Customer Name</th>
                            <th>Last Name</th>
                            <th>First Name</th>
                            <th>Check Number</th>
                            <th>Email</th>
                            <th>Country</th>
                            <th>Manage By</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
