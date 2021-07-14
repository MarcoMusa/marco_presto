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

                    {{-- ACCESSO SOLO PER REVISORI --}}
                    @if (session('access.danied.revisor.only'))
                        <div class="alert alert-danger">
                            Accesso non contentito - solo per revisori
                        </div>
                    @endif
                </div>
                <div class="col-12 col-md- text-center mb-5">
                    <h1 class="text-uppercase text-chromeyellow text-shadow display-4 fw-bold">presto.it <i class="fas fa-shopping-bag"></i></h1>
                    <p class="lead text-chromeyellow">Il tuo sito di annunci...!</p>
                <a href="{{route('announcement.create')}}" class="btn btn-lg shadow text-white rounded-pill text-uppercase px-4 bg-yellow"><i class="fas fa-plus-square"></i>Inserisci annuncio</a>
                </div>
            </div>
        </div>
    </header>

    {{-- SEZIONE CATEGORIE --}}
    <div class="contaner-fluid bg-category pb-5 pt-3 mt-5">
        <div class="row mb-5 mt-3">
            <h2 class="text-uppercase text-center text-white text-shadow">Le nostre <span class="fw-bolder display-6">categorie <i class="fas fa-box-open"></i></span></h2>
        </div>

        <div class="row justify-content-center">
            @foreach ($categories as $category)
            <div class="col-12 col-md-3 mb-3 d-flex justify-content-center">

                <div class="card p-card rounded-pill shadow"  data-aos="flip-left"  style="width: 10rem;">
                    <div class="card-body">
                    <h5 class="card-title fs-6 text-center fw-bold card-text">

                        <a href="{{route('announcements.category', [

                            $category->name,
                            $category->id

                        ]) }}" class="card-link text-decoration-none text-blu fw-bold">{{$category->name}}</a>
                    </h5>

                    </div>
                </div>

            </div>
            @endforeach
        </div>
    </div>



    {{-- SEZIONE ANNUNCI --}}
    <div class="container mt-5 mb-5 ">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="display-6 text-chromeyellow text-shadow fw-bold mb-5">I nostri <span class="display-4 text-blu text-shadow fw-bolder">annunci</span> </h2>
            </div>
            @foreach ($announcements as $announcement)
            <div class="row justify-content-center">
                <div class="col-md-8 mb-5">
                    <div class="card shadow">
                        <div class="card-header bg-blu text-chromeyellow">{{$announcement->title}}</div>
                        <div class="card-body">
                            <p>
                                <img src="https://via.placeholder.com/350x150" class="rounded float-right" alt="">
                                {{$announcement->body}}
                            </p>
                        </div>
                        <div class="card-footer bg-blu text-chromeyellow d-flex justify-content-between">
                            <strong>Category : <a href="
                                {{route('announcements.category', [
                                    $announcement->category->name,
                                    $announcement->category->id
                                ]) }}"
                                > {{$announcement->category->name}}</a></strong>
                            <i>{{$announcement->created_at->format('d/m/y')}} - {{$announcement->user->name}}</i>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>





</x-layout>
