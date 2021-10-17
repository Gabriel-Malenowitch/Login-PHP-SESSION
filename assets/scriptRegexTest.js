window.addEventListener('submit',(e)=>{
    const regExp = /(?=.*[!#\(\)\.@]+)(?=.*[A-Z]+)(?=.*[a-z]+)(?=.*\d+)(?=.{8,})/
    const inputName = document.getElementById('name').value
    const inputPassword = document.getElementById('password').value
    if(!regExp.test(inputPassword)){
        alert('Por favor colque pelomenos algum destes caracteres "!#().@", Pelomenos uma letra maiúsculam, pelomenos uma minuscula, pelomenos um número e pelomenos 8 caracteres de comprimento!')
        e.preventDefault()
    }
    if(String(inputName).length < 2 && !regExp.test(inputPassword)){
        alert("Campos incompletos!")
        e.preventDefault()
    }
})