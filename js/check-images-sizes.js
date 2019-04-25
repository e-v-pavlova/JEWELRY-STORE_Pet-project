function checkImagesSizes(){
    var images = document.querySelectorAll('.product-img img');
    for (var i = 0; i < images.length; i++){
        if (images[i].width < images[i].height){
            images[i].classList.remove('gorizontal-img');
            images[i].classList.add('vertical-img');
        }
    }
}
checkImagesSizes();