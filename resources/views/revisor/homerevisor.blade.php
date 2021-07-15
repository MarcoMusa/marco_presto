<x-layout>

@if($announcement)

<div class="container-fluid shadow bg-white mg-top">
    <div class="row">
        <div class="col-12">
            <h1 class="text-uppercase text-blu text-center">dashboard di {{Auth::user()->name}}</h1>
            <div class="row">
                <span class="badge bg-blu text-chromeyellow  fs-3 fw-bolder justify-content-center">{{\App\Models\Announcement::ToBeRevisionedCount()}}</span>
            </div>

        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card shadow">
                <div class="card-header bg-yellow">Annuncio {{$announcement->id}}</div>

                <div class="card-body">

                    <div class="row">
                        <div class="col-md-2"><h3 class="text-blu fw-bold fs-4">Utente</h3></div>
                        <div class="col-md-10">
                            {{$announcement->user->id}}, -
                            {{$announcement->user->name}}, -
                            {{$announcement->user->email}},
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-md-2"><h3 class="text-blu fw-bold fs-4">Titolo</h3></div>
                        <div class="col-md-10">
                            {{$announcement->title}}
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-md-2"><h3 class="text-blu fw-bold fs-4">Descrizione</h3></div>
                        <div class="col-md-10">
                            {{$announcement->body}}
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-md-2"><h3 class="text-blu fs-4 fw-bold">Immagini</h3></div>
                            <div class="col-md-10">
                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <img src="https://via.placeholder.com/350x150" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center mt-3 mb-3">
            <div class="col-md-6 text-center">
                <form method="POST" action="{{route('revisor.accept' , $announcement->id)}}">
                @csrf
                    <button class="btn btn-lg shadow bg-success text-uppercase text-white">accept</button>
                </form>
            </div>
            <div class="col-md-6 text-right text-center">
                <form method="POST" action="{{route('revisor.reject' , $announcement->id)}}">
                @csrf
                <button class="btn btn-lg shadow bg-danger text-uppercase text-white">reject</button>

                </form>
            </div>
        </div>
    </div>

@else

<h3 class="mg-top text-center text-blu fw-bolder">Non ci sono annunci da revisionare</h3>

@endif


</x-layout>
