const arrows = document.querySelectorAll(".arrow");
const movieLists = document.querySelectorAll(".movie-list");
arrows.forEach((arrow, i) => {
    const itemNumber = movieLists[i].querySelectorAll("img").length;
    let clickCounter = 0;
    arrow.addEventListener("click", () => {
        const ratio = Math.floor(window.innerWidth / 270);
        clickCounter++;
        if (itemNumber - (4 + clickCounter) + (4 - ratio) >= 0) {
            movieLists[i].style.transform = `translateX(${
                movieLists[i].computedStyleMap().get("transform")[0].x.value -
                300
            }px)`;
        } else {
            movieLists[i].style.transform = "translateX(0)";
            clickCounter = 0;
        }
    });

    console.log(Math.floor(window.innerWidth / 270));
});

//TOGGLE
const ball = document.querySelector(".toggle-ball");
const items = document.querySelectorAll(
    ".container,.movie-list-title,.navbar-container,.sidebar,.left-menu-icon,.toggle"
);

ball.addEventListener("click", () => {
    items.forEach((item) => {
        item.classList.toggle("active");
    });
    ball.classList.toggle("active");
});

// Navbar Klik
document.addEventListener("DOMContentLoaded", () => {
    const menuItems = document.querySelectorAll(".menu-list-item");

    menuItems.forEach((item) => {
        item.addEventListener("click", () => {
            const targetText = item.textContent.trim().toLowerCase(); // Mengambil teks item dan mengubahnya menjadi lowercase
            const targetElement = document.getElementById(targetText); // Mencari elemen dengan id yang sama dengan teks item

            if (targetElement) {
                targetElement.scrollIntoView({ behavior: "smooth" }); // Scroll ke elemen target dengan animasi smooth
            }
        });
    });
});

// Drop Down Profile
document.addEventListener("DOMContentLoaded", () => {
    const profileTextContainer = document.querySelector(
        ".profile-text-container"
    );
    const dropdownMenu = document.querySelector(".dropdown-menu");

    profileTextContainer.addEventListener("click", () => {
        // Toggle visibility of the dropdown menu
        dropdownMenu.style.display =
            dropdownMenu.style.display === "block" ? "none" : "block";
    });

    // Optional: Close dropdown when clicking outside
    document.addEventListener("click", (event) => {
        if (
            !profileTextContainer.contains(event.target) &&
            !dropdownMenu.contains(event.target)
        ) {
            dropdownMenu.style.display = "none";
        }
    });
});

// Icon Search
// Tampilkan search bar saat ikon pencarian diklik
document.querySelector(".fa-search").addEventListener("click", function () {
    document.querySelector(".search-container").style.display = "flex"; // Show search bar
    document.getElementById("search").focus(); // Fokuskan pada input
});

// Tutup search bar ketika mengklik di luar input atau search container
document.addEventListener("click", function (event) {
    const searchContainer = document.querySelector(".search-container");
    if (
        !event.target.closest(".search-container") &&
        !event.target.classList.contains("fa-search")
    ) {
        searchContainer.style.display = "none"; // Hide search bar
    }
});

// Filter movie titles berdasarkan input search
const searchInput = document.getElementById("search");
const movieTitles = document.querySelectorAll(".movie-list-item-title");

searchInput.addEventListener("input", function () {
    const query = searchInput.value.toLowerCase();

    movieTitles.forEach(function (title) {
        const movieTitle = title.textContent.toLowerCase();
        if (movieTitle.includes(query)) {
            title.closest(".movie-list-item").style.display = "block"; // Tampilkan film yang sesuai
        } else {
            title.closest(".movie-list-item").style.display = "none"; // Sembunyikan film yang tidak sesuai
        }
    });
});

// search bar hilang saat di enter
document.addEventListener("DOMContentLoaded", function () {
    const searchInput = document.getElementById("search");
    const movieItems = document.querySelectorAll(".movie-list-item");
    const searchContainer = document.querySelector(".search-container"); // Ambil container input search

    // Fungsi untuk mencari film berdasarkan judul
    function searchMovies() {
        const searchText = searchInput.value.toLowerCase();

        movieItems.forEach((item) => {
            const title = item
                .querySelector(".movie-list-item-title")
                .textContent.toLowerCase();

            // Jika film cocok dengan pencarian, tampilkan; jika tidak, sembunyikan
            if (title.includes(searchText)) {
                item.style.display = "block";
            } else {
                item.style.display = "none";
            }
        });

        // Sembunyikan search input setelah pencarian
        searchContainer.style.display = "none";
    }

    // Event listener ketika tombol Enter ditekan di input search
    searchInput.addEventListener("keydown", function (event) {
        if (event.key === "Enter") {
            searchMovies(); // Panggil fungsi pencarian
        }
    });
});
