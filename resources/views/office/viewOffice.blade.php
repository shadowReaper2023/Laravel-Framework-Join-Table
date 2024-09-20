<link rel="stylesheet" href="app/css/style.css">
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Office') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div>
                <table id="officeTable">
                    <thead>
                        <tr>
                            <th>Office Code</th>
                            <th>Last Name</th>
                            <th>First Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Reports To</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
