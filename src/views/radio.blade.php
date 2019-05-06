

@if (isset($data['values']))
    @foreach ($data['values'] as $key=>$item)
        <input
            value="{{$key}}" {{$key == $data['active'] ? 'checked' : ''}}
            id="{{ !isset($data['ids']) ? ' ' : implode(" ",$data['ids'])}}"
            class="{{ !isset($data['classes']) ? ' ' : implode(" ",$data['classes'])}}"
            name="{{ !isset($data['name']) ? ' ' : $data['name']}}"
            {{ !isset($data['required']) ? ' ' : $data['required'] ? 'required' : ' '}}
            {{!isset($data['active']) ||  $data['active'] == null ? 'selected' : ' '}}
            type="radio"> {{$item}}
        <br>
    @endforeach
@endif

