@if($msg = Session::has('msg'))
    <div class="alert">{{$msg}}</div>
@endif
