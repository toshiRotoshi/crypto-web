// header

const bar = document.getElementById("bar");
const nav = document.getElementById("nav");

bar.addEventListener("click", (e) => {
  const icon = e.target.getAttribute("class");
  if (icon == "fa-solid fa-bars") {
    e.target.setAttribute("class", "fa-solid fa-xmark");
  } else {
    e.target.setAttribute("class", "fa-solid fa-bars");
  }
  nav.classList.toggle("showNav");
});

// carousel
const carouselContainer = document.querySelector(".carouselContainer");
const eachCarousel = document.querySelector(".eachCarousel").clientWidth;
const allEachCarousel = document.querySelectorAll(".eachCarousel");
const allIndicator = document.querySelectorAll(".indicator");

const slideCarousel = (index) => {
  for (let x = 0; x < allEachCarousel.length; x++) {
    if (x === index) {
      allEachCarousel[x].classList.add("eachCarouselBorder");
      allIndicator[x].classList.add("activeIndicator");
    } else {
      allEachCarousel[x].classList.remove("eachCarouselBorder");
      allIndicator[x].classList.remove("activeIndicator");
    }
  }
  carouselContainer.scrollLeft = index * (eachCarousel + 10);
  console.log(carouselContainer.scrollLeft);
};

//theme button

document.addEventListener("DOMContentLoaded", () => {
  const themeBtn = document.querySelector(".theme-btn");

  // Function to toggle the theme
  const toggleTheme = () => {
    document.body.classList.toggle("dark-theme");

    themeBtn.querySelector("span:first-child").classList.toggle("active");
    themeBtn.querySelector("span:last-child").classList.toggle("active");

    // Save the current theme choice to localStorage
    if (document.body.classList.contains("dark-theme")) {
      localStorage.setItem("theme", "dark");
    } else {
      localStorage.setItem("theme", "light");
    }
  };

  // Load theme preference from localStorage on page load
  const loadTheme = () => {
    const savedTheme = localStorage.getItem("theme");
    if (savedTheme === "dark") {
      document.body.classList.add("dark-theme");
      themeBtn.querySelector("span:first-child").classList.remove("active");
      themeBtn.querySelector("span:last-child").classList.add("active");
    } else {
      document.body.classList.remove("dark-theme");
      themeBtn.querySelector("span:first-child").classList.add("active");
      themeBtn.querySelector("span:last-child").classList.remove("active");
    }
  };

  // Initialize the theme on page load
  loadTheme();

  // Event listener for the theme button
  themeBtn.addEventListener("click", () => {
    console.log("Theme button clicked!"); // Debugging log
    toggleTheme();
  });
});
