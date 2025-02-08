// Toggle Colors Switcher
const styleSwitcherToggle = document.querySelector(".style-switcher-toggler");
const styleSwitcher = document.querySelector(".style-switcher");
const mainContainer = document.querySelector(".main-container");

styleSwitcherToggle.addEventListener("click", () => {
    styleSwitcher.classList.toggle("open");
});

// Hide style switcher on scroll
mainContainer.addEventListener("scroll", () => {
    if (styleSwitcher.classList.contains("open")) {
        styleSwitcher.classList.remove("open");
    }
});

// Switch Colors
const alternateStyles = document.querySelectorAll(".alternate-style"); 

window.setActiveStyle = function (color) { 
    alternateStyles.forEach((style) => {
        if (style.getAttribute("title") === color) {
            style.removeAttribute("disabled"); 
        } else {
            style.setAttribute("disabled", "true"); 
        }
    });
};

// Day Night Mode
const dayNight = document.querySelector(".day-night");
dayNight.addEventListener("click", () => {
    dayNight.querySelector(".icon").classList.toggle("fa-sun");
    dayNight.querySelector(".icon").classList.toggle("fa-moon");
    document.body.classList.toggle("dark");
})

window.addEventListener("load", () => {
    if (document.body.classList.contains("dark")) {
        dayNight.querySelector(".icon").classList.add("fa-sun");

    } else {
        dayNight.querySelector(".icon").classList.add("fa-moon");
    }
})

// Select all nav links
const navLinks = document.querySelectorAll(".nav li a");

// Function to handle active link on scroll
function handleScroll() {
    const sections = document.querySelectorAll("section");
    const scrollY = mainContainer.scrollTop; // Use scrollTop for the main container

    sections.forEach((section) => {
        const sectionTop = section.offsetTop - mainContainer.offsetTop - 70; // Adjust based on header or padding
        const sectionHeight = section.offsetHeight;

        if (scrollY >= sectionTop && scrollY < sectionTop + sectionHeight) {
            const id = section.getAttribute("id");
            // Remove 'active' class from all links
            navLinks.forEach((link) => link.classList.remove("active"));
            // Add 'active' class to the corresponding link
            const activeLink = document.querySelector(`.nav li a[href="#${id}"]`);
            if (activeLink) activeLink.classList.add("active");
        }
    });
}

// Add scroll event listener to the main container
mainContainer.addEventListener("scroll", handleScroll);

// Add click behavior to set active manually when clicked
navLinks.forEach((link) => {
    link.addEventListener("click", () => {
        // Remove 'active' class from all links
        navLinks.forEach((nav) => nav.classList.remove("active"));
        // Add 'active' class to the clicked link
        link.classList.add("active");
    });
});
