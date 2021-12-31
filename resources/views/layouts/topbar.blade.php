<nav class="navbar navbar-expand-lg navbar-light bg-info py-2">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
                    <a href="{{ route('user-list') }}" class="text-dark"> User List</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="{{ route('order-list') }}" class="text-dark"> Order List</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     <a class="log-out-btn text-dark rounded float-right my-2" style="float: right;"
                                            href="#"
                                            onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                            Logout</a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
</nav>