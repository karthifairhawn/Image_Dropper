function upload(){
    var uploader = document.getElementById("uploader");
    uploader.click();
    uploaded_check()
}

function uploaded_check(){
    upload_check_int = setInterval( function(){
        var uploader = document.getElementById("uploader");
        if( document.getElementById("uploader").files.length == 0 ){
            console.log("no files selected");
        }else{
            clearInterval(upload_check_int);
            document.getElementById("upload_plus").classList.add("uploaded");
            document.getElementsByClassName("form")[0].classList.add("form-active");
            document.getElementsByClassName("form")[0]
            var filename = document.getElementById("uploader").value;
            filename = filename.split("\'");
            document.getElementsByClassName("img-name")[0].innerText =  filename;
            
        }
    
    }, 2000 );
    
}
