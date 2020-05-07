  
@extends('layout')
@section('mainContent')
    <h1>Show Invoice</h1>
   

    <table class="table border py-2 px-3 text-grey-darkest" style="width:95%; font-family: 'Open Sans', sans-serif; background-color: ghostwhite">
       
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


<div class="form-group">
    <button onclick="window.location.href = '{{$invoice->id}}/edit';" class="bg-blue-500"
        >Edit Invoice</button>
    <button onclick="window.location.href = '/invoices';" class="bg-blue-500">Show Invoices</button>
  </div>
@endsection