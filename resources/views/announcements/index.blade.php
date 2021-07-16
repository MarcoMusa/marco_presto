<x-layout>


    {{-- SEZIONE ANNUNCI --}}
    <div class="container mg-top">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="display-6 text-chromeyellow text-shadow fw-bold mb-5">Tutti gli <span class="display-4 text-blu text-shadow fw-bolder">annunci</span> </h2>
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






</x-layout>
