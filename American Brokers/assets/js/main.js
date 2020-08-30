AOS.init();
let irArriba = document.getElementById('irArriba');
let imgIrArriba = document.getElementById('imgIrArriba');

window.onscroll = function () {
    if (document.documentElement.scrollTop > 200) {
        irArriba.classList.remove('d-none')
    }else{
        irArriba.classList.add('d-none')
    }
}

imgIrArriba.addEventListener('click', () => {
    window.scrollTo({
        top:0,
        behavior: "smooth"
    })
})

// swal();

// let botonEnviar = document.getElementById('enviarForm');
// botonEnviar.addEventListener('submit', () =>{
//     swal("Hello world!");
// })