const mobileMenuButton = document.getElementById("mobile-menu-button");
const mobileMenu = document.getElementById("mobile-menu");
const sections = document.querySelectorAll('section');

mobileMenuButton.addEventListener("click", () => {
    mobileMenu.classList.toggle("hidden");
});
const header = document.querySelector("header");

window.addEventListener("scroll", () => {
    if (window.scrollY > 100) {
        header.classList.toggle("sticky", window, scrollY > 0);
        header.style.backgroundColor = "rgba(0, 0, 0, 0.8)";
    } else {
        header.style.backgroundColor = "transparent";
    }
});
// Smooth scroll for navigation
document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener("click", function (e) {
        e.preventDefault();
        // Remove active class from all navigation links
        // document.querySelectorAll("nav a").forEach((link) => {
        //     link.classList.remove("active");
        // });

        // Add active class to the clicked link
        // this.classList.add("active");

        const targetedSelection = document.querySelector(
            this.getAttribute("href")
        );
        const navHeight = document.querySelector("nav").offsetHeight;
        let extraPadding = 0;
        if (window.innerWidth >= 768) {
            extraPadding = 50;
        }
        window.scrollTo({
            top: targetedSelection.offsetTop - navHeight - extraPadding,
            behavior: "smooth",
        });
        // Reste url to root path

        if (window.location.hash) {
            window.location.replace(window.location.pathname);
        }
    });
});
function checkActiveSection() {
    const navHeight = document.querySelector("nav").offsetHeight;

    let scrollPosition = window.scrollY;
    let activeSection = null;
    let extraPadding = 0;


    document.querySelectorAll('section').forEach(section => {
        const sectionId = section.id;
        const top = section.offsetTop - navHeight - extraPadding;
        const bottom = top + section.offsetHeight;
        if (window.innerWidth >= 768) {
            extraPadding = 50;
        }
        // Check if the current scroll position is within the bounds of the section
        if (scrollPosition >= top && scrollPosition < bottom) {
            activeSection = sectionId;
        }
    });

    // Update the active link based on the active section
    document.querySelectorAll('nav a').forEach(link => {
        if (link.getAttribute('href') === `#${activeSection}`) {
            link.classList.add('active');
        } else {
            link.classList.remove('active');
        }
    });
}

// Call the function on scroll event
window.addEventListener('scroll', checkActiveSection);

// Call the function once on page load to initialize the active section
checkActiveSection();


// Initial check when the page loads
window.addEventListener('load', checkActiveSection);
