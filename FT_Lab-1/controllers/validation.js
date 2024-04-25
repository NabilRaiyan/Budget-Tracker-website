var form = document.querySelector('form');


function validateForm(){

    form.addEventListener('submit', (e)=>{
        e.preventDefault();
        console.log("Submitted");

    });
}