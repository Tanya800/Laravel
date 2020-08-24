@extends('layots.app')

@section('titleBlock')
	Home
@endsection

@section('content')
<h1>Home page</h1>

<form action="{{ route('form-post')}}" method="post" class="formHome">
 	@csrf

 	<div class="formPost">
 		<label for="sender">Sender</label>
 		<input type="text" name="sender" placeholder="Sender" id="sender">
 	</div>
	<div class="formPost">
	 		<label for="message">Message</label>
	 		<textarea name="message" id="message"></textarea> 
	</div>
	<button type="submit">Send</button>
 </form>
 <a href="{{ route('usersData') }}">All message</a>
@endsection


