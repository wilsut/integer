$(document).ready(function () {
  $('.collapsible').collapsible({
    accordion: false
  });

  // $('.modal-trigger').leanModal();

  $(document).on('click', '.delete-option', function () {
    $(this).parent().parent(".input-field").remove();
  });

  // will replace .form-g class when referenced
  var material = '<div class="form-group row input-field">' +
    '<label for="option" class="col-sm-2 col-form-label">Options</label>' +
    '<div class="col-sm-10">' +
    '<input class="form-control" name="option[]" id="option[]" type="text" placeholder="Option">' +
    '<span style="float:right; cursor:pointer;" class="delete-option">Delete</span>' +
    '<span class="add-option" style="cursor:pointer;">Add Another</span>' +
    '</div>';

  // for adding new option
  $(document).on('click', '.add-option', function () {
    $(".form-g").append(material);
  });
  // allow for more options if radio or checkbox is enabled
  $(document).on('change', '#type', function () {
    var selected_option = $('#type :selected').val();
    if (selected_option === "radio" || selected_option === "checkbox") {
      $(".form-g").html(material);
    } else {
      $(".input-g").remove();
    }
  });
});
