





<div class="row">
    @foreach ($hotel as $view)
    <div class="col-xs-3 mb-4">
        <div class="card" style="width: 18rem;">
        <img src="{{url('hotel_images/'.$view->hotel_image)}}" class="card-img-top" height="200" alt="{{$view->hotel_name}}"
        data-toggle="tooltip" data-placement="top" title="{{$view->hotel_name}}">
            <div class="card-body">
                <h5 class="card-title"> {{$view->hotel_name}}</h5>
                <p class="card-text"></p>
                <a href="#" class="btn btn-primary">More Details</a>
            </div>
        </div>
    </div>
    @endforeach
</div>


<script>

$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>