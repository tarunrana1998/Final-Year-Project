@extends('layouts.master')
@section('content')

    <div class="mainnotfixed">

        <div class="people">
            <div class="connection">
                <img src="../images/profile/upload1.png">
                <h5>User Name</h5>
                <p>Secondary School</p>
                <a href="#" id="connect6" onclick="changelogo1('connect6');" style="margin: 10px auto;">&#x271A; Connect</a>
            </div>
        </div>

        <button type="button" id="viewmore" class="viewmore" onclick="loadconnection();">More</button>

    </div>

@endsection
