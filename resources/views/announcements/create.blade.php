<x-layout>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-6">
            <form class="mg-top shadow bg-yellow px-5 py-3 p-radius p-create">
                <h1 class="text-center fs-3 text-uppercase">crea il tuo annuncio</h1>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Titolo</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="title">
                  <div class="mb-3 mt-5">
                 <textarea name="description" id="" cols="47" rows="10" placeholder="Descrizione"></textarea>
                </div>
                <button type="submit" class="btn btn-lg text-uppercase shadow bg-blu">crea annuncio</button>
              </form>
        </div>
    </div>
</div>


</x-layout>
