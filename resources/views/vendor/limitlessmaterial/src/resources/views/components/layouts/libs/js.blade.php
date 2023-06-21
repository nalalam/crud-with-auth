<div id="jsLibContainer">

    <!-- Core JS files -->
    <script id="jquery" src="{{ asset('/vendor/limitlessmaterial') }}/global_assets/js/main/jquery.min.js"></script>
    <script id="bootstrap_bundle" src="{{ asset('/vendor/limitlessmaterial') }}/global_assets/js/main/bootstrap.bundle.min.js"></script>
    <script id="blockui" src="{{ asset('/vendor/limitlessmaterial') }}/global_assets/js/plugins/loaders/blockui.min.js"></script>
    <script id="ripple" src="{{ asset('/vendor/limitlessmaterial') }}/global_assets/js/plugins/ui/ripple.min.js"></script>


    <!--alpaca forms -->
    <script id="handlebar" src="{{ asset('vendor/limitlessmaterial') }}/global_assets/js/plugins/forms/inputs/typeahead/handlebars.min.js"></script>
    <script id="alpaca" src="{{ asset('vendor/limitlessmaterial') }}/global_assets/js/plugins/forms/inputs/alpaca/alpaca.min.js"></script>
    <script id="prism" src="{{ asset('vendor/limitlessmaterial') }}/global_assets/js/plugins/ui/prism.min.js"></script>

    <script id="select2" src="{{ asset('vendor/limitlessmaterial') }}/global_assets/js/plugins/forms/selects/select2.min.js"></script>
    <script id="bootstrap_multiselect" src="{{ asset('vendor/limitlessmaterial') }}/global_assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
    <script id="price_format" src="{{ asset('vendor/limitlessmaterial') }}/global_assets/js/plugins/forms/inputs/alpaca/price_format.min.js"></script>

    <script id="uniform" src="{{ asset('vendor/limitlessmaterial') }}/global_assets/js/plugins/forms/styling/uniform.min.js"></script>
    
	<script id="datatables" src="{{ asset('vendor/limitlessmaterial') }}/global_assets/js/plugins/tables/datatables/datatables.min.js"></script>


    <script id="limitlessbaseapp" src="{{ asset('/vendor/limitlessmaterial') }}/assets/js/app.js"></script>
    <script src ="{{ asset('/vendor/limitlessmaterial') }}/assets/js/utility.js"></script>
    <!-- /core JS files -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.3.1/tinymce.min.js" integrity="sha512-eV68QXP3t5Jbsf18jfqT8xclEJSGvSK5uClUuqayUbF5IRK8e2/VSXIFHzEoBnNcvLBkHngnnd3CY7AFpUhF7w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    {{-- <script id="custom" src="{{ asset('/vendor/limitlessmaterial/') }}/pondit/xyz.js"></script> --}}
    <script id="custom" src="{{ asset('/vendor/limitlessmaterial') }}/pondit.js"></script>

    <script id="toast-msg" src="{{ asset('/vendor/limitlessmaterial') }}/global_assets/js/plugins/notifications/noty.min.js"></script>
    <script id="sweet-alert" src="{{ asset('/vendor/limitlessmaterial') }}/global_assets/js/plugins/notifications/sweet_alert.min.js"></script>
    <script id="sweet-alert" src="{{ asset('/vendor/limitlessmaterial') }}/global_assets/js/plugins/notifications/sweetalert2.min.js"></script>
    <script id="flash-msg" src="{{ asset('/vendor/limitlessmaterial') }}/assets/js/flash-message.js"></script>

    @stack('js')
</div>

