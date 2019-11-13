<div class="container" id ='app'>
@extends('layouts.master')
@section('content')
<h1>Inventory</h1>
	<div class="container">
		<table class="table">
			<thead>
				<tr>
					<th scope="col">ID</th>
					<th scope="col">Name</th>
					<th scope="col">Quantity</th>
					<th scope="col">Category</th>
					<th scope="col">Actions</th>
				</tr>
			</thead>
		</table>
@endsection