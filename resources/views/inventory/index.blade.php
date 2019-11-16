<!DOCTYPE html>
<html>

<div class="container" id ='app'>
@extends('layouts.master')
@section('content')
<h1>Inventory</h1>
	<div class="container">
		<table class="table">
			<thead>
				<tr>
					<th v-for="column in columns">{{column.name}}</th>
				</tr>
			</thead>
		</table>
@endsection
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script>
    var vm = new Vue({
        el: '#app',
        data: {
          columns:[
            {name: 'ID' },
            {name: 'NAME' },
            {name: 'QUANTITY' },
            {name: 'CATEGORY' },
            {name: 'ACTIONS' }
            ],
        },
    })
</script>
</body>