<!-- Button trigger modal -->
<button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#exampleModal">
    Subscribe
  </button>
<style>

</style>
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Subscription</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">


            <form action="AdminTemp/members/create" >
                @csrf
                {{-- @method('PUT') --}}
                <div class="card-body">
                    <div class="form-group">
                      <label for="name">Name:</label>
                      <u><b style="color: firebrick">{{$member->fname}} {{$member->lname}}</b></u>
                    </div>

                    <div class="form-group">
                        @method('POST')
                        <label for="sports_id">Sports:</label>
                        <select name="sports_id" class="form-control" id="sports_id">
                            <option disabled selected value> -- select a sport -- </option>
                        @foreach ($sports as $sport )
                            <option value="{{$sport->id}}">{{$sport->name}}</option>
                        @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="coaches_id">Coaches:</label>
                        <select name="coaches_id" class="form-control" id="coaches_id" >
                            <option disabled selected value> -- select a coach -- </option>
                        @foreach ($coaches as $coach )

                            <option value="{{$coach->id}}">{{$coach->fname}} {{$coach->lname}}</option>

                        @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="sub">Subscription duration (Months):</label>
                        <input type="number" name="sub" class="form-control" id="qte" placeholder="Enter duration">
                      </div>

                      <div class="form-group">
                        <label for="start">Start of subscription:</label>
                        <input type="date" name="start" class="form-control" id="start">
                      </div>

                      <div class="form-group">
                        <label for="pay">Cost:</label>
                        <input type="number" name="pay" class="form-control" id="pay">
                      </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-outline-info">Subscribe</button>
                  </div>
            </form>



        </div>

      </div>
    </div>
  </div>
