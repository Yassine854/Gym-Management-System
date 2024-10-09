<!-- Button trigger modal -->

<style>

/* #im{
margin-left: 200px;
} */
#co{
    position: absolute;
    margin-left: 150px;
    margin-top: 20px;
    width: 250px;
    height: 350px;
    border-radius: 10%;
}
#tex{
text-transform: uppercase;
font-weight: bold;
}
</style>

<button type="button" class="badge badge-secondary" data-toggle="modal" data-target="#exampleModal{{$key}}">
    More Infos
  </button>

  <!-- Modal -->
  <div   class="modal fade" id="exampleModal{{$key}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div  style="background-color: rgb(253, 211, 120)" class="modal-header">
          <h5  style="margin-left:180; font-weight: bold;" class="modal-title" id="exampleModalLabel">Coach Infos</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>


        <div style="background-color: rgb(255, 247, 176)" class="modal-body">

            <form action="/AdminTemp/coaches" method="POST" enctype="multipart/form/data">
                @csrf
                <div class="card-body">

                    <img id="co" width="100" height="50" src="{{asset('/image/coach/'.$coach->image)}}"
                            alt="lost it">

                    <div class="form-group">
                      <label>Cin:</label><p  id="tex" style="color: firebrick"> <u>{{$coach->cin}}</u></p>
                    </div>

                    <div class="form-group">
                        <label>First Name:</label><p id="tex" style="color: firebrick"> <u>{{$coach->fname}}</u></p>
                      </div>

                      <div class="form-group">
                        <label>Last Name:</label><p id="tex" style="color: firebrick"> <u>{{$coach->lname}}</u></p>
                      </div>

                      <div class="form-group">
                        <label>Gender:</label><p id="tex" style="color: firebrick"> <u>{{$coach->gender}}</u></p>
                      </div>

                      <div class="form-group">
                        <label>Height:</label><p id="tex" style="color: firebrick"> <u>{{$coach->height}} (M)</u></p>
                      </div>
                      <div class="form-group">
                        <label>Weight:</label><p id="tex" style="color: firebrick"> <u>{{$coach->weight}} (kg)</u></p>
                      </div>
                      <div class="form-group">
                        <label>Address: </label><p id="tex" style="color: firebrick"> <u>{{$coach->address}}</u></p>
                      </div>
                      <div class="form-group">
                        <label>Birthday:</label><p id="tex" style="color: firebrick"> <u>{{$coach->birth}}</u></p>
                      </div>
                      <div class="form-group">
                        <label>Phone number:</label><p id="tex" style="color: firebrick"> <u>{{$coach->tel}}</u></p>
                      </div>
                      <div class="form-group">
                        <label>E-mail Address:</label><p id="tex" style="color: firebrick"> <u>{{$coach->email}}</u></p>
                      </div>
                      <div class="form-group">
                        <label>Job:</label><p id="tex" style="color: firebrick"> <u>{{$coach->job}}</u></p>
                      </div>

              </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
