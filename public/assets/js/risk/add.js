$(document).ready(function() {

    // Show the modal when the "Add New RiskOwner" button is clicked
        $('#addRiskOwnerModalBtn').click(function() {
            $('#addRiskOwnerModal').modal('show');
        });

      // Show the modal when the "Add New RiskOwner" button is clicked
      $('#addRiskOwnerModalBtn').click(function () {
        $('#addRiskOwnerModal').modal('show');
      });

      $('#saveButton').click(function () {
        // Disable the save button and show the loading button
        $('#loadingButton').removeClass('d-none');

        // Validate the form
        var form = $('#addRiskOwnerForm')[0];
        if (!form.checkValidity()) {
          form.classList.add('was-validated');
          // Scroll to the first invalid field
          $('html, body').animate({
            scrollTop: $('.form-control:invalid').first().offset().top - 50
          }, 500);
          // Enable the save button and hide the loading button
          $('#loadingButton').addClass('d-none');
          return;
        }

        // Get the form data
        var name = $('#name').val();
        var title = $('#title').val();
        var email = $('#email').val();
        var role = $('#role').val();

        // Create a data object with the form data and CSRF token
        var data = {
          _token: $('meta[name="csrf-token"]').attr('content'),
          name: name,
          title: title,
          email: email,
          role: role
        };

        // Delay in milliseconds (2 seconds in this case)
        setTimeout(function () {
        // Submit the form data to the specified URL
        $.ajax({
          url: '/risks',
          type: 'POST',
          data: data,
          success: function (response) {

            
              form.reset();
              form.classList.remove('was-validated');
              $('.invalid-feedback').empty();
              $('#addRiskOwnerModal').modal('hide');

                location.reload();
           
          },
          error: function (xhr, status, error) {
            // Handle the error response here
            console.log(xhr.responseText);

            // Enable the save button and hide the loading button
            $('#loadingButton').addClass('d-none');

            // Handle validation errors
            if (xhr.status === 422) {
              var errors = xhr.responseJSON.errors;
              // Clear previous error messages
              $('.invalid-feedback').empty();
              // Display error messages for each field
              $.each(errors, function (field, messages) {
                var inputField = $('#' + field);
                inputField.addClass('is-invalid');
                var errorContainer = inputField.next('.invalid-feedback');
                errorContainer.html(messages.join('<br>'));
              });
            }
          }
        });
      }, 2000);

      });

});