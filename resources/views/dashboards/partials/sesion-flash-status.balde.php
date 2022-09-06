@csrf
@if (session('status'))
  <small class="success">{{session('status')}}</small>
@endif