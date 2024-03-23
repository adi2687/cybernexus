const images = {
    image1: {
        src: "image4.webp", width: "200", height: "200"
    },
    image2: {
        src: "image2.jpg", width: "200", height: "200"
    },
    image3: { src: "image4.png", width: "200", height: "199" }
};

function changeimage(imagename) {
    var laptopImage1 = document.getElementById("inthelaptop");
    laptopImage1.src = images[imagename].src;
    laptopImage1.width = images[imagename].width;
    laptopImage1.height = images[imagename].height;
}
setInterval(function () {
    changeimage("image1");
    setTimeout(function () {
        changeimage("image2");
    }, 2000);
    setTimeout(function () {
        changeimage("image3");
    }, 4000);
}, 6000);
