const languages_from_to={
    FRA:{
		FRA:0.0,
		KINY:82,
        KISW:0.72,
        ENG:1.25,
        SPAN:1200},

    ENG:{
        ENG:0.00,
		FRA:0.80,
        KINY:0.85,
        KISW:0.57,
        SPAN:800},
        
    KINY:{
        KINY:0.00,
		FRA:22,
        KISW:0.88,
        ENG:1.54,
        SPAN:1500},
        
       
    KISW:{
        KISW:0.00,
		FRA:1.33,
        KINY:1.15,
        ENG:1.77,
        SPAN:1700}
    };


        function convertlanguage()
        {
            const new_amount=document.getElementById("amount").value;
            const source_language=document.getElementById("source_language").value;
            const target_language=document.getElementById("target_language").value;
            const result=document.getElementById("results");


        if(source_language==target_language)
        {
            result.innerHTML = new_amount;
            console.log(new_amount);
        }
        else{
            const converted=new_amount*languages[source_language][target_language];
            result.innerHTML = converted;
            console.log=(converted);
        }

    }

    