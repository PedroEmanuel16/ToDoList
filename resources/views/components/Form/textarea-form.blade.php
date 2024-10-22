<div class="mt-2 w-50">
    <label for="{{$title}}" class="form-label">{{$label}}</label>
    <textarea class="form-control border-secondary" name="{{$title}}" id="{{$title}}" {{isset($required) ? 'required' : ''}}>{{isset($value) ? $value : ''}}</textarea>
</div>
