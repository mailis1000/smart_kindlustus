$(document).ready(function () {
    var form = $("#insurance");
    form.validate({
        errorPlacement: function errorPlacement(error, element) {
            element.before(error);
        }
    });
    form.children("div").steps({
        headerTag: "h3",
        bodyTag: "section",
        transitionEffect: "slideLeft",
        stepsOrientation: "vertical",
        titleTemplate: "#index#",
        onStepChanging: function (event, currentIndex, newIndex) {
            form.validate().settings.ignore = ":disabled,:hidden";
            return form.valid();
        },
        onFinishing: function (event, currentIndex) {
            form.validate().settings.ignore = ":disabled,:hidden";
            return form.valid();
        },
        onFinished: function (event, currentIndex) {
            $.getScript('./assets/js/createJSON.js', function () {
                var dataer = createJSON();
                $.ajax({
                    type: "POST",
                    success: function () {
                        var finalData = JSON.stringify(dataer);
                        alert(finalData);
                    }
                });
            });
        }
    });

    $.getScript('./assets/js/form.js');

    $('select').material_select();
});

