@extends('layout')

@section('title')
List Invoices
@endsection

@section('mainContent')
@php
	$invoiceColours = [
		'Paid'			=> 'green',
		'Pending'		=> 'orange',
		'Unpaid'		=> 'red'
	];
@endphp


	<table class="table border py-2 px-3 text-grey-darkest" style="width:95%; font-family: 'Open Sans', sans-serif; background-color:ghostwhite ">
		<tbody>
		@foreach($invoices as $invoice)
				<tr class="border py-2 px-3 text-grey-darkest">
					<td style="auto"><i class="fas fa-circle" style="color: <?php echo (isset($invoiceColours[$invoice->invoicestatus])) ? $invoiceColours[$invoice->invoicestatus] : 'black' ?>"></i></td>
					<td width="80px">{{$invoice->id}}</td>
					<td width="auto">{{$invoice->invoicedate}}</td>
					<td width="auto">{{$invoice->companyname}}</td>
					<td width="auto">{{$invoice->projectname}}</td>
					<td width="auto">${{$invoice->invoiceamount}}</td>
					<td width="auto" style="color: <?php echo (isset($invoiceColours[$invoice->invoicestatus])) ? $invoiceColours[$invoice->invoicestatus] : 'black' ?>">{{$invoice->invoicestatus}}</td>
					<td width="auto"><a href="invoices/{{$invoice->id}}"  class="fa fa-bars"></a></td>
					
				</tr>
			
		@endforeach
		</tbody>
	</table>



<button onclick="window.location.href = 'invoices/create';" class="bg-blue-500">Add Invoice</button>
	

@endsection