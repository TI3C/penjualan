<!doctype html>
<html>
  <head>
  <meta charset="utf-8">
  <title>Log In</title>
  </head>

  <body>
    <center><h2>Login</h2></center>
    <form action="<?=base_url()?>login" method="post">
      <table width="287" border="0" align="center">
        <tr>
          <td width="126">Username</td>
          <td width="10">:</td>
          <td width="144"><input type="text" name="username"></td>
        </tr>
        <tr>
          <td>Password</td>
          <td>:</td>
          <td><input type="text" name="password"></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td><input type="submit" name="proses_login" value="SIGN IN"></td>
        </tr>
      </table>
    </form>
    <a href="<?=base_url()?>member/form_register/">
      <input type="submit" value="SIGN UP">
    </a>
  </body>
</html>