$(document).ready(function() {

    // show font add form
    $("#add-form-show").click(function () {
        $("#btn-add-form-show").hide();
        $("#add-link-form").show();
    });
    //hide font add
    $("#cancel").click(function () {
        $("#btn-add-form-show").show();
        $("#add-link-form").hide();
    });
});