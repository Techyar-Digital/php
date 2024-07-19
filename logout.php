// Set the timeout period (in milliseconds)
const TIMEOUT = 10 * 60 * 1000; // 10 minutes

let logoutTimer;

// Function to reset the timer
const resetLogoutTimer = () => {
    // Clear the existing timer
    clearTimeout(logoutTimer);
    
    // Set a new timer
    logoutTimer = setTimeout(() => {
        // Redirect to logout page or perform logout action
        window.location.href = 'login.html;'; // Replace with your logout endpoint
    }, TIMEOUT);
};

// Event listeners to reset the timer on user activity
const eventsToMonitor = ['mousemove', 'mousedown', 'keypress', 'scroll', 'touchstart'];
eventsToMonitor.forEach(event => {
    document.addEventListener(event, resetLogoutTimer);
});

// Initialize the timer on page load
resetLogoutTimer();
