/**
 * Created by Nehal on 9/20/2016.
 */

function isAlphaNum(ele)
{
    var r=/\W$/i;
    if(r.test(ele.value))
    {
        alert("This field allows only Alpha Numeric characters.");
        ele.value="";
        ele.focus();
    }
}

function isAlpha(ele)
{
    var r=/[^a-zA-Z]+/i;
    if(r.test(ele.value))
    {
        alert("This field allows only Alphabets.");
        ele.value="";
        ele.focus();
    }
}

function isNum(ele)
{
    var r=/\D$/i;
    if(r.test(ele.value))
    {
        alert("This field allows only Numerics!");
        ele.value="";
        ele.focus();
    }
}

function validateForm(myForm)
{
    var em=/[a-zA-Z0-9]+@[a-zA-Z0-9]+.[a-zA-Z]+/;
    myform=document.forms[myForm];
    if(myform.cname.value=="" || myform.password.value=="" || myform.repass.value=="" || myform.email.value=="" || myform.contactno.value=="" || myform.city.value=="")
    {
        alert("Some of the fields are Empty!");
        return false;
    }
    else if(myform.password.value!=myform.repass.value)
    {
        alert("Passwords do not match!");
        return false;
    }
    else if(!em.test(myform.email.value))
    {
        alert("Enter the E-mail correctly!");
        return false;
    }

}
