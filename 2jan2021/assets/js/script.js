// // Array

// var myarray =[1,2,3];

// //  Display array in conosle
// console.log(myarray);

// // Propertie  of array : length

// console.log("Length of Array : "+myarray.length);


// // Methods: pop, push
// myarray.pop();
// /// Removes the last element

// console.log(myarray);

// // Insert element at last
// myarray.push(11);

// console.log(myarray);

// // Arrays can hold array inside as element

// myarray[4] = ["ArrayInsideArray #1", "AIA #2"];

// console.log(myarray);


// function fun2(){
//     console.log("Inside fun2 #1");
//     var i=0;
//     while(i<10){
//         console.log("While #"+i);
//         i++;
//         // return;
//         break;
//         // continue;
//         console.log("While @"+i);        
//     }
//     console.log("Inside fun2 #2");
//     console.log("Inside fun2 #3");
//     console.log("Inside fun2 #4");
// }

// function fun1(){
//     console.log("Inside fun1 #1");
//     fun2();
//     console.log("Inside fun1 #2");
// }


// // function call
// fun1();


// if(condition){
//     // True
// }


// if(condition){
//     // true
//     if(condition){
//         // True
//     }
// }else{
//     // False
//     if(condition){
//         // True
//         if(condition){
//             // True
//         }
//     }
// }

// var flot= 2.2;

// switch (flot) {
//     case 1.1:
//         console.log("1.1 case");        
//         break;
//     case 2.2:
//         console.log("2.2 case");        
//         break;
//     default:
//         console.log("Default Case");           
//         break;
// }

/// Objects

//var arr = [];
var person = {
    fname:"John", 
    lname:"Doe", 
    age:25,
    phone: "123456789"
};

for(prop in person){
    console.log(person[prop]);
}



















