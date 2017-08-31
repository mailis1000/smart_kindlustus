$(document).ready(function() {
    var form = $("#insurance");
    form.validate({
        errorPlacement: function errorPlacement(error, element) { element.before(error); },
        rules: {
            confirm: {
                equalTo: "#password"
            }
        }
    });
    form.children("div").steps({
        headerTag: "h3",
        bodyTag: "section",
        transitionEffect: "slideLeft",
        stepsOrientation: "vertical",
        onStepChanging: function (event, currentIndex, newIndex)
        {
            form.validate().settings.ignore = ":disabled,:hidden";
            return form.valid();
        },
        onFinishing: function (event, currentIndex)
        {
            form.validate().settings.ignore = ":disabled";
            return form.valid();
        },
        onFinished: function (event, currentIndex)
        {
            alert("Submitted!");
        }
    });
    
    var isFieldsVisible = function (fieldId, hideOrShow) {
            $(fieldId).each(function (index, item) {
                if (hideOrShow) {
                    $(item).parent().removeClass('hiddendiv')
                } else {
                    $(item).parent().addClass('hiddendiv')
                }

            });
        },
        personalFields = [
            '#personal-code',
            '#personal-name',
            '#first-name',
            '#last-name',
            '#personal-email'],
        companyFields = [
            '#company-code',
            '#company-name',
            '#company-email'],
        contactCountryFields = ['#contact-state'],
        policyAddressFields = [
            '#policy-country',
            '#policy-state',
            '#policy-county',
            '#policy-city',
            '#policy-street',
            '#policy-post-code'],
        policyCountryFields = ['#policy-state'];


    $('form select, form input').on('change', function () {

        var $this = $(this),
            isValueTrue = function (value, id) {
                if ($this.val() === value && $this.attr('id') === id) {
                    return true
                }
            };
         /*
         * If some form fields share same value then
         * add $this.attr('id') check also
          */
        if (isValueTrue('1', 'client-type')) {
            isFieldsVisible(companyFields, false);
            isFieldsVisible(personalFields, true);
        } else if (isValueTrue('2', 'client-type')) {
            isFieldsVisible(personalFields, false);
            isFieldsVisible(companyFields, true);
        }
        if (isValueTrue('1', 'contact-country')) {
            isFieldsVisible(contactCountryFields, false);
        } else if (!isValueTrue('1', 'contact-country')) {
            isFieldsVisible(contactCountryFields, true);
        }
        if ($this.is(":checked") && $this.attr('id') === 'policy-address') {
            isFieldsVisible(policyAddressFields, true);
        } else if (!$this.is(":checked") && $this.attr('id') === 'policy-address') {
            isFieldsVisible(policyAddressFields, false);
        }
        if (isValueTrue('1', 'policy-country')) {
            isFieldsVisible(policyCountryFields, false);
        } else if (!isValueTrue('1', 'policy-country') && $this.is(":checked") && $this.attr('id') === 'policy-address') {
            isFieldsVisible(policyCountryFields, true);
        }

    });

    $.getJSON( "assets/js/tsconfig.json", function( data ) {
        //console.log( "JSON Data: " + data);
        console.log(data.model);
        $.each(data.model, function(key, val) {
            console.log(key)
        });

    });

    $('select').material_select();
});

