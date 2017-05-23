@extends('layouts.activecalls')
@section('page_heading','Active Calls')
@section('section')
 
<div class="container-fluid">
	<div class="row">
		<div class="col-md-6 col-sm-6">
			<div class="panel panel-default">
				<div class="panel-heading">Register</div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					<form class="form-horizontal" role="form" method="POST" action="/auth/register">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">


						<div class="form-group">
							<label class="col-md-4 control-label">Mobile Number</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="mobile" value="">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Name</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="name" value="">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Sky-Id</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="sky_id" value="">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Address1</label>
							<div class="col-md-6">
								<input type="text" name="" class="form-control" value="">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Address2</label>
							<div class="col-md-6">
								<input type="text" name="" class="form-control" value="">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Address3</label>
							<div class="col-md-6">
								<input type="text" name="" class="form-control" value="">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Feedback</label>
							<div class="col-md-6">
								<textarea name="feedback" class="form-control" value=""></textarea>
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Current Plan</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="cplan" value="">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Bills Status</label>
							<div class="col-md-6">
								<input type="test" class="form-control" name="bstatus">
							</div>
						</div>
				<div class="col-md-6 col-md-offset-4">
				<div class="form-group">
                <label>Purpose of a Call</label>
                <div class="radio">
                    <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>New Connection
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">Service
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">Enquiry
                    </label>
                </div>

                <div class="radio">
                    <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios4" value="option4">Disconnection
                    </label>
                </div>

                <div class="radio">
                    <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios5" value="option5">Billing Enquiry
                    </label>
                </div>

                </div>
            	</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									Register
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>

			<div class="col-md-6 col-sm-6">

			</div>

	</div>
</div>
           
            
@stop