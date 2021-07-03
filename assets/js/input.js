function upload(){
    var uploader = document.getElementById("uploader");
    uploader.click();
}

var uploader = document.getElementById("uploader");
if( document.getElementById("uploader").files.length == 0 ){
    console.log("no files selected");
}
