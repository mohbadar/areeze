@if(session()->has('message'))

    <div class="alert alert-warning alert-dismissible" id="success-alert">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        {{ session()->get('message') }}
    </div>
@endif

