<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="STYLESHEET" type="text/css" href="especial.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>formulario</title>

</head>

<body>
<form>
    formulario
    <br>
    <br>
   input texto <input type="text" id="name" name="Texto" required
       minlength="4" maxlength="8" size="10">
       <br>
       <br>
     input numero  <input type="number" id="n" name="number"
       min="1" max="100">
       <br>
       <br>
       input email  <input type="email" id="email"
       pattern=".+@upds\.com" size="30" required>
       <br>
       <br>
      select <H1><select name="select">
        <option value="value1">opcion1</option>
        <option value="value2" selected>opcion2</option>
        <option value="value3">opcion3</option>
      </select>
      <br>
      <br>
      text area
      <br>
      <br>
      <textarea name="textarea" rows="10" cols="50">ejemplo de text area</textarea>
      <br>
      <br>
      Tabla  ejemplo
      <br>
      <br>
      <table border="1">
        <caption>Esto es una tabla</caption>
        <tbody>
          <tr>
            <td colspan="2">celdas a1 y b1 unidas</td>
          </tr>
          <tr>
            <td>celda a2</td>
            <td>celda b2</td>
          </tr>
        </tbody>
      </table>



    </form>
</body>
</html>
