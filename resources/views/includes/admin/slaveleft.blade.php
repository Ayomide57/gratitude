<nav id="menu" data-search="close">
    <ul>
        <li><a href="{{ url('/home') }}"><span><i class="icon  fa fa-laptop"></i> Dashboard</span></a></li>
        <li><span><i class="icon  fa fa-th-list"></i>Category</span>
            <ul>
                <li ><a href="{{ url('/category') }}">Add Category</a></li>
                <li><a href="{{ url('/viewallcategory') }}">View all Category</a></li>
            </ul>
        </li>
        <li><span><i class="icon  fa fa-th-list"></i>Question & Answer</span>
            <ul>
                <li ><a href="{{ url('/exam') }}">Add Question</a></li>
                <li ><a href="{{ url('/answer') }}">Add Answers</a></li>
                <li ><a href="{{ url('/viewallquestion') }}">view All Question</a></li>
            </ul>
        </li>
        <li>
            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                <i class="icon-material-outline-power-settings-new"></i>
                        
                        {{ __('Logout') }}
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                    </form>
            </a>
        </li>
        

    </ul>
</nav>