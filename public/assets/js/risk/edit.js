$(document).ready(function() {

    var riskOwnerId;
    // Event listener for the "Edit" button click
    $('.edit-riskOwner-btn').click(function() {
        // Get the risk owner ID from the data attribute
        riskOwnerId = $(this).data('riskowner-id');
        
        // Perform AJAX request to fetch the risk owner data
        $.ajax({
            url: '/risks/' + riskOwnerId,
            type: 'GET',
            success: function(response) {
                // Extract the risk owner data from the nested structure
                var riskOwner = response.risk;
                                
                // Populate the form fields with the retrieved data
                $('#editname').val(riskOwner.name);
                $('#edittitle').val(riskOwner.title);
                $('#editemail').val(riskOwner.email);
                $('#editrole').val(riskOwner.role);

                // Show the modal
                $('#editRiskOwnerModal').modal('show');
            },
            error: function(xhr, status, error) {
                // Handle error
                console.error(error);
            }
        });
    });
    // Event listener for the "Update" button click
    $('#editButton').click(function() {
        // Disable the button to prevent multiple clicks
        $(this).prop('disabled', true);

        // Perform AJAX request to update the risk owner
        $.ajax({
            url: '/risks/' + riskOwnerId,
            type: 'PUT',
            data: $('#editRiskOwnerForm').serialize(), // Serialize form data
            success: function(response) {
                // Close the modal
                $('#editRiskOwnerModal').modal('hide');
                location.reload();
            },
            error: function(xhr, status, error) {
                // Handle error
                console.error(error);
            },
            complete: function() {
                // Enable the button after AJAX request is complete
                $('#editButton').prop('disabled', false);
            }
        });
    });
});