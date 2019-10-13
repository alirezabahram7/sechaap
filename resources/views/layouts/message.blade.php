@if (\Session::has('message'))
<div class="alert alert-success text-right my-alert">
    <p>{{ \Session::get('message') }}</p>
</div><br/>
@endif
@if (\Session::has('error'))
<div class="alert alert-danger text-right my-alert">
    <p>{{ \Session::get('error') }}</p>
</div><br/>
@endif
