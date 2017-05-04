@if(Session::has('success'))
<div class="alert alert-info alert-dismissible" role="alert">
    <button aria-label="Close" class="close" data-dismiss="alert" type="button">
        <span aria-hidden="true">
            ×
        </span>
    </button>
    {{ Session::get('success') }}
</div>
@endif
@if(Session::has('error'))
<div class="alert alert-warning alert-dismissible" role="alert">
    <button aria-label="Close" class="close" data-dismiss="alert" type="button">
        <span aria-hidden="true">
            ×
        </span>
    </button>
    {{ Session::get('error') }}
</div>
@endif
