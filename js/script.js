

const searchWrapper= document.querySelector(".search-input");
const inputBox= searchWrapper.querySelector("input");
const suggBox= searchWrapper.querySelector(".autocom-box");

//if user press any key and realase
inputBox.onkeyup = (e)=>{
    let userData= e.target.value;
    let emptyArray=[];
    if(userData){
        emptyArray=suggestions.filter((data)=>{
            // filtering array value and user char to lowercase and return onlu those
            //word which are starts with user enetered value
            return data.toLocaleLowerCase().startsWith(userData.toLocaleLowerCase());
        });
        emptyArray = emptyArray.map((data)=>{
            return data = '<li>'+ data +'</li>';
        });
        console.log(emptyArray);
        searchWrapper.classList.add("active");
        showSuggestions(emptyArray);
        let allList = suggBox.querySelectorAll("li");
        for (let i = 0; i < allList.length; i++) {
            allList[i].setAttribute("onclick","select(this)");
            
        }
    }
    else{
        searchWrapper.classList.remove("active");
    }
    
}
function select(element){
    let selectUserData= element.textContent;
    inputBox.value= selectUserData;
}
function showSuggestions(list){
    let listData;
    if(!list.length){
        userValue= inputBox.value;
        listData = '<li>'+ userValue +'</li>';
    }
    else{
        listData= list.join('');
    }
    suggBox.innerHTML=listData;
}

