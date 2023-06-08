// Child selection
let childLabels = document.querySelectorAll('.child label');

for (let i = 0; i < childLabels.length; i++) {
  childLabels[i].addEventListener('click', function(e) {
    e.preventDefault();

    // Toggle child selection
    this.classList.toggle('label');
    this.classList.toggle('ghost');
    this.previousElementSibling.checked = !this.previousElementSibling.checked;
  });
}

// Time selection
let timeContainers = document.querySelectorAll('.time-container');

for (let i = 0; i < timeContainers.length; i++) {
  let checkbox = timeContainers[i].querySelector('input[type="checkbox"]');
  let label = timeContainers[i].querySelector('label');

  label.addEventListener('click', function(e) {
    e.preventDefault();

    // Uncheck all time checkboxes
    timeContainers.forEach(function(container) {
      container.querySelector('input[type="checkbox"]').checked = false;
      container.querySelector('label').classList.remove('color');
      container.querySelector('label').classList.add('color2');
    });

    checkbox.checked = true;
    label.classList.remove('color2');
    label.classList.add('color');
  });
}



let labels = document.querySelectorAll(".week label");

for (let i = 0; i < labels.length; i++) {
  labels[i].addEventListener("click", function(e) {
    e.preventDefault();

    let checkbox = document.getElementById(labels[i].getAttribute("for"));
    checkbox.checked = !checkbox.checked;

    for (let j = 0; j < labels.length; j++) {
      if (j !== i) {
        labels[j].classList.remove("color2");
        labels[j].classList.add("color");
      }
    }

    this.classList.remove("color");
    this.classList.add("color2");
  });
}







