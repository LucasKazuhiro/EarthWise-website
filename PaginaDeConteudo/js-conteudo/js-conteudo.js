// Progress Bar Website
const scrollline = document.querySelector('#scroll-line');

                function fillscrollline(){
                const windowHeight = window.innerHeight;
                const fullHeight = document.body.clientHeight;
                const scrolled = window.scrollY;
                const percentScrolled = (scrolled / (fullHeight - windowHeight)) * 100;

                scrollline.style.width = percentScrolled + '%';
                };

                window.addEventListener('scroll', fillscrollline);



// Dark Mode Switch
const $html = document.querySelector('html')
const $checkbox = document.querySelector('#switch')

$checkbox.addEventListener('change', function(){
    $html.classList.toggle('dark-mode')
})



// Escoder Sumario
function EsconderSumario() {
    let esconderexibir = document.querySelector('#esb-2');
    var x = document.getElementById("box-esconder-sumario");
    if (x.style.display === "none") {
        x.style.display = "block";
        esconderexibir.innerText = 'Esconder';
    } else {
        x.style.display = "none";
        esconderexibir.innerText = 'Exibir';
    }
}



// Botão Ir para o Topo da Página
const toTop = document.querySelector(".box-arrow-up-top");

                window.addEventListener("scroll", () => {
                    if(window.pageYOffset > 1700) {
                        toTop.classList.add("active");
                    } else {
                        toTop.classList.remove("active");
                    }
                })