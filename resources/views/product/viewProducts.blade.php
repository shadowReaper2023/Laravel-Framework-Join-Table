<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Products') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div>
                <table id="productTable">
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
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</x-app-layout>