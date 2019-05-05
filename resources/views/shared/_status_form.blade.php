<form method="POST" action="{{ route('statuses.store') }}">
	@include('shared._errors')
	{{ csrf_field() }}
	<textarea name="content" class='form-control' placeholder="说说话好不好....."  rows="3">{{ old('content') }}</textarea>
	<div class="text-right">
		<button type="submit" class="btn btn-primary mt-3">发布</button>
	</div>
</form>