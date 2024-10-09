<!-- Button trigger modal -->
<button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#target{{$key}}">
    Subscribe
</button>
<style>
    .inputfile {
        font-size: 1.25em;
        font-weight: 700;
        color: white;
        background-color: rgba(90, 247, 103, 0.671);
        display: inline-block;
        cursor: pointer;
    }

    #disc,
    #pay,
    #we {
        font-weight: bold;
    }

    #no {
        font-weight: bold;
        background-color: rgb(255, 197, 197);

    }

    #yes {

        background-color: rgb(207, 255, 197);
    }
</style>
{{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> --}}
<!-- Modal -->
<div class="modal fade" id="target{{$key}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color: rgba(0, 190, 25, 0.507)">
                <h5 class="modal-title" id="exampleModalLabel">Subscription</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="background-color: rgba(50, 250, 77, 0.192)">

                <form method="post" enctpype="multipart/form-data" action="{{route('modalmembers.store')}}">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="members_id">Name:</label>
                            <u><b style="color: firebrick;text-transform:uppercase;" name="members_id"
                                    id="members_id">{{$member->fname}} {{$member->lname}}</b></u>
                            <input type="hidden" name="members_id" id="members_id" value="{{$member->id}}"
                                {{$member->fname}}>
                        </div>


                        <div class="form-group">
                            <label for="sports">Sport:</label>
                            <select name="sports_id" class="form-control" id="sports" required>
                                <option disabled selected> -- select a sport -- </option>
                                @foreach ($sports as $sport)
                                <option value="{{$sport->id}}">{{$sport->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div></div>

                        <div class="form-group">
                            <label for="coaches">Coach:</label>
                            <select name="coaches_id" class="form-control" id="coaches" required>

                                <option id="we" disabled selected value> -- Select a sport First -- </option>
                                {{-- @foreach ($coaches as $coach )
                                <option id="yes" value="{{$coach->id}}">{{$coach->fname}} {{$coach->lname}}</option>

                                @endforeach --}}
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="sub">Subscription duration (Months):</label>
                            {{-- <input type="number" name="sub" class="form-control" id="sub"
                                placeholder="Enter the duration" required> --}}
                            <select name="sub" class="form-control" id="sub" required>
                                <option disabled selected value> -- Fill the coach's field First -- </option>
                                {{-- <option value="1">1 Month</option>
                                    <option value="3"> 3 Months</option>
                                    <option value="6"> 6 Months</option>
                                    <option value="12"> 1 year</option> --}}
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="start">Start of subscription:</label>
                            <input type="date" name="start" class="form-control" id="start" required>
                        </div>

                        <div class="form-group">
                            <label for="discount">Discount?</label>
                            <select name="discount" class="form-control" id="discount" required>
                                <option id="we" disabled selected value> -- Select the subscription duration first --
                                </option>

                            </select>
                        </div>

                        <div>
                            <label for="disc"></label>
                            <input readonly type="text" style="background-color: rgba(50, 250, 77, 0.171)" name="disc"
                                class="form-control" id="disc">
                        </div><br>

                        <div class="form-group">
                            <label for="pay">Cost(Dt):</label>
                            <input readonly style="background-color: rgba(50, 250, 77, 0.445) " type="number" name="pay"
                                class="form-control" id="pay">
                            <input hidden style="background-color: rgb(158, 192, 255)" type="number" name="pay1"
                                class="form-control" id="pay1">
                            <input hidden style="background-color: rgb(158, 192, 255)" type="number" name="pay2"
                                class="form-control" id="pay2">
                            <input hidden style="background-color: rgb(158, 192, 255)" type="number" name="sub1"
                                class="form-control" id="sub1">

                            {{-- <span class="form-control" style="background-color: rgb(158, 192, 255)"><u><b id="pay" ></b><b>Dt</b></u> </span> --}}
                        </div>



                        <div class="form-group">
                            <label for="image">Upload Picture:</label>
                            <input type="file" name="image" id="image" class="inputfile" required />

                        </div>



                    </div>
                    <div class="modal-footer" style="background-color: rgba(50, 250, 77, 0.192)">
                        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-outline-info">Subscribe</button>
                    </div>
                </form>



            </div>

        </div>
    </div>
</div>


<script src="http://code.jquery.com/jquery-latest.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{asset('js/jquery.min.js')}}"> </script>
<script>
    $(document).on('change', '#sports', function() {
    $.get('/Coachs/'+$(this).val(),function(data){
        console.log(data);
        $('select[name="coaches_id"]').empty();
        $('select[name="coaches_id"]').append('<option disabled selected value >--- You can select a coach ---</option>','<optgroup label="No thanks"></optgroup>',
                                '<option  id="no">@php$coaches_id=NULL @endphp</option>',
                                '<optgroup label="-------------------------------------------------------------------------"></optgroup>',
                                '<optgroup label="Yes"></optgroup>');

        $.each(data.coachs, function (key, subcatObj) {
                $('select[name="coaches_id"]').append(
                    "<option value='" +
                        subcatObj.id +
                        "'>" +
                        subcatObj.fname +
                        " " +
                        subcatObj.lname +
                        " </option>"
                );
            });
            $('input[name="pay"]').val(data.sport.cost);
            // $( "<b>Dt</b>" ).insertAfter( "#pay" );
            $('input[name="pay1"]').val(data.sport.cost);

    })

 });

 $(document).on('change', '#coaches', function() {
      var pay=$('input[name="pay"]').val();
      var pay1=$('input[name="pay1"]').val();
      if($(this).val() >0){
        $('input[name="pay"]').val(pay1);
        $('input[name="pay2"]').val(pay1);
        $('select[name="sub"]').empty();
        $('select[name="sub"]').append('<option disabled selected value>---Chose your subscription duration---</option>');
        $('select[name="sub"]').append('<option value="1">1 Month</option>');
        $('select[name="sub"]').append('<option value="3">3 Months</option>');
        $('select[name="sub"]').append('<option value="6">6 Months</option>');
        $('select[name="sub"]').append('<option value="12">1 year</option>');
      }
      else{
        $('input[name="pay"]').val(pay1-50);
        $('input[name="pay2"]').val(pay1-50);
        $('select[name="sub"]').empty();
        $('select[name="sub"]').append('<option disabled selected value>---Chose your subscription duration---</option>');
        $('select[name="sub"]').append('<option value="1">1 Month</option>');
        $('select[name="sub"]').append('<option value="3">3 Months</option>');
        $('select[name="sub"]').append('<option value="6">6 Months</option>');
        $('select[name="sub"]').append('<option value="12">1 year</option>');
      }

    });

    $(document).on('change', '#sub', function() {
        $('select[name="discount"]').empty();
        $('select[name="discount"]').append('<option disabled selected value>Do you want to add a discount ?</option>');
        $('select[name="discount"]').append('<option value=0>No</option>');
        $('select[name="discount"]').append('<option value=1>Yes</option>');
        $('input[name="sub1"]').val($(this).val());
    });

    $(document).on('change', '#discount', function() {
        var dur=$('input[name="sub1"]').val();
        var pay=$('input[name="pay2"]').val();
        if($(this).val() ==0)
        {
            $('input[name="disc"]').val("No discount.");
            $('input[name="pay"]').val(pay*dur);

        }

        else
        {
        var dur=$('input[name="sub1"]').val();
        var pay=$('input[name="pay2"]').val();
        if(dur ==1){
        $('input[name="pay"]').val(parseInt(pay*dur*0.95));
        $('input[name="disc"]').val("5%.");
        }

        if(dur ==3)
        {
        $('input[name="pay"]').val(parseInt(pay*dur*0.90));
        $('input[name="disc"]').val("10%.");
        }

        if(dur ==6)
        {
        $('input[name="pay"]').val(parseInt(pay*dur*0.85));
        $('input[name="disc"]').val("15%.");
        }

        if(dur ==12)
        {
        $('input[name="pay"]').val(parseInt(pay*dur*0.80));
        $('input[name="disc"]').val("20%.");
        }


        }
    });





//   $(document).on('change', '#sub', function() {
//       var pay=$('input[name="pay2"]').val();

//     // $('input[name="pay"]').val(pay*$(this).val());
//     if($(this).val() ==3)
//       {
//     $('input[name="pay"]').val(pay*3*0.95);
//     $('input[name="disc"]').val("5%.");
//       }

//       if($(this).val() ==6)
//       {
//     $('input[name="pay"]').val(pay*6*0.90);
//     $('input[name="disc"]').val("10%.");
//       }

//       if($(this).val() ==12)
//       {
//     $('input[name="pay"]').val(pay*12*0.80);
//     $('input[name="disc"]').val("20%.");
//       }
//       if($(this).val() ==1){
//     $('input[name="pay"]').val(pay*$(this).val());
//     $('input[name="disc"]').val("0%.");
//       }

// });






</script>
