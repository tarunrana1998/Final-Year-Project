@extends('layouts.master')
@section('content')



        <!-- start of main content section -->
        <div class="mainnotfixed">
            <!-- Start of left contact section -->
            <div class="contact">	
            <!-- heading messaging -->
            <div class="headmsg">
                <p>Messaging</p>
            </div>

            <!-- contact section content -->
            <div class="leftcontent">
                <!-- Search bar -->
                <form id="contactsearch">
                  <input type="text" name="search" placeholder="Search.." id="searchcontact">
                </form>

                <!-- Contacts -->
                <div class="contacts">
                    <!-- users -->
                    <div class="contactuser" style="border-left: 8px solid #009688; margin-top: 18px;" onclick="select(1)">
                        <img src="../images/login/messages/dennis.png" class="contimg">
                        <p class="name">Tarun Rana</p>
                    </div>

                    <div class="contactuser" onclick="select(2);">
                        <img src="../images/profile/other_profile.png" class="contimg"/>
                        <p class="name">User Name</p>
                    </div>
                    <!-- End user -->

                </div>
                <!-- End contacts -->

            </div>
            <!-- End contact section -->				  
            </div>
            <!-- End of left contact section -->
            

            <!-- Start of right chat section -->
            <div class="chat">
            <!-- heading chat user -->
            <div class="chatuser">
                <!-- heading chat user name and pic -->
                <img src="../images/login/messages/dennis.png" class="chatimg"/>
                        <p class="viewname">Tarun Rana</p>
            </div>
            <!-- End of chat user heading -->

            <!-- chat msg start -->
            <div class="chatmsg">
                
                <div class="received">
                    <p>Hello</p>
                </div>

                <div class="send">
                    <p>Hi!</p>
                </div>

                <div class="received">
                    <p>How are you?</p>
                </div>

            </div>
            <!-- End of chat msg -->

            <!-- to send msg box and button -->
            <div class="sendmessage">
                <textarea id="textarea"></textarea>
                <p id="sendsymbol" onclick="sendmsg();">&#x27A4;</p>
            </div>
            <!-- end of msg box -->

            </div>
            <!-- End of right chat section -->
    
        </div>
        <!-- End of main content section -->

        <!-- message bar at the bottom -->
        <div class="message" id="msg1">
            <button id="msg2" onclick="showhide()">Messaging</button>
            <p> No New Messages.</p>
        </div>
        <!-- End of message bar at the bottom -->




    
@endsection
