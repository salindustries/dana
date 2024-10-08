
    <main class="main-content  mt-0">
      <div class="page-header align-items-start min-vh-90 m-3 border-radius-xl" style="background-image: url('https://images.unsplash.com/photo-1627850991511-fd5640f0b472?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1951&q=80');">
        <div class="container my-auto">
          <div class="row">
            <div class="col-lg-4 col-md-7 mx-auto">
              <div class="card z-index-0 my-auto">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                  <div class="bg-gradient-success shadow-success border-radius-lg py-3 text-center">
                    <h4 class="font-weight-bolder text-white mb-0 mt-1">Reset password</h4>
                    <p class="text-white mb-1">You will receive an e-mail in maximum 60 seconds</p>
                  </div>
                </div>
                <div class="card-body">
                  @if (Session::has('status'))
                  <div class="alert alert-success alert-dismissible text-white" role="alert">
                      <span class="text-sm">{{ Session::get('status') }}</span>
                      <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert"
                          aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  @elseif (Session::has('email'))

                  <div class="alert alert-danger alert-dismissible text-white" role="alert">
                      <span class="text-sm">{{ Session::get('email') }}</span>
                      <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert"
                          aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  @endif
                  @if (Session::has('demo'))
                  <div class="row">
                      <div class="alert alert-danger alert-dismissible text-white" role="alert">
                          <span class="text-sm">{{ Session::get('demo') }}</span>
                          <button type="button" class="btn-close text-lg py-3 opacity-10"
                              data-bs-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                  </div>
                  @endif
                    <form wire:submit="show" class="text-start">

                        <div class="input-group input-group-outline my-3 @if(strlen($email ?? '') > 0) is-filled @endif">
                          <label class="form-label">Email</label>
                            <input wire:model.live="email" type="email" class="form-control">
                        </div>
                        @error('email')
                        <p class='text-danger inputerror'>{{ $message }} </p>
                        @enderror
                        <div class="text-center">
                            <button type="submit" class="btn bg-gradient-dark btn-lg w-100 my-4 mb-2">Send</button>
                        </div>
                        <p class="mt-4 text-sm text-center">
                            Don't have an account?
                            <a href="{{ route('register') }}"
                                class="text-success text-gradient font-weight-bold">Sign
                                up</a>
                        </p>
                    </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    @push('js')
    <script src="{{ asset('assets') }}/js/plugins/jquery-3.6.0.min.js"></script>
    <script>
        $(function () {
    
            var input = $(".input-group input");
            input.focusin(function () {
                $(this).parent().addClass("focused is-focused");
            });

            input.focusout(function () {
                $(this).parent().removeClass("focused is-focused");
            });
        });
    
    </script>
    @endpush