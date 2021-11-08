<div class="container mt-2">
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
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-center mt-2 mb-2">
                    <button class="btn btn-secondary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" data-dismiss="exampleModal{{$image->id}}">Price Simulatior</button>
                </div>

                <!-- Modal 2 -->
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                    <div class="offcanvas-header">
                        <h5 id="offcanvasRightLabel">Price Simulator :</h5>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <div class="container" style="text-align: center">
                            <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal{{$image->id}}">
                                <img src="{{ asset('storage/images/'.$image->image) }}" class="img-thumbnail mx-auto" alt="Broken" style="max-width: 100%; height: auto;">
                            </button>
                                <hr>
                                <form wire:submit.prevent="store" clas>
                                    <div class="row form-group">
                                        <div class="col-3">
                                            <input wire:model="panjang" class="form-control form-control-sm" type="number" name="" id="" placeholder="P">
                                        </div>
                                        <div class="col-3">
                                            <input wire:model="lebar" class="form-control form-control-sm" type="number" name="" id="" placeholder="L">
                                        </div>
                                        <div class="col-4">
                                            <input class="form-control form-control-sm" type="text"
                                            value="{{$panjangCost->panjang}}x{{$panjangCost->lebar}} m " disabled readonly style="text-align: center">
                                        </div>
                                        <div class="col-2">
                                            <button type="submit" class="btn btn-light btn-sm">Input</button>
                                        </div>
                                    </div>
                                </form>
                                <hr>
                                <div class="row">
                                    <table class="table table-sm">
                                        <thead>
                                          <tr>
                                            <th scope="col">1 mm</th>
                                            <th scope="col">2 mm</th>
                                            <th scope="col">3 mm</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td>Rp. {{number_format( $panjangCost->panjang * $panjangCost->lebar * 100000)}}</td>
                                            <td>Rp. {{number_format( $panjangCost->panjang * $panjangCost->lebar * 200000)}}</td>
                                            <td>Rp. {{number_format( $panjangCost->panjang * $panjangCost->lebar * 300000)}}</td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    {{-- <div class="col-4">
                                        <h6>1mm = Rp. {{number_format( $panjangCost->panjang * $panjangCost->lebar * 100000)}}</h6>
                                    </div>
                                    <div class="col-4">
                                        <h6>2mm = Rp. {{number_format( $panjangCost->panjang * $panjangCost->lebar * 200000)}}</h6>
                                    </div>
                                    <div class="col-4">
                                        <h6>3mm = Rp. {{number_format( $panjangCost->panjang * $panjangCost->lebar * 300000)}}</h6>
                                    </div> --}}
                                </div>
                                <hr>
                            </div>
                    </div>
                </div>

            </div>
        </div>
    @endforeach
    </div>
</div>

