<link rel="stylesheet" href="app/css/style.css">
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Products') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="employee">
                <table class="employeesTable" id="datatables">
                    <thead>
                        <tr>
                            <th>Product Code </th>
                            <th>Product Name</th>
                            <th>Product Line</th>
                            <th>Product Scale</th>
                            <th>Product Vendor</th>
                            <th>Quantity In Stock</th>
                            <th>Price Each</th>
                            <th>MSRP</th>
                            <th>Text Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                        <tr>
                            <td>{{$product->productCode }}</td>
                            <td>{{$product->productName}}</td>
                            <td>{{$product->productLine }}</td>
                            <td>{{$product->productScale}}</td>
                            <td>{{$product->productVendor}}</td>
                            <td>{{$product->quantityInStock }}</td>
                            <td>{{$product->priceEach}}</td>
                            <td>{{$product->MSRP}}</td>
                            <td>{{$product->textDescription}}</td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
