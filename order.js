function validateForm() {
    var fullname = document.forms["orderForm"]["fullname"].value;
    var email = document.forms["orderForm"]["email"].value;
    var nomor = document.forms["orderForm"]["nomor"].value;
    var alamat = document.forms["orderForm"]["alamat"].value;

    if (fullname === "" || email === "" || nomor === "" || alamat === "") {
        alert("Tolong Lengkapi Form");
        return false;
    } else {
        alert("Terima Kasih")
        return true;
    }
}