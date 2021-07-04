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
            console.log("selected");
            clearInterval(upload_check_int);
            document.getElementById("upload_plus").classList.add("uploaded");
        }
    
    }, 2000 );
    
}
