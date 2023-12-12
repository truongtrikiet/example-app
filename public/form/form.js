let isUsernameValid = () => {
    const usernameRegex = /^[a-zA-Z][a-zA0-9]{3,32}/gi;
    return usernameRegex.test(usernameRef.value);
};

let isPasswordValid = () => {
    const passwordRegex = /^(?=\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[a-zA-Z]).{8,}$/gm;
    return passwordRegex.test(passwordRef.value);
};
// username
usernameRef.addEventListener("input", (massageRef) => {
    if (!isUsernameValid()) {
        massageRef.style.visibility = "hidden";
        usernameRef.style.csstext = "border-color: ; background-color: ";
    } else {
        usernameRef.style.cssText = "border-color: ; background-color: ";
    }
});

// password
passwordRef.addEventListener("input", () => {
    if (!isPasswordValid()) {
        messageRef.style.visibility = "hidden";
        passwordRef.style.cssText ="border-color: ; background-color: ";
    } else {
        passwordRef.style.cssText ="border-color: ; background-color: ";
    }
});

submitBtn.addEventListener("mouseover", () => {
    if (!isUsernameValid() || !isPasswordValid()) {
        let container = document.querySelector("container").getBoundingClientRect();
        let submitRect = submitBtn.getBoundingClientRect();
        let offset = submitRect.left - containerRect.left;
        console.log(offset <= 100)
        if (offset <= 100){
            submitBtn.style.transform = "translateX(16.25em)";
        } else {
            submitBtn.style.transform = "translateX(0em)";
        }
    }
});

submitBtn.addEventListener("click", () => {
    submitBtn.style.visibility = "visible";
});
