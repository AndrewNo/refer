document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('find').addEventListener('keyup', function (ev) {
        var text = document.querySelectorAll('tbody > tr > td');
        var find = this.value;
        for (var one_td = 0; one_td < text.length; one_td++) {
            var string = text[one_td].innerText;
            if (string.search(find) != -1) {
                text[one_td].style.color = 'red';
            }

            text[one_td].style.color = 'black';
        }
    });
});