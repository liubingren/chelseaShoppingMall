var global = global || {};
global.baseUrl = "/src/html/", $(function() {
	console.log(2), $("#header").click(function() {
		console.log("header")
	}), $.get(global.baseUrl + "prolist.json", function() {})
});