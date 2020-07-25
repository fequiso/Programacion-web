<html>
  <head>
    <title>Un formulario de ejemplo</title>
    <style>
      .signup {
        border  : 1px solid #999999;
        font    : normal 14px helvetica;
        color   : #444444;
      }
    </style>
    <script>
      function validar(form)
      {
        fallo  = validarNombre(form.nombre.value)
        fallo += validarApellido(form.apellido.value)
        fallo += validarUserName(form.username.value)
        fallo += validarPassword(form.password.value)
        fallo += validarEdad(form.edad.value)
        fallo += validarEmail(form.email.value)

        if (fallo == "") return true 
        else { alert(fallo); return false }
      }

      function validarNombre(campo)
      {
        return (campo == "") ? "No se ha ingresado nombre.\n" : ""
      }

      function validarApellido(campo)
      {
        return (campo == "") ? "No se ha ingresado apellido.\n" : ""
      }

      function validarUserName(campo)
      {
        if (campo == "") return "No se ha ingresado username.\n"
        else if (campo.length < 5)
          return "username Debe tener al menos 5 caracteres.\n"
        else if (/[^a-zA-Z0-9_-]/.test(campo))
          return "Solo se permite a-z, A-Z, 0-9, - y _.\n"
        return ""
      }

      function validarPassword(campo)
      {
        if (campo == "") return "No se ha ingresado password.\n"
        else if (campo.length < 6)
          return "Password debe tener al menos 6 caracteres.\n"
        else if (!/[a-z]/.test(campo) || !/[A-Z]/.test(campo) ||
                 !/[0-9]/.test(campo))
          return "Password requiere tener al menos un numero o letra.\n"
        return ""
      }

      function validarEdad(campo)
      {
        if (campo=="" || isNaN(campo)) return "No ha ingresado edad.\n"
          else if (campo < 18 || campo > 110)
            return "Edad debe estar entre 18 y 110.\n"
        return ""
      }

      function validarEmail(campo)
      {
        if (campo=="") return "No ha ingresado Email.\n"
          else if (!((campo.indexOf(".") > 0) &&
                     (campo.indexOf("@") > 0)) ||
                     /[^a-zA-Z0-9.@_-]/.test(campo))
            return "El email es inválido.\n"
        return ""
      }

    </script>
  </head>
  <body>
  <table class="signup" border="0" cellpadding="2"
    cellspacing="5" bgcolor="#eeeeee">
    <th colspan="2" align="center">Signup Form</th>
    <form method="post" action="adduser.php" onsubmit="return validar(this)">
      <tr><td>Nombre</td>
        <td><input type="text" maxlength="32" name="nombre"></td></tr>
      <tr><td>Apellido</td>
        <td><input type="text" maxlength="32" name="apellido"></td></tr>
      <tr><td>Username</td>
        <td><input type="text" maxlength="16" name="username"></td></tr>
      <tr><td>Password</td>
        <td><input type="text" maxlength="12" name="password"></td></tr>
      <tr><td>Edad</td>
        <td><input type="text" maxlength="3" name="edad"></td></tr>
      <tr><td>Email</td>
        <td><input type="text" maxlength="64" name="email"></td></tr>
      <tr><td colspan="2" align="center">
        <input type="submit" value="Signup"></td></tr>
    </form>
   </table>
 </body>    
</html>