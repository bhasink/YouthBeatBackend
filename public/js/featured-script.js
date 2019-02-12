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

        if (selectedOptions.length >= 5) {
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
