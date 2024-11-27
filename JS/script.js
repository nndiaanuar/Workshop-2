// Get the sidebar and the toggle button elements
var sidebar = document.querySelector('.sidebar');
var sidebarToggle = document.getElementById('sidebarToggle');

// Ensure sidebar is initially closed (set width to 0)
sidebar.style.width = "0";

// Toggle the sidebar when the button is clicked
sidebarToggle.addEventListener('click', function() {
    if (sidebar.style.width === "250px") {
        sidebar.style.width = "0";  // Close the sidebar
    } else {
        sidebar.style.width = "250px";  // Open the sidebar
    }
});
