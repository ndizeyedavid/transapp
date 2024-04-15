//------------------------- this is the section of Timing Out Lock in BG-HipUp Login/Register Section
setTimeout(function(){
    model.style.cssText = "display: none";
    modelSection.style.cssText = "display: block";
},0)

//------------------------- this is the section of Timing Out Lock in BG-HipUp Login/Register Section
var model = document.querySelector(".bg-hipup");
var modelSection = document.querySelector(".bg-hipup"); 

//
//document.getElementById("button").addEventListener("click", function() {
//document.querySelector(".bg-modal").style.display = "flex";
//});

//document.querySelector(".close").addEventListener("click", function() {
//document.querySelector(".bg-modal").style.display = "none";
//});


document.querySelector(".closein").addEventListener("click", function() {
document.querySelector(".bg-hipup").style.display = "none";
});


document.getElementById("read").addEventListener("click", function() {
document.querySelector(".word").style.display = "block";
});

////document.getElementById("OrderNow").addEventListener("click", function() {
//    document.querySelector(".bg-moda").style.display = "block";
//})

// ------------------- End of the Model display duration limitation section ------//

// ------------------- Start the Instant Quote section ------//

var service_needed_elt = document.querySelector("#service_needed");

if(service_needed_elt){
    service_needed_elt.addEventListener('change', function(evt){
        var profile_index = Number(evt.target.value) - 1;
        var profile_array = formData.profile;
        var profile_group = profile_array[profile_index];
        var profile_elt = document.querySelector('select[name=profile]');
        profile_elt.innerHTML = '<option value="none" selected="selected" disabled="disabled">Select Favorite Profile</option>'
        
        for(var i=0; i<profile_group.length; i++){
            var option_elt = create_select_option(i+1, profile_group[i])
            
            profile_elt.append(option_elt);
            
   
        }
    });
}

function create_select_option(optionValue, optionText){
    var option = document.createElement('option');
    option.value = optionValue;
    option.textContent = optionText;
    return option;

}

//var service_needed_elt = document.querySelector("#service_needed");
//
//
//if(service_needed_elt){
//
//service_needed_elt.addEventListener('change', function(evt){
//
//    var formatting_index = Number(evt.target.value) - 1;
//    var formatting_array = formData.formatting;
//    var formatting_group = formatting_array[formatting_index];
//    var formatting_elt= document.querySelector('select[name=format]');
//    formatting_elt.innerHTML = '<option value="none" selected="selected" disabled="disabled">FORMATTING</option>';
//    
//    
//    for(var x=0; x<formatting_group.length; x++){
//        
//        var option_elt = create_select_option(x+1, formatting_group[x])
//        
//        formatting_elt.append(option_elt);
//            
//    
//        
//    }
//    
//
//
//});
//                                   
//
//}
//
//function create_select_option(optionValue, optionText){
//    var option = document.createElement('option');
//    option.value = optionValue;
//    option.textContent = optionText;
//    return option;
//
//}




//--------------------this is the formattin codding
 


var service_needed_elt = document.querySelector("#service_needed");


if(service_needed_elt){
    service_needed_elt.addEventListener('change', function(evt){
        var formatting_index = Number(evt.target.value) - 1;
        var formatting_array = dataFormatting.formatting;
        var formatting_group = formatting_array[formatting_index];
        var formatting_elt = document.querySelector('select[name=format]');
        formatting_elt.innerHTML = '<option value="none" selected="selected" disabled="disabled">Select Delivery Format</option>'
        
        for(var i=0; i<formatting_group.length; i++){
            var option_elt = create_select_option(i+1, formatting_group[i])
            
            formatting_elt.append(option_elt);
            
   
        }
    });
}

function create_select_option(optionValue, optionText){
    var option = document.createElement('option');
    option.value = optionValue;
    option.textContent = optionText;
    return option;

}
;







//------------------------- this is the discount section


var service_needed_elt = document.querySelector("#service_needed");


if(service_needed_elt){
    service_needed_elt.addEventListener('change', function(evt){
        var discounting_index = Number(evt.target.value) - 1;
        var discounting_array = discountData.discounting;
        var discounting_group = discounting_array[discounting_index];
        var discounting_elt = document.querySelector('select[name=discount]');
        discounting_elt.innerHTML = '<option value="none" selected="selected" disabled="disabled">Discount (1) Size of Order</option>'
        
        for(var i=0; i<discounting_group.length; i++){
            var option_elt = create_select_option(i+1, discounting_group[i])
            
           discounting_elt.append(option_elt);
            
   
        }
    });
}

function create_select_option(optionValue, optionText){
    var option = document.createElement('option');
    option.value = optionValue;
    option.textContent = optionText;
    return option;

}

//------------------this isthe discount 2------------------------


