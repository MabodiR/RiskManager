$(document).ready(function() {

    var riskOwnerId;
    // Event listener for the "view" button click
    $('.view-riskOwner-btn').click(function() {
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
                $('#viewname').val(riskOwner.name);
                $('#viewtitle').val(riskOwner.title);
                $('#viewemail').val(riskOwner.email);
                $('#viewrole').val(riskOwner.role);

                // Show the modal
                $('#viewRiskOwnerModal').modal('show');
            },
            error: function(xhr, status, error) {
                // Handle error
                console.error(error);
            }
        });
    });

});