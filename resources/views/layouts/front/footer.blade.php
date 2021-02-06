<script src="{{ asset('front/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('front/particles/particles.js') }}"></script>
<script src="{{ asset('front/particles/demo/js/app.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
  <!-- toastr -->
  <script src="{{asset('dist/js/iziToast.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  <script>
      @if(Session::has('success'))
            iziToast.success({
                title: "Sukses",
                message: "{{ Session::get('success') }}",
                position: "topRight"
              });
        @endif
  </script>
  </body>
</html>