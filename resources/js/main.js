const btn = document.querySelector(".dark i");
const container = document.querySelector(".dark");

const body = document.body;

btn.addEventListener("click", () => {
    if (body.classList.contains("dark")) {
        body.classList.remove("dark");
        body.classList.add("light");
        container.style.background = "#ffffff";
        btn.style.transform = "";
        btn.style.color = "#2f3542";
        container.style.border = "1px solid #2f3542";
    } else {
        body.classList.remove("light");
        body.classList.add("dark");
        container.style.background = "#2f3542";
        btn.style.color = "#ffffff";
        container.style.border = "1px solid #ffffff";
        btn.style.transform = "translateX(18px)";
    }
});
