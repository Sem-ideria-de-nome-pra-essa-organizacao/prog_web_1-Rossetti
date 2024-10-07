{
    const alertButton = document.getElementById("alert-button");
    const changeColorButton = document.getElementById("change-color-button");
    const hoverButton = document.getElementById("hover-button");
    const text = document.getElementById("text");
    const animationButton = document.getElementById("animation-button");

    alertButton.addEventListener("click", () => window.alert("AAAAA"));

    hoverButton.addEventListener("mousemove", () => {
        text.style.backgroundColor = "#ff0";
        text.style.color = "#000";
        text.innerHTML = "HOVER";
    });

    changeColorButton.addEventListener("click", () => {
        text.style.backgroundColor = "#000";
        text.style.color = "#fff";
        text.innerHTML = "Click";
    });
    animationButton.addEventListener("click", () => {
        Animation();
    });

    const Animation = () => {
        let id = null;
        const elem = document.getElementById("animate");
        let pos = 0;
        clearInterval(id);
        id = setInterval(frame, 5);
        function frame() {
            if (pos == 1500) {
                clearInterval(id);
            } else {
                pos++;
                elem.style.top = pos + "px";
                elem.style.left = pos + pos + pos + "px";
            }
        }
    };
}
