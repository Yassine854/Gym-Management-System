<!-- Button trigger modal -->
<button type="button" onclick="myCost()" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal" style="float:right">
    Sell
  </button>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Cost</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>


        <div class="modal-body">
            <form method="post" action="{{route('products.update',$product)}}"></form>
            @method('PUT')
            @csrf
            <input type="hidden" name="selling" value="yes">
            <div class="card-body">
                <div class="form-group">
                  This will cost <b id="what"></b><b>Dt.</b>
                  <p>Continue ?</p>
            </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
          <button type="submit" class="btn btn-success">Yes</button>
        </div>
      </div>
    </div>



    <script>
        function myCost() {
          var x = document.getElementById("val").value;
          var y=<?php echo json_encode($product->pay); ?>;

          document.getElementById("what").innerHTML = x*y;
        }
    </script>

  </div>
