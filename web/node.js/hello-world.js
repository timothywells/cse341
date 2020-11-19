const http = require('http');
const url = require('url');
const hostname = '127.0.0.1';
const port = 3000;
const server = http.createServer(writeToBrowser);

function writeToBrowser(req, res) {
    console.log('Received request for: ' + req.url);
    var q = url.parse(req.url, true);
    var path = q.pathname;
    if (path =='/home'){
        res.write('<html><head></head><title>Homeworld</title><body><h1>Hello from Homeworld</h1></body></html>');
        res.end();
    } else {
        if (path == '/getData'){
            res.write('<html>');
            res.write('<head></head>');
            res.write('<title>User Data</title>');
            res.write('<body>');
            res.write('{\'Name\':\'Tim Wells\',\'Class\':\'CSE 341\'}');
            res.write('</body>');
            res.write('</html>');
            res.end();
        
        } else {
            res.writeHeader(404, {'Content-Type': 'text/plain'});
            return res.end('404 Not Found');
        }
    }
}
server.listen(port, hostname, () => {
  console.log(`Server running at http://${hostname}:${port}/`);
});