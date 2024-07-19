document.addEventListener("DOMContentLoaded", function() {
    const formContainer = document.querySelector('.form-container');
    const randomIndex = Math.floor(Math.random() * 3) + 1; // Generate a random number between 1 and 2

    // Set background image based on randomIndex
    formContainer.style.backgroundImage = `url("./img/form-bg-${randomIndex}.jpeg")`;
});
