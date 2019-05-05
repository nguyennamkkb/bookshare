<style>
       

        /* Button used to open the contact form - fixed at the bottom of the page */
        .open-button {
            background-color: #555;
            color: white;
            padding: 16px 20px;
            border: none;
            cursor: pointer;

            position: fixed;


            width: 280px;
        }

        .bt {
            display: block;
            padding: 10px;

        }

        /* The popup form - hidden by default */
        .form-popup {
            margin-top: 60px;
            display: none;
            position: fixed;


            border: 3px solid #f1f1f1;
            z-index: 9;
        }

        /* Add styles to the form container */
        .form-container {
            max-width: 300px;
            padding: 10px;
            background-color: white;
        }

        /* Full-width input fields */
        .form-container input[type=text],
        .form-container input[type=password] {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            border: none;
            background: #f1f1f1;
        }

        /* When the inputs get focus, do something */
        .form-container input[type=text]:focus,
        .form-container input[type=password]:focus {
            background-color: #ddd;
            outline: none;
        }

        /* Set a style for the submit/login button */


        /* Add a red background color to the cancel button */
        .form-container .cancel {
            background-color: red;
        }

        /* Add some hover effects to buttons */
        .form-container .btn:hover,
        .open-button:hover {
            opacity: 1;
        }
    </style>
@extends('layouts.index2')
@section('left')    

        @endsection
        @section('content') 
        <div id="">
        <div class="container">

            <div class="row">

                <div id="app1">
                    <button class="" onclick="openForm()">$$ <p id="money"></p></button>

                    <div class="form-popup" id="myForm">
                        <div class="form-container">
                            <H2>Nạp Tiền</H2>
                            <div class="btn-group">
                                <button type="button" class="btn btn-light" v-on:click="tanggt50">50.000 VND</button>
                                <button type="button" class="btn btn-light" v-on:click="tanggt100">100.000 VND</button>
                                <button type="button" class="btn btn-light" v-on:click="tanggt200">200.000 VND</button>

                            </div><br> <br>
                            <p>Hoac</p>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Nhap so tien" id="tien">
                                <br>
                                <div class="input-group-append">
                                    <button class="btn btn-success" type="button" @click="them">Nap tien</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        new Vue({
            el: '#app1',
            data: {
                name: 'anhihih',
                money: 0,
                tienthem: 0,
            },
            methods: {
                tanggt100: function () {
                    var r = confirm('Xác nhận nạp 100K vào tài khoản?');
                    if (r == true) {
                        var code = prompt("Nhập mã OTP:", "");
                        if (code == null || code == "") {
                            alert("Thất bại!")
                        } else if (code == "nam") {
                            this.money += 100;
                            document.getElementById("money").innerHTML=money;
                            alert("thành công")
                        } else {
                            alert("thất bại!")
                        }
                        // this.money += 200;
                    }
                },
                tanggt200: function () {
                    var r = confirm('Xác nhận nạp 200K vào tài khoản?');
                    if (r == true) {
                        var code = prompt("Nhập mã OTP:", "");
                        if (code == null || code == "") {
                            alert("Thất bại!")
                        } else if (code == "nam") {
                            this.money += 200;
                            alert("thành công")
                        } else {
                            alert("thất bại!")
                        }
                        // this.money += 200;
                    }
                },
                tanggt50: function () {
                    var r = confirm('Xác nhận nạp 50k vào tài khoản?');
                    if (r == true) {
                        var code = prompt("Nhập mã OTP:", "");
                        if (code == null || code == "") {
                            alert("Thất bại!")
                        } else if (code == "nam") {
                            this.money += 50;
                            alert("thành công")
                        } else {
                            alert("thất bại!")
                        }

                    }
                },
                them: function () {
                    var r = confirm('Xác nhận nạp tiền?');
                    if (r == true) {
                        var code = prompt("Nhập mã OTP:", "");
                        if (code == null || code == "") {
                            alert("Thất bại!")
                        } else if (code == "nam") {
                            var them = document.getElementById('tien').value;
                            this.money += Number(them);
                            document.getElementById('tien').value = '';
                            alert("thành công")
                        } else {
                            alert("thất bại!")
                        }

                    }


                }
            },
        });
        var i = 0;
        function openForm() {
            document.getElementById("myForm").style.display = "block";
            i++;
            if (i == 2) {
                document.getElementById("myForm").style.display = "none";
                i = 0;
            }
        }


    </script>
        <script src="{{ asset('br/js/vue.js') }}"></script>

        @endsection