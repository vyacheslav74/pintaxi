@extends('admin.layout.base')

@section('title', 'Add Fleet Owner ')

@section('content')

<div class="content-area py-1">
    <div class="container-fluid">
    	<div class="box box-block bg-white">
			<h5 style="margin-bottom: 2em;"><span class="s-icon"><i class="ti-rocket"></i></span>&nbsp; Add Vendor</h5>
			<hr/>
            <form class="form-horizontal" action="{{route('admin.fleet.store')}}" method="POST" enctype="multipart/form-data" role="form">
            	{{csrf_field()}}
				<div class="form-group row">
					<label for="name" class="col-xs-12 col-form-label">Manager Name</label>
					<div class="col-xs-12">
						<input class="form-control" type="text" value="{{ old('name') }}" name="name" required id="name" placeholder="Manager Name">
					</div>
				</div>

				<div class="form-group row">
					<label for="company" class="col-xs-12 col-form-label">Vendor Name</label>
					<div class="col-xs-12">
						<input class="form-control" type="text" value="{{ old('company') }}" name="company" required id="company" placeholder="Vendor Name">
					</div>
				</div>

				<div class="form-group row">
					<label for="email" class="col-xs-12 col-form-label">Email</label>
					<div class="col-xs-12">
						<input class="form-control" type="email" required name="email" value="{{old('email')}}" id="email" placeholder="Email">
					</div>
				</div>

				<div class="form-group row">
					<label for="password" class="col-xs-12 col-form-label">Password</label>
					<div class="col-xs-12">
						<input class="form-control" type="password" name="password" id="password" placeholder="Password">
					</div>
				</div>

				<div class="form-group row">
					<label for="password_confirmation" class="col-xs-12 col-form-label">Password Confirmation</label>
					<div class="col-xs-12">
						<input class="form-control" type="password" name="password_confirmation" id="password_confirmation" placeholder="Re-type Password">
					</div>
				</div>

				<div class="form-group row">
					<label for="logo" class="col-xs-12 col-form-label">Vendor Logo</label>
					<div class="col-xs-12">
						<input type="file" accept="image/*" name="logo" class="dropify form-control-file" id="logo" aria-describedby="fileHelp">
					</div>
				</div>

				<div class="form-group row">
					<label for="mobile" class="col-xs-12 col-form-label">Mobile</label>
					<div class="col-xs-12">
						<input class="form-control" type="number" value="{{ old('mobile') }}" name="mobile" required id="mobile" placeholder="Mobile">
					</div>
				</div>

				<div class="form-group row">
					<label for="zipcode" class="col-xs-12 col-form-label"></label>
					<div class="col-xs-12">
						<button type="submit" class="btn btn-success shadow-box">Add Vendor</button>
						<a href="{{route('admin.fleet.index')}}" class="btn btn-default">Cancel</a>
					</div>
				</div>
			</form>
		</div>
    </div>
</div>

@endsection
