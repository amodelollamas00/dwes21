var http=require("http");

var server=http.createServer((function(request,response){

    response.writeHead(200,
        {"Content-Type": "text/plain"});

    response.end("Hello World\n Alejandro Modelo Llamas con node.js");

}));

server.listen(7000);//puerto :7000
