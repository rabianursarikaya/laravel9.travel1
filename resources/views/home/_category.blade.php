@php
    $parentCategories=\App\Http\Controllers\HomeController::categoryList();
@endphp

<div class="navigation">
    <nav>
        <ul class="nav topnav">
            @foreach($parentCategories as $rs)
            <li class="dropdown">
                <a href="#"><i class="icon-cog"></i> {{$rs->title}} <i class="icon-angle-down"></i></a>
                <ul class="dropdown-menu">
                    @if(count($rs->children))
                        @include('home.categorytree',['children'=>$rs->children])
                    @endif
                </ul>
            </li>
            @endforeach

        </ul>
    </nav>
</div>



