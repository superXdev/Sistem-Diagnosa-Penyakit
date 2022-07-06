<div class="form-group">
	<label for="{{ $name }}">{{ $text }}</label>
	<textarea name="{{ $name }}" id="{{ Str::slug($text) }}" rows="{{ ($rows) ?? '6' }}" class="form-control">{{ ($value) ?? '' }}</textarea>
</div>