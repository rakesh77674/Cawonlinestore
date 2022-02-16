
@if(Session::has('success'))
<div style = "background: black; color:#fff; margin-button:20px;"class = "alert">
{{Session::get('success')}}
</div>
@endif