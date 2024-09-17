const alertButton = document.getElementById("alert-button");
const changeColorButton = document.getElementById("change-color-button");
const text = document.getElementById("text");

alertButton.addEventListener("click", () => window.alert("AAAAA"));
console.log(alertButton);

changeColorButton.addEventListener("click", () => {
    console.log("teste");
    text.style.backgroundColor = "#000";
    text.style.color = "#fff";
});
