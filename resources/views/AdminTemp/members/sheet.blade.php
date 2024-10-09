<!-- Button trigger modal -->

<style>
    #first {
        position: relative;

        left: 10px;
    }

    #second {
        position: relative;
        left: 180px;
        bottom: 287px;
    }

    #b {
        font-weight: bold;
    }
</style>

<button type="button" class="badge badge-secondary" data-toggle="modal" data-target="#exampleModal{{$key}}">
    More Infos
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal{{$key}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color: rgb(253, 211, 120)">
                <h5 class="modal-title" id="exampleModalLabel">Memeber Infos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>


            <div class="modal-body" style="background-color: rgb(255, 247, 176);height:320px;">


                <form>
                    @csrf
                    <div id="first">
                        <div class="form-group">
                            <label>First Name:</label>
                            <p id="b" style="color: firebrick"> <u>{{$member->fname}}</u></p>
                        </div>

                        <div class="form-group">
                            <label>Last Name:</label>
                            <p id="b" style="color: firebrick"> <u>{{$member->lname}}</u></p>
                        </div>

                        <div class="form-group">
                            <label>Gender:</label>
                            <p id="b" style="color: firebrick"> <u>{{$member->gender}}</u></p>
                        </div>
                        <div class="form-group">
                            <label>Birthday:</label>
                            <p id="b" style="color: firebrick"> <u>{{$member->birth}}</u></p>
                        </div>
                    </div>
                    <div id="second">
                        <div class="form-group">
                            <label>Address:</label>
                            <p id="b" style="color: firebrick"> <u>{{$member->address}}</u></p>
                        </div>
                        <div class="form-group">
                            <label>Phone number:</label>
                            <p id="b" style="color: firebrick"> <u>{{$member->tel}}</u></p>
                        </div>
                        <div class="form-group">
                            <label>E-mail:</label>
                            <p id="b" style="color: firebrick"> <u>{{$member->email}}</u></p>
                        </div>
                    </div>
                </form>


            </div>

        </div>
    </div>
</div>
