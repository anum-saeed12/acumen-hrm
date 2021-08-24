<aside class="left-sidebar" data-sidebarbg="skin6">
    <div class="scroll-sidebar">
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                @foreach ($menu as $item)
                <li class="sidebar-item dropdown">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#"
                       aria-expanded="false">
                        <span class="hide-menu">{{ $item->title }}</span>
                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                    </a>
                    <ul class="_dropdown">
                        @foreach($item->subMenu as $sub_item)
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route(trim($sub_item->slug))}}"
                               aria-expanded="false">
                                <span class="hide-menu">{{ $sub_item->title }}</span>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </li>
                @endforeach

                <li class="sidebar-item divider"></li>
                <li class="sidebar-item dropdown">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#"
                       aria-expanded="false">
                        <span class="hide-menu">Departments</span>
                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                    </a>
                    <ul class="_dropdown">
                        @foreach($departments as $depart_item)
                            <li class="sidebar-item">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#"
                                   aria-expanded="false">
                                    <span class="hide-menu">{{ $depart_item->department }}</span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>
