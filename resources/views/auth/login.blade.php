<x-layout>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-6">
            <form class="shadow px-5 py-5 p-form">
                <div><h1 class="text-shadow text-chromeyellow fs-4 text-center text-uppercase mb-3">Login <i class="fas fa-user"></i></h1></div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label text-shadow text-chromeyellow">Email</label>
                  <input type="email" class="form-control rounded-pill" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label text-shadow text-chromeyellow">Password</label>
                  <input type="password" class="form-control rounded-pill" id="exampleInputPassword1">
                </div>
                <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label fs-6 text-white" for="exampleCheck1">Ricordami</label>
                </div>
                <div class="text-center">
                <button type="submit" class="btn btn-lg mt-2 px-5 rounded-pill text-uppercase shadow py-3 text-white bg-yellow">Login</button>
                </div>
                <div class="mt-3 text-center">
                    <i class="fab fa-google-plus text-danger fs-2"></i>
                    <i class="fab fa-facebook text-primary fs-2"></i>
                </div>
              </form>
        </div>
</div>









</x-layout>
