var http = require("http");

http
    .createServer(function (reg, res) {
        res.writeHead(200,{ "Content-Type": "text/plain"});
        res.write("Hello Worldl");
        res.end();
    })
    .listen(3000);