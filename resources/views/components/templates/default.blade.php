<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('components.templates.partials.head')
  <body >
    <!-- sidebar -->
      @include('components.templates.partials.sidebar')
    <!-- end sidebar -->

      <div class="page-wrapper">
        <!-- Header -->
        @include('components.templates.partials.header')
        <!-- end Header -->

        <!-- Content -->
        <div class="page-body">
          <div class="container-xl">
            <div class="row row-deck row-cards">
                {{ $slot }}

              <!-- Modal -->
              <div class="modal modal-blur fade" id="logoutModal" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-body">
                      <div class="modal-title">Are you sure?</div>
                      <div>If you proceed, you will lose all your personal data.</div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-link link-secondary me-auto" data-bs-dismiss="modal">Cancel</button>
                      <button type="button" class="btn btn-danger" data-bs-dismiss="modal" id="logout">Yes, delete all my data</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End Content -->

        <!-- footer -->
        @include('components.templates.partials.footer')
         <!-- endfooter -->

      </div>
    </div>
    @include('components.templates.partials.scripts')
  </body>
</html>