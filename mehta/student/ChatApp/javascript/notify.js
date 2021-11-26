const notify = document.querySelector("#notify");


setInterval(() =>{
    var notiId = 0;
    $.ajax({
        url: "./../../../mehta/student/ChatApp/php/notify.php",
        type: "post",
        dataType: 'json',
        data: {notiId : notiId
        },
        success:function(response){


            // notify.innerHTML = data;
            updateNotify(response);

        }
      });

    // let xhr = new XMLHttpRequest();
    // xhr.open("POST", "../../../../mehta/student/ChatApp/php/notify.php", true);
    // xhr.onload = ()=>{
    //   if(xhr.readyState === XMLHttpRequest.DONE){
    //       if(xhr.status === 200){
    //         let data = xhr.response;
    //         notify.innerHTML = data;

    //         // updateNotify();

    //       }
    //   }
    // }
    // xhr.send();
}, 500);


    function updateNotify(response){

        var len = response.length;
        for(var i=0;i<len;i++){
            var name = response[i].professor_name;
            var msg = response[i].msg;

            Push.create(name, {
                body: msg,
                icon: '../../images/logo.png',
                timeout: 4000,
                onClick: function () {
                    window.focus();
                    this.close();
                }
                });

        }
        
        

        
    }


// function updateNotify(){
//     let xhr = new XMLHttpRequest();
//     xhr.open("POST", "php/updateNotify.php", true);
//     xhr.onload = ()=>{
//       if(xhr.readyState === XMLHttpRequest.DONE){
//           if(xhr.status === 200){
            


//           }
//       }
//     }
//     xhr.send();
// }