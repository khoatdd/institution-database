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
				@foreach ($sars as $sar)
					<tr>
						<td><a href="/institution/{{ $institution->id }}/sar/{{ $sar->id }}/show">Báo cáo tự đánh giá giai đoạn {{ $sar->period_start }} - {{ $sar->period_end }}</a></td>
					</tr>
				@endforeach
			</tbody>
		</table>
		<a href="/institution/{{ $institution->id }}/sar/insert" class="btn btn-primary pull-right">Add</a>
	</div>
@stop