<div class="headerfixed">
    <div class="header">
        <div class="wrapper">
            <a href="{{ url('/') }}"><img src="{{ asset('images/chatAbit-logo.png') }}" width=120 height=45
                    class="logoletter" /></a>
            <!-- Search bar -->            <!-- Search bar -->
            <form id="searching">
                <input type="text" name="search" placeholder="Search.." id="search">
            </form>

            <!-- icon bar to navigate to all pages -->
            <div class="icon-bar">
                <ul>
                    <!-- home -->
                    <li style="border-bottom: 6px solid white;"><a href="{{ url('/') }}"><img
                                src="{{ asset('images/home.png') }}" id="homaj-home">
                            <p id="p1">Home</p>
                        </a></li>
                    <!-- profile -->
                    <li> <a href="{{ url('profile') }}"><img src="{{ asset('images/profile.png') }}" id="homaj-profile">
                            <p id="p2">Profile</p>
                        </a> </li>
                    <!-- society -->
                    <li><a href="{{ url(asset('society')) }}"><img src="{{ asset('images/society.png') }}" id="homaj-society">
                            <p id="p3">Society</p>
                        </a></li>
                    <!-- message -->
                    <li> <a href="{{ url('messages') }}"><img src="{{ asset('images/message.png') }}" id="homaj-message">
                            <p id="p4">Messages</p>
                        </a></li>
                    <!-- notification -->
                    <li><a href="#"><img src="{{ asset('images/notification.png') }}" id="homaj-notification">
                            <p id="p5">Notifications</p>
                        </a>
                        <div id="notify">
                            <p>No New Notification</p>
                            <hr style="background-color:white;width: 90%;">
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>