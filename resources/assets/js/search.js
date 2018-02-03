document.addEventListener('DOMContentLoaded', function () {

    var order = document.getElementsByClassName('order');

    if (order) {
        for (var one_ord = 0; one_ord < order.length; one_ord++) {
            order[one_ord].addEventListener('click', function () {
                axios.post(this.dataset.action, {
                    column: this.dataset.column,
                    order: this.dataset.order
                })
                    .then(function (value) {
                        document.getElementById('my_table').innerHTML = value.data;
                    })
                    .catch(function (reason) {
                        console.log(reason)
                    });
            });
        }
    }


    if (document.getElementById('find')) {
        document.getElementById('find').addEventListener('keyup', function (ev) {

            var td;
            var filter = new RegExp(this.value.toUpperCase());
            console.log(filter);
            var table = document.getElementById('my_table');
            var tr = table.getElementsByTagName('tr');


            for (var i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td");
                for (var j = 0; j < td.length; j++) {
                    //console.log(td[j].innerText.toUpperCase().search(filter));
                    if (td[j].innerText.toUpperCase().search(filter) > -1) {
                        //  console.log('if');
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                        //console.log('else')
                    }
                }

            }
        });
    }
    if (document.getElementById('add_domain')) {
        document.getElementById('add_domain').addEventListener('click', function (ev) {
            ev.preventDefault();
            var dom_name = document.getElementById('domain_name');
            if (dom_name.value === '') {
                alert('Fill domain name');
                return false;
            }

            axios.post(this.dataset.action, {
                name: dom_name.value
            })
                .then(function (value) {
                    document.getElementById('domain_result').innerHTML = value.data;
                    dom_name.value = '';

                })
                .catch(function (reason) {
                    console.log(reason);
                });
        });
    }

    if (document.getElementById('error')){
        setTimeout(function () {
            window.location = 'http://google.com';
        }, 5000);
    }
});