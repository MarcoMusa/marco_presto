<x-layout>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-6">
            <form class="mg-top shadow px-5 py-3 p-radius p-form" method="POST" action="{{route('announcement.store')}}">
                @csrf
                <h1 class="text-center fs-3 text-uppercase text-chromeyellow fw-bold"><i class="fas fa-plus-square"></i> crea il tuo annuncio</h1>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label text-chromeyellow mt-3">Titolo</label>
                    <input type="text" class="form-control rounded-pill @error('title') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" name="title">


                    {{-- MESSAGGIO ERRORE RICHIESTA --}}
                    @error('title')
                    <span class="invalid-feedback" role="alert" >
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
                </div>

            {{-- SEZIONE CATEGORIE --}}
            <div class="mb-3 mt-5">
                <label for="category" class="text-chromeyellow">Categorie</label>
                <select name="category" id="category">
                    @foreach ($categories as $category)
                    <option value="{{$category->id}}" {{old('category') == $category->id ? 'selected' : ''}}>
                        {{$category->name}}</option>
                    @endforeach
                </select>
            </div>

                <div class="mb-3 mt-5">
                 <textarea name="body" class=" @error('title') is-invalid @enderror" id="" cols="47" rows="10" placeholder="Annuncio"></textarea>
                   {{-- MESSAGGIO ERRORE RICHIESTA --}}
                @error('body')
                <span class="invalid-feedback" role="alert" >
                    <strong>{{$message}}</strong>
                </span>
                @enderror
                </div>

               <div class="text-center">
                   <button type="submit" class="btn btn-lg text-uppercase text-white shadow bg-yellow rounded-pill">crea annuncio</button>
               </div>
              </form>
        </div>
    </div>
</div>


</x-layout>
