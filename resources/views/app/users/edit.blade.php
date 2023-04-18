@extends('layouts.app')

@section('title', 'Edit User')

@section('content')
<div class="container-fluid">
    
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Edit User</h4>
            </div>
        </div>
    </div>     
    <!-- end page title --> 

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-2">
                        <form action="{{ route('users.update', $user->id) }}" method="POST">
							<div class="mb-3">
							    <label for="first_name" class="form-label">First Name</label>
							    <input name="first_name" value="{{ $user->first_name }}" type="text" id="first_name" class="form-control @error('first_name') is-invalid @enderror" placeholder="Entre first name" required>
							    @error('first_name')
							    	<div class="invalid-feedback">{{ $message }}</div>
							    @enderror
							</div>
							<div class="mb-3">
							    <label for="last_name" class="form-label">Last Name</label>
							    <input name="last_name" value="{{ $user->last_name }}" type="text" id="last_name" class="form-control @error('last_name') is-invalid @enderror" placeholder="Entre last name" required>
							    @error('last_name')
							    	<div class="invalid-feedback">{{ $message }}</div>
							    @enderror
							</div>
							<div class="mb-3">
							    <label for="phone_number" class="form-label">Phone Number</label>
							    <input placeholder='e.g "(xxx) xxxxxxxxx"' name="phone_number" id="phone_number" type="text" value="{{ $user->phone_number }}" class="form-control  @error('phone_number') is-invalid @enderror" data-toggle="input-mask" data-mask-format="(000) 000000000" required>
							    @error('phone_number')
							    	<div class="invalid-feedback">{{ $message }}</div>
							    @enderror
							</div>
		                    <div class="mb-3">
		                        <label for="country" class="form-label">Country</label>
		                        <select id="country" class="form-select @error('country_id') is-invalid @enderror" name="country_id">
		                            @foreach($countries as $country_id)
		                                <option @if($country_id->id === $user->country->id) selected @endif value="{{$country_id->id}}">{{$country_id->name}}</option>
		                            @endforeach
		                        </select>
		                        @error('country_id')
		                            <span class="invalid-feedback" role="alert">
		                                <strong>{{ $message }}</strong>
		                            </span>
		                        @enderror
		                    </div>
							<div class="mb-3">
							    <label for="email" class="form-label">Email Address</label>
							    <input name="email" value="{{ $user->email }}" type="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="Entre email address" required>
							    @error('email')
							    	<div class="invalid-feedback">{{ $message }}</div>
							    @enderror
							</div>
							<button class="btn btn-success">Save changes</button>
							@method('PATCH')
						    @csrf
						</form>
                    </div>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div>
    <!-- end row -->        
    
</div> <!-- container -->

</div> <!-- content -->
@endsection


