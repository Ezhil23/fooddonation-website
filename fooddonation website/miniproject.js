console.log("page is redy")
var name=document.getElementsByID('name')
var email=document.getElementsByID('take_input')
var phone=document.getElementsByID('phone')
var message=document.getElementsByID('message')
var localstorage=document.getElementsByID('localstorage_value')
var save=document.getElementsByID('save')
var read=document.getElementsByID('read')


save_value.onclick=function () {

	localstorage.setItems("name",name.value);
	localstorage.setItems("email",email.value);
	localstorage.setItems("phone",phone.value);
	localstorage.setItems("message",message.value);
	
	// body...
}

read_localstorage.onclick=function(){

	localstorage.setItems("name",);
	localstorage.setItems("email",);
	localstorage.setItems("phone",);
	localstorage.setItems("message",);
	

}