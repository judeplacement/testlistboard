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
			  <input id="invoicedate" name="invoicedate" type="text" placeholder="Enter Invoice Date" class="border py-2 px-3 text-grey-darkest" style="width: 200px; height: 30px">
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
			  <label class="col-md-4 control-label" for="submit"></label>
			  <button class="bg-green hover:bg-green-dark text-black uppercase text-lg mx-auto p-4 rounded"id="submit" style="background-color:green; margin-top: 20px; margin-bottom: 20px; width: 100px; height: 30px"name="submit">Save</button>
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
		<div class="container">
			<button style="background-color: lightskyblue; width:100px; height:30px; margin: 10px"><a class="text-black uppercase text-lg mx-auto p-4 rounded" href="/invoices" style="background-color: lightskyblue; margin-top: 20px;">Show Invoices</a></button>
		</div>
@endsection