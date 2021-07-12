<x-layout>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Annunci per categoria: {{$category->name}}</h1>
        </div>
    </div>
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
                <strong>Category : <a href="">{{$announcement->category->name}}</a></strong>
                <i>{{$announcement->created_at->format('d/m/y')}} - {{$announcement->user->name}}</i>
            </div>
        </div>
    </div>
    @endforeach
</div>

<div class="row justify-content-center">
    <div class="col-md-8">
        {{$announcements->links()}}
    </div>
</div>


</x-layout>
