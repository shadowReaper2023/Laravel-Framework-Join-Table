$(document).ready(function () {
    var baseUrl = window.location.origin;
    $('#productTable').DataTable({
        processing: true,
        serverSide: true,
        
        ajax: baseUrl + "/products", // The route for server-side processing
        columns: [
            { data: 'productCode', name: 'productCode'},
            { data: 'productName', name: 'productName'},
            { data: 'productLine', name: 'productLine'},
            { data: 'productScale', name: 'productScale'},
            { data: 'productVendor', name: 'productVendor'},
            { data: 'quantityInStock', name: 'quantityInStock'},
            { data: 'priceEach', name: 'priceEach'},
            { data: 'MSRP', name: 'MSRP'},
        ],
    });
    $('#customerTable').DataTable({
        processing: true,
        serverSide: true,
        
        ajax: baseUrl + "/customers", // The route for server-side processing
        columns: [
            { data: 'customerNumber', name: 'customerNumber'},
            { data: 'customerName', name: 'customerName'},
            { data: 'contactLastName', name: 'contactLastName'},
            { data: 'contactFirstName', name: 'contactFirstName'},
            { data: 'checkNumber', name: 'checkNumber'},
            { data: 'email', name: 'email'},
            { data: 'country', name: 'country'},
        ],
    });
    $('#orderTable').DataTable({
        processing: true,
        serverSide: true,
        
        ajax: baseUrl + "/orders", // The route for server-side processing
        columns: [
            { data: 'priceEach', name: 'priceEach'},
            { data: 'orderNumber', name: 'orderNumber'},
            { data: 'checkNumber', name: 'checkNumber'},
            { data: 'orderDate', name: 'orderDate'},
            { data: 'requiredDate', name: 'requiredDate'},
            { data: 'shippedDate', name: 'shippedDate'},
            { data: 'quantityInStock', name: 'quantityInStock'},
            { data: 'customerNumber', name: 'customerNumber'},
        ],
    });

    $('#employeeTable').DataTable({
        processing: true,
        serverSide: true,
        
        ajax: baseUrl + "/employees", // The route for server-side processing
        columns: [
            { data: 'employeeNumber', name: 'employeeNumber'},
            { data: 'lastName', name: 'lastName'},
            { data: 'firstName', name: 'firstName'},
            { data: 'extension', name: 'extension'},
            { data: 'email', name: 'email'},
            { data: 'addressLine1', name: 'addressLine1'},
            { data: 'reportsTo', name: 'reportsTo'},
            { data: 'jobTitle', name: 'jobTitle'},
        ],
    });
});
