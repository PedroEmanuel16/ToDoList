<div class="mt-2 w-50">
    <label for="{{$title}}" class="form-label">{{$label}}</label>
    <select class="form-select" name="{{$title}}" id="{{$title}}" {{isset($required) ? 'required' : ''}}>
        <option value="" selected disabled>Selecione uma opção</option>
        {{$slot}}
      </select>
</div>
