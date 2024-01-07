
function calculate(operator,num1,num2){
    var result;
switch(operator){

    case "+":
        result=num1+num2;
        break;
    case "-":
        result=num1-num2;
    case '*':
        result=num1*num2;
    case '/':
        result =num1/num2;
    default :
        return 'Invalid operator Please give the valid operator';  
}
return result;

}

alert(calculate('+',2,2));