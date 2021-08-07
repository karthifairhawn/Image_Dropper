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
            var filename = document.getElementById("uploader_submit").click();                    
        }
    
    }, 2000 );
    
}
