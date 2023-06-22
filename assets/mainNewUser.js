window.addEventListener('load', () => {
    let button = document.getElementById('newUserForm');
    let usuario = document.getElementById('user');
    let email = document.getElementById('email');
    let phone = document.getElementById('phone');
    let password = document.getElementById('pass');
    let confirm_password = document.getElementById('confirm_pass');
    let alert = document.getElementById('alerta');
  
    console.log(usuario);
  
    function validateData() {
      let datos = new FormData();
      datos.append("user", usuario.value);
      datos.append("email", email.value);
      datos.append("phone", phone.value);
      datos.append("pass", password.value);
      datos.append("confirm_pass", confirm_password.value);
      fetch('../controllers/createUserFormAccess.php', {
        method: 'POST',
        body: datos
      }).then(Response => Response.text())
        .then(responseText => {
          console.log(responseText);
          const responseJson = JSON.parse(responseText);
          const { success } = responseJson;
          if (success === 1) {
            UserSuccessful();
          }  else if (success === 0) {
            UsernameExists();
          }
        })
        .catch(error => console.log(error));
          ////////////////////////////////////////
    }
  
    function UserSuccessful() {
      Swal.fire({
        icon: 'success',
        title: 'Usuario registrado correctamente!',
        text: 'Presione "Aceptar" para volver al Login',
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Aceptar',
        cancelButtonText: 'Cancelar',
      }).then((result) => {
        if (result.isConfirmed) {
          window.history.back();
        }
      });
    }
  
    function UsernameExists() {
      Swal.fire({
        icon: 'error',
        title: 'Nombre de usuario en uso!',
        text: 'El nombre usuario ingresado ya existe, intente con uno diferente',
        confirmButtonText: 'Aceptar'
      }).then(() => {
        usuario.value = '';
        usuario.focus();
      })
    }
  
    button.addEventListener('submit', (e) => {
      e.preventDefault();
      validateData();
    });
  });