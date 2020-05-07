@extends('layout')

@section('title')
Create a new Invoice
@endsection

@section('mainContent')
	<h2>Create Invoice</h2>
	
	<form class="form-horizontal" method="post" action="/invoices/">
		@csrf
		@method('post')
			<fieldset>
			<!-- Text input-->
			<div class="form-group" >
			  <label class="col-md-4 control-label" for="invoicedate">Invoice Date</label>  
			  <div class="col-md-4">
			  <input id="invoicedate" name="invoicedate" type="text" placeholder="YYYY-MM-DD" class="border py-2 px-3 text-grey-darkest" style="width: 200px; height: 30px">
			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="companyname">Company Name</label>  
			  <div class="col-md-4">
			  <input id="companyname" name="companyname" type="text" placeholder="Enter Company Name" class="border py-2 px-3 text-grey-darkest" style="width: 200px; height: 30px">
			    
			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="projectname">Project Name</label>  
			  <div class="col-md-4">
			  <input id="projectname" name="projectname" type="text" placeholder="Enter Project Name" class="border py-2 px-3 text-grey-darkest" style="width: 200px; height: 30px">
			    
			  </div>
			</div>

      	<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="invoiceamount">Invoice Amount</label>  
			  <div class="col-md-4">
			  <input id="invoiceamount" name="invoiceamount" type="text" placeholder="Enter Invoice Amount" class="border py-2 px-3 text-grey-darkest" style="width: 200px; height: 30px">
			    
			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="invoicestatus">Invoice Status</label>  
			  <div class="col-md-4">
			  <input id="invoicestatus" name="invoicestatus" type="text" placeholder="Enter Invoice Status" class="border py-2 px-3 text-grey-darkest" style="width: 200px; height: 30px">
			    
			  </div>
			</div>

			<!-- Button -->
			<div class="form-group">

				<button class="bg-green-700"id="submit" name="submit">Save</button>
			</div>
		

		


			</fieldset>
		</form>
		
		@if ($errors->any())
		    <div class="alert alert-danger">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif
		<div class="form-group">
			<button onclick="window.location.href = '/invoices';" class="bg-blue-500">Show Invoices</button>
		</div>
@endsection