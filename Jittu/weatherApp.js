var submit=document.getElementById("submit");
var cityName=document.getElementById("city_input");
var temp=document.getElementById("temp");
var feellike=document.getElementById("flike");
var description=document.getElementById("desc");
var latitude=document.getElementById("lat");
var longitude=document.getElementById("lon");
var humidity=document.getElementById("hum");
var wdegree=document.getElementById("wdeg");
var wspeed=document.getElementById("wspeed");
var heading=document.getElementById("heading");



submit.addEventListener("click",function()
{
	heading.innerHTML="";
	temp.innerHTML="";
	feellike.innerHTML="";
	description.innerHTML="";
	humidity.innerHTML="";
	latitude.innerHTML="";
	longitude.innerHTML="";
	wdegree.innerHTML="";
	 wspeed.innerHTML="";
    fetch('https://api.openweathermap.org/data/2.5/weather?q='+cityName.value+'&appid=5a3ccf43104d295fb3461b82c5757a6d')
  
.then(response => response.json())
.then(data => 
     {
     
      heading.innerHTML=(cityName.value).toUpperCase()+ " Weather Report";
      setTimeout(function(){temp.innerHTML="Temperature : "+( data['main']['temp']-273.15) + ' C';},500)
      setTimeout(function(){feellike.innerHTML="Feels like "+ (data['main']['feels_like']-273.15) + ' C';},700)
      setTimeout(function(){description.innerHTML="Description : "+ data['weather']['0']['description'];},900)
      setTimeout(function(){ humidity.innerHTML="Humidity : "+data['main']['humidity'];},1100)
      setTimeout(function(){latitude.innerHTML="Latitude :" +data['coord']['lat'];},1300)
      setTimeout(function(){longitude.innerHTML="Longitide : "+data['coord']['lon'];},1500)
      setTimeout(function(){ wdegree.innerHTML="Wind Degree : "+data['wind']['deg'];},1700)
       setTimeout(function(){ wspeed.innerHTML="Wind Speed : "+ data['wind']['speed'];},1900)
     })

.catch(err =>alert("wrong"))
})