var captcha_btn = document.getElementById('captcha_btn');
captcha_btn.addEventListener("click", verify_rec);

async function verify_rec(){
    // alphaNums contains the characters with which you want to create the CAPTCHA
    let alphaNums = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', '0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '/', '@', '#', '$', '%'];
    let emptyArr = [];

    // This loop generates a random string of 7 characters using alphaNums
    // Further this string is displayed as a CAPTCHA
    for (let i = 1; i <= 7; i++) {
        emptyArr.push(alphaNums[Math.floor(Math.random() * alphaNums.length)]);
    }
    var c = emptyArr.join('');

    const { value:captcha } = await Swal.fire({
        title: c,
        input: "text",
        inputPlaceholder: "Enter the captcha above..."
    });

    if (captcha === c){
        Swal.fire({
            title: "Captcha",
            text: "The captcha was successfull.",
            icon: "success"
        });
        var id = setInterval(sub, 2000);
        var i=0;
        function sub(){
            console.log("Submitting form");
            captcha_btn.form.submit();
            clearInterval(id);
        }
    }else{
        Swal.fire({
            title: "Captcha",
            text: "The captca you entered is incorrect. Try again!",
            icon: "error"
        });
    }
}