  
@extends('layout')

@section('mainContent')
    <h1>Show Invoice</h1>
   

<table class="table table-striped bg-blue-500">
    <thead>
        <tr>
            <th>Invoice ID</th>
            <th>Invoice Date</th>
            <th>Company Name</th>
            <th>Project Name</th>
            <th>Invoice Amount</th>
            <th>Invoice Status</th>
        </tr>
    </thead>
    <tbody>
    <tr>
        <td>{{$invoice->id}}</td>
        <td>{{$invoice->invoicedate}}</td>
        <td>{{$invoice->companyname}}</td>
        <td>{{$invoice->projectname}}</td>
        <td>{{$invoice->invoiceamount}}</td>
        <td>{{$invoice->invoicestatus}}</td>
    </tr>
    
    </tbody>
</table>
<a href="{{$invoice->id}}/edit">Edit Invoice</a>
@endsection