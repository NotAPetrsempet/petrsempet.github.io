function getDistation(from, tolat, tolon){
	var lat = from.coords.latitude;
	var lon = from.coords.longitude;
	var lat_length = 40075 / 360;
	var lon_length = 40075 * Math.cos(lat) / 360;
	var razn_lat = lat - tolat;
	var razn_lon = lon - tolon;
	var lat_dist = lat_length * razn_lat;
	var lon_dist = lon_length * razn_lon;
	var real_dist = Math.sqrt((Math.pow(lat_dist,2) + Math.pow(lon_dist, 2)));
	return real_dist;
}
var count = 0;
function writeText(textarea, text, duration){
	var dur = duration;
	count++;
	textarea.innerHTML = text.substring(0, count);
	duration = Math.floor(Math.random() * ((duration - 10) - (duration + 10))) + duration + 10;
	setTimeout(function(){writeText(textarea, text, dur)}, duration);
}