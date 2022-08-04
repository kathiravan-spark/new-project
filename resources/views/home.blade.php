@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              <div class="card-header">
                  Select Bank Update your Bank Details 
                  <div id="message"></div>
                </div>
                
                <div class="card-body" style="width:18rem; height:40rem">
                    <div>
                        <select class="form-control select2" id="bank">
                            <option value selected="selected" disabled="disabled"></option>
                                @foreach($bank_name as $bank)
                            <option value="{{$bank->bank_name}}">{{$bank->bank_name}}</option>
                                @endforeach
                        </select>
                    </div>
                    <div class="mt-4" id="account_types">
                      <label class="form-group">Select Your Account Type</label>
                        <select class="form-control"  id="account_type">
                            <option value selected="selected" disabled="disabled"></option>    
                            <option value="1">Saving</option>
                            <option value="2">Current</option>
                            <option value="3">Credit</option>
                        </select>
                    </div>
                    <form action="{{route('account_details')}}" method="POST" class="mt-4" id="account_details">
                        <div class="form-group">
                          @csrf
                            <input type="hidden" name="selected_bank" id="selected_bank" value="">
                            <input type="hidden" name="selected_type" id="selected_type" value="">
                            <label for="account_number">Account number</label>
                            <input type="text"  pattern="[0-9]+" required name="account_number"class="form-control" id="account_number" placeholder="Enter account number">
                        </div>
                        <div class="form-group">
                            <label for="confirmation_account_number">Confirm Account Number</label>
                            <input type="text"  pattern="[0-9]+" required name="confirmation_account_number" class="form-control" id="confirmation_account_number" placeholder="Enter account number">
                        </div>
                        <div class="form-group" >
                            <label for="bank_branch">Branch Name</label>
                            <input type="text" class="form-control" id="bank_branch" name="bank_branch" placeholder="Branch name">
                        </div>
                        <div class="dynamic-fields" name="account_name"></div>
                        <div class="form-group" id="saving_sources"></div>
                        <div class="form-group" id="credit_sources"></div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<script>

</script>