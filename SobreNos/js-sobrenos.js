// Calcular Tamanhos com Base na Resolução da Tela

/*
document.getElementById("container").style.width = screen.width + "px";
        document.getElementById("container").style.height = "calc((" + screen.height + "px - var(--barradogoogle-barradetarefas)) * 4)";

        document.getElementById("secao-1").style.width = screen.width + "px";
        document.getElementById("secao-1").style.height = "calc(" + screen.height + "px - var(--barradogoogle-barradetarefas))";

        document.getElementById("secao-2").style.width = screen.width + "px";
        document.getElementById("secao-2").style.height = "calc(" + screen.height + "px - var(--barradogoogle-barradetarefas))";

        document.getElementById("secao-3").style.width = screen.width + "px";
        document.getElementById("secao-3").style.height = "calc(" + screen.height + "px - var(--barradogoogle-barradetarefas))";

        document.getElementById("secao-4").style.width = screen.width + "px";
        document.getElementById("secao-4").style.height = "calc(" + screen.height + "px - var(--barradogoogle-barradetarefas))";

        document.getElementById("aboutus").style.height = "calc(" + screen.height + "px - 120px - var(--menu-height))";
*/

        
// Dark Mode Switch
const $html = document.querySelector('html')
const $checkbox = document.querySelector('#switch')

$checkbox.addEventListener('change', function(){
    $html.classList.toggle('dark-mode')
})