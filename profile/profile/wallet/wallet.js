const chart = document.querySelector('#chart').getContext('2d');

// create a new chart instance //
new Chart(chart, {
    type: 'line',
    data: {
        labels: ['Jan', 'Feb', 'March', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec', 'Jan', 'Feb', 'Mart', 'Apr'],

        datasets: [
            {
                label: 'GOLD',
                data: [1796, 1908, 1936, 1895, 1836, 1807, 1765, 1710, 1660, 1632, 1768, 1822, 1928, 1881],
                borderColor: 'green',
                borderWidth: 2
            },
            {
                label: 'ETH',
                data: [2688, 2922, 3282, 2728, 1940, 1071, 1679, 1554, 1328, 1572, 1294, 1194, 1585, 1677],
                borderColor: 'blue',
                borderWidth: 2
            }
        ]
    },
    options: {
        responsive: true
    }
})

// show or hide sidebar //

const menuBtn = document.querySelector('#menu-btn');
const closeBtn = document.querySelector('#close-btn');
const sidebar = document.querySelector('aside');

menuBtn.addEventListener('click', () => {
    sidebar.style.display = 'block';
})
closeBtn.addEventListener('click', () => {
    sidebar.style.display = 'none';
})

//theme button

document.addEventListener('DOMContentLoaded', () => {
    const themeButton = document.querySelector('.theme-btn');
    const currentTheme = localStorage.getItem('theme');

    // Check the saved theme and apply it
    if (currentTheme) {
        document.body.classList.toggle('dark-theme', currentTheme === 'dark');
    }

    // Add click event listener for theme toggle
    themeButton.addEventListener('click', () => {
        document.body.classList.toggle('dark-theme');

        // Save the current theme to localStorage
        if (document.body.classList.contains('dark-theme')) {
            localStorage.setItem('theme', 'dark');
        } else {
            localStorage.setItem('theme', 'light');
        }
    });
});
