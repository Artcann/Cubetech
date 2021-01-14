document.addEventListener("DOMContentLoaded", ()=>{
    const rows = document.querySelectorAll("tr[data-href]");

    rows.forEach(row =>{
        row.addEventListener("click", ()=> {
            window.location.href=row.dataset.href;
        });
    });
});

function openForm() {
    document.getElementById("myForm").style.display = "block";
}

function closeForm() {
    document.getElementById("myForm").style.display = "none";
}