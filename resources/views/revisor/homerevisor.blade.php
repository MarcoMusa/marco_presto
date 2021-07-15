<x-layout>

<div class="container mg-top">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header">Annuncio # {{$announcement->id}}</div>

                <div class="card-body">

                    <div class="row">
                        <div class="col-md-2"><h3>Utente</h3></div>
                        <div class="col-md-10">
                            # {{$announcement->user->id}},
                            {{$announcement->user->name}},
                            {{$announcement->user->email}},
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>







</x-layout>
