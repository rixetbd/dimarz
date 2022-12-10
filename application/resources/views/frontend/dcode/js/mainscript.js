function createBubble(serviceNameData) {
    const section = document.getElementById("header_top");
    const createElement = document.createElement("span");
    createElement.className = 'bubble';
    var size = Math.random() * 1;
    var bubble_size = Math.random() * 100;
    createElement.append(serviceNameData);
    createElement.style.animation =
        "animation 15s linear infinite";
    createElement.style.width = 100 + size + "px";
    createElement.style.height = 100 + size + "px";

    // createElement.style.width = bubble_size + "px";
    // createElement.style.height = bubble_size + "px";

    createElement.style.left = Math.random() * 100 + "%";
    section.appendChild(createElement);

    console.log(Math.random() * 100 + "%");

    setTimeout(() => {
        createElement.remove();
    }, 12000);
}

// setInterval(createBubble, 700);
let serviceNameData = [
    'Digital Marketing', 'Web Development', 'Graphic Design', 'Data Entry',
    'SEO'
];

// let serviceNameData = [''];

// setInterval(function(){
//     for (let i = 0; i < serviceNameData.length; i++) {
//         return createBubble(serviceNameData[i]);
//     }
//     setTimeout(() => {
//             // return createBubble(serviceNameData[i]);
//     }, 1000);
// }, 5000);


//     for (let i = 0; i < serviceNameData.length; i++) {
//     setInterval(() => {
//         return createBubble(serviceNameData[i]);
//     }, 1000);
//     // setTimeout(() => {
//     //     return createBubble(serviceNameData[i]);
//     // }, 1000);
// }

let industry_nameArr = [
    'Software Industry',
    'Healthcare Industry',
    'Legal Industry',
    'Real Estate Industry',
    'Fashion & Beauty',
    'Retail Industry',
    'E-commerce Industry',
    'Finance Industry'
];


function industry_nameLoop() {
    for (var i = 0; i < industry_nameArr.length; i++) {
        (function (index) {
            setTimeout(function () {
                $('#industry_name').html(industry_nameArr[index]);
                $('#industry_name').addClass('animate_fadeInUp');
                $('#industry_name').removeClass('animate_fadeInUp');
                // $('#industry_name').removeClass('animate_fadeOutUp');
                $(`.industry_area_img_no`).addClass('opacity_0');
                $(`.industry_area_img_no:eq( ${index} )`).removeClass('opacity_0');
                $(`.industry_area_img_no:eq( ${index} )`).addClass('opacity_100');
            }, index * 3000);
        })(i);
    }
    // return industry_nameLoop();
}

industry_nameLoop();

// setInterval(function () {
//     industry_nameLoop();
// }, interval);