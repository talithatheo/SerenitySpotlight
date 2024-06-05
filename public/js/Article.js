// Get all read more buttons
const readMoreButtons = document.querySelectorAll('.btn');

// Add event listener to each read more button
readMoreButtons.forEach(button => {
    button.addEventListener('click', function() {
        // Get the parent article item
        const articleItem = this.parentElement;

        // Get the title and content of the article
        const title = articleItem.querySelector('h3').textContent;
        const content = articleItem.querySelector('.read-more-cont').innerHTML;

        // Set the title and content in the popup
        const popupBox = document.querySelector('.popup-box');
        const popupHeader = popupBox.querySelector('.popup-header h3');
        const popupBody = popupBox.querySelector('.popup-body');
        
        popupHeader.textContent = title;
        popupBody.innerHTML = content;

        // Open the popup
        popupBox.classList.add('open');
    });
});

// Close the popup when close button is clicked
const closeButton = document.querySelector('.popup-close-btn');
closeButton.addEventListener('click', function() {
    const popupBox = document.querySelector('.popup-box');
    popupBox.classList.remove('open');
});

// Close the popup when close icon (X) is clicked
const popupCloseIcon = document.querySelector('.popup-close-icon');
popupCloseIcon.addEventListener('click', function() {
    const popupBox = document.querySelector('.popup-box');
    popupBox.classList.remove('open');
});

// JavaScript to toggle the visibility of the options container
document.querySelector('.selected').addEventListener('click', function() {
    const optionsContainer = document.querySelector('.options-container');
    optionsContainer.classList.toggle('active');
});

// JavaScript to update the selected option
document.querySelectorAll('.option').forEach(option => {
    option.addEventListener('click', function() {
        const selected = document.querySelector('.selected');
        const label = this.querySelector('label').innerHTML;
        selected.innerHTML = label;
        document.querySelector('.options-container').classList.remove('active');
    });
});

document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('sharing-form');
    const selectBox = document.querySelector('input[name="category"]:checked');

    form.addEventListener('submit', function (event) {
        event.preventDefault(); // Hindari pengiriman formulir secara otomatis

        if (selectBox) {
            const selectedCategory = selectBox.value;
            const hiddenInput = document.createElement('input');
            hiddenInput.setAttribute('type', 'hidden');
            hiddenInput.setAttribute('name', 'category');
            hiddenInput.setAttribute('value', selectedCategory);

            form.appendChild(hiddenInput); // Sisipkan nilai ke dalam formulir
        }

        form.submit(); // Kirim formulir
    });
});