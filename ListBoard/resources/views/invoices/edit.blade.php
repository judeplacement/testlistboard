@extends('layout')

@section('title')
Update / Delete Invoice
@endsection

@section('mainContent')
	
	<form class="form-horizontal" method="post" action="/invoices/{{$invoice->id}}">
		@csrf
		@method('put')
			<fieldset>

			<!-- Form Name -->
			<legend></legend>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="invoicedate">Invoice Date</label>  
			  <div class="col-md-4">
			  <input id="invoicedate" name="invoicedate" type="text" placeholder="Enter Invoice Date" class="form-control input-md border py-2 px-3 text-grey-darkest" value="{{$invoice->invoicedate}}" required="required">
			  </div>
			</div>
      
			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="companyname">Company Name</label>  
			  <div class="col-md-4">
			  <input id="companyname" name="companyname" type="text" placeholder="Enter Company Name" class="form-control input-md border py-2 px-3 text-grey-darkest" value="{{$invoice->companyname}}" required="required">
			    
			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="projectname">Project Name</label>  
			  <div class="col-md-4">
			  <input id="projectname" name="projectname" type="text" placeholder="Enter Project Name" class="form-control input-md border py-2 px-3 text-grey-darkest" value="{{$invoice->projectname}}" required="required">
			    
			  </div>
      </div>

      <!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="invoiceamount">Invoice Amount</label>  
			  <div class="col-md-4">
			  <input id="invoiceamount" name="invoiceamount" type="text" placeholder="Enter Invoice Amount" class="form-control input-md border py-2 px-3 text-grey-darkest" value="{{$invoice->invoiceamount}}" required="required">
			    
			  </div>
      </div>

       <!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="invoicestatus">Invoice Status</label>  
			  <div class="col-md-4">
			  <input id="invoicestatus" name="invoicestatus" type="text" placeholder="Enter Invoice Status" class="form-control input-md border py-2 px-3 text-grey-darkest" value="{{$invoice->invoicestatus}}" required="required">
			    
			  </div>
      </div>
      
      <!-- Button -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="submit"></label>
        <div class="col-md-4">
          <button id="submit" name="submit" class="bg-green-500">Update</button>
        </div>
      </div>

      </fieldset>
      </form>

      <form class="form-horizontal" method="post" action="/invoices/{{$invoice->id}}">
      @csrf
      @method('delete')
      <!-- Button -->
      <div class="form-group">
        <label class="" for="submit"></label>
        
          <button id="submit" name="submit" class="bg-red-500" style="margin: 0px;">Delete</button>
        
      </div>
      </form>

      <button onclick="window.location.href = '/invoices';" class="bg-blue-500">Show Invoice</button>
	
      @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
      @endif

@endsection