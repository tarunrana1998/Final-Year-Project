@extends('layouts.master')
@section('content')

    <div class="mainnotfixed" id="mainnotfixed">
        <!-- Start of post an content -->
        <div class="main mainpost" style="margin-bottom:20px; padding-bottom:10px;">

            <div class="userimg"><img src="../images/profile/upload.png" />
            </div>
            <div class="username">
                <p class="name" style="top:15px;">Vibhushit Tyagi</p>
            </div>
            <p class="quotes">
                <textarea id="mypara" placeholder="Share an article ,photo ,video or idea."></textarea>
            </p>
            <!-- image load to post -->
            <div class="post">
                <img id="load2" class="postimg" src=" " />
            </div>

            <div class="postbar">
                <input type="file" accept="images/*" id="chooseimg" onchange="loadFile(event)" onmouseover="onbuttoncolor()"
                    onmouseout="outbuttoncolor()" />
                <button type="button" class="imgbttn" id="imgbttn">&#x1f4f7; Images</button>
                <button type="button" id="postmypost" class="postmypost" onclick="mypost();">Post</button>
            </div>

        </div>
        <!-- End of post an content -->
        <hr>

        <!-- posted content view -->
        <div class="allpost">
            <!-- post 1 by creator-->
            <div class="mainpost">
                <div class="userimg"><img src="../images/homaj logo.png" />
                </div>
                <div class="username">
                    <p class="name">ChatAbit group</p>
                </div>
                <p class="time">2min ago</p>
                <p class="quotes">
                    Welcome to our society. You will be judged on what you wear, which music you listen to, what
                    you look like, how you act, who you hang around with, and on practically every other
                    personal trait and imperfection about you, and you'll be made fun of for being who you are.
                    Enjoy your stay.
                </p>
                <div class="post">
                    <img class="postimg" src="../images/login/network society.jpg" />
                </div>

                <div class="likedislike">
                    <p class="like">
                        <span class="nooflike" id="like1">0 </span> likes &nbsp <span class="noofdislike" id="dislike1">0
                        </span> dislikes
                    </p>
                    <p class="likedisbttn">
                        <span id="thumbsup1" class="fa fa-thumbs-up"
                            onclick="increase('like1','dislike1','thumbsup1','thumbsdown1');"></span> <span id="thumbsdown1"
                            class="fa fa-thumbs-down"
                            onclick="decrease('like1','dislike1','thumbsup1','thumbsdown1');"></span>
                    </p>
                </div>

            </div>
            <!-- end of post 1 by creator -->

            <!-- post 2 by creator -->
            <div class="mainpost">
                <div class="userimg"><img src="../images/homaj logo.png" />
                </div>
                <div class="username">
                    <p class="name">ChatAbit group</p>
                </div>
                <p class="time">8min ago</p>
                <p class="quotes">
                    A gender-equal society would be one where the word 'gender' does not exist: where everyone
                    can be themselves.
                </p>
                <div class="post">
                    <img class="postimg" src="../images/login/society.jpg" />
                </div>

                <div class="likedislike">
                    <p class="like">
                        <span class="nooflike" id="like2">0 </span> likes &nbsp <span class="noofdislike" id="dislike2">0
                        </span> dislikes
                    </p>
                    <p class="likedisbttn">
                        <span id="thumbsup2" class="fa fa-thumbs-up"
                            onclick="increase('like2','dislike2','thumbsup2','thumbsdown2');"></span> <span id="thumbsdown2"
                            class="fa fa-thumbs-down"
                            onclick="decrease('like2','dislike2','thumbsup2','thumbsdown2');"></span>
                    </p>
                </div>

            </div>
            <!-- end of post 2 by creator -->


        </div>
        <!-- end of posted content view -->

        <!-- button to view more previous post -->
        <button type="button" id="viewmore" class="viewmore" onclick="newpost();">View More</button>
    </div>

@endsection
