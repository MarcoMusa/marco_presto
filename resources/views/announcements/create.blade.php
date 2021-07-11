<x-layout>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-6">
            <form class="mg-top shadow px-5 py-3 p-radius p-form" method="POST" action="{{route('announcement.store')}}">
                @csrf
                <h1 class="text-center fs-3 text-uppercase text-chromeyellow fw-bold">crea il tuo annuncio</h1>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label text-chromeyellow mt-3">Titolo</label>
                  <input type="text" class="form-control rounded-pill" id="exampleInputEmail1" aria-describedby="emailHelp" name="title">
                  <div class="mb-3 mt-5">
                 <textarea name="body" id="" cols="47" rows="10" placeholder="Descrizione"></textarea>
                </div>
               <div class="text-center">
                   <button type="submit" class="btn btn-lg text-uppercase shadow bg-yellow rounded-pill">crea annuncio</button>
                </div>
              </form>
        </div>
    </div>
</div>


</x-layout>
