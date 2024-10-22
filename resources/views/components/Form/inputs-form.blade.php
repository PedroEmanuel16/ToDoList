<div class="mt-2 w-50">
    <label for="{{$title}}" class="form-label">{{$label}}</label>
    <input type="{{isset($type) ? $type : 'text'}}" class="form-control border-secondary" id="{{$title}}" name="{{$title}}" placeholder="{{isset($placeholder) ? $placeholder : ''}}" {{isset($required) ? 'required' : ''}} value='{{isset($value) ? $value : ''}}'
    >
</div>
