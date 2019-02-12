<!-- jQuery -->
<script src="{{url('/')}}/vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="{{url('/')}}/vendors/bootstrap/dist/js/bootstrap.min.js"></script>

<!---->
<script src="{{url('/')}}/vendors/jszip/dist/jszip.min.js"></script>
<script src="{{url('/')}}/vendors/pdfmake/build/pdfmake.min.js"></script>
<script src="{{url('/')}}/vendors/pdfmake/build/vfs_fonts.js"></script>

<script src="{{url('/')}}/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="{{url('/')}}/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="{{url('/')}}/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{url('/')}}/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
<script src="{{url('/')}}/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="{{url('/')}}/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="{{url('/')}}/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
{{--<script src="{{url('/')}}/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>--}}
{{--<script src="{{url('/')}}/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>--}}
<script src="{{url('/')}}/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{url('/')}}/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
{{--<script src="{{url('/')}}/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>--}}

<!-- NProgress -->
{{--<script src="{{url('/')}}/vendors/nprogress/nprogress.js"></script>--}}
<!-- bootstrap-progressbar -->
<script src="{{url('/')}}/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>


<!-- Custom Theme Scripts -->
<script src="{{url('/')}}/build/js/custom.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.min.js"></script>

<script>
    jQuery('#soft_skill_list').multiselect({
        enableFiltering: true,
        maxHeight:400,
        enableCaseInsensitiveFiltering:true,
        nonSelectedText: 'Featured Internship *',
        numberDisplayed: 2,
        selectAll: false,
        onChange: function(option, checked) {
            // Get selected options.
            var selectedOptions = jQuery('#soft_skill_list option:selected');

            if (selectedOptions.length >= 6) {
                // Disable all other checkboxes.
                var nonSelectedOptions = jQuery('#soft_skill_list option').filter(function() {
                    return !jQuery(this).is(':selected');
                });

                nonSelectedOptions.each(function() {
                    var input = jQuery('input[value="' + jQuery(this).val() + '"]');
                    input.prop('disabled', true);
                    input.parent('li').addClass('disabled');
                });
            }
            else {
                // Enable all checkboxes.
                jQuery('#soft_skill_list option').each(function() {
                    var input = jQuery('input[value="' + jQuery(this).val() + '"]');
                    input.prop('disabled', false);
                    input.parent('li').addClass('disabled');
                });
            }
        }});


    /*Add This to Block SHIFT Key*/
    var shiftClick = jQuery.Event("click");
    shiftClick.shiftKey = true;

    $(".multiselect-container li *").click(function(event) {
        if (event.shiftKey) {
            //alert("Shift key is pressed");
            event.preventDefault();
            return false;
        }
        else {
            //alert('No shift hey');
        }
    });

</script>

</body>
</html>
