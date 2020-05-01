@extends('layout')

@section('title')
List Invoices
@endsection
@section('mainContent')
	<h1 class="h1">List Invoices</h1>

	<table class="table" style="width:100%; background-color: white; font-family: 'Open Sans', sans-serif;">
		<tbody>
		@foreach($invoices as $invoice)
			
				<tr style="border: transparent">
					<td><i class="fas fa-circle"></i></td>
					<td width="auto">{{$invoice->id}}</td>
					<td width="auto">{{$invoice->invoicedate}}</td>
					<td width="auto">{{$invoice->companyname}}</td>
					<td width="auto">{{$invoice->projectname}}</td>
					<td width="auto">${{$invoice->invoiceamount}}</td>
					<td width="auto">{{$invoice->invoicestatus}}</td>
					<td width="auto"><a href="invoices/{{$invoice->id}}"  class="fa fa-bars"></a></td>
				</tr>
			
		@endforeach
		</tbody>
	</table>

<hr>

<button onclick="window.location.href = 'invoices/create';">Add Invoice Here</button>
	

@endsection