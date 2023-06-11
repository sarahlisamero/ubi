console.log("ok")
const glasses = document.querySelectorAll('.glass');
const loadingBar = document.querySelector('.loading-bar');
let counter = 0; // Counter variable to track the number of glasses clicked

glasses.forEach(glass => {
let moveAmount = 50;

glass.addEventListener('click', () => {
    glass.classList.add('right');
    counter++;
    console.log(counter);
    const widthPercentage = (counter / glasses.length) * 100; // Calculate the width percentage based on the number of glasses clicked
    loadingBar.style.width = `${widthPercentage}%`; // Update the width of the loading bar

    if (counter === 6) {
    // Send an AJAX request to update the score
    const xhr = new XMLHttpRequest();
    xhr.open('POST', 'update_score.php');
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
        console.log(xhr.responseText); // Optional: Log the response from the server
        }
    };
    xhr.send();
    }
});
});