new Vue({
  el: '#app',
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
              alert("thành công")
          } else {
              alert("thất bại!")
          }

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