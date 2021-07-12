<x-layout>



<header class="header">
    <div class="container h-100">
        <div class="row h-100 align-items-end justify-content-center">
            <div class="col-12">
                {{-- ALERT ANNUNCIO CREATO CORRETTAMENTE --}}
                @if (session('announcement.created.success'))
                <div class="alert alert-success rounded-pill shadow text-chromeyellow fw-bold">
                    Annuncio creato correttamente
                </div>
                @endif
            </div>
            <div class="col-12 col-md- text-center mb-5">
                <h1 class="text-uppercase text-chromeyellow text-shadow display-4 fw-bold">presto.it <i class="fas fa-shopping-bag"></i></h1>
                <p class="lead text-chromeyellow">Il tuo sito di annunci...!</p>
               <a href="{{route('announcement.create')}}" class="btn btn-lg shadow text-white rounded-pill text-uppercase px-4 bg-yellow"><i class="fas fa-plus-square"></i> Inserisci annuncio</a>
            </div>
        </div>
    </div>
</header>


<div class="container mt-5 mb-5 ">
    <div class="row">
        <div class="col-12 text-center">
            <h2 class="display-6 text-chromeyellow text-shadow fw-bold">I nostri <span class="display-4 text-blu text-shadow fw-bolder">annunci</span> </h2>
        </div>
        <div class="col-12 col-md-6 mt-5">
              <div class="card p-card shadow" style="width: 18rem;">
                <img src="https://picsum.photos/50/50" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <div class="text-center"><a href="#" class="btn btn-lg bg-yellow text-white rounded-pill text-uppercase">Dettaglio</a></div>
                </div>
              </div>
        </div>
    </div>
</div>









</x-layout>
