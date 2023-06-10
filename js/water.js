const glasses = document.querySelectorAll('.glass');
const loadingBar = document.querySelector('.loading-bar');
let counter = 0; // Counter variable to track the number of glasses clicked

glasses.forEach(glass => {
  let moveAmount = 50;

  glass.addEventListener('click', () => {
    glass.classList.add('right');
    counter++;
    const widthPercentage = (counter / glasses.length) * 100; // Calculate the width percentage based on the number of glasses clicked
    loadingBar.style.width = `${widthPercentage}%`; // Update the width of the loading bar
  });
});
