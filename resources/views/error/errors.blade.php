
      @if(Session::has('success'))
        <div class="alert alert-contrast alert-success alert-dismissible" role="alert">
          <div class="icon">
            <span class="mdi mdi-check"></span>
          </div>
          <div class="message">
            <button class="close" type="button" data-dismiss="alert" aria-label="Close">
              <span class="mdi mdi-close" aria-hidden="true"></span>
            </button>
            <strong>Success! </strong>  
            {{ Session::get('success') }}
          </div>
        </div>
      @endif

      @if(Session::has('warning'))
      <div class="alert alert-contrast alert-warning alert-dismissible" role="alert">
        <div class="icon">
          <span class="mdi mdi-alert-triangle"></span>
        </div>
        <div class="message">
          <button class="close" type="button" data-dismiss="alert" aria-label="Close">
            <span class="mdi mdi-close" aria-hidden="true"></span>
          </button>
          <strong>Warning!</strong> 
            {{ Session::get('warning') }}
        </div>
      </div>
      @endif
      @if(Session::has('error'))
      <div class="alert alert-contrast alert-danger alert-dismissible" role="alert">
        <div class="icon">
          <span class="mdi mdi-close-circle-o"></span>
        </div>
        <div class="message">
          <button class="close" type="button" data-dismiss="alert" aria-label="Close">
            <span class="mdi mdi-close" aria-hidden="true"></span>
          </button>
          <strong>Error! </strong> 
            {{ Session::get('error') }}
        </div>
      </div>
      @endif
      @if(Session::has('info'))
      <div class="alert alert-contrast alert-primary alert-dismissible" role="alert">
        <div class="icon">
          <span class="mdi mdi-notifications"></span>
        </div>
        <div class="message">
          <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span class="mdi mdi-close" aria-hidden="true"></span>
          </button>
          <strong>Primary!</strong>
            {{ Session::get('info') }}
        </div>
      </div>
      @endif
      @if(Session::has('warning'))
      <div class="alert alert-contrast alert-dark alert-dismissible" role="alert">
        <div class="icon">
          <span class="mdi mdi-notifications"></span>
        </div>
        <div class="message">
          <button class="close" type="button" data-dismiss="alert" aria-label="Close">
            <span class="mdi mdi-close" aria-hidden="true"></span>
          </button>
          <strong>Dark!</strong> 
            {{ Session::get('warning') }}
        </div>
      </div>
      @endif
      {{-- @if(Session::has('warning'))
      <div class="alert alert-contrast alert-light alert-dismissible" role="alert">
        <div class="icon">
          <span class="mdi mdi-notifications"></span>
        </div>
        <div class="message">
          <button class="close" type="button" data-dismiss="alert" aria-label="Close">
            <span class="mdi mdi-close" aria-hidden="true"></span>
          </button>
          <strong>Light!</strong> 
            {{ Session::get('warning') }}
        </div>
      </div>
      @endif --}}
      @foreach ($errors->all() as $message) 
      <div class="alert alert-contrast alert-danger alert-dismissible" role="alert">
        <div class="icon">
          <span class="mdi mdi-close-circle-o"></span>
        </div>
        <div class="message">
          <button class="close" type="button" data-dismiss="alert" aria-label="Close">
            <span class="mdi mdi-close" aria-hidden="true"></span>
          </button>
          <strong>Validation Error! </strong> 
            {{ $message }}
        </div>
      </div>
      @endforeach