let close = document.querySelector("#btn-error-close")
let errorMsg = document.querySelector("#msg-error")

close.addEventListener("click", ()=>{
    errorMsg.style.display = "none";
})