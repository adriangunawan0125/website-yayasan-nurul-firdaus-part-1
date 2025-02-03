// animasi pengajar
$(document).ready(function () {
    $('.slider').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        infinite: true,
        arrows: false,
        dots: false,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });

    $(".show-more-btn").click(function () {
        $('.slider').slick('slickSetOption', 'slidesToShow', 4, true);
        $(this).fadeOut(); 
    });
});

document.addEventListener("DOMContentLoaded", () => {
    const animatedSections = document.querySelectorAll(".animated-section, .pengajar-section, .hubungi-kami-section, .berita-section");

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add("visible");
            } else {
                entry.target.classList.remove("visible"); 
            }
        });
    }, { threshold: 0.3 });

    animatedSections.forEach(section => observer.observe(section));
});

// pengajar, hubungi, berita
document.addEventListener("DOMContentLoaded", function () {
    const animatedSections = document.querySelectorAll(
        ".pengajar-section, .hubungi-kami-section, .berita-section"
    );

    const onScroll = () => {
        animatedSections.forEach((section) => {
            const sectionTop = section.getBoundingClientRect().top;
            const triggerBottom = window.innerHeight * 0.8;

            if (sectionTop < triggerBottom) {
                section.classList.add("visible");
            } else {
                section.classList.remove("visible"); 
            }
        });
    };

    window.addEventListener("scroll", onScroll);
    onScroll();
});

// lokasi & temukan
document.addEventListener("DOMContentLoaded", function () {
    const sections = document.querySelectorAll(".lokasi-kami-section, .temukan-kami-section");

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add("show");
            } else {
                entry.target.classList.remove("show"); 
            }
        });
    }, { threshold: 0.3 });

    sections.forEach(section => {
        if (section) {
            observer.observe(section);
        }
    });
});