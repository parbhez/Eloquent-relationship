<x-app-layout>

    <x-slot name="title">| Home </x-slot>

    <x-slot name="maincontent">
        <div class="col-12">
            <h1 class="text-center my-3">Eloquent Relationship</h1>
            <hr>

            <div class="row">
                <div class="col-sm-6">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">One To One (hasOne)</h5>
                      <p class="card-text"> User With Phone (hasOne). Fetch user wise phone and using eager loading</p>
                      <a href="{{url('onetoone-hasone')}}" class="btn btn-primary">View Table</a>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title">One To One (belongsTo)</h5>
                        <p class="card-text">Phone With User (belongsTo). Fetch phone wise user and using eager loading</p>
                        <a href="{{url('onetoone-belongsTo')}}" class="btn btn-primary">View Table</a>
                      </div>
                    </div>
                  </div>
            </div>
            <br>
              <div class="row">
                <div class="col-sm-6">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Special title treatment</h5>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                      </div>
                    </div>
                  </div>
              </div>
        </div>

    </x-slot>


</x-app-layout>
