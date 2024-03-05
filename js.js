
const formFieldsets = document.querySelectorAll('#msform fieldset');
const progressSteps = document.querySelectorAll('#progressbar li');
let currentFieldsetIndex = 0;

document.querySelectorAll('.next').forEach(button => {
    button.addEventListener('click', function() {
        if (currentFieldsetIndex < formFieldsets.length - 1) {
            formFieldsets[currentFieldsetIndex].style.display = 'none';
            progressSteps[currentFieldsetIndex].classList.remove('active');
            currentFieldsetIndex++;
            formFieldsets[currentFieldsetIndex].style.display = 'block';
            progressSteps[currentFieldsetIndex].classList.add('active');
        }
    });
});

document.querySelectorAll('.previous').forEach(button => {
    button.addEventListener('click', function() {
        if (currentFieldsetIndex > 0) {
            formFieldsets[currentFieldsetIndex].style.display = 'none';
            progressSteps[currentFieldsetIndex].classList.remove('active');
            currentFieldsetIndex--;
            formFieldsets[currentFieldsetIndex].style.display = 'block';
            progressSteps[currentFieldsetIndex].classList.add('active');
        }
    });
});



document.getElementById('profile-tab').addEventListener('click', function() {
    document.getElementById('profile-content').style.display = 'block';
    document.getElementById('settings-content').style.display = 'none';
});

document.getElementById('settings-tab').addEventListener('click', function() {
    document.getElementById('profile-content').style.display = 'none';
    document.getElementById('settings-content').style.display = 'block';
});

document.addEventListener("DOMContentLoaded", function () {
    var selectElement = document.getElementById("domaine");

    for (var i = 0; i < selectElement.options.length; i++) {
        if (selectElement.options[i].disabled) {
            selectElement.options[i].style.display = "none";
        }
    }
});

document.addEventListener("DOMContentLoaded", function () {
    var preferencesLink = document.getElementById("preferences-link");
    var preferencesMenu = document.getElementById("preferences-menu");

    preferencesLink.addEventListener("click", function (e) {
        e.preventDefault();
        preferencesMenu.style.display = (preferencesMenu.style.display === "block") ? "none" : "block";
    });
});

function showMoreInfo(eventId) {
    var moreInfoSection = document.getElementById('more-info-' + eventId);
    if (moreInfoSection.style.display === 'none') {
        moreInfoSection.style.display = 'block';
    } else {
        moreInfoSection.style.display = 'none';
    }
}
