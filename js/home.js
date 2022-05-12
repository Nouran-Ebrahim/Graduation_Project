let about = document.getElementById("about_sec"),
    guid = document.getElementById("guid_sec"),
    memb = document.getElementById("memb_sec");

about.addEventListener("click", () => {
    about.style.color = "white";
    guid.style.color = "black";
    memb.style.color = "black";
});
guid.addEventListener("click", () => {
    about.style.color = "black";
    guid.style.color = "white";
    memb.style.color = "black";
});
memb.addEventListener("click", () => {
    about.style.color = "black";
    guid.style.color = "black";
    memb.style.color = "white";
});
let secs = document.getElementsByTagName("section"),
    link = [about, guid, memb];
const interSection = new IntersectionObserver(function(entries) {
    entries.forEach(function(entry) {
        if (entry.isIntersecting) {
            link[Array.prototype.indexOf.call(secs, entry.target)].style.color = "white";
        } else {
            link[Array.prototype.indexOf.call(secs, entry.target)].style.color = "black";

        }
    })
}, {
    threshold: 0.4,
    rootMargin: '0%'
})
window.addEventListener('scroll', function() {
    for (const section of secs) {
        interSection.observe(section);
    }
})