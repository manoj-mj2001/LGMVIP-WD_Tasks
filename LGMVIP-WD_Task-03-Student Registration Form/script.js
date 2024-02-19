var form=document.getElementById("form");
var submit = document.querySelector(".submit");
var reset=document.querySelector(".reset");
var element = form.elements;
var display = document.querySelector(".display");
var i;

form.addEventListener("submit",(e)=>{
    e.preventDefault();
    data();
    form.reset();
});

var loadFile = function(event){
    i=URL.createObjectURL(event.target.files[0]);
}

function data(){
    var div = document.createElement("div");
    var div1 = document.createElement("div");
    var name = document.createElement("div");
    var email = document.createElement("div");
    var website = document.createElement("div");
    var img = document.createElement("img");
    var gender = document.createElement("div");
    var skills = document.createElement("div");
   

    name.innerHTML="Name : "+element[0].value;
    email.innerHTML="E-mail : "+element[1].value;
    website.innerHTML="Website : "+element[2].value;
    img.src="images/user-img.jpg";
    img.alt="Student Image";
    if(element[3].value !="")
    {
        img.src=i;
    }
    if(element[4].checked){gender.innerHTML="Gender : Male";}
    if(element[5].checked){gender.innerHTML="Gender : Female";}
   
    if(element[6].checked){skills.innerHTML="Skills : Java";}
    if(element[7].checked){skills.innerHTML="Skills : HTML";}
    if(element[8].checked){skills.innerHTML="Skills : CSS";}
    if(element[6].checked && element[7].checked){skills.innerHTML="Skills : Java,HTML";}
    if(element[6].checked && element[8].checked){skills.innerHTML="Skills : Java,CSS";}
    if(element[7].checked && element[8].checked){skills.innerHTML="Skills : HTML,CSS";}
    if(element[6].checked && element[7].checked && element[8].checked){skills.innerHTML="Skills : Java,HTML,CSS";}

    div1.appendChild(name);
    div1.appendChild(email);
    div1.appendChild(website);
    div.appendChild(img);
    div1.appendChild(gender);
    div1.appendChild(skills);
    display.appendChild(div);
    div.appendChild(div1);

    img.classList.add("img");
    div.classList.add("d");
    div1.classList.add("div1");
    display.classList.add("display");
}
