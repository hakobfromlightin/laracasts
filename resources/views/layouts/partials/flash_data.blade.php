@if(Session::has('success_flash'))
    <div class="col-lg-12" style="margin-bottom: 20px">
        <div class="alert alert-success">{{ Session::get('success_flash') }}</div>
    </div>
@elseif(Session::has('error_flash'))
    <div class="col-lg-12" style="margin-bottom: 20px; ">
        <div class="alert alert-danger">{{ Session::get('error_flash') }}</div>
    </div>
@elseif(Session::has('info_flash'))
    <div class="col-lg-12" style="margin-bottom: 20px; ">
        <div class="alert alert-info">{{ Session::get('info_flash') }}</div>
    </div>
@elseif($errors->any())
    <div class="col-lg-12" style="margin-bottom: 20px">
        @include('layouts.partials.error_list')
    </div>
@endif