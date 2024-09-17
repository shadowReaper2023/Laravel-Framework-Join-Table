<link rel="stylesheet" href="app/css/style.css">
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Order') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="employee">
                <table class="employeesTable" id="datatables">
                    <thead>
                        <tr>
                            <th>Price Each</th>
                            <th>Order Number</th>
                            <th>Check Number</th>
                            <th>Order Date</th>
                            <th>Required Date</th>
                            <th>shipped Date</th>
                            <th>Status</th>
                            <th>Quantity In Stock</th>
                            <th>Customer Number</th>
                            <th>Text Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($orders as $orders)
                        <tr>
                            <td>{{$orders->priceEach}}</td>
                            <td>{{$orders->orderNumber}}</td>
                            <td>{{$orders->checkNumber}}</td>
                            <td>{{$orders->orderDate}}</td>
                            <td>{{$orders->requiredDate}}</td>
                            <td>{{$orders->shippedDate}}</td>
                            <td>{{$orders->status}}</td>
                            <td>{{$orders->quantityInStock}}</td>
                            <td>{{$orders->customerNumber}}</td>
                            <td>{{$orders->textDescription}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
