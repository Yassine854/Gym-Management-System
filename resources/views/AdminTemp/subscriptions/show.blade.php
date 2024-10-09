<!-- Button trigger modal -->
<style>
    #btn {
        height: 40px;
        width: 50px;
        position: relative;
        left: 10px;
        background-color: lime;
    }
</style>
<button id="btn" type="button" class="btn btn-light fa fa-address-card" data-toggle="modal" data-target="#exampleModal{{$key}}">
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal{{$key}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Membership card</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="content">
                    <!-- MemberShip Card-->


                    <style>
                        @import url(https://fonts.googleapis.com/css?family=Lato);

                        $lato: "Lato";
                        $black: #000;
                        $white: #fff;

                        /* CENTERING */

                        .centered {
                            position: fixed;
                            top: 50%;
                            left: 50%;
                            /* bring your own prefixes */
                            transform: translate(-50%, -50%);
                        }

                        @mixin vertical-align($position: relative) {
                            position: $position;
                            top: 50%;
                            -webkit-transform: translateY(-50%);
                            -ms-transform: translateY(-50%);
                            transform: translateY(-50%);
                        }

                        /* /end */

                        body {
                            background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/326221/bg.jpg);
                            background-attachment: fixed;
                            background-size: cover;
                            background-repeat: no-repeat;
                        }

                        h3 {
                            position: relative;
                            left: 45%;
                        }

                        /* THE FRONT */

                        .front {
                            background-image: url(https://i.imgur.com/r74xjnP.png);
                            background-size: cover;
                        }

                        /* /end */

                        /* THE BACK */

                        .back {
                            background-image: url(https://i.imgur.com/6avHATu.png);
                            background-size: cover;

                            h1,
                            p,
                            .font-a-icons {
                                color: $black;
                                font-family: $lato;
                                margin-left: 30%;
                                line-height: 90%;
                            }

                            h1 {
                                margin-top: 5%;
                            }

                            p {
                                font-size: 16px;
                                padding-bottom: 15px;
                                width: 35%;
                                border-bottom: 2px solid $black;
                            }

                            .bold {
                                font-weight: bold;
                            }

                            .font-a-icons {
                                margin-top: 25px;

                                .icon-group {
                                    margin-top: 8px;
                                }

                                span,
                                .link,
                                .fa,
                                a {
                                    color: $black;
                                }

                                .fa {
                                    font-size: 18px;
                                }

                                span,
                                a {
                                    font-size: 16px;
                                }

                                a,
                                .website {
                                    text-decoration: none;
                                }

                                a:hover,
                                .website:hover {
                                    color: #3f3f3f;
                                }
                            }

                            .icon-box {
                                position: relative;
                                color: $black;
                                font-size: 24px;
                                height: 45px;
                                width: 45px;
                                padding: 5px;
                                top: 75px;
                                left: 30%;
                                display: inline-block;
                                border: 2px solid $black;
                                margin: 5px;
                                text-align: center;
                                cursor: pointer;
                                -webkit-transition: all ease 0.5s;
                                -moz-transition: all ease 0.5s;
                                transition: all ease 0.5s;
                            }

                            .icon-box:hover {
                                box-shadow: inset 0 50px 0 0 $black;
                                color: $white;
                            }
                        }

                        /* /end */

                        /* THE FLIP EFFECT */

                        /* entire container, keeps perspective */
                        .flip-container {
                            perspective: 1000px;
                        }

                        /* flip the pane when hovered */
                        .flip-container:hover .flipper,
                        .flip-container.hover .flipper {
                            transform: rotateY(180deg);
                            cursor: pointer;
                        }

                        .flip-container,
                        .front,
                        .back {
                            height: 250px;
                            width: 400px;
                            right: 2px;
                            margin-left: 30px;
                        }

                        .flipper {
                            transition: 0.5s;
                            transform-style: preserve-3d;
                            position: relative;
                        }

                        .front,
                        .back {
                            backface-visibility: hidden;
                            position: absolute;
                        }

                        .front {
                            z-index: 2;
                            /* firefox 31 */
                            transform: rotateY(0deg);
                        }

                        .back {
                            background-color: $black;
                        }

                        .back {
                            transform: rotateY(180deg);
                        }

                        .vertical.flip-container {
                            position: relative;
                        }

                        .vertical .back {
                            transform: rotateX(180deg);
                        }

                        .vertical.flip-container .flipper {
                            transform-origin: 100% 400x;
                        }

                        .vertical.flip-container:hover .flipper {
                            transform: rotateX(-180deg);
                        }

                        hr {
                            border: none;
                            height: 2px;
                            width: 150px;
                            background: white;
                            position: relative;
                            left: 50px;
                            box-shadow: 2px 2px #101010;
                            top: 10px;
                        }

                        #float {
                            position: relative;
                            left: 10px;
                            top: 90px;
                        }

                        #round {
                            display: inline-block;
                            overflow: hidden;
                            height: 120px;
                            width: 100px;
                            border: 1px solid rgba(0, 0, 0, 0.226)0, 0, 0, 0.226);
                            border-radius: 30%;
                            box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.295);
                        }
                        #id0{
                            position: relative;
                            color: white;
                            text-shadow: 1px 1px 1px black, 0 0 1em black, 0 0 0.2em black;
                            left: 145px;
                            top: 30px;
                            width: 200px;
                            font-family: "Impact";
                            color:#white;
                            font-weight: bold;
                        }

                        #id1 {
                            position: relative;
                            color: white;
                            text-shadow: 1px 1px black, 0 0 1em black, 0 0 0.2em black;
                            left: 170px;
                            bottom: 30px;
                        }
                        #id2{
                            position: relative;
                            color: white;
                            text-shadow: 1px 1px black, 0 0 1em black, 0 0 0.2em black;
                            left: 170px;
                            bottom: 20px;
                        }
                        #id3{
                            position: relative;
                            color: white;
                            text-shadow: 1px 1px black, 0 0 1em black, 0 0 0.2em black;
                            left: 170px;
                            bottom: 10px;
                        }
                    </style>
                    <!DOCTYPE html>
                    <html lang="en">
                    <div>
                        <div class="flip-container centered">
                            <div class="flipper">
                                <div class="front"></div>

                                <div class="back">

                                    <div id="id0">Membership card</div>

                                    <div id="float"><img id="round" width="100" height="50"
                                            src="{{asset('/image/member/'.$modal->image)}}" alt="lost it"> </div>
                                    <div id="id1"><u>Name:</u> {{$modal->members->fname}} {{$modal->members->lname}}</div>
                                    <div id="id2"><u>Sport:</u> {{$modal->sports->name}}</div>

                                    @if ((int)$modal->coaches_id)
                                    <div id="id3"><u>Coach:</u> {{$modal->coaches->fname}} {{$modal->coaches->lname}}</div>
                                    @else
                                    <div id="id3"><em>"No Coach"</em></div>
                                    @endif





                                </div>
                            </div>

                        </div>

                    </html>









































                    <!--End-->
                </div>



            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
