         function f1() {


            var fd = new FormData();
            var ajax = new XMLHttpRequest();
            var mfile = document.getElementById("license").files[0];
            if(!mfile) {
                alert("Fail");
                exit();
            }
            fd.append("license", mfile);
            fd.append("unitName", document.getElementById("unitName").value);
            fd.append("code", document.getElementById("code").value);
            fd.append("address", document.getElementById("address").value);
            fd.append("contactName", document.getElementById("contactName").value);
            fd.append("phoneNumber", document.getElementById("phoneNumber").value);
            ajax.open("post", "/index.php/index/Unit/AddData", true);
            ajax.onload = function () {
               alert(ajax.responseText);

            };
            ajax.send(fd);

        }