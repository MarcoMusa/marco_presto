<x-layout>

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
                        <div class="col-md-2"><h3 class="text-blu fw-bold">Utente</h3></div>
                        <div class="col-md-10">
                            {{$announcement->user->id}}, -
                            {{$announcement->user->name}}, -
                            {{$announcement->user->email}},
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>







</x-layout>
