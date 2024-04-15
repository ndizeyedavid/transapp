
const currencies={
    USD:{
        EURO:82,
        GBP:0.72,
        CAD:1.25,
        RWF:1200},

    CAD:{
        USD:0.80,
        EURO:0.85,
        GBP:0.57,
        RWF:800},
        
    EURO:{
        USD:22,
        GBP:0.88,
        CAD:1.54,
        RWF:1500},
        
    RWF:{
        USD:0.012,
        EUR0:0.065,                   
        GBP:0.057,
        CAD:0.074},
        
    GBP:{
        USD:1.33,
        EURO:1.15,
        CAD:1.77,
        RWF:1700}
    };


        function convertcurrency()
        {
            const new_amount=document.getElementById("amount").value;
            const from_currency1=document.getElementById("from_currency").value;
            const to_currency1=document.getElementById("to_currency").value;
            const result=document.getElementById("results");


        if(from_currency1==to_currency1)
        {
            result.innerHTML = "Select language!";
            console.log(new_amount);
        }
        else{
            const converted=new_amount*currencies[from_currency1][to_currency1];
            result.innerHTML = converted;
            console.log=(converted);
        }
        }