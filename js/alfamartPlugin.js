jQuery(function($) {

    $.fn.mandatoryPlugin = function() {
        return this.each(function() {
            $(this).css("background-color", "#0066CC");
        });
    };
    $.fn.mandatoryPluginID = function() {
        return this.each(function() {
            $(this).css("background-color", "#97B1FF");
        });
    };

    /* jQueryPlugin for Field Text Mandatory Readonly*/
    $.fn.textMandatoryReadOnly = function() {

        return this.each(function() {
            $(this).css("background-color", "#0066CC").prop("readonly", "true");
        });
    };



    /* jQueryPlugin for Field Free Text mandatory */
    $.fn.textMandatoryFree = function() {

        return this.each(function() {
            $(this).css("background-color", "#97B1FF");
        });
    };

    $.fn.isNotEmpty = function() {
        var isValid = true;
        this.each(function() {
            var obj = $(this);
            if (!obj.val()) {
                var label = $("label[for=" + obj.attr("id") + "]");
                var parent = obj.closest(".input").children(".error-message").html(label.html() + " cannot be blank");
                isValid = false;
            }
        });
        return isValid;
    };

    /* jQueryPlugin for Field Text Readonly*/
    $.fn.textReadOnly = function() {
        return this.each(function() {
            $(this).css("background-color", "#D9D9D9").prop("readonly", true);

        });
    };

    /* jQueryPlugin for Field Text to Uppercase*/
    $.fn.textUppercase = function() {
        return this.each(function() {
            $(this).css("text-transform", "uppercase");
        });
    };

    /* jQueryPlugin for Field Text to Lowercase*/
    $.fn.textLowercase = function() {
        return this.each(function() {
            $(this).css("text-transform", "lowercase");
        });
    };

    /* jQueryPlugin for Field Text to Capitalize*/
    $.fn.textCapitalize = function() {
        return this.each(function() {
            $(this).css("text-transform", "capitalize");
        });
    };

    $.fn.showRangeDate = function(startDate, endDate) {
        return  this.each(function() {
            if (!startDate || !endDate)
                return;

            var diff = new Date(endDate) - new Date(startDate);

            var days = diff / 1000 / 60 / 60 / 24;
            $(this).val(days);
        });
    };

});

function phonenumber(inputtxt)
{
    var phoneno = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{5})$/;
    var phoneno1 = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
    if (inputtxt.value.match(phoneno) || inputtxt.value.match(phoneno1))
    {
        return true;
    }
    else
    {
        alert("Not a valid Phone Number");
        return false;
    }
}