@extends('layouts.main')

@section('content')
    <style>
        ul {
            margin: 0;
            padding: 0;

        }

        li {
            list-style: none;
        }

        .user-waper,
        .message-wraper {
            border: 1px solid #dddddd;
            overflow-y: "auto";
        }

        /* .user-wraper {
            height: 700px;

            } */

        .user {
            cursor: pointer;
            padding: 5px 0;
            position: relative;
        }

        .user:hover {
            background-color: ;
        }

        .user:last-child {
            margin-bottom: 0;
        }

        .pending {
            position: absolute;
            left: 13px;
            top: 9px;
            background: #b600ff;
            margin: 0;
            border-radius: 50%;
            width: 18px;
            height: 18px;
            line-height: 18px;
            padding-left: 5px;
            color: #ffffff;
            font-size: 12px;
        }

        .media-left {
            margin: 0 10px;
        }

        .media-left img {
            width: 64px;
            border-radius: 64px;
        }

        .media-body p {
            padding: 6px 0;

        }

        .message-wraper {
            padding: 10px;
            height: 536px;
            background: #eeeeee;

        }

        .messages .message:last-child {
            margin-bottom: 0;
        }

        .recived,
        .sent {
            width: 45%;
            padding: 3px 10px;
            border-radius: 10px;
        }

        .recived {
            background-color: #ffffff;
        }

        .sent {
            background: #3bebff;
            float: right;
            text-align: right;
        }

        .message p {
            margin: 5px 0;
        }

        .date {
            color: #777777;
            font-size: 12px;
        }

        .active1 {
            background: #777777;
        }

        input[type=text] {
            width: 100%;
            padding: 12px 20px;
            margin: 15px 0 0 0;
            display: inline-block;
            border-radius: 4px;
            box-sizing: border-box;
            outline: none;
            border: 1px solid #cccccc;
        }

        input[type=text]:focus {
            border: 1px solid #aaaaaa;
        }
    </style>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="user-wraper">
                    <ul class="users">
                        @foreach ($users as $user)
                            <li class="user" id="{{ $user->id }}">
                                @if ($user->unread)
                                    <span class="pending">{{ $user->unread }}</span>
                                @endif
                                <div class="media-left">
                                    <img src="http://via.placeholder.com/150
                                " alt=""
                                        class="media-object">
                                </div>
                                <div class="media-body">
                                    <p class="name">
                                        {{ $user->name }}
                                    </p>
                                    <p class="email">{{ $user->email }}</p>
                                </div>
                            </li>
                        @endforeach

                    </ul>
                </div>
            </div>
            <div class="col-md-8" id="messages">


            </div>
        </div>
    </div>
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="https://js.pusher.com/7.2/pusher.min.js"></script>

@section('script')
    <script>
        var reciver_id = '';
        var my_id = "{{ Auth::id() }}";
        $(document).ready(function() {


            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            //    pusher intigration
            Pusher.logToConsole = true;

            var pusher = new Pusher('a6444ed6262f66726269', {
                cluster: 'ap2'
            });

            var channel = pusher.subscribe('my-channel');
            channel.bind('my-event', function(data) {
                // alert(JSON.stringify(data));
                if (my_id == data.from) {
                    $('#' + data.to).click();

                } else if (my_id == data.to) {
                    if (reciver_id == data.from) {
                        // if reciver is selected, reload the selected user..
                        $('#' + data.from).click();
                    } else {
                        // if reciver is not selected
                        var pending = parseInt($('#' + data.from).find('.pending').html());
                        if (pending) {
                            $('#' + data.from).find('.pending').html(pending + 1);
                        } else {
                            $('#' + data.from).append('<span class="pending">1</span>');
                        }
                    }
                }
            });




            // end pusher

            $('.user').click(function() {
                $('.user').removeClass('active1');
                $(this).addClass('active1');
                $(this).find('.pending').remove();
                reciver_id = $(this).attr('id');
                $.ajax({
                    type: 'get',
                    url: '/message/' + reciver_id,
                    data: '',
                    cache: 'false',
                    success: function(data) {
                        $('#messages').html(data);
                        scrollToBottomFunc();
                    }
                })
            });
            $(document).on('keyup', '.input-text input', function(e) {
                var message = $(this).val();
                if (e.keyCode == 13 && message != '' && reciver_id != '') {
                    $(this).val('');
                    var datastr =
                        'reciver_id=' + reciver_id + "&message=" + message;
                    $.ajax({
                        type: 'post',
                        url: '/message',
                        data: datastr,
                        cache: false,
                        success: function(data) {

                        },
                        error: function(jqXHR, status, err) {

                        },
                        complete: function() {
                            scrollToBottomFunc();

                        }
                    })
                }
            });
        });
        // make a function to scrolldown auto
        function scrollToBottomFunc() {
            $('.message-wraper').animate({
                scrollTop: $('.message-wraper').get(0).scrollHeight
            }, 50);
        }
    </script>
@endsection
