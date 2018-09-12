@include('template.partials.head')
@include('template.partials.sidebar')
@include('template.partials.navbar')
@section('main-content')
    <!-- partial -->
    <div class="page has-sidebar-left">
        @show
    </div>
    @include('template.partials.foot')
