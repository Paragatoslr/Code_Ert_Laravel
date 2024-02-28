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

<div class="container-fluid" style="height: 50vh"></div> {{-- Gap --}}

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

                <tr>
                <th scope="row">1</th>
                <td>Chapter 1: the introductio</td>
                <td>24/02/2024</td>
                <td><button class="btn btn-light" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal1">Read</button></td>
              </tr>

            </tbody>
          </table>
    </div>

</div>

<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

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


