jQuery(document).ready(function ($) {
  $(".clap").on("click", function () {
    var post_id = $(this).attr("id"); // Getting the post ID

    // Check if the post_id exists in local storage
    if (localStorage.getItem("voted_" + post_id)) {
      alert("You have already voted for this post.");
      return; // Stop execution if they've already voted
    }

    $.ajax({
      type: "POST",
      url: ajax_object.ajaxurl,
      data: {
        action: "handle_request", // Your WP add_action hook
        post_id: post_id,
        ajaxnonce: ajax_object.ajaxnonce, // Sending nonce for security verification
      },
      success: function (response) {
        if (response.success) {
          jQuery(".clap-count").text(response.data);
          localStorage.setItem("voted_" + post_id, true);
        } else {
          alert("Failed to update. Please try again.");
        }
      },
      error: function () {
        // If the AJAX call itself fails
        alert("Failed to process your request. Please try again.");
      },
    });
  });
});
