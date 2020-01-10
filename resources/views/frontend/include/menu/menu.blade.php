<ul>
    @foreach($items as $menu_item)
    @php
    $url = "";
    if($menu_item->route != null){
    $url = route($menu_item->route);
    }else {
    $url = "#";
    }
    @endphp
    <li class="{{ url()->current() == $url ? 'active' : '' }}">
        <a href="{{ $url }}">{{ $menu_item->title }}</a>
        @if($menu_item->children->count() != 0)
        <ul>
            @foreach($menu_item->children as $sub_menu)
            <li><a href="{{ $sub_menu->url}}")>{{ $sub_menu->title }}</a></li>
            @endforeach
        </ul>
	    @endif
    </li>
    @endforeach
</ul>