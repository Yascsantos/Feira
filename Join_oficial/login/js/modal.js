function iniciaModal(modalID) {
    // if (localStorage.fechar_save !== modalID) {

    // }
    const modal = document.getElementById(modalID)
    if (modal) {

        modal.classList.add('show')
        modal.addEventListener('click', (e) => {
            if (e.target.id == modalID || e.target.className == 'close') {
                modal.classList.remove('show')
                localStorage.fechar_save = modalID
            }

        })
    }
}

const login = document.getElementById("cadastro")
cadastro.addEventListener('click', () => {
    iniciaModal("login")
})


