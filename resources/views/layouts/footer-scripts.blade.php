<!-- JAVASCRIPT -->
<script src="{{ URL::asset('assets/libs/jquery/jquery.min.js')}}"></script>
<script src="{{ URL::asset('assets/libs/bootstrap/bootstrap.min.js')}}"></script>
<script src="{{ URL::asset('assets/libs/metismenu/metismenu.min.js')}}"></script>
<script src="{{ URL::asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
<script src="{{ URL::asset('assets/libs/node-waves/node-waves.min.js')}}"></script>
<script src="{{ URL::asset('assets/libs/sweetalert2/sweetalert2.min.js')}}"></script>
<script src="{{ URL::asset('assets/libs/select2/select2.min.js')}}"></script>
<script src="{{ URL::asset('assets/libs/datatables/datatables.min.js')}}"></script>
<script src="{{ URL::asset('assets/libs/moment/moment.min.js')}}"></script>
<script src="{{URL::asset('assets/libs/tinymce/tinymce.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js"></script>

{{-- charts script --}}
<script src="{{ URL::asset('assets/libs/echarts/echarts.min.js') }}"></script>
<!-- echarts init -->
<script src="{{ URL::asset('assets/js/pages/echarts.init.js') }}"></script>

<!-- tui charts plugins -->
<script src="{{URL::asset('assets/libs/tui-chart/tui-chart.min.js')}}"></script>

<!-- tui charts map -->
{{-- <script src="{{ URL::asset('assets/libs/tui-chart/maps/usa.js') }}"></script> --}}

<!-- tui charts plugins -->
<script src="{{ URL::asset('assets/js/pages/tui-charts.init.js') }}"></script>
<!-- App js -->
<script src="{{ URL::asset('assets/js/app.min.js')}}"></script>

@stack('scripts')

<script>
    window.livewire.on('success', message => {
        Swal.fire({
            title: message.title || 'Success',
            text: message.text,
            type: 'success',
            confirmButtonColor: '#3b5de7'
        });
    });

    window.livewire.on('error', message => {
        Swal.fire({
            title: message.title || 'Error',
            text: message.text,
            type: 'error',
            confirmButtonColor: '#3b5de7'
        });
    });

    window.livewire.on('success_redirect', message => {
        Swal.fire({
            title: message.title || 'Success',
            text: message.text,
            type: 'success',
            confirmButtonColor: '#3b5de7'
        }).then(function () {
            window.location = message.url;
        });
    });

    window.livewire.on('modal', message => {
            $('#'+message).modal('toggle');
    });


    window.livewire.on('confirm', message  =>
{
    $('#'+message).modal('hide');
});
$("#menu-toggle").click(function(e) {
 e.preventDefault();
	var isIE11 = !!navigator.userAgent.match(/Trident.*rv\:11\./);
	

      



        $("#toggleIcon").toggleClass("fa fa-angle-double-down fa fa-angle-double-up")
        $("#wrapper").toggleClass("toggled");

  	if(isIE11){
          if($("#wrapper").hasClass("toggled")){
	    $('#sidebar-wrapper').css("margin-left", "-268px")
	  } else {
	    $('#sidebar-wrapper').css("margin-left", "-250px")	
          }	 
	}
    });
</script>


