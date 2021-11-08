{{-- <div class="container mt-2">
    <div class="row">
        @foreach($images as $image)
        <div class="col-xl-4 col-lg-6 col-md-6 col-xs-12">
            <div class="card mt-4">
                <!-- Button trigger modal -->
                <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal{{$image->id}}">
                    <img src="{{ asset('storage/images/'.$image->image) }}" class="img-thumbnail mx-auto" alt="Broken" style="max-width: 100%; height: auto;">
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal{{$image->id}}" tabindex="-1" data-keyboard="false" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-body">
                                <img src="{{ asset('storage/images/'.$image->image) }}" class="img-thumbnail mx-auto" alt="Broken" style="max-width: 100%; height: auto;">
                            </div>
                            <div class="modal-footer">
                                <div class="text-center mt-2 mb-2">
                                    <a class="btn btn-secondary" type="button" href="/cost/{{$image->id}}">Price Simulatior</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    </div>
</div>
 --}}

<div class="container">
    <div class="row" style="text-align: center">
        <div class="col-12" style="height: 60px"></div>
        <div class="col-12 mb-4 mt-2">
            <div id="justified" class="justified-gallery">
                @foreach($images as $image)
                    <a href="/cost/{{$image->id}}">
                        <img src="{{ asset('storage/images/'.$image->image) }}" style="max-width: 100%; height: auto;">
                    </a>
                @endforeach
            </div>
        </div>
        <hr>
        <div class="col-12 float-end">
            {{ $images->links('vendor.pagination.simple-tailwind') }}
        </div>
        <br><br>
        <hr>
    </div>
</div>
