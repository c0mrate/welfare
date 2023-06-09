const http = require('http');
const fs = require('fs');
const path = require('path');

const server = http.createServer((req, res) => {
  // Extract the URL and file extension
  const url = req.url === '/' ? '/index.html' : req.url;
  const ext = path.extname(url).substring(1);

  // Set the content type based on the file extension
  let contentType = 'text/html';
  switch (ext) {
    case 'css':
      contentType = 'text/css';
      break;
    case 'js':
      contentType = 'text/javascript';
      break;
    case 'ico':
      contentType = 'image/x-icon';
      break;
  }

  // Read the requested file
  fs.readFile(path.join(__dirname, url), (err, data) => {
    if (err) {
      // Handle file not found
      if (err.code === 'ENOENT') {
        res.writeHead(404, { 'Content-Type': 'text/plain' });
        res.end('File not found');
      } else {
        // Handle other errors
        res.writeHead(500, { 'Content-Type': 'text/plain' });
        res.end('Internal server error');
      }
    } else {
      // Serve the file with the appropriate content type
      res.writeHead(200, { 'Content-Type': contentType });
      res.end(data);
    }
  });
});

const port = 3000;
server.listen(port, () => {
  console.log(`Server running on port ${port}`);
});
