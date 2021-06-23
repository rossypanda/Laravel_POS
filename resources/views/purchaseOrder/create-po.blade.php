@extends('layouts.index')

@section('breadcrumb')
<div class="card" style="background-color: #f6f7fb;">
    <div class="page-header-breadcrumb" style="padding-top: 0.5rem;">
        <ul class="breadcrumb-title">
            <li class="breadcrumb-item">
                <a href="#!">
                    <i class="icofont icofont-home"></i>
                </a>
            </li>
            <li class="breadcrumb-item">
                <a href="#!">Create Purchase Order</a>
            </li>
        </ul>
    </div>
</div>
@endsection
@section('content')
   
<div id="create-po"></div>
                   
@endsection

@section('scripts')
<script>
 $(function() {
    $('#transaction').addClass('pcoded-trigger')
    $('#create-po-menu').addClass('active')
});
</script>
@endsection