@foreach($children as $subcategory)
    <li class="dropdown">
        @if(count($subcategory->children))
            <li class="dropdown"><a href="#">{{$subcategory->title}}<i class="icon-angle-right"></i></a>
                <ul class="dropdown-menu sub-menu">
                   @include('home.categorytree',['children' => $subcategory->children])
                </ul>
            </li>
        @else
            <li><a href="{{route('categoryplaces',['id'=>$subcategory->id,'slug'=>$subcategory->title])}}">{{$subcategory->title}}</a></li>

        @endif

    </li>

@endforeach
