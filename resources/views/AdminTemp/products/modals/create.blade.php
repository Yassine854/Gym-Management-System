@if($product->qte==0)
            <!-- Small modal -->



<!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
    Oops!
  </button>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal-{{ $product->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel-{{ $product->id }}">Sorry...</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            Seems like you just ran out of stock...
           <p> Please make sure to fill up your stock again as soon as possible. </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
@else

<button type="button" class="btn btn-success" data-toggle="modal" data-target=".bd-example-modal-sm">Sell</button>


<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
        <form method="post" action="{{route('products.update',$product)}}">
        @method('PUT')
        @csrf
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel-{{ $product->id }}">Sale</h5>
            <button type="button" class="close" data-dismiss="modal">x</button>
        </div>
        <div class="card-body">
            <div class="form-group">
               <label>Name:</label><p style="color: firebrick"> <u> {{$product->name}} </u></p>
            </div>

            <div class="form-group">
                <label for="qte_pay" >Quantity:</label>
                <input type="number" id="val" name="qte_pay" value=1 min=1 max={{$product->qte}}  class="form-control" id="qte_pay" required>
              </div >

                <!-- Button trigger modal -->


<button type="button" onclick="myCost()" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal" style="float:right">
    Sell
  </button>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal-{{ $product->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel-{{ $product->id }}">Cost</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>


        <div class="modal-body">



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


        function ShowModal(id)
{
        var modal = document.getElementById(id);
        modal.style.display = "block";
}

    </script>

  </div>

                {{-- <button type="submit" class="btn btn-success" >Sell</button> --}}
              </div>
      </form>






    </div>
  </div>
</div>
@endif


