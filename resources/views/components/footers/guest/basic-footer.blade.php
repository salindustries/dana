@props(['textColor'])
<footer class="footer position-absolute bottom-footer py-4 w-100 z-index-1">
  <div class="container">
    <div class="row align-items-center justify-content-lg-between">
      <div class="col-12 col-md-6 my-auto">
        <div class="{{ $textColor }} copyright text-center text-sm text-lg-start">
          ©
          <script>
            document.write(new Date().getFullYear())
          </script>,
          made with <i class="fa fa-heart" aria-hidden="true"></i> by
          <a href="{{ config('custom.organization_url') }}" class="{{ $textColor }} font-weight-bold"
            target="_blank">{{ config('custom.organization_name') }}</a>
          for a better world we can live in.
        </div>
      </div>
      <div class="col-12 col-md-6">
        <ul class="nav nav-footer justify-content-center justify-content-lg-end">
          <li class="nav-item">
            <a href="#" class="nav-link {{ $textColor }}" target="_blank">Link 1</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link {{ $textColor }}" target="_blank">Link 2</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link {{ $textColor }}" target="_blank">Link 3</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link {{ $textColor }}" target="_blank">About Us</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link pe-0 {{ $textColor }}" target="_blank">License</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</footer>
