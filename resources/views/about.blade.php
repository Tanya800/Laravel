@extends('layots.app')

@section('titleBlock')
	Message
@endsection

@section('content')
 <h1>All message</h1>
	<table>
		<th>Sender</th>
		<th>Message</th>
		@foreach($data as $element)
		<tr>
			<td>
				{{ $element->sender }}
			</td>
			<td>
				{{ $element->message }}
			</td>
		</tr>
		@endforeach
	</table>
@endsection