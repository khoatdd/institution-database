@extends('layouts.app')

@section('content')
	<div class="container">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>Danh mục các báo cáo tự đánh giá</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($sars as $key => $value)
					<tr>
						<td><a href="/institution/{{ $institution->id }}/sar/{{ $key }}/show">Báo cáo tự đánh giá giai đoạn {{ 
							$value[0]->value}} - {{ $value[1]->value }}</a></td>
					</tr>
				@endforeach
			</tbody>
		</table>
		<a href="/institution/{{ $institution->id }}/sar/insert" class="btn btn-primary pull-right">Add</a>
	</div>
@stop