// var today = new Date();

// console.log(today);

// console.log("Year: "+today.getFullYear());


// console.log("Math PI Value:"+ Math.PI);

// document.write(Math.random()*100);

// console.log(Math.max(12,3,45));

// var str = "Here is your string.";

// console.log(str);

// var mystrobj = new String("     Hello world! we are learning javascript    ");

// console.log(mystrobj);


// Event Handler

function dispalyTodaysDate(){
    var d =new Date();
    var str ="Todays date is :" + d;
    //str = str +d;
    document.getElementById('today').innerHTML = str;
}

function clearDate(){
    document.getElementById('today').innerHTML ="Mouse Removed";
}