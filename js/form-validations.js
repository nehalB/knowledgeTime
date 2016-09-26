/**
 * Created by Nehal on 9/26/2016.
 */

function isAlphaNum(ele)
{
    var r=/\W$/i;
    if(r.test(ele.value))
    {
        alert("This field allows Only Alpha Numeric characters!");
        ele.value="";
        ele.focus();
    }
}
function isAlpha(ele)
{
    var r=/[^a-zA-Z]+/i;
    if(r.test(ele.value))
    {
        alert("This field allows Only Alphabets!");
        ele.value="";
        ele.focus();
    }
}
function isNum(ele)
{
    var r=/\D$/i;
    if(r.test(ele.value))
    {
        alert("This field allows Only Numerics!");
        ele.value="";
        ele.focus();
    }
}

function validateForm(form)
{
    var em=/[a-zA-Z0-9]+@[a-zA-Z0-9]+.[a-zA-Z]+/;
    myform=document.forms[form];
    if(myform.cname.value=="" || myform.password.value=="" || myform.repass.value=="" || myform.email.value=="" || myform.contactno.value=="" || myform.address.value=="" || myform.city.value=="" || myform.pin.value=="")
    {
        alert("Some of the fields are Empty!");
        return false;
        //  myform.onsubmit=false;
    }
    else if(myform.password.value!=myform.repass.value)
    {
        alert("Passwords Do not Match!");
        // myform.onsubmit=false;
        return false;
    }
    else if(!em.test(myform.email.value))
    {
        alert("Enter the E-mail Correctly!");
        //  myform.onsubmit=false;
        return false;
    }


}

function validatesubform(form)
{

    myform=document.forms[form];
    if(myform.subname.value=="" || myform.subdesc.value=="")
    {
        alert("Some of the fields are Empty.");
        myform.onSubmit=false;
    }

}

