//callback url 
//http://localhost:3000/e_productivity.html

//goole client api  149941227447-ipadjcr67dto6kmdsjbt24ahq8vgq3fs.apps.googleusercontent.com
// seceret key hUs3udqwwyUfw7X696mepGG


var util = require("util"),
    http = require("http");

var options = {
    host: "localhost",
    port: 80,
    path: "/"
};

var content = "";   

var req = http.request(options, function(res) {
    res.setEncoding("utf8");
    res.on("data", function (chunk) {
        content += chunk;
    });

    res.on("end", function () {
        util.log(content);
    });
});

req.end();