//var var service_needed_elt = document.querySelector("#service_needed");
//
//
//if(service_needed_elt){
//    service_needed_elt.addEventListener('change', function(evt){
//        var discountingTwo_index = Number(evt.target.value) - 1;
//        var discountingTwo_array = discount_data_second.discountingTwo;
//        var discountingTwo_group = discountingTwo_array[discountingTwo_index];
//        var discountingTwo_elt = document.querySelector('select[name=sizeOrder]');
//        discountingTwo_elt.innerHTML = '<option value="none" selected="selected" disabled="disabled">DISCOUNT (2)</option>'
//        
//        for(var i=0; i<discountingTwo_group.length; i++){
//            var option_elt = create_select_option(i+1, discountingTwo_group[i])
//            
//            discountingTwo_elt.append(option_elt);
//            
//   
//        }
//    });
//}
//
//function create_select_option(optionValue, optionText){
//    var option = document.createElement('option');
//    option.value = optionValue;
//    option.textContent = optionText;
//    return option;
//
//}
//;








var service_needed_elt = document.querySelector("#service_needed");


if(service_needed_elt){
    service_needed_elt.addEventListener('change', function(evt){
        var discountingTwo_index = Number(evt.target.value) - 1;
        var discountingTwo_array = discountDataSecond.discountingTwo;
        var discountingTwo_group = discountingTwo_array[discountingTwo_index];
        var discountingTwo_elt = document.querySelector('select[name=sizeOrder]');
        discountingTwo_elt.innerHTML = '<option value="none" selected="selected" disabled="disabled">Discount (2) Job Duration</option>'
        
        for(var i=0; i<discountingTwo_group.length; i++){
            var option_elt = create_select_option(i+1, discountingTwo_group[i])
            
            discountingTwo_elt.append(option_elt);
            
   
        }
    });
}

function create_select_option(optionValue, optionText){
    var option = document.createElement('option');
    option.value = optionValue;
    option.textContent = optionText;
    return option;

}


//----------------- this is the duration section--


var service_needed_elt = document.querySelector("#service_needed");


if(service_needed_elt){
    service_needed_elt.addEventListener('change', function(evt){
        var durationData_index = Number(evt.target.value) - 1;
        var durationData_array = duration.durationData;
        var durationData_group = durationData_array[durationData_index];
        var durationData_elt = document.querySelector('select[name=duration]');
        durationData_elt.innerHTML = '<option value="none" selected="selected" disabled="disabled" id="time">Select Duration of service</option>'
        
        for(var i=0; i<durationData_group.length; i++){
            var option_elt = create_select_option(i+1, durationData_group[i])
            
           durationData_elt.append(option_elt);
            
   
        }
    });
}

function create_select_option(optionValue, optionText){
    var option = document.createElement('option');
    option.value = optionValue;
    option.textContent = optionText;
    return option;

}


//----------------------this is the size section----------


var service_needed_elt = document.querySelector("#service_needed");


if(service_needed_elt){
    service_needed_elt.addEventListener('change', function(evt){
        var size_data_index = Number(evt.target.value) - 1;
        var size_data_array = form_size.size_data;
        var size_data_group = size_data_array[size_data_index];
        var size_data_elt = document.querySelector('select[name=size]');
        size_data_elt.innerHTML = '<option value="none" selected="selected" disabled="disabled" id="size pages" >Select Size of Service</option>'
        
        for(var i=0; i<size_data_group.length; i++){
            var option_elt = create_select_option(i+1, size_data_group[i])
            
           size_data_elt.append(option_elt);
            
   
        }
    });
}

function create_select_option(optionValue, optionText){
    var option = document.createElement('option');
    option.value = optionValue;
    option.textContent = optionText;
    return option;

}

//---------------------- language from-------------


var service_needed_elt = document.querySelector("#service_needed");


if(service_needed_elt){
    service_needed_elt.addEventListener('change', function(evt){
        var language_one_index = Number(evt.target.value) - 1;
        var language_one_array =language_from.language_one;
        var language_one_group = language_one_array[language_one_index];
        var language_one_elt = document.querySelector('select[name=proficiency]');
        language_one_elt.innerHTML = '<option value="none" selected="selected" disabled="disabled" id="from">Select Source Language</option>'
        
        for(var i=0; i<language_one_group.length; i++){
            var option_elt = create_select_option(i+1, language_one_group[i])
            
           language_one_elt.append(option_elt);
            
   
        }
    });
}

function create_select_option(optionValue, optionText){
    var option = document.createElement('option');
    option.value = optionValue;
    option.textContent = optionText;
    return option;

}
   



//----------------language to------------



var service_needed_elt = document.querySelector("#service_needed");


if(service_needed_elt){
    service_needed_elt.addEventListener('change', function(evt){
        var language_two_index = Number(evt.target.value) - 1;
        var language_two_array =language_to.language_two;
        var language_two_group = language_two_array[language_two_index];
        var language_two_elt = document.querySelector('select[name=language]');
        language_two_elt.innerHTML = '<option value="none" selected="selected" disabled="disabled" id="to" >Select Target Language</option>'
        
        for(var i=0; i<language_two_group.length; i++){
            var option_elt = create_select_option(i+1, language_two_group[i])
            
           language_two_elt.append(option_elt);
            
   
        }
    });
}

function create_select_option(optionValue, optionText){
    var option = document.createElement('option');
    option.value = optionValue;
    option.textContent = optionText;
    return option;

};


//   document.getElementById('read').addEventListener('click', function(){
//document.querySelector('.word').style.display = 'block';
//   
////                                                    else{
////   document.querySelector('.word').style.display = 'none';
////
////                                                   }
//



// ------------------this is the end of instant quote
