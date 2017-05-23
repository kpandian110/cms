@extends('layouts.zase_layout')
@section('page_heading','User View')

@section('section')

<div class="table-responsive" style="height: 700px;">
	<div class="col-sm-12">
		@section ('cotable_panel_title','Users Table')
		@section ('cotable_panel_body')
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Id</th>
					<th>Date</th>
					<th>Customer Id</th>
					<th>CC-Refer-No</th>
					<th>TL-Refer-No</th>
					<th>Team</th>
					<th>Customer Name</th>
					<th>Mobile-No</th>
					<th>Address</th>
					<th>LOC Verify</th>
					<th>VERI Person</th>
					<th>Cable</th>
					<th>Splicing</th>
					<th>Plan Create</th>
					<th>Sky-Id</th>
					
					
				</tr>
			</thead>
			<tbody>
				<tr class="success">
					<td>John</td>
					<td>john@gmail.com</td>
					<td>London, UK</td>
					<td>John</td>
					<td>john@gmail.com</td>
					<td>London, UK</td>
					<td>John</td>
					<td>john@gmail.com</td>
					<td>London, UK</td>
					<td>John</td>
					<td>john@gmail.com</td>
					<td>London, UK</td>
					<td>John</td>
					<td>john@gmail.com</td>
					<td>London, UK</td>
					
					
					
				</tr>
				
			</tbody>
		</table>	
		@endsection
		@include('widgets.panel', array('header'=>true, 'as'=>'cotable'))
	</div>
</div>
</div>
@stop