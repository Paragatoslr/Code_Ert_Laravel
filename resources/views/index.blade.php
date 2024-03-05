@extends('template.ui')

@section('content')

@include('template.animation') {{-- In here I call the animation inside animation.blade.php from template --}}

<div class="container-fluid" >
    <section class="intro">

        <div class="wrapper run-animation" id="animate">
          <div class="title">

              <span class="code"><img src="images/code.png"></span>
              <span class="ert"><img src="images/ert.png"></span>

              <div class="restart">Watch Again</div>
          </div>
      </div>

      <div class="images"></div>
      </section>
</div>


<div class="container-fluid py-5 bg-dark">
    <div class="row d-flex justify-content-center">
        <div class="col-md-4 p-5 ">
            <img src="{{ asset('images/poster.png') }}" alt="Your Image" class="img-fluid ">
        </div>

        <div class="col-md-4 p-5">
            <div class="card bg-secondary h-100">
                <div class="card-body">
                    <h1 class="card-title text-warning text-center">Synopsis</h5>
                    <p class="card-text text-white h4 lh-lg text-center">The crisis of climate is world's end. A mysterious project, called Code ERT,
                        was humanity's last hope. However, the project failed because of the disappearance of its most notorious and dangerous specimen,
                        "Kalamidad", followed by six people being brought to the apocalyptic future. It was a question whether this was simply a coincidence or fate.</p>
                    <div class="text-center d-grid mt-4">
                        <a href="#chapters" class="btn btn-light justify-center rounded-pill">Start Reading</a>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>

<div class="container-fluid  py-5 ">
    <div class="row d-flex justify-content-center">
        <div class="col-md-6 bg-light p-lg-5 rounded">
            <div class="d-flex align-items-start">
                <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</button>
                    <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</button>
                    <button class="nav-link" id="v-pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#v-pills-disabled" type="button" role="tab" aria-controls="v-pills-disabled" aria-selected="false" >Disabled</button>
                    <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</button>
                    <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</button>
                </div>
                <div class="tab-content" id="v-pills-tabContent">

                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">
                        <h1>sample 1</h1>
                        <div class="card d-flex flex-row">
                            <img src="{{ asset('images/Frog.jpg') }}" class="card-img-top" style="width: 50%" alt="Image 2">
                            <div class="card-body">
                                <h5 class="card-title">Card 2</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">
                        <h1>sample 2</h1>
                        <div class="card d-flex flex-row">
                            <img src="{{ asset('images/Frog.jpg') }}" class="card-img-top" style="width: 50%" alt="Image 2">
                            <div class="card-body">
                                <h5 class="card-title">Card 2</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-disabled" role="tabpanel" aria-labelledby="v-pills-disabled-tab" tabindex="0">
                        <h1>sample 3</h1>
                        <div class="card d-flex flex-row">
                            <img src="{{ asset('images/Frog.jpg') }}" class="card-img-top" style="width: 50%" alt="Image 2">
                            <div class="card-body">
                                <h5 class="card-title">Card 2</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab" tabindex="0">
                        <h1>sample 4</h1>
                        <div class="card d-flex flex-row">
                            <img src="{{ asset('images/Frog.jpg') }}" class="card-img-top" style="width: 50%" alt="Image 2">
                            <div class="card-body">
                                <h5 class="card-title">Card 2</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab" tabindex="0">
                        <h1>sample 5</h1>
                        <div class="card d-flex flex-row">
                            <img src="{{ asset('images/Frog.jpg') }}" class="card-img-top" style="width: 50%" alt="Image 2">
                            <div class="card-body">
                                <h5 class="card-title">Card 2</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>



<div class="container-fluid bg-dark p-5" id="chapters">
    <div class="container ">
        <table class="table table-striped table-dark">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Chapter</th>
                <th scope="col">Date Posted</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
                @foreach ($chapter as $c)
                <tr>
                    <th scope="row">{{ $c->id }}</th>
                    <td>{{ $c->chapter_name }}</td>
                    <td>{{$c->created_at }}</td>
                    <td><button class="btn btn-light" type="button" data-bs-toggle="modal" data-bs-target="#chapter{{ $c->id }}" >Read</button></td>
                  </tr>
                @endforeach


            </tbody>
          </table>
    </div>

</div>

    @foreach ($chapter as $c)
    <div class="modal fade" id="chapter{{ $c->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg"> <!-- Added modal-lg class for large modal -->
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">{{ $c->chapter_name }}</h1>
                </div>
                <div class="modal-body text-center"> <!-- Added text-center class -->
                    <img src="{{ asset('chapters/'. $c->chapter_image) }}" class="img-fluid" alt=""> <!-- Added img-fluid class for responsive image -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    @endforeach


@endsection

@section('script')
{{-- This repeats the animation from Intro --}}
<script>
    element = document.getElementById("animate");

if (element) {
	// reset the transition by...
	element.addEventListener("click", function(e) {
		e.preventDefault;

		console.log('element', element.classList);

		// removing the class
		element.classList.remove("run-animation");

		// triggering reflow
		void element.offsetWidth;

		// and re-adding the class
		element.classList.add("run-animation");
	}, false);
}
</script>

@endsection


