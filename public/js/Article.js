document.addEventListener('DOMContentLoaded', function() {
    // Read more button functionality
    const readMoreButtons = document.querySelectorAll('.btn');
    readMoreButtons.forEach(button => {
        button.addEventListener('click', function() {
            const articleItem = this.parentElement;
            const title = articleItem.querySelector('h3').textContent;
            const content = articleItem.querySelector('.read-more-cont').innerHTML;

            const popupBox = document.querySelector('.popup-box');
            const popupHeader = popupBox.querySelector('.popup-header h3');
            const popupBody = popupBox.querySelector('.popup-body');
            
            popupHeader.textContent = title;
            popupBody.innerHTML = content;

            popupBox.classList.add('open');
        });
    });

    // Close popup functionality
    const closeButton = document.querySelector('.popup-close-btn');
    closeButton.addEventListener('click', function() {
        const popupBox = document.querySelector('.popup-box');
        popupBox.classList.remove('open');
    });

    const popupCloseIcon = document.querySelector('.popup-close-icon');
    popupCloseIcon.addEventListener('click', function() {
        const popupBox = document.querySelector('.popup-box');
        popupBox.classList.remove('open');
    });

    // Select box functionality
    const selected = document.querySelector('.selected');
    const optionsContainer = document.querySelector('.options-container');
    const optionsList = document.querySelectorAll('.option');
    const hiddenInput = document.getElementById('category-input');

    selected.addEventListener('click', function() {
        optionsContainer.classList.toggle('active');
    });

    optionsList.forEach(function(option) {
        option.addEventListener('click', function() {
            selected.textContent = this.textContent;
            hiddenInput.value = this.getAttribute('data-value');
            optionsContainer.classList.remove('active');
        });
    });

    // Form submission functionality
    const form = document.getElementById('sharing-form');
    form.addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent automatic form submission
        const selectedCategory = hiddenInput.value;
        if (selectedCategory) {
            form.submit(); // Submit the form
        } else {
            alert("Please select a category.");
        }
    });
});