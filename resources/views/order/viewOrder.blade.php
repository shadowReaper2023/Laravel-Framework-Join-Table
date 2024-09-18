<link rel="stylesheet" href="app/css/style.css">
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Order') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div>
                <table id="orderTable">
                    <thead>
                        <tr>
                            <th>Price Each</th>
                            <th>Order Number</th>
                            <th>Check Number</th>
                            <th>Order Date</th>
                            <th>Required Date</th>
                            <th>shipped Date</th>
                            <th>Quantity In Stock</th>
                            <th>Customer Number</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
