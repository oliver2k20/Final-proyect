
<html>
<head>

      <center> <h1> Nuevo Usuario </h1> </center>

        <form name="nuevo_usuario" method="POST" action="<?php echo base_url('agregarAdminis/nuevoregistros')?>">

          <table width="50%">
            <tr>
              <td width="20"> <b>Usuario </b> </td>
              <td width="30"><input type="text" name="usuario" size="25"/></td>
            </tr>
            <td width="20"> <b> Password </b> </td>
            <td width="30"><input type="password" name="password" size="25"/></td>
          </tr>
<tr>
<td><b>Email</b></td>
<td> <input type="text" name="email" size="25" /> </td>
</tr>

<tr>
  <td colspan="2"><center><input type="submit" name="enviar" value="Registrar" /> </center></td>
</tr>

</table>
 </form>
 </body>
 </html>

  </head>
