         function f1() {
           alert();

            var fd = new FormData();
            var ajax = new XMLHttpRequest();
            ajax.open("post", "/index.php/index/index/InsertTablePerson", true);
            fd.append("name", document.getElementById("name").value);
            ajax.onload = function () {
               alert(ajax.responseText);
            };
            ajax.send(fd);

        }
