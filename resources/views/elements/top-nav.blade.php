<div class="container">
    <div class="noo-topmeta-left pull-left">
        <div class="text-left">
            <a href="#" class="fa fa-facebook"></a> 
            <a href="#" class="fa fa-twitter"></a> 
            <a href="#" class="fa fa-google-plus"></a> 
            <a href="#" class="fa fa-pinterest"></a>
        </div>
    </div>
    <div class="noo-topmeta noo-topmeta-right pull-right">
        <ul>
            <li><a href="wishlist.html"><i class="icon-heart"></i>my wishlist</a></li>
            
            @guest
                <li><a href="{{url('login')}}"><i class="icon-login"></i>Sign in / register</a></li>
            @else
                <li> 
                {{-- Auth::user()->roles[0]->type --}} 
                 {{Auth::user()->name}} &nbsp;
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="icon-logout"></i>Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form> 
                </li>
            @endguest
        </ul> 
    </div>
</div>