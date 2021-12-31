<section class="vh-100" style="background-color: #eee;">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

                <form class="well form-horizontal" method="POST" action="{{ route('register') }}"  id="contact_form">
                 @csrf
                 <div class="row align-items-center">
                   <div class="col-md-12 mt-4">
                     <select class="form-control" name="type" required>
                          <option value="">--Select User--</option>
                          <option value="imam">Driver</option>
                          <option value="customer">Customer</option>
                     </select>
                   </div>
            <div class="col mt-4">
              <!-- <input type="text" class="form-control" placeholder="Company Name"> -->
              <input  name="name" placeholder="Name" class="form-control"  type="text">
            </div>
          </div>
          <div class="row align-items-center mt-4">
            <div class="col">
              <!-- <input type="email" class="form-control" placeholder="Email"> -->
              <input  name="email" placeholder="Email" class="form-control"  type="email">
            </div>
          </div>
          <div class="row align-items-center mt-4">
          <div class="col">
              <!-- <input type="password" class="form-control" placeholder="Password"> -->
              <input name="nid" placeholder="NID Number" class="form-control"  type="number" required>
            </div>
          </div>
          <div class="row align-items-center mt-4">
            <div class="col">
              <label>Picture</label>
              <input name="picture" class="form-control"  type="file">
            </div>
            <div class="col">
            <label>License Picture</label>
              <input name="license_picture" class="form-control"  type="file">
            </div>
          </div>
          <div class="row align-items-center mt-4">
            <div class="col">
              <!-- <input type="password" class="form-control" placeholder="Password"> -->
              <input name="password" placeholder="Password" class="form-control"  type="password">
            </div>
            <div class="col">
              <!-- <input type="password" class="form-control" placeholder="Confirm Password"> -->
              <input type="password" id="password_confirmation" name="password_confirmation" required autocomplete="new-password"
                                    placeholder="Confirm Password" class="form-control" >
            </div>
          </div>
          <div class="row justify-content-start mt-4">
            <div class="col">
              <div class="form-check">
                <label class="form-check-label">
                  Already Register? <a href="login" class="text-dark">Login</a>
                </label>
              </div>

              <button class="btn btn-dark mt-4">Submit</button>
            </div>
          </div>

                </form>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img class="rounded" src="{{ asset('car-wall.jpg') }}" class="img-fluid" style="width:550px;" alt="Sample image">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>