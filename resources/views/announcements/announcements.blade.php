<x-layout>


<div class="container mg-top">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="text-chromeyellow fs-1 text-shadow fw-bold">Annunci per categoria: <span class="display-6 text-blu text-shadow fw-bolder">{{$category->name}}</span></h1>
        </div>
    </div>
</div>

@foreach ($announcements as $announcement)
<div class="row justify-content-center mt-5">
    <div class="col-md-8 mb-5">
        <div class="card shadow">
            <div class="card-header bg-blu text-chromeyellow">{{$announcement->title}}</div>

             {{-- CRUD SOLO SE LOGGATO --}}
             @if (Auth::user())

             <div class="mt-3 text-center">
                 <button class="btn shadow bg-success"><i class="fas fa-edit text-white fw-bolder"></i></button>
                 <button class="btn  shadow bg-danger"><i class="fas fa-trash-alt"></i></button>
             </div>

             @endif

            <div class="card-body">
                <p>
                    <img src="https://via.placeholder.com/350x150" class="rounded float-right" alt="">
                    {{$announcement->body}}
                </p>
            </div>
            <div class="card-footer bg-blu text-chromeyellow d-flex justify-content-between">
                <strong>Category : <a
                    href="{{route('announcements.category', [
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

{{-- <div class="row justify-content-center">
    <div class="col-md-8">
        {{$announcements->links()}}
    </div>
</div> --}}


</x-layout>
