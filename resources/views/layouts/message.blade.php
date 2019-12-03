@if (\Session::has('message'))
<div class="alert alert-success my-alert text-center ">
    <p>{{ \Session::get('message') }}</p>
</div><br/>
@endif
@if (\Session::has('error'))
<div class="alert alert-danger my-alert text-center">
    <p>{{ \Session::get('error') }}</p>
</div><br/>
@endif
