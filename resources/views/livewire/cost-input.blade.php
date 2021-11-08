<div class="container" style="text-align: center">
    <h6>Price Simulator :</h6>
    <hr>
    <form wire:submit.prevent="store" clas>
        <div class="row form-group">
            <div class="col-3">
                <input wire:model="panjang" class="form-control form-control-sm" type="number" name="" id="" placeholder="Width">
            </div>
            <div class="col-3">
                <input wire:model="lebar" class="form-control form-control-sm" type="number" name="" id="" placeholder="Height">
            </div>
            <div class="col-4">
                <input class="form-control form-control-sm" type="text"
                value="{{$panjangCost->panjang}}x{{$panjangCost->lebar}} m " disabled readonly style="text-align: center">
            </div>
            <div class="col-2">
                <button type="submit" class="btn btn-secondary btn-sm">Input</button>
            </div>
        </div>
    </form>
    <hr>
    <div class="row">
        <table class="table table-striped">
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
    </div>
    <hr>
</div>
