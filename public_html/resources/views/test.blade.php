<form action="{{url('faq/store')}}" method="post">
	@csrf
	<input type="text" name="faq_create">
	<button type="submit">save</button>