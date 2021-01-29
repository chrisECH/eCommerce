function validar() {


    var nombre = document.getElementById('nombre').value;
    var regexNombre = /^[a-zA-ZÀ-ÿ\s]{1,40}$/;

    var curp = document.getElementById('curp').value;
    var regexCurp = /^([A-Z][AEIOUX][A-Z]{2}\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\d|3[01])[HM](?:AS|B[CS]|C[CLMSH]|D[FG]|G[TR]|HG|JC|M[CNS]|N[ETL]|OC|PL|Q[TR]|S[PLR]|T[CSL]|VZ|YN|ZS)[B-DF-HJ-NP-TV-Z]{3}[A-Z\d])(\d)$/;

    var rfc = document.getElementById('rfc').value;
    var regexRfc = /^([A-ZÑ&]{3,4}) ?(?:- ?)?(\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\d|3[01])) ?(?:- ?)?([A-Z\d]{2})([A\d])$/;

    var direccion = document.getElementById('direccion').value;
    var regexDireccion = /^[a-zA-Z.]{3,6}[a-zA-ZÀ-ÿ\s]{1,40}[#][0-9]{1,4}$/;

    var mail = document.getElementById('email').value;
    var regexMail = /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/;

    var pass = document.getElementById('password').value;

    var check_pass = document.getElementById('check_pass').value;
    var copia = document.getElementById("txtcopia").value;
    var captcha = document.getElementById("captcha").value;

    if (nombre == null && curp == null && rfc == null && direccion == null && mail == null) {
        alert('Debe de llenar todos los campos');
        return false;
    } else if (!regexNombre.test(nombre)) {
        alert("El nombre no es valido");
        return false;
    } else if (!regexCurp.test(curp)) {
        alert("La curp no es valida")
        return false;
    } else if (!regexRfc.test(rfc)) {
        alert("El rfc no es valido")
        return false;
    } else if (!regexDireccion.test(direccion)) {
        alert("La dirección no es valida.")
        return false;
    } else if (!regexMail.test(mail)) {
        alert("El email no es valido.")
        return false;
    } else if (pass == "") {
        alert("Ingrese una contraseña");
        return false;
    } else if (pass != check_pass) {
        alert('Las contraseñas no coincide.');
        return false;
    } else if (copia != captcha) {
        alert("Los codigos no coinciden");
        return false
    } else {
        return true;
    }

}