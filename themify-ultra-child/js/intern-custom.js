document.addEventListener("DOMContentLoaded", function (event) {
    var _selector = document.querySelector('input[id=c]');
    _selector.addEventListener('change', function (event) {
        if (_selector.checked) {
            document.getElementById("divInvesting").style.visibility = "visible";
            document.getElementById("divPurchasing").style.visibility = "hidden";
        } else {
            document.getElementById("divInvesting").style.visibility = "hidden";
            document.getElementById("divPurchasing").style.visibility = "visible";
        }
    });
